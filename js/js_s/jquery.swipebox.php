<? header("Content-type: application/javascript");  ?>

!function(e,i,$,t){$.swipebox=function(s,o){var a,n={useCSS:!0,useSVG:!0,initialIndexOnArray:0,removeBarsOnMobile:!0,hideCloseButtonOnMobile:!1,hideBarsDelay:3e3,videoMaxWidth:1140,vimeoColor:"cccccc",beforeOpen:null,afterOpen:null,afterClose:null,afterMedia:null,nextSlide:null,prevSlide:null,loopAtEnd:!1,autoplayVideos:!1,queryStringData:{},toggleClassOnLoad:""},r=this,l=[],d,p=s.selector,c=navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)|(Android)|(PlayBook)|(BB10)|(BlackBerry)|(Opera Mini)|(IEMobile)|(webOS)|(MeeGo)/i),b=null!==c||i.createTouch!==t||"ontouchstart"in e||"onmsgesturechange"in e||navigator.msMaxTouchPoints,u=!!i.createElementNS&&!!i.createElementNS("https://www.w3.org/2000/svg","svg").createSVGRect,h=e.innerWidth?e.innerWidth:$(e).width(),g=e.innerHeight?e.innerHeight:$(e).height(),f=0,w='<div id="swipebox-overlay" class="animated-quick fadeIn">					<div id="swipebox-container">						<div id="swipebox-slider"></div>						<div id="swipebox-bottom-bar">							<div id="swipebox-title"></div>							<a id="swipebox-prev"><i class="icon ion-ios-arrow-left"></i></a>							<a id="swipebox-next"><i class="icon ion-ios-arrow-right"></i></a>						</div>						<a id="swipebox-close"><i class="icon ion-close-round"></i></a>					</div>			</div>';r.settings={},$.swipebox.close=function(){a.closeSlide()},$.swipebox.extend=function(){return a},r.init=function(){r.settings=$.extend({},n,o),$.isArray(s)?(l=s,a.target=$(e),a.init(r.settings.initialIndexOnArray)):$(i).on("click",p,function(e){if("slide current"===e.target.parentNode.className)return!1;l=[];var i,t,s;s||(t="data-rel",s=$(this).attr(t)),s||(t="rel",s=$(this).attr(t)),d=s&&""!==s&&"nofollow"!==s?$(p).filter("["+t+'="'+s+'"]'):$(p),d.each(function(){var e=null,i=null;$(this).attr("data-title")&&(e=$(this).attr("data-title")),$(this).attr("href")&&(i=$(this).attr("href")),l.push({href:i,title:e})}),i=d.index($(this)),e.preventDefault(),e.stopPropagation(),a.target=$(e.target),a.init(i)})},a={init:function(e){r.settings.beforeOpen&&r.settings.beforeOpen(),this.target.trigger("swipebox-start"),$.swipebox.isOpen=!0,this.build(),this.openSlide(e),this.openMedia(e),this.preloadMedia(e+1),this.preloadMedia(e-1),r.settings.afterOpen&&r.settings.afterOpen(e)},build:function(){var e=this,i;$("body").append(w),u&&r.settings.useSVG===!0&&(i=$("#swipebox-close").css("background-image"),i=i.replace("png","svg"),$("#swipebox-prev, #swipebox-next, #swipebox-close").css({"background-image":i})),c&&r.settings.removeBarsOnMobile&&$("#swipebox-bottom-bar, #swipebox-top-bar").remove(),$.each(l,function(){$("#swipebox-slider").append('<div class="slide"></div>')}),e.setDim(),e.actions(),b&&e.gesture(),e.keyboard(),e.animBars(),e.resize()},setDim:function(){var i,t,s={};"onorientationchange"in e?e.addEventListener("orientationchange",function(){0===e.orientation?(i=h,t=g):90!==e.orientation&&-90!==e.orientation||(i=g,t=h)},!1):(i=e.innerWidth?e.innerWidth:$(e).width(),t=e.innerHeight?e.innerHeight:$(e).height()),s={width:i,height:t},$("#swipebox-overlay").css(s)},resize:function(){var i=this;$(e).resize(function(){i.setDim()}).resize()},supportTransition:function(){var e="transition WebkitTransition MozTransition OTransition msTransition KhtmlTransition".split(" "),s;for(s=0;s<e.length;s++)if(i.createElement("div").style[e[s]]!==t)return e[s];return!1},doCssTrans:function(){return r.settings.useCSS&&this.supportTransition()?!0:void 0},gesture:function(){var e=this,i,t,s,o,a,n,r=!1,d=!1,p=10,c=50,b={},u={},g=$("#swipebox-top-bar, #swipebox-bottom-bar"),w=$("#swipebox-slider");g.addClass("visible-bars"),e.setTimeout(),$("body").bind("touchstart",function(e){return $(this).addClass("touching"),i=$("#swipebox-slider .slide").index($("#swipebox-slider .slide.current")),u=e.originalEvent.targetTouches[0],b.pageX=e.originalEvent.targetTouches[0].pageX,b.pageY=e.originalEvent.targetTouches[0].pageY,$("#swipebox-slider").css({"-webkit-transform":"translate3d("+f+"%, 0, 0)",transform:"translate3d("+f+"%, 0, 0)"}),$(".touching").bind("touchmove",function(e){if(e.preventDefault(),e.stopPropagation(),u=e.originalEvent.targetTouches[0],!d&&(a=s,s=u.pageY-b.pageY,Math.abs(s)>=c||r)){var g=.75-Math.abs(s)/w.height();w.css({top:s+"px"}),w.css({opacity:g}),r=!0}o=t,t=u.pageX-b.pageX,n=100*t/h,!d&&!r&&Math.abs(t)>=p&&($("#swipebox-slider").css({"-webkit-transition":"",transition:""}),d=!0),d&&(t>0?0===i?$("#swipebox-overlay").addClass("leftSpringTouch"):($("#swipebox-overlay").removeClass("leftSpringTouch").removeClass("rightSpringTouch"),$("#swipebox-slider").css({"-webkit-transform":"translate3d("+(f+n)+"%, 0, 0)",transform:"translate3d("+(f+n)+"%, 0, 0)"})):0>t&&(l.length===i+1?$("#swipebox-overlay").addClass("rightSpringTouch"):($("#swipebox-overlay").removeClass("leftSpringTouch").removeClass("rightSpringTouch"),$("#swipebox-slider").css({"-webkit-transform":"translate3d("+(f+n)+"%, 0, 0)",transform:"translate3d("+(f+n)+"%, 0, 0)"}))))}),!1}).bind("touchend",function(i){if(i.preventDefault(),i.stopPropagation(),$("#swipebox-slider").css({"-webkit-transition":"-webkit-transform 0.4s ease",transition:"transform 0.4s ease"}),s=u.pageY-b.pageY,t=u.pageX-b.pageX,n=100*t/h,r)if(r=!1,Math.abs(s)>=2*c&&Math.abs(s)>Math.abs(a)){var l=s>0?w.height():-w.height();w.animate({top:l+"px",opacity:0},300,function(){e.closeSlide()})}else w.animate({top:0,opacity:1},300);else d?(d=!1,t>=p&&t>=o?e.getPrev():-p>=t&&o>=t&&e.getNext()):g.hasClass("visible-bars")?(e.clearTimeout(),e.hideBars()):(e.showBars(),e.setTimeout());$("#swipebox-slider").css({"-webkit-transform":"translate3d("+f+"%, 0, 0)",transform:"translate3d("+f+"%, 0, 0)"}),$("#swipebox-overlay").removeClass("leftSpringTouch").removeClass("rightSpringTouch"),$(".touching").off("touchmove").removeClass("touching")})},setTimeout:function(){if(r.settings.hideBarsDelay>0){var i=this;i.clearTimeout(),i.timeout=e.setTimeout(function(){i.hideBars()},r.settings.hideBarsDelay)}},clearTimeout:function(){e.clearTimeout(this.timeout),this.timeout=null},showBars:function(){var e=$("#swipebox-top-bar, #swipebox-bottom-bar");this.doCssTrans()?e.addClass("visible-bars"):($("#swipebox-top-bar").animate({top:0},500),$("#swipebox-bottom-bar").animate({bottom:0},500),setTimeout(function(){e.addClass("visible-bars")},1e3))},hideBars:function(){var e=$("#swipebox-top-bar, #swipebox-bottom-bar");this.doCssTrans()?e.removeClass("visible-bars"):($("#swipebox-top-bar").animate({top:"-50px"},500),$("#swipebox-bottom-bar").animate({bottom:"-50px"},500),setTimeout(function(){e.removeClass("visible-bars")},1e3))},animBars:function(){var e=this,i=$("#swipebox-top-bar, #swipebox-bottom-bar");i.addClass("visible-bars"),e.setTimeout(),$("#swipebox-slider").click(function(){i.hasClass("visible-bars")||(e.showBars(),e.setTimeout())}),$("#swipebox-bottom-bar").hover(function(){e.showBars(),i.addClass("visible-bars"),e.clearTimeout()},function(){r.settings.hideBarsDelay>0&&(i.removeClass("visible-bars"),e.setTimeout())})},keyboard:function(){var i=this;$(e).bind("keyup",function(e){e.preventDefault(),e.stopPropagation(),37===e.keyCode?i.getPrev():39===e.keyCode?i.getNext():27===e.keyCode&&i.closeSlide()})},actions:function(){var e=this,i="touchend click";l.length<2?($("#swipebox-bottom-bar").hide(),t===l[1]&&$("#swipebox-top-bar").hide()):($("#swipebox-prev").bind(i,function(i){i.preventDefault(),i.stopPropagation(),e.getPrev(),e.setTimeout()}),$("#swipebox-next").bind(i,function(i){i.preventDefault(),i.stopPropagation(),e.getNext(),e.setTimeout()})),$("#swipebox-close").bind(i,function(){e.closeSlide()})},setSlide:function(e,i){i=i||!1;var t=$("#swipebox-slider");f=100*-e,this.doCssTrans()?t.css({"-webkit-transform":"translate3d("+100*-e+"%, 0, 0)",transform:"translate3d("+100*-e+"%, 0, 0)"}):t.animate({left:100*-e+"%"}),$("#swipebox-slider .slide").removeClass("current"),$("#swipebox-slider .slide").eq(e).addClass("current"),this.setTitle(e),i&&t.fadeIn(),$("#swipebox-prev, #swipebox-next").removeClass("disabled"),0===e?$("#swipebox-prev").addClass("disabled"):e===l.length-1&&r.settings.loopAtEnd!==!0&&$("#swipebox-next").addClass("disabled")},openSlide:function(i){$("html").addClass("swipebox-html"),b?($("html").addClass("swipebox-touch"),r.settings.hideCloseButtonOnMobile&&$("html").addClass("swipebox-no-close-button")):$("html").addClass("swipebox-no-touch"),$(e).trigger("resize"),this.setSlide(i,!0)},preloadMedia:function(e){var i=this,s=null;l[e]!==t&&(s=l[e].href),i.isVideo(s)?i.openMedia(e):setTimeout(function(){i.openMedia(e)},1e3)},openMedia:function(e){var i=this,s,o;return l[e]!==t&&(s=l[e].href),0>e||e>=l.length?!1:(o=$("#swipebox-slider .slide").eq(e),void(i.isVideo(s)?(o.html(i.getVideo(s)),r.settings.afterMedia&&r.settings.afterMedia(e)):(o.addClass("slide-loading"),i.loadMedia(s,function(){o.removeClass("slide-loading"),o.html(this),r.settings.afterMedia&&r.settings.afterMedia(e)}))))},setTitle:function(e){var i=null;$("#swipebox-title").empty(),l[e]!==t&&(i=l[e].title),i?($("#swipebox-top-bar").show(),$("#swipebox-title").append(i)):$("#swipebox-top-bar").hide()},isVideo:function(e){if(e){if(e.match(/(youtube\.com|youtube-nocookie\.com)\/watch\?v=([a-zA-Z0-9\-_]+)/)||e.match(/vimeo\.com\/([0-9]*)/)||e.match(/youtu\.be\/([a-zA-Z0-9\-_]+)/))return!0;if(e.toLowerCase().indexOf("swipeboxvideo=1")>=0)return!0}},parseUri:function(e,t){var s=i.createElement("a"),o={};return s.href=decodeURIComponent(e),s.search&&(o=JSON.parse('{"'+s.search.toLowerCase().replace("?","").replace(/&/g,'","').replace(/=/g,'":"')+'"}')),$.isPlainObject(t)&&(o=$.extend(o,t,r.settings.queryStringData)),$.map(o,function(e,i){return e&&e>""?encodeURIComponent(i)+"="+encodeURIComponent(e):void 0}).join("&")},getVideo:function(e){var i="",t=e.match(/((?:www\.)?youtube\.com|(?:www\.)?youtube-nocookie\.com)\/watch\?v=([a-zA-Z0-9\-_]+)/),s=e.match(/(?:www\.)?youtu\.be\/([a-zA-Z0-9\-_]+)/),o=e.match(/(?:www\.)?vimeo\.com\/([0-9]*)/),n="";return t||s?(s&&(t=s),n=a.parseUri(e,{autoplay:r.settings.autoplayVideos?"1":"0",v:""}),i='<iframe width="560" height="315" src="//'+t[1]+"/embed/"+t[2]+"?"+n+'" frameborder="0" allowfullscreen></iframe>'):o?(n=a.parseUri(e,{autoplay:r.settings.autoplayVideos?"1":"0",byline:"0",portrait:"0",color:r.settings.vimeoColor}),i='<iframe width="560" height="315"  src="//player.vimeo.com/video/'+o[1]+"?"+n+'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'):i='<iframe width="560" height="315" src="'+e+'" frameborder="0" allowfullscreen></iframe>','<div class="swipebox-video-container" style="max-width:'+r.settings.videoMaxWidth+'px"><div class="swipebox-video">'+i+"</div></div>"},loadMedia:function(e,i){if(0===e.trim().indexOf("#"))i.call($("<div>",{"class":"swipebox-inline-container"}).append($(e).clone().toggleClass(r.settings.toggleClassOnLoad)));else if(!this.isVideo(e)){var t=$("<img>").on("load",function(){i.call(t)});t.attr("src",e)}},getNext:function(){var e=this,i,t=$("#swipebox-slider .slide").index($("#swipebox-slider .slide.current"));t+1<l.length?(i=$("#swipebox-slider .slide").eq(t).contents().find("iframe").attr("src"),$("#swipebox-slider .slide").eq(t).contents().find("iframe").attr("src",i),t++,e.setSlide(t),e.preloadMedia(t+1),r.settings.nextSlide&&r.settings.nextSlide(t)):r.settings.loopAtEnd===!0?(i=$("#swipebox-slider .slide").eq(t).contents().find("iframe").attr("src"),$("#swipebox-slider .slide").eq(t).contents().find("iframe").attr("src",i),t=0,e.preloadMedia(t),e.setSlide(t),e.preloadMedia(t+1),r.settings.nextSlide&&r.settings.nextSlide(t)):($("#swipebox-overlay").addClass("rightSpring"),setTimeout(function(){$("#swipebox-overlay").removeClass("rightSpring")},500))},getPrev:function(){var e=$("#swipebox-slider .slide").index($("#swipebox-slider .slide.current")),i;e>0?(i=$("#swipebox-slider .slide").eq(e).contents().find("iframe").attr("src"),$("#swipebox-slider .slide").eq(e).contents().find("iframe").attr("src",i),e--,this.setSlide(e),this.preloadMedia(e-1),r.settings.prevSlide&&r.settings.prevSlide(e)):($("#swipebox-overlay").addClass("leftSpring"),setTimeout(function(){$("#swipebox-overlay").removeClass("leftSpring")},500))},nextSlide:function(e){},prevSlide:function(e){},closeSlide:function(){$("html").removeClass("swipebox-html"),$("html").removeClass("swipebox-touch"),$(e).trigger("resize"),this.destroy()},destroy:function(){$(e).unbind("keyup"),$("body").unbind("touchstart"),$("body").unbind("touchmove"),$("body").unbind("touchend"),$("#swipebox-slider").unbind(),$("#swipebox-overlay").removeClass("fadeIn").addClass("fadeOut index-999"),setTimeout(function(){$("#swipebox-overlay").remove()},801),$.isArray(s)||s.removeData("_swipebox"),this.target&&this.target.trigger("swipebox-destroy"),$.swipebox.isOpen=!1,r.settings.afterClose&&r.settings.afterClose()}},r.init()},$.fn.swipebox=function(e){if(!$.data(this,"_swipebox")){var i=new $.swipebox(this,e);this.data("_swipebox",i)}return this.data("_swipebox")}}(window,document,jQuery);
