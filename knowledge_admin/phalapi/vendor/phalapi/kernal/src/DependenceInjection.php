<?php
// +----------------------------------------------------------------------
// |万岳科技开源系统 [山东万岳信息科技有限公司]
// +----------------------------------------------------------------------
// | Copyright (c) 2020~2022 https://www.sdwanyue.com All rights reserved.
// +----------------------------------------------------------------------
// | 万岳科技相关开源系统代码并不是自由软件，未经授权许可不能去掉wanyue【万岳科技】相关版权并商用
// +----------------------------------------------------------------------
// | Author: 万岳科技开源官方 < wanyuekj2020@163.com >
// +----------------------------------------------------------------------

namespace PhalApi;

use ArrayAccess;
use Closure;
use PhalApi\Exception\InternalServerErrorException;

/**
 * DependenceInjection 依赖注入类
 *
 *  Dependency Injection 依赖注入容器
 *  
 * - 调用的方式有：set/get函数、魔法方法setX/getX、类变量$fdi->X、数组$fdi['X]
 * - 初始化的途径：直接赋值、类名、匿名函数
 *
 * <br>使用示例：<br>
```
 *       $di = new DependenceInjection();
 *      
 *       // 用的方式有：set/get函数  魔法方法setX/getX、类属性$di->X、数组$di['X']
 *       $di->key = 'value';
 *       $di['key'] = 'value';
 *       $di->set('key', 'value');
 *       $di->setKey('value');
 *      
 *       echo $di->key;
 *       echo $di['key'];
 *       echo $di->get('key');
 *       echo $di->getKey();
 *      
 *       // 初始化的途径：直接赋值、类名(会回调onInitialize函数)、匿名函数
 *       $di->simpleKey = array('value');
 *       $di->classKey = 'DependenceInjection';
 *       $di->closureKey = function () {
 *            return 'sth heavy ...';
 *       };
```       
 *      
 * @property \PhalApi\Request        $request    请求
 * @property \PhalApi\Response_Json  $response   结果响应
 * @property \PhalApi\Cache          $cache      缓存
 * @property \PhalApi\Crypt          $crypt      加密
 * @property \PhalApi\Config         $config     配置
 * @property \PhalApi\Logger         $logger     日记
 * @property \PhalApi\Database\NotORMDatabase      $notorm     数据库
 * @property \PhalApi\Loader         $loader     自动加载
 * @property \PhalApi\Helper\Tracer  $tracer     全球追踪器
 * @property \PhalApi\Cache\RedisCache $redis    redis
 * @package     PhalApi\DependenceInjection
 * @link        http://docs.phalconphp.com/en/latest/reference/di.html 实现统一的资源设置、获取与管理，支持延时加载
 * @license     http://www.phalapi.net/license GPL 协议
 * @link        http://www.phalapi.net/
 * @author      dogstar <chanzonghuang@gmail.com> 2017-07-01
 */ 

class DependenceInjection implements ArrayAccess {

	/**
	 * @var DependenceInjection $instance 单例
	 */
    protected static $instance = NULL;

    /**
     * @var array $hitTimes 服务命中的次数
     */
    protected $hitTimes = array();
    
    /**
     * @var array 注册的服务池
     */
    protected $data = array();

    public function __construct() {

    }

    /**
     * 获取DI单体实例
     *
     * - 1、将进行service级的构造与初始化
     * - 2、也可以通过new创建，但不能实现service的共享
     */ 
    public static function one() {
        if (static::$instance == NULL) {
            static::$instance = new DependenceInjection();
            static::$instance->onConstruct();
        }

        return static::$instance;
    }

    /**
     * service级的构造函数
     *
     * - 1、可实现一些自定义业务的操作，如内置默认service
     * - 2、首次创建时将会调用
     */ 
    public function onConstruct() {
        $this->request = '\\PhalApi\\Request';
        $this->response = '\\PhalApi\\Response\\JsonResponse';
        $this->tracer = '\\PhalApi\\Helper\\Tracer';
    }

    public function onInitialize() {
    }

    /**
     * 统一setter
     *
     * - 1、设置保存service的构造原型，延时创建
     *
     * @param string $key service注册名称，要求唯一，区分大小写
     * @parms mixed $value service的值，可以是具体的值或实例、类名、匿名函数、数组配置
     */ 
    public function set($key, $value) {
        $this->hitTimes[$key] = 0;

        $this->data[$key] = $value;

        return $this;
    }

    /**
     * 统一getter
     *
     * - 1、获取指定service的值，并根据其原型分不同情况创建
     * - 2、首次创建时，如果service级的构造函数可调用，则调用
     * - 3、每次获取时，如果非共享且service级的初始化函数可调用，则调用
     *
     * @param string $key service注册名称，要求唯一，区分大小写
     * @param mixed $default service不存在时的默认值
     * @param boolean $isShare 是否获取共享service
     * @return mixed 没有此服务时返回NULL
     */ 
    public function get($key, $default = NULL) {
        if (!isset($this->data[$key])) {
            $this->data[$key] = $default;
        }

        // 内联操作，减少函数调用，提升性能
        if (!isset($this->hitTimes[$key])) {
            $this->hitTimes[$key] = 0;
        }
        $this->hitTimes[$key] ++;

        if ($this->hitTimes[$key] == 1) {
            $this->data[$key] = $this->initService($this->data[$key]);
        }

        return $this->data[$key];
    }

    /** ------------------ 魔法方法 ------------------ **/

    public function __call($name, $arguments) {
        if (substr($name, 0, 3) == 'set') {
            $key = lcfirst(substr($name, 3));
            return $this->set($key, isset($arguments[0]) ? $arguments[0] : NULL);
        } else if (substr($name, 0, 3) == 'get') {
            $key = lcfirst(substr($name, 3));
            return $this->get($key, isset($arguments[0]) ? $arguments[0] : NULL);
        }

        throw new InternalServerErrorException(
            T('Call to undefined method DependenceInjection::{name}() .', array('name' => $name))
        );
    }

    public function __set($name, $value) {
        $this->set($name, $value);
    }

    public function __get($name) {
        return $this->get($name, NULL);
    }

    /** ------------------ ArrayAccess（数组式访问）接口 ------------------ **/

    public function offsetSet($offset, $value) {
        $this->set($offset, $value);
    }

    public function offsetGet($offset) {
        return $this->get($offset, NULL);
    }

    public function offsetUnset($offset) {
        unset($this->data[$offset]);
    }

    public function offsetExists($offset) {
        return isset($this->data[$offset]);
    }

    /** ------------------ 内部方法 ------------------ **/

    protected function initService($config) {
        $rs = NULL;

        if ($config instanceOf Closure) {
            $rs = $config();
        } elseif (is_string($config) && class_exists($config)) {
            $rs = new $config();
            if(is_callable(array($rs, 'onInitialize'))) {
                call_user_func(array($rs, 'onInitialize'));
            }
        } else {
            $rs = $config;
        }

        return $rs;
    }
}

