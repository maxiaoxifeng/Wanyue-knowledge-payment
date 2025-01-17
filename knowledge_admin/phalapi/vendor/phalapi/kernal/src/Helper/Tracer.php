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

namespace PhalApi\Helper;

/**
 * Tracer 全球追踪器类
 *     
 * 用于调试，追踪接口执行的情况
 *
 * @package     PhalApi\Helper
 * @license     http://www.phalapi.net/license GPL 协议
 * @link        http://www.phalapi.net/
 * @author      喵了个咪<wenzhenxi@vip.qq.com> 2017-04-15
 * @author      dogstar <chanzonghuang@gmail.com> 2017-04-15
 */

class Tracer {

    /**
     * @var array $timeline 时间线
     */
    protected $timeline = array();

    /**
     * @var array $sqls 所执行的SQL语句
     */
    protected $sqls = array();

    /**
     * 打点，纪录当前时间点
     * @param string $tag 当前纪录点的名称，方便最后查看路径节点
     * @return NULL
     */
    public function mark($tag = NULL) {
        if (!\PhalApi\DI()->debug) {
            return;
        }

        $backTrace = debug_backtrace();
        if (empty($this->timeline)) {
            array_shift($backTrace);
        }
        // TODO 关于追踪，看下如何追踪更合适

        $this->timeline[] = array(
            'tag' => $tag, 
            'time' => $this->getCurMicroTime(),
            'file' => isset($backTrace[0]['file']) ? $backTrace[0]['file'] : '',
            'line' => isset($backTrace[0]['line']) ? $backTrace[0]['line'] : 0,
        );
    }

    /**
     * 生成报告
     * @return array
     */
    public function getStack() {
        $stack = array();

        $preMicroTime = NULL;
        foreach ($this->timeline as $index => $item) {
            if ($preMicroTime === NULL) {
                $preMicroTime = $item['time'];
            }
            $internalTime = $item['time'] - $preMicroTime;
            $internalTime = round($internalTime/10, 1);

            $stack[] = sprintf('[#%d - %sms%s]%s(%d)',
                $index + 1, 
                $internalTime, 
                $item['tag'] !== NULL ? ' - ' . $item['tag'] : '', 
                $item['file'], 
                $item['line']
            );
        }

        return $stack;
    }

    /**
     * 获取当前毫秒时间
     * @return float
     */
    protected function getCurMicroTime() {
        return round(microtime(true) * 10000);
    }

    /**
     * 纪录SQL语句
     * @param string $string  SQL语句
     * @return NULL
     */
    public function sql($statement) {
        $this->sqls[] = $statement;

        // 保存到日志
        $di = \PhalApi\DI();
        if ($di->config->get('sys.enable_sql_log')) {
            $di->logger->log('SQL', $statement, array('request' => $di->request->getAll()));
        }
    }

    /**
     * 获取SQL语句
     * @return array
     */
    public function getSqls() {
        return $this->sqls;
    }
}
