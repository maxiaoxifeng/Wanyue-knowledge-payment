<?php /*a:8:{s:76:"/www/wwwroot/demo.sdwanyue.com/themes/simpleboot3/student/index/liaojie.html";i:1607507950;s:66:"/www/wwwroot/demo.sdwanyue.com/themes/simpleboot3/public/head.html";i:1602491838;s:74:"/www/wwwroot/demo.sdwanyue.com/themes/simpleboot3/student/public/head.html";i:1602491838;s:76:"/www/wwwroot/demo.sdwanyue.com/themes/simpleboot3/student/public/header.html";i:1607591807;s:75:"/www/wwwroot/demo.sdwanyue.com/themes/simpleboot3/student/public/grade.html";i:1602491838;s:75:"/www/wwwroot/demo.sdwanyue.com/themes/simpleboot3/student/public/login.html";i:1607590724;s:76:"/www/wwwroot/demo.sdwanyue.com/themes/simpleboot3/student/public/footer.html";i:1607503774;s:77:"/www/wwwroot/demo.sdwanyue.com/themes/simpleboot3/student/public/scripts.html";i:1603268578;}*/ ?>
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

    <link href="/static/student/css/index.css" rel="stylesheet" type="text/css">
    <link href="/static/student/css/guanyu.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        .check_nav {
            color: #38DAA6;
        }

    </style>
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



<div class="banner guanyu_banner_wrap">
    <div class="guan_banner_title">一万岳科技一</div>
    <div class="guan_banner_title_bottom">
        <div>服务上乘</div>
        <span class="guan_banner_dian"></span>
        <div>用户为本</div>
    </div>
</div>

<!--了解万岳-->
<div class="body liaojie_body">

    <div class="guanyu_left">
        <div class="guan_we">关于我们</div>
        <div class="guan_nav_title">
            <a href="javascript:;" class="liaojie_a check_nav">了解万岳</a>
        </div>
        <div class="guan_nav_title">
            <a href="javascript:;" class="lianxi_we">联系我们</a>
        </div>
        <div class="guan_nav_title">
            <a href="javascript:;" class="how_buy">如何购买</a>
        </div>
    </div>

    <!--了解万岳详情-->
    <div class="info_right">
        <div class="right_liaojie">
            <div class="info_right_wrap">
                <span class="left_dian info_right_dian"></span>
                <div class="info_right_title">了解万岳</div>
                <span class="right_dian info_right_dian"></span>
            </div>

            <div class="info_right_content">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;山东万岳信息科技有限公司 是一家以在线教育系统、企业内训系统、视频会议系统、</p>
                <p>知识付费系统为主要业务的软件产品研发互联网科技公司，后又推出直播带货系统和</p>
                <p>商城系统，致力为用户提供专业全面的在线教育、企业内训、视频会议等领域的解决</p>
                <p>方案，满足用户多元化需求。</p>
            </div>
        </div>

        <!-- 联系我们-->
        <div class="right_lianxi_we" style="display: none;">
            <div class="info_right_wrap">
                <span class="left_dian info_right_dian"></span>
                <div class="info_right_title">联系我们</div>
                <span class="right_dian info_right_dian"></span>
            </div>

            <div class="info_lian_bottom_wrap">
                <div class="left_map">
                    <img src="/static/images/right_map.png" alt="">
                </div>

                <div class="right_lian_info">
                    <p> 联系QQ：2415408120</p>
                    <p>官方QQ群：995910672</p>
                    <p>公司地址：</p>
                    <p>山东省泰安市泰山区万达营销中心1702号</p>
                </div>

            </div>
        </div>


        <!--如何购买-->
        <div class="right_buy" style="display: none;">
            <div class="info_right_wrap">
                <span class="left_dian info_right_dian"></span>
                <div class="info_right_title">如何购买</div>
                <span class="right_dian info_right_dian"></span>
            </div>

            <div class="info_lian_bottom_wrap">
                <div class="left_map">
                    <img src="/static/images/right_map.png" alt="">
                </div>

                <div class="right_lian_info">
                    <p> 联系QQ：2415408120</p>
                    <p>官方QQ群：995910672</p>
                    <p>公司地址：</p>
                    <p>山东省泰安市泰山区万达营销中心1702号</p>
                </div>

            </div>
        </div>

        <input class="flag" type="hidden" name="flag" value="<?php echo input('flag'); ?>">

    </div>


</div>

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
    var isBackLog = '<?php echo $isBackLog; ?>';
</script>
<script src="/static/student/js/index.js"></script>
<script type="text/javascript">

    $(function () {
        var flag = $(".flag").val();
        if (flag == 1) {
            $(".liaojie_a").addClass("check_nav");
            $(".lianxi_we").removeClass("check_nav");
            $(".how_buy").removeClass("check_nav");
        } else if(flag == 2) {
            $(".lianxi_we").addClass("check_nav");
            $(".liaojie_a").removeClass("check_nav");
            $(".how_buy").removeClass("check_nav");
        } else if(flag == 3) {
            $(".how_buy").addClass("check_nav");
            $(".lianxi_we").removeClass("check_nav");
            $(".liaojie_a").removeClass("check_nav");
        }

    });

    $(".liaojie_a").click(function () {

        $(".right_liaojie").show();
        $(".right_lianxi_we").hide();
        $(".right_buy").hide();
        $(this).addClass("check_nav");
        $(".lianxi_we").removeClass("check_nav");
        $(".how_buy").removeClass("check_nav");

    });

    $(".lianxi_we").click(function () {

       $(".right_lianxi_we").show();
       $(".right_liaojie").hide();
       $(".right_buy").hide();
       $(this).addClass("check_nav");
       $(".liaojie_a").removeClass("check_nav");
       $(".how_buy").removeClass("check_nav");

    });


    $(".how_buy").click(function () {

        $(".right_buy").show();
        $(".right_liaojie").hide();
        $(".right_lianxi_we").hide();
        $(this).addClass("check_nav");
        $(".liaojie_a").removeClass("check_nav");
        $(".lianxi_we").removeClass("check_nav");

    });



</script>


</body>
</html>