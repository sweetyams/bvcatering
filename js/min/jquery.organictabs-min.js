!function($){$.organicTabs=function(i,n){var t=this;t.$el=$(i),t.$nav=t.$el.find(".nav"),t.init=function(){if(t.options=$.extend({},$.organicTabs.defaultOptions,n),$(".hide").css({position:"relative",top:0,left:0,display:"none"}),$setTab=t.options.settab){console.log("signin",t.$el,$setTab);var i=t.$el.find("a.current").first().attr("href").substring(1),e=t.$nav.find('li > a[href^="#'+$setTab+'"]').first(),s=t.$el.find("> .list-wrap"),a=s.height();return s.height(a),t.$el.find("#"+i).first().fadeOut(t.options.speed,function(){t.$el.find("#"+$setTab).fadeIn(t.options.speed);var i=t.$el.find("#"+$setTab).height();s.animate({height:i}),t.$el.find(".nav").first().find("li a").removeClass("current"),e.addClass("current")}),!1}t.$nav.on("click","li > a",function(){var i=t.$el.find("a.current").first().attr("href").substring(1),n=$(this),e=n.attr("href").substring(1),s=t.$el.find(".list-wrap").first(),a=s.height();return s.height(a),e!=i&&0==t.$el.find(":animated").length&&t.$el.find("#"+i).first().fadeOut(t.options.speed,function(){t.$el.find("#"+e).first().fadeIn(t.options.speed);var i=t.$el.find("#"+e).first().height();s.animate({height:i}),t.$el.find(".nav").first().find("li a").addClass("test").removeClass("current"),n.addClass("current")}),!1})},t.init()},$.organicTabs.defaultOptions={speed:300},$.fn.organicTabs=function(i){return this.each(function(){new $.organicTabs(this,i)})}}(jQuery);