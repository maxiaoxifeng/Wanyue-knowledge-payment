
var isReady=false;var onReadyCallbacks=[];
var isServiceReady=false;var onServiceReadyCallbacks=[];
var __uniConfig = {"pages":["pages/index/index","pages/course_class_list/course_class_list","pages/about/banner","pages/course/course","pages/msg/msg","pages/msg/msglist","pages/search/search","pages/pinglun/pinglun","pages/live-more/live-more","pages/coursemore/coursemore","pages/content-more/content-more","pages/shop-car/shop-car","pages/pay/pay","pages/address/address","pages/address/add-address","pages/my/my","pages/edit_cv/edit_cv","pages/attenteacher/attenteacher","pages/about/about","pages/setting/setting","pages/yijian-fankui/yijian-fankui","pages/myclass/myclass","pages/lianxi-we/lianxi-we","pages/hasbuy/hasbuy","pages/teacher/teacher","pages/moreteacher/moreteacher","pages/teacherinfo/teacherinfo","pages/mystu/mystu","pages/login/login","pages/forget_pass/forget_pass","pages/reg/reg","pages/login/xieyi","pages/edit_user/edit_user","pages/qidai/qidai","pages/news/news","pages/news_detail/news_detail","packageB/pages/content-detail/content-detail","packageB/pages/live-info/live-infoplay","packageB/pages/live_course_info/live_course_info","packageB/pages/content-info/content-info","packageB/pages/courseinfo/courseinfo"],"window":{"navigationBarTextStyle":"black","navigationBarBackgroundColor":"#FFFFFF","backgroundColor":"#FFFFFF"},"tabBar":{"color":"#323232","selectedColor":"#2C62EF","borderStyle":"black","backgroundColor":"#ffffff","list":[{"pagePath":"pages/index/index","text":"首页","iconPath":"static/tabbar-wechat/index_tabbar-wechat.png","iconWidth":"16px","selectedIconPath":"static/tabbar-wechat/index_tabbar_selected-wechat.png"},{"pagePath":"pages/course/course","text":"课程","iconPath":"static/tabbar-wechat/my_course_-wechat.png","selectedIconPath":"static/tabbar-wechat/my_course_selected-wechat.png"},{"pagePath":"pages/msg/msg","text":"消息","iconPath":"static/tabbar-wechat/message_-wechat.png","selectedIconPath":"static/tabbar-wechat/message-selected-wechat.png"},{"pagePath":"pages/my/my","text":"个人中心","iconPath":"static/tabbar-wechat/my_tabbar_-wechat.png","selectedIconPath":"static/tabbar-wechat/my_tabbar_selected-wechat.png"}]},"nvueCompiler":"uni-app","nvueStyleCompiler":"weex","renderer":"auto","splashscreen":{"alwaysShowBeforeRender":true,"autoclose":false},"appname":"万岳知识付费","compilerVersion":"3.3.13","subPackages":[{"root":"packageB"}],"entryPagePath":"pages/index/index","networkTimeout":{"request":60000,"connectSocket":60000,"uploadFile":60000,"downloadFile":60000}};
var __uniRoutes = [{"path":"/pages/index/index","meta":{"isQuit":true,"isTabBar":true},"window":{"navigationStyle":"custom"}},{"path":"/pages/course_class_list/course_class_list","meta":{},"window":{"titleNView":false}},{"path":"/pages/about/banner","meta":{},"window":{"navigationBarTitleText":""}},{"path":"/pages/course/course","meta":{"isQuit":true,"isTabBar":true},"window":{"navigationStyle":"custom"}},{"path":"/pages/msg/msg","meta":{"isQuit":true,"isTabBar":true},"window":{"navigationStyle":"custom"}},{"path":"/pages/msg/msglist","meta":{},"window":{"titleNView":false}},{"path":"/pages/search/search","meta":{},"window":{"navigationStyle":"custom","titleNView":false}},{"path":"/pages/pinglun/pinglun","meta":{},"window":{"navigationBarTitleText":"评价"}},{"path":"/pages/live-more/live-more","meta":{},"window":{"navigationBarTitleText":"推荐列表","titleNView":false}},{"path":"/pages/coursemore/coursemore","meta":{},"window":{"navigationBarTitleText":"好课推荐"}},{"path":"/pages/content-more/content-more","meta":{},"window":{"navigationBarTitleText":"精选内容","titleNView":false}},{"path":"/pages/shop-car/shop-car","meta":{},"window":{"titleNView":false}},{"path":"/pages/pay/pay","meta":{},"window":{"navigationBarTitleText":"付款"}},{"path":"/pages/address/address","meta":{},"window":{"navigationBarTitleText":"地址"}},{"path":"/pages/address/add-address","meta":{},"window":{"navigationStyle":"custom","navigationBarTitleText":"新建地址"}},{"path":"/pages/my/my","meta":{"isQuit":true,"isTabBar":true},"window":{"navigationStyle":"custom"}},{"path":"/pages/edit_cv/edit_cv","meta":{},"window":{"navigationStyle":"custom"}},{"path":"/pages/attenteacher/attenteacher","meta":{},"window":{"navigationBarTitleText":"关注讲师","titleNView":false}},{"path":"/pages/about/about","meta":{},"window":{"titleNView":false}},{"path":"/pages/setting/setting","meta":{},"window":{"titleNView":false}},{"path":"/pages/yijian-fankui/yijian-fankui","meta":{},"window":{"titleNView":false}},{"path":"/pages/myclass/myclass","meta":{},"window":{"navigationBarTitleText":"我的课程"}},{"path":"/pages/lianxi-we/lianxi-we","meta":{},"window":{"titleNView":false}},{"path":"/pages/hasbuy/hasbuy","meta":{},"window":{"titleNView":false}},{"path":"/pages/teacher/teacher","meta":{},"window":{"navigationStyle":"custom"}},{"path":"/pages/moreteacher/moreteacher","meta":{},"window":{"navigationBarTitleText":"相关老师","titleNView":false}},{"path":"/pages/teacherinfo/teacherinfo","meta":{},"window":{"navigationBarTitleText":"老师主页","titleNView":false}},{"path":"/pages/mystu/mystu","meta":{},"window":{"navigationBarTitleText":"我的学员"}},{"path":"/pages/login/login","meta":{},"window":{"navigationStyle":"custom"}},{"path":"/pages/forget_pass/forget_pass","meta":{},"window":{}},{"path":"/pages/reg/reg","meta":{},"window":{}},{"path":"/pages/login/xieyi","meta":{},"window":{"titleNView":false}},{"path":"/pages/edit_user/edit_user","meta":{},"window":{"titleNView":false}},{"path":"/pages/qidai/qidai","meta":{},"window":{"navigationBarTitleText":"敬请期待"}},{"path":"/pages/news/news","meta":{},"window":{"navigationBarTitleText":"新闻列表","titleNView":false}},{"path":"/pages/news_detail/news_detail","meta":{},"window":{"navigationBarTitleText":"新闻详情","titleNView":false}},{"path":"/packageB/pages/content-detail/content-detail","meta":{},"window":{"navigationBarTitleText":"内容详情","titleNView":false}},{"path":"/packageB/pages/live-info/live-infoplay","meta":{},"window":{"navigationBarTitleText":"直播详情","titleNView":false}},{"path":"/packageB/pages/live_course_info/live_course_info","meta":{},"window":{"navigationBarTitleText":"直播详情","titleNView":false}},{"path":"/packageB/pages/content-info/content-info","meta":{},"window":{"navigationBarTitleText":"内容详情","titleNView":false}},{"path":"/packageB/pages/courseinfo/courseinfo","meta":{},"window":{"navigationStyle":"custom","navigationBarTitleText":"课程详情"}}];
__uniConfig.onReady=function(callback){if(__uniConfig.ready){callback()}else{onReadyCallbacks.push(callback)}};Object.defineProperty(__uniConfig,"ready",{get:function(){return isReady},set:function(val){isReady=val;if(!isReady){return}const callbacks=onReadyCallbacks.slice(0);onReadyCallbacks.length=0;callbacks.forEach(function(callback){callback()})}});
__uniConfig.onServiceReady=function(callback){if(__uniConfig.serviceReady){callback()}else{onServiceReadyCallbacks.push(callback)}};Object.defineProperty(__uniConfig,"serviceReady",{get:function(){return isServiceReady},set:function(val){isServiceReady=val;if(!isServiceReady){return}const callbacks=onServiceReadyCallbacks.slice(0);onServiceReadyCallbacks.length=0;callbacks.forEach(function(callback){callback()})}});
service.register("uni-app-config",{create(a,b,c){if(!__uniConfig.viewport){var d=b.weex.config.env.scale,e=b.weex.config.env.deviceWidth,f=Math.ceil(e/d);Object.assign(__uniConfig,{viewport:f,defaultFontSize:Math.round(f/20)})}return{instance:{__uniConfig:__uniConfig,__uniRoutes:__uniRoutes,global:void 0,window:void 0,document:void 0,frames:void 0,self:void 0,location:void 0,navigator:void 0,localStorage:void 0,history:void 0,Caches:void 0,screen:void 0,alert:void 0,confirm:void 0,prompt:void 0,fetch:void 0,XMLHttpRequest:void 0,WebSocket:void 0,webkit:void 0,print:void 0}}}});