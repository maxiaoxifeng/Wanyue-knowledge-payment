<?php /*a:8:{s:84:"/www/wwwroot/demo.sdwanyue.com/themes/simpleboot3/student/detail/substancestudy.html";i:1602491838;s:66:"/www/wwwroot/demo.sdwanyue.com/themes/simpleboot3/public/head.html";i:1602491838;s:74:"/www/wwwroot/demo.sdwanyue.com/themes/simpleboot3/student/public/head.html";i:1602491838;s:76:"/www/wwwroot/demo.sdwanyue.com/themes/simpleboot3/student/public/header.html";i:1607591807;s:75:"/www/wwwroot/demo.sdwanyue.com/themes/simpleboot3/student/public/grade.html";i:1602491838;s:75:"/www/wwwroot/demo.sdwanyue.com/themes/simpleboot3/student/public/login.html";i:1607590724;s:76:"/www/wwwroot/demo.sdwanyue.com/themes/simpleboot3/student/public/footer.html";i:1607503774;s:77:"/www/wwwroot/demo.sdwanyue.com/themes/simpleboot3/student/public/scripts.html";i:1603268578;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?></title>
    
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- Set render engine for 360 browser -->
<meta name="renderer" content="webkit">

<!-- No Baidu Siteapp-->
<meta http-equiv="Cache-Control" content="no-siteapp"/>

<!-- HTML5 shim for IE8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<link rel="icon" href="/favicon.png" type="image/png">
<link rel="shortcut icon" href="/favicon.png" type="image/png">
<link href="/static/home/css/common.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
    //全局变量
    var GV = {
        ROOT: "/",
        WEB_ROOT: "/",
        JS_ROOT: "static/js/"
    };
</script>
<script src="/static/js/jquery.js"></script>
<script src="/static/js/wind.js"></script>
	
    <link href="/static/student/css/common.css" rel="stylesheet" type="text/css">
<link href="/static/swiper/swiper.min.css" rel="stylesheet" type="text/css">
<link href="/static/student/css/pick-pcc.min.1.0.1.css" rel="stylesheet" type="text/css">

    <link href="/static/student/css/detail.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="common_header_nav">
    <div class="content">
        <div class="left">
            <img src="/static/images/logo.png">

            <text><?php echo $site_info['site_name']; ?></text>
        </div>
        <div class="middle">
            <ul>
                <li>
                    <a href="/" class="olda <?php if($navid == 0): ?>on<?php endif; ?>">
                        首页
                        <div class="none <?php if($navid == 0): ?>block<?php endif; ?>"></div>
                    </a>
                </li>
                <li>
                    <a href="/student/lessionlist/index" class="olda <?php if($navid == 1): ?>on<?php endif; ?>">
                        选课中心
                        <div class="none <?php if($navid == 1): ?>block<?php endif; ?>"></div>
                    </a>
                </li>

                <li>
                    <a href="/student/index/appdownload" class="olda <?php if($navid == 2): ?>on<?php endif; ?>">
                        APP下载
                        <div class="none <?php if($navid == 2): ?>block<?php endif; ?>"></div>
                    </a>
                </li>

            </ul>
        </div>
        <div class="right">
            <div class="search">
                <input type="password" hidden autocomplete=“new-password”>
                <input id="searchval" type="text" value="<?php echo $keywords; ?>" placeholder="课程、讲师" />
                <button id="search">搜索</button>
            </div>

            <div class="login">
                <?php if($isLog == 0): ?>
                    <div class="log_or_reg">登录/注册</div>
                <?php endif; if($isLog == 1): ?>

                    <div class="login_info">
                        <img class="avatar" src="<?php echo $userinfo['avatar']; ?>">

                        <div class="drop_down none">
                            <div class="gard"><a id="gard" href="javacript:void(0);"><?php echo $userinfo['gradename']; ?></a></div>
                            <div class="li1"><a href="/student/mine/index">我的课程</a></div>
                            <div class="li2"><a id="logout" href="javacript:void(0);">退出登录</a></div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>


</div>
    <div class="common_garde <?php if($isIp == 0): ?>block<?php endif; ?>">
    <div class="content">
        <div class="tips">
            <div class="text1">请选择你想看的学习阶段</div>
            <div class="text2">随时可以更改，请放心选择</div>
        </div>
        <div class="grade">
            <div class="list">
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $keyid = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($keyid % 2 );++$keyid;?>
                    <div class="left"><?php echo $item['name']; ?></div>
                    <div class="right">
                        <?php if(is_array($item['list']) || $item['list'] instanceof \think\Collection || $item['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item1): $mod = ($i % 2 );++$i;?>
                            <div data-id="<?php echo $item1['id']; ?>" style="cursor:pointer;" class="li <?php if($gradeid == $item1['id'] || ($gradeid == 0 && $keyid == 1 && $key == 0 && $gradeid != $item1['id'])): ?>on<?php endif; ?>"><?php echo $item1['name']; ?></div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
</div>
        <!--登录页面-->
    <div class="common_login none">
        <div class="content">
            <div class="close">
                <img class="imgx" src="/static/student/images/common/login_cha.png">
            </div>
            
            <div class="sitename">登录<?php echo $site_info['site_name']; ?>课堂</div>

            <div class="info">
                <div class="type">
                    
                    <div class="logintype">
                        <a href="javacript:void(0);">
                            <text class="c969696 black">密码登录</text>
                            <div class="heng"></div>
                        </a>
                    </div>
                    <div class="logintype">
                        <a href="javacript:void(0);">
                            <text class="c969696">验证码登录</text>
                            <div class="heng none"></div>
                        </a>
                    </div>
                </div>

                <div class="inputs">
                    <input type="text" class="input1" value="" placeholder="请输入手机号" value="13800000000" />
                    <input type="password" class="input2" value="" placeholder="请输入密码" value="123456" />
                    <div class="forget">忘记密码</div>
                </div>

                <div class="inputs1 none">
                    <input class="input3" value="" placeholder="请输入手机号" />
                    <div>
                        <input class="input4" value="" placeholder="请输入验证码" />
                        <div class="getLoginCode"><a href="javacript:void(0);" class="on">获取验证码</a></div>
                    </div>
                    <div class="forget">忘记密码</div>
                </div>


                <button class="login">登录</button>

                <div class="tips">还没有账号？<text class="goreg"><a href="javacript:void(0);" class="on">立即注册</a></text></div>

                <div class="third">
                    <?php if(in_array('wx',$configpri['login_type'])): ?>
                        <div class="li">
                            <img class="wx_img" src="/static/student/images/common/login_wx.png">
                            <div class="text">微信登录</div>
                        </div>
                    <?php endif; if(in_array('QQ',$configpri['login_type'])): ?>
                        <div class="li">
                            <img class="qq_img" src="/static/student/images/common/login_qq.png">
                            <div class="text">QQ登录</div>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
        <div class="content none">
            <div class="close">
                <img class="imgfan" src="/static/student/images/common/login_fan.png">
            </div>
            
            <div class="sitename">忘记密码</div>

            <div class="info">

                <div class="inputs3">
                    <input type="text" class="input8" value="" placeholder="请输入手机号" />
                    <div>
                        <input type="text" class="input9" value="" placeholder="请输入验证码" />
                        <div class="getForgetCode"><a href="javacript:void(0);" class="on">获取验证码</a></div>
                    </div>

                    <input type="password" class="input10" value="" placeholder="请设置密码" />
                </div>

                <button class="fortrue">确定</button>


                <div class="third" style="margin-top: 45px;">
                    <?php if(in_array('wx',$configpri['login_type'])): ?>
                        <div class="li">
                            <img class="wx_img" src="/static/student/images/common/login_wx.png">
                            <div class="text">微信登录</div>
                        </div>
                    <?php endif; if(in_array('QQ',$configpri['login_type'])): ?>
                        <div class="li">
                            <img class="qq_img" src="/static/student/images/common/login_qq.png">
                            <div class="text">QQ登录</div>
                        </div>
                    <?php endif; ?>

                </div>

            </div>
        </div>
        <div class="content none">
            <div class="close">
                <img class="imgx" src="/static/student/images/common/login_cha.png">
            </div>
            

            <div class="sitename">欢迎注册<?php echo $site_info['site_name']; ?>课堂</div>



            <div class="info">

                <div class="inputs2">
                    <input type="text" class="input5" value="" placeholder="请输入手机号" />
                    <div>
                        <input type="text" class="input6" value="" placeholder="请输入验证码" />
                        <div class="getRegCode"><a href="javacript:void(0);" class="on">获取验证码</a></div>
                    </div>

                    <input type="password" class="input7" value="" placeholder="请设置密码" />
                </div>

                <button class="reg">立即注册</button>

                <div class="tips">已有账号？<text class="gologin"><a href="javacript:void(0);" class="on">马上登陆</a></text></div>

                <div class="third">
                    <?php if(in_array('wx',$configpri['login_type'])): ?>
                        <div class="li">
                            <img class="wx_img" src="/static/student/images/common/login_wx.png">
                            <div class="text">微信登录</div>
                        </div>
                    <?php endif; if(in_array('QQ',$configpri['login_type'])): ?>
                        <div class="li">
                            <img class="qq_img" src="/static/student/images/common/login_qq.png">
                            <div class="text">QQ登录</div>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>

    <div class="substancestudy_top">
        <?php if($info['type'] == 1): ?> <!--图文-->
            <img class="thumb" src="<?php echo $info['thumb']; ?>">
        <?php elseif($info['type'] == 2): ?><!--视频-->
            <video height="375" width="800"   id="myVideo"  controls="controls"  preload="auto">
                <source src="<?php echo $info['url']; ?>" type="video/mp4">
            </video>
        <?php else: ?><!--音频-->
            <audio id="myAudio" controls="controls">
                <source src="<?php echo $info['url']; ?>" type="audio/mpeg" />
            </audio>
        <?php endif; ?>
    </div>


    <div class="substancestudy_content <?php if($info['type'] == 1 && $info['paytype']==1 && $info['ifbuy']==0 && $info['trialtype']!=0): ?>opacity_yes<?php endif; ?>">
        <?php echo $info['content']; ?>
    </div>

    <?php if($info['type'] == 1 && $info['paytype']==1 && $info['ifbuy']==0 && $info['trialtype']!=0): ?>
        <div class="lock_title">
            <a style="color: #FF1B20;" href="javascript:void(0)">购买后可查看完整内容</a>
        </div>
    <?php endif; ?>

    <div class="common_footer">
    <div class="content">
        <div class="left">
            <img src="/static/images/logo.png">
            <div class="text"><?php echo $site_info['site_name']; ?></div>
        </div>
        <div class="next">
            <div class="text">官方QQ群</div>
                <img src="/static/images/qq_qun.png">
        </div>
        <div class="middle">
            <div class="text">官方微信</div>
            <?php if(isset($site_info['wx_url']) && $site_info['wx_url'] != ''): ?>
                <img src="<?php echo $site_info['wx_url']; ?>">
            <?php endif; ?>

        </div>
        <div class="right">
            <div class="right_guanyu_title">关于我们</div>
            <div class="text1"><a href="<?php echo url('student/index/liaojie', ['flag' => 1]); ?>">了解万岳</a></div>
            <div class="text2"><a href="<?php echo url('student/index/liaojie', ['flag' => 2]); ?>">联系我们</a></div>
            <div class="text3"><a href="<?php echo url('student/index/liaojie', ['flag' => 3]); ?>">如何购买</a></div>
        </div>
    </div>

    <div class="you_url">
        <div class="li"><text>友情链接</text></div>
        <div class="li"><text>友情链接</text></div>
        <div class="li"><text>友情链接</text></div>
        <div class="li"><text>友情链接</text></div>
        <div class="li"><text>友情链接</text></div>
        <div class="li"><text>友情链接</text></div>
        <div class="li"><text>友情链接</text></div>
        <div class="li" style="border: 0;"><text>友情链接</text></div>

    </div>
    <div class="copyright">
        版权信息 <?php echo $site_info['copyright']; ?>
    </div>
</div>
    <script>
    var __SITEURL__ = "<?php echo $site_info['site_url']; ?>";
    var __SITEINFO__ = <?php echo $site_infoj; ?>;
    var userinfoj = <?php echo $userinfoj; ?>; //用户信息

</script>
<script src="/static/js/layer/layer.js"></script>
<script src="/static/student/js/common.js"></script>
<script src="/static/swiper/swiper.min.js"></script>


    <script>
        var courseid = "<?php echo $info['id']; ?>"; //课程id
        var star = 0;//星级
        var page = 1;//页码
        var type = "<?php echo $info['type']; ?>";//类型

        var paytype = "<?php echo $info['paytype']; ?>";//是否付费  0免费 1收费  2密码
        var ifbuy = "<?php echo $info['ifbuy']; ?>";//是否支付了
        var trialtype = "<?php echo $info['trialtype']; ?>";//是否可以试学
        var trialval = "<?php echo $info['trialval']; ?>";//试学值

        var totalmoney = "<?php echo $info['payval']; ?>";//价格
        var name_t = "<?php echo $info['name']; ?>";//名字

        //检测试看功能
        if(type == 2 && paytype==1 && ifbuy==0 && trialtype!=0){
            var isTanc = false;
            //获取视频DOM元素
            var myVideo = document.getElementById("myVideo");

            //使用事件监听方式捕捉事件， 此事件可作为实时监测video 播放状态
            myVideo.addEventListener("timeupdate",function(){
                var timeDisplay;
                //用秒数来显示当前播放进度
                timeDisplay = Math.floor(myVideo.currentTime);
                //当视频播放到 4s的时候做处理
                if(timeDisplay >= trialval){
                        //处理代码
                        myVideo.currentTime=trialval;//移动到大于10秒自动返回
                        myVideo.pause();
                        if(isTanc == false){
                            confirms('试看结束');
                            isTanc = true;
                        }
                }else{
                    isTanc = false;
                }
            },false);  
            
            //进度条移动事件
            myVideo.addEventListener('seeking', function(e) {
				//移动到大于10秒自动返回
				if(Math.floor(myVideo.currentTime)>=trialval){
                    myVideo.currentTime=trialval;
                    if(isTanc == false){
                        confirms('试看结束');
                        isTanc = true;
                    }
				}else{
                    isTanc = false;
                }
            })
            

        }else if(type == 1 && paytype==1 && ifbuy==0 && trialtype!=0){
            var h=$('.substancestudy_content').height();
            var h_n=h*trialval*0.01;
            $('.substancestudy_content').height(h_n);
            $('.substancestudy_content').removeClass('opacity_yes');
        }


        $('.lock_title').click(function(){
            confirms('是否去购买？');
        })






        function confirms(title){
            //询问框
            layer.confirm(title, {
                btn: ['去购买','取消'] //按钮
            }, function(){
                window.open("/student/detail/buy?courseid="+courseid+"&type=0&method=0&totalmoney="+totalmoney+"&name="+name_t+"&ismaterial=0");  
            }, function(){
          
            });
        }

    </script>
    <script src="/static/student/js/detail.js"></script>
</body>
</html>