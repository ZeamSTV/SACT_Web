/*!
 * pagepiling.js 1.5.5
 *
 * https://github.com/alvarotrigo/pagePiling.js
 * MIT licensed
 *
 * Copyright (C) 2013 alvarotrigo.com - A project by Alvaro Trigo
 */
(function(b,h,k,z){b.fn.pagepiling=function(M){function N(a){var f=b(".pp-section.active").index(".pp-section");a=a.index(".pp-section");return f>a?"up":"down"}function l(a,f){var d={destination:a,animated:f,activeSection:b(".pp-section.active"),anchorLink:a.data("anchor"),sectionIndex:a.index(".pp-section"),toMove:a,yMovement:N(a),leavingSection:b(".pp-section.active").index(".pp-section")+1};d.activeSection.is(a)||("undefined"===typeof d.animated&&(d.animated=!0),"undefined"!==typeof d.anchorLink&&
O(d.anchorLink,d.sectionIndex),d.destination.addClass("active").siblings().removeClass("active"),d.sectionsToMove=P(d),"down"===d.yMovement?(d.translate3d="vertical"!==c.direction?"translate3d(-100%, 0px, 0px)":"translate3d(0px, -100%, 0px)",d.scrolling="-100%",c.css3||d.sectionsToMove.each(function(a){a!=d.activeSection.index(".pp-section")&&b(this).css(v(d.scrolling))}),d.animateSection=d.activeSection):(d.translate3d="translate3d(0px, 0px, 0px)",d.scrolling="0",d.animateSection=a),b.isFunction(c.onLeave)&&
c.onLeave.call(this,d.leavingSection,d.sectionIndex+1,d.yMovement),Q(d),R(d.anchorLink),S(d.anchorLink,d.sectionIndex),A=d.anchorLink,B=(new Date).getTime())}function Q(a){c.css3?(C(a.animateSection,a.translate3d,a.animated),a.sectionsToMove.each(function(){C(b(this),a.translate3d,a.animated)}),setTimeout(function(){w(a)},c.scrollingSpeed)):(a.scrollOptions=v(a.scrolling),a.animated?a.animateSection.animate(a.scrollOptions,c.scrollingSpeed,c.easing,function(){D(a);w(a)}):(a.animateSection.css(v(a.scrolling)),
setTimeout(function(){D(a);w(a)},400)))}function w(a){b.isFunction(c.afterLoad)&&c.afterLoad.call(this,a.anchorLink,a.sectionIndex+1)}function P(a){return"down"===a.yMovement?b(".pp-section").map(function(f){if(f<a.destination.index(".pp-section"))return b(this)}):b(".pp-section").map(function(f){if(f>a.destination.index(".pp-section"))return b(this)})}function D(a){"up"===a.yMovement&&a.sectionsToMove.each(function(f){b(this).css(v(a.scrolling))})}function v(a){return"vertical"===c.direction?{top:a}:
{left:a}}function O(a,b){c.anchors.length?(location.hash=a,E(location.hash)):E(String(b))}function E(a){a=a.replace("#","");b("body")[0].className=b("body")[0].className.replace(/\b\s?pp-viewing-[^\s]+\b/g,"");b("body").addClass("pp-viewing-"+a)}function x(){return(new Date).getTime()-B<600+c.scrollingSpeed?!0:!1}function C(a,b,d){a.toggleClass("pp-easing",d);a.css({"-webkit-transform":b,"-moz-transform":b,"-ms-transform":b,transform:b})}function m(a){var f=(new Date).getTime();a=a||k.event;var d=
a.wheelDelta||-a.deltaY||-a.detail,c=Math.max(-1,Math.min(1,d)),e="undefined"!==typeof a.wheelDeltaX||"undefined"!==typeof a.deltaX;a=Math.abs(a.wheelDeltaX)<Math.abs(a.wheelDelta)||Math.abs(a.deltaX)<Math.abs(a.deltaY)||!e;149<n.length&&n.shift();n.push(Math.abs(d));d=f-F;F=f;200<d&&(n=[]);if(!x())return f=b(".pp-section.active").filter(".pp-scrollable"),d=G(n,10),e=G(n,70),d>=e&&a&&(0>c?p("down",f):0<c&&p("up",f)),!1}function G(a,b){for(var d=0,c=a.slice(Math.max(a.length-b,1)),e=0;e<c.length;e++)d+=
c[e];return Math.ceil(d/b)}function p(a,b){var d,c;"down"==a?(d="bottom",c=e.moveSectionDown):(d="top",c=e.moveSectionUp);if(0<b.length)if(d="top"===d?!b.scrollTop():"bottom"===d?b.scrollTop()+1+b.innerHeight()>=b[0].scrollHeight:void 0,d)c();else return!0;else c()}function H(){return k.PointerEvent?{down:"pointerdown",move:"pointermove",up:"pointerup"}:{down:"MSPointerDown",move:"MSPointerMove",up:"MSPointerUp"}}function I(a){var b=[];b.y="undefined"!==typeof a.pageY&&(a.pageY||a.pageX)?a.pageY:
a.touches[0].pageY;b.x="undefined"!==typeof a.pageX&&(a.pageY||a.pageX)?a.pageX:a.touches[0].pageX;return b}function J(a){return"undefined"===typeof a.pointerType||"mouse"!=a.pointerType}function T(a){a=a.originalEvent;J(a)&&(a=I(a),q=a.y,r=a.x)}function U(a){var f=a.originalEvent;if(!K(a.target)&&J(f)){var d=b(".pp-section.active").filter(".pp-scrollable");d.length||a.preventDefault();x()||(a=I(f),t=a.y,u=a.x,"horizontal"===c.direction&&Math.abs(r-u)>Math.abs(q-t)?Math.abs(r-u)>g.width()/100*c.touchSensitivity&&
(r>u?p("down",d):u>r&&p("up",d)):Math.abs(q-t)>g.height()/100*c.touchSensitivity&&(q>t?p("down",d):t>q&&p("up",d)))}}function K(a,f){f=f||0;var d=b(a).parent();return f<c.normalScrollElementTouchThreshold&&d.is(c.normalScrollElements)?!0:f==c.normalScrollElementTouchThreshold?!1:K(d,++f)}


function V(){b("body").append('<div id="pp-nav"><ul></ul></div>');var a=b("#pp-nav");a.css("color",c.navigation.textColor);a.addClass(c.navigation.position);for(var f=0;f<b(".pp-section").length;f++){var d="";c.anchors.length&&
(d=c.anchors[f]);if("undefined"!==c.navigation.tooltips){var e=c.navigation.tooltips[f];"undefined"===typeof e&&(e="")}

a.find("ul").append('<li data-tooltip="'+e+'"><a href="#'+d+'"><span></span></a></li>')}a.find("span").css("border-color",c.navigation.bulletsColor)}function S(a,f){
	
	
	
	c.navigation&&(b("#pp-nav").find(".active").removeClass("active"),a?b("#pp-nav").find('a[href="#'+a+'"]').addClass("active"):b("#pp-nav").find("li").eq(f).find("a").addClass("active")
	
	
	)
	
	

	
	c.navigation&&(b("#pp-nav").find(".active1").removeClass("active1"),a?b("#pp-nav").find('li').next("li").addClass("active1"):b("#pp-nav").find("li").next("li").eq(f).find("a").addClass("active1")
	
	
	)
	
	//var x=b("#pp-nav.active").prev(".pp-section");

	
	//b(" li a.active").next("#pp-nav li a").addClass("activenext");
	//b("#pp-nav").find("li").eq(f).find("a").addClass("active");
	
	
	}
	
	
	function R(a){c.menu&&(b(c.menu).find(".active").removeClass("active1"),
	
b(c.menu).find('[data-menuanchor="'+a+'"]').addClass("active"))


}




function W(){var a=h.createElement("p"),b,d={webkitTransform:"-webkit-transform",OTransform:"-o-transform",msTransform:"-ms-transform",MozTransform:"-moz-transform",transform:"transform"};h.body.insertBefore(a,null);for(var c in d)a.style[c]!==z&&(a.style[c]="translate3d(1px,1px,1px)",b=k.getComputedStyle(a).getPropertyValue(d[c]));h.body.removeChild(a);return b!==z&&0<b.length&&"none"!==b}var e=b.fn.pagepiling,g=b(this),A,B=0,L="ontouchstart"in
k||0<navigator.msMaxTouchPoints||navigator.maxTouchPoints,q=0,r=0,t=0,u=0,n=[],c=b.extend(!0,{direction:"vertical",menu:null,verticalCentered:!0,sectionsColor:[],anchors:[],scrollingSpeed:700,easing:"easeInQuart",loopBottom:!1,loopTop:!1,css3:!0,navigation:{textColor:"#000",bulletsColor:"#000",position:"right",tooltips:[]},normalScrollElements:null,normalScrollElementTouchThreshold:5,touchSensitivity:5,keyboardScrolling:!0,sectionSelector:".section",animateAnchor:!1,afterLoad:null,onLeave:null,afterRender:null},
M);b.extend(b.easing,{easeInQuart:function(a,b,c,e,g){return e*(b/=g)*b*b*b+c}});e.setScrollingSpeed=function(a){c.scrollingSpeed=a};e.setMouseWheelScrolling=function(a){a?g.get(0).addEventListener?(g.get(0).addEventListener("mousewheel",m,!1),g.get(0).addEventListener("wheel",m,!1)):g.get(0).attachEvent("onmousewheel",m):g.get(0).addEventListener?(g.get(0).removeEventListener("mousewheel",m,!1),g.get(0).removeEventListener("wheel",m,!1)):g.get(0).detachEvent("onmousewheel",m)};e.setAllowScrolling=
function(a){a?(e.setMouseWheelScrolling(!0),L&&(a=H(),g.off("touchstart "+a.down).on("touchstart "+a.down,T),g.off("touchmove "+a.move).on("touchmove "+a.move,U))):(e.setMouseWheelScrolling(!1),L&&(a=H(),g.off("touchstart "+a.down),g.off("touchmove "+a.move)))};e.setKeyboardScrolling=function(a){c.keyboardScrolling=a};e.moveSectionUp=function(){

var a=b(".pp-section.active").prev(".pp-section");

!a.length&&c.loopTop&&(a=b(".pp-section").last());
a.length&&l(a)};





e.moveSectionDown=function(){var a=b(".pp-section.active").next(".pp-section");

!a.length&&c.loopBottom&&(a=b(".pp-section").first());a.length&&l(a)};e.moveTo=function(a){var c="",c=isNaN(a)?b(h).find('[data-anchor="'+a+'"]'):b(".pp-section").eq(a-1);0<c.length&&l(c)};b(c.sectionSelector).each(function(){b(this).addClass("pp-section")});c.css3&&(c.css3=W());b(g).css({overflow:"hidden","-ms-touch-action":"none","touch-action":"none"});e.setAllowScrolling(!0);b.isEmptyObject(c.navigation)||V();var y=b(".pp-section").length;b(".pp-section").each(function(a){
	
	
	b(this).data("data-index",a);
b(this).css("z-index",y);
a||0!==b(".pp-section.active").length||b(this).addClass("active");

"undefined"!==typeof c.anchors[a]&&b(this).attr("data-anchor",c.anchors[a]);"undefined"!==typeof c.sectionsColor[a]&&b(this).css("background-color",c.sectionsColor[a]);c.verticalCentered&&!b(this).hasClass("pp-scrollable")&&b(this).addClass("pp-table").wrapInner('<div class="pp-tableCell" style="height:100%" />');--y}).promise().done(function(){
	
	
	
	c.navigation&&(b("#pp-nav").css("margin-top","-"+b("#pp-nav").height()/
2+"px"),b("#pp-nav").find("li").eq(b(".pp-section.active").index(".pp-section")).find("a").addClass("active"));


b(k).on("load",function(){var a=k.location.hash.replace("#",""),a=b(h).find('.pp-section[data-anchor="'+a+'"]');0<a.length&&l(a,c.animateAnchor)});b.isFunction(c.afterRender)&&c.afterRender.call(this)});b(k).on("hashchange",function(){var a=k.location.hash.replace("#","").split("/")[0];a.length&&a&&a!==A&&(a=isNaN(a)?b(h).find('[data-anchor="'+a+'"]'):b(".pp-section").eq(a-1),l(a))});b(h).keydown(function(a){if(c.keyboardScrolling&&
!x())switch(a.which){case 38:case 33:e.moveSectionUp();break;case 40:case 34:e.moveSectionDown();break;case 36:e.moveTo(1);break;case 35:e.moveTo(b(".pp-section").length);break;case 37:e.moveSectionUp();break;case 39:e.moveSectionDown()}});c.normalScrollElements&&(b(h).on("mouseenter",c.normalScrollElements,function(){e.setMouseWheelScrolling(!1)}),b(h).on("mouseleave",c.normalScrollElements,function(){e.setMouseWheelScrolling(!0)}));var F=(new Date).getTime();b(h).on("click touchstart","#pp-nav a",
function(a){a.preventDefault();a=b(this).parent().index();l(b(".pp-section").eq(a))});b(h).on({mouseenter:function(){var a=b(this).data("tooltip");b('<div class="pp-tooltip '+c.navigation.position+'">'+a+"</div>").hide().appendTo(b(this)).fadeIn(200)},mouseleave:function(){b(this).find(".pp-tooltip").fadeOut(200,function(){b(this).remove()})}},"#pp-nav li")}})(jQuery,document,window);