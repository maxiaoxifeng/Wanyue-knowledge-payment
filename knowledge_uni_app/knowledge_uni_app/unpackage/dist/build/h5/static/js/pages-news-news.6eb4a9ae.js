(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-news-news"],{"128b":function(t,i,n){"use strict";n.r(i);var e=n("363c"),a=n.n(e);for(var o in e)"default"!==o&&function(t){n.d(i,t,(function(){return e[t]}))}(o);i["default"]=a.a},"357d":function(t,i,n){var e=n("c416");"string"===typeof e&&(e=[[t.i,e,""]]),e.locals&&(t.exports=e.locals);var a=n("4f06").default;a("10aae303",e,!0,{sourceMap:!1,shadowMode:!1})},"363c":function(t,i,n){"use strict";Object.defineProperty(i,"__esModule",{value:!0}),i.default=void 0;var e=getApp(),a={data:function(){return{news_info:{}}},onLoad:function(){var t=this,i=e.globalData;uni.request({url:i.site_url+"Knowledge.getNews",method:"GET",data:{},success:function(i){var n=i.data.data;0==n.code&&n.info.length>0&&(t.news_info=i.data.data.info)},fail:function(){uni.showToast({icon:"none",title:"网络错误"})}})},methods:{viewNewsInfo:function(t){uni.navigateTo({url:"../news_detail/news_detail?news_id="+t})}}};i.default=a},"84d6":function(t,i,n){"use strict";var e;n.d(i,"b",(function(){return a})),n.d(i,"c",(function(){return o})),n.d(i,"a",(function(){return e}));var a=function(){var t=this,i=t.$createElement,n=t._self._c||i;return n("v-uni-view",[n("v-uni-view",{staticClass:"liveinfo-wrap news-wrap"},t._l(t.news_info,(function(i,e){return n("v-uni-view",{key:e,staticClass:"live-list",on:{click:function(n){arguments[0]=n=t.$handleEvent(n),t.viewNewsInfo(i.id)}}},[n("v-uni-view",{staticClass:"live-list-img-wrap"},[n("v-uni-image",{staticClass:"live-list-img",attrs:{src:i.thumb,mode:"aspectFill"}})],1),n("v-uni-view",{staticClass:"live-list-info"},[n("v-uni-view",{staticClass:"live-c-title"},[t._v(t._s(i.name))]),n("v-uni-view",{staticClass:"live-teacher-price"},[n("v-uni-text",{staticClass:"view-nums-title"},[t._v("访问量:")]),n("v-uni-text",{staticClass:"view-nums"},[t._v(t._s(i.views))]),n("v-uni-view",{staticClass:"price-wrap"},[n("v-uni-text",{staticClass:"add-time"},[t._v(t._s(i.addtime))])],1)],1)],1)],1)})),1)],1)},o=[]},ac97:function(t,i,n){"use strict";var e=n("357d"),a=n.n(e);a.a},adc4:function(t,i,n){"use strict";n.r(i);var e=n("84d6"),a=n("128b");for(var o in a)"default"!==o&&function(t){n.d(i,t,(function(){return a[t]}))}(o);n("ac97");var r,l=n("f0c5"),c=Object(l["a"])(a["default"],e["b"],e["c"],!1,null,"c6230874",null,!1,e["a"],r);i["default"]=c.exports},c416:function(t,i,n){var e=n("24fb");i=e(!1),i.push([t.i,'\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n/* 大班课/内容列表公共样式 */\n/* 课程列表区域 */.course-list-wrap[data-v-c6230874]{margin-top:%?40?%}.live-title[data-v-c6230874]{font-size:%?30?%;font-weight:700;margin-left:%?10?%}.live-more[data-v-c6230874]{font-size:small;position:absolute;right:%?40?%;color:#969696;margin-top:%?7?%}.more_image[data-v-c6230874]{width:%?20?%;height:%?20?%;position:absolute;right:%?22?%;margin-top:%?20?%}.content-more[data-v-c6230874]{position:absolute;right:%?50?%;display:inline;color:#969696;font-size:%?20?%}.live-list[data-v-c6230874]{margin-bottom:%?20?%;padding-left:%?8?%}.live-list[data-v-c6230874]::after{display:block;clear:both;height:0;content:"";visibility:hidden;overflow:hidden}.live-list-img-wrap[data-v-c6230874]{position:relative;width:31%;height:%?160?%;float:left;margin-right:%?6?%;margin-top:%?20?%}\n/* 课程图片 */.live-list-img[data-v-c6230874]{width:100%;height:100%;border-radius:%?8?%}.course-title-icon[data-v-c6230874]{position:absolute;left:%?0?%;top:%?2?%;width:%?60?%;height:%?30?%;line-height:%?30?%;text-align:center;border-radius:%?8?% 0 %?8?% 0;background-color:rgba(0,0,0,.6);font-size:%?18?%;color:#dbdbdb}\n/* 课程内容 */.live-list-info[data-v-c6230874]{float:left;width:65%;height:%?160?%;margin-left:%?15?%}.live-teacher-avatar[data-v-c6230874]{width:%?35?%;height:%?35?%;border-radius:50%;margin-top:%?20?%}\n/* 直播列表标题 */.live-c-title[data-v-c6230874]{font-weight:700;overflow:hidden;height:%?70?%;line-height:1.3em;-webkit-line-clamp:2;text-overflow:ellipsis;display:-webkit-box;-webkit-box-orient:vertical;margin-top:%?20?%}.live-status[data-v-c6230874]{font-size:10px;padding-top:%?0?%;color:#969696}.live-status-tuwen[data-v-c6230874]{font-size:%?20?%;color:#969696;width:%?60?%;text-align:center;border:%?2?% solid #969696;border-radius:%?8?%;position:relative;top:%?10?%}.living-status[data-v-c6230874]{padding-top:%?0?%;color:#2c62ef}\n/* 价格 */.live-teacher-price[data-v-c6230874]{display:flex}.price-wrap[data-v-c6230874]{display:flex;color:#2c62ef; \n\t/* background: linear-gradient(to right,#3D98FF ,#7A76FA ); */\n\t/* -webkit-background-clip: text;\n\tcolor: transparent; */position:absolute;right:%?35?%;margin-top:%?10?%;font-size:%?26?%}.free[data-v-c6230874]{color:#2c62ef}.numPrice[data-v-c6230874]{color:#ff1b20}.pass[data-v-c6230874]{color:#969696}.teacher-name[data-v-c6230874]{margin-left:%?15?%;font-size:%?20?%;color:#323232;width:auto;margin-top:%?22?%}\n/* 大班课单独样式 */.liveinfo-wrap[data-v-c6230874]{padding-top:%?2?%;min-height:%?1500?%;background-color:#fafafa}.live-list[data-v-c6230874]{width:90%;height:%?190?%;margin:%?30?% auto;background-color:#fff}.live-c-title[data-v-c6230874]{line-height:%?35?%;height:40%;margin-top:%?20?%}.live-teacher-price[data-v-c6230874]{margin-top:%?40?%}.price-wrap[data-v-c6230874]{margin-left:55%!important}.view-nums-title[data-v-c6230874]{color:#969696;font-size:%?24?%;margin-top:%?22?%}.view-nums[data-v-c6230874]{margin-top:%?22?%;color:#969696;font-size:%?24?%}.teacher-name[data-v-c6230874]{color:#969696}.add-time[data-v-c6230874]{font-size:%?24?%;color:#969696;margin-top:%?15?%}',""]),t.exports=i}}]);