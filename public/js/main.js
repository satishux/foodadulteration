!function(){"use strict";function e(){var e=$(window),n=$("body.sticky-header"),t=$(".main-header"),i=$(".offcanvas-menu"),a=$(".main-header-inner"),o=t.find(".menu-container"),s=t.find(".logo-container"),r=a.offset().top+a.outerHeight(),l=$('<div class="sticky-menu"><div class="container"><div class="sticky-logo-container"></div><div class="sticky-menu-container"><div class="sticky-main-nav main-nav clearfix"></div></div></div></div>');n.length&&(l.appendTo("body").insertBefore(".main-wrapper"),o.find(".main-nav").hasClass("style4")&&o.find(".main-nav").find(".top-nav").clone().appendTo(".sticky-main-nav"),i.length&&t.find(".shifter-handle").clone().appendTo(".sticky-menu").insertAfter(".sticky-logo-container"),s.find(".logo").clone().appendTo(".sticky-logo-container"),o.find(".main-nav").children("ul").clone().appendTo(".sticky-main-nav"),$(".sticky-menu-container .sticky-main-nav").length&&$(".sticky-menu-container .sticky-main-nav").children("ul").length>=2&&!o.find(".main-nav").hasClass("style4")&&$(".sticky-menu-container .sticky-main-nav").children("ul").find(".icon").appendTo(".sticky-menu-container .sticky-main-nav > ul:nth-child(2)")),e.on("scroll",function(){e.scrollTop()>=r?(l.addClass("slideDown"),1==a.find(".menu-container").hasClass("hover")&&l.removeClass("slideDown")):l.removeClass("slideDown")})}function n(){var e=$(".main-header:not(.fixed-menu)"),n=e.find(".main-bar"),t=(e.find(".breadcrumbs-container"),e.find(".bottom-bar"),n.find(".main-nav:not(.style4)")),i=n.find(".logo-container"),a=n.css("padding-top"),o=n.css("padding-bottom");$(".main-header").find(".logo-container").imagesLoaded(function(){function e(e){e.each(function(){var e=$(this);e.css({"padding-top":i.outerHeight()/2-e.height()/2,"padding-bottom":i.outerHeight()/2-e.height()/2})})}t.css("min-height",i.find(".logo").find("img").height()),i.css({"padding-top":a,"padding-bottom":o}),e(t.children("ul").children("li").children("a")),e(t.find("li.icons").find(".icon").children("a")),e(t.find("ul.shopping-menu").find(".icon")),e(n.find("ul.options").find("li")),e(n.find(".search-form")),e(n.find(".ads-container")),n.css({"padding-bottom":0,"padding-top":0}),t.css({opacity:"1",visibility:"visible"})})}function t(){var e=$(".main-header"),n=e.find(".main-bar"),t=(e.find(".bottom-bar"),n.find(".main-nav.style4")),i=t.height(),a=n.find(".logo-container"),o=n.css("padding-top"),s=n.css("padding-bottom");$(".main-header").find(".logo-container").imagesLoaded(function(){t.css("min-height",a.find(".logo").find("img").height()),a.css({"padding-top":o,"padding-bottom":s}),t.css({"padding-top":a.outerHeight()/2-i/2,"padding-bottom":a.outerHeight()/2-i/2})}),n.css({"padding-bottom":0,"padding-top":0}),t.css({opacity:"1",visibility:"visible"})}function i(){var e,n,t=$(".container").last(),i=$(".dropdown").parents(".menu-container"),a=$(".mega-menu:not(.full-width):not(.multi-column)"),o=a.children(".sub-menu"),s=$(".mega-menu.multi-column").children(".sub-menu"),r=$(".main-bar.style2"),l=r.children(".container"),d=l.width();e=t.length?t.offset().left:0,o.css("left",e),i.width()==$(window).width()||$(".offcanvas-menu-style2").length?(n=e,s.css({left:n,right:e})):(n=i.offset().left,$(".bottom-bar").find(".left-sec").find(".menu-container").length&&(n=$(".bottom-bar").find(".left-sec").find(".menu-container").offset().left),s.css({left:n,right:e-180})),$(".bottom-bar").find(".main-nav")&&$(".bottom-bar").find(s).css({left:n,right:e+290}),($(".main-header.style4").length||$(".bottom-bar").find(".main-nav").hasClass("align-center"))&&$(".bottom-bar").find(s).css({left:s.parents(".main-nav").children("ul").children("li").first().offset().left,right:e}),r.length&&(s.css({left:n-60,right:0}),o.each(function(){var e=$(this);e.parent(".mega-menu");e.css("left",d+l.offset().left-e.width())})),1==$("body").hasClass("w1740")&&s.css({left:s.parents(".main-nav").children("ul").offset().left,right:0})}function a(){var e=$(".dropdown.checkout-style2"),n=e.children(".sub-menu"),t=$(".main-header").find(".container");e.each(function(){$(this);n.css("right",t.offset().left)})}function o(){var e=$(".main-header.overlay-header").find(".title-bar");$(".main-header").find(".logo-container").imagesLoaded(function(){setTimeout(function(){e.css("padding-top",e.siblings(".main-header-inner").outerHeight()),$(window).width()<=991&&e.css("padding-top",$(".mobile-header-wrapper").outerHeight())},500)})}function s(){$(".subscribe-form-result").html("Submitting...").slideDown()}function r(e){$(".subscribe-form-result").html(e),$(".subscribe-form #subscribe-email").val("")}function l(){$(".subscribe-form").submit(function(){var e=$(this).attr("action");return s(),$.ajax({url:e,type:"POST",data:{email:$(this).find("#subscribe-email").val()},success:function(e){r(e)},error:function(e){r(e)}}),!1})}function d(){var e=$(".contact-form"),n=e.next(".contact-form-message");n.slideUp(),e.submit(function(t){t.preventDefault();var i=$(e).serialize();e.find("input[required], textarea").val()?n.text("Sending your message. Please wait...").slideDown():n.text("Please Complete All inputs"),n.removeClass("error").removeClass("success"),$.ajax({type:"POST",url:e.attr("action"),data:i}).done(function(t){n.removeClass("error").delay(3e3).slideUp(),n.addClass("success").delay(3e3).slideUp(),n.text(t),e.find("input").not("input[type=submit]").val(""),e.find("textarea").val("")}).fail(function(e){n.removeClass("success").delay(3e3).slideUp(),n.addClass("error").delay(3e3).slideUp(),""!==e.responseText?n.text(e.responseText):n.text("Oops! An error occured and your message could not be sent.")})})}function c(){var e=$(".twittie-slider");e.twittie({username:username,dateFormat:"%B %d, %Y",template:'<p>{{tweet}}</p><span class="time">{{date}}</span><a href="{{url}}" class="username">@{{user_name}}</a>',count:6,hideReplies:!0},function(){e.find("ul").owlCarousel({singleItem:!0,items:1,nav:!0,navText:['<i class="icon-knight-510"></i>','<i class="icon-knight-522"></i>'],animateIn:"fadeInLeft",animateOut:"fadeOutRight"})}),$(".widget-twitter").length&&$(".widget-twitter .twetts-container").twittie({username:username,dateFormat:"%B %d, %Y",template:"<p>{{tweet}}<span>{{date}}</span></p>",count:2,hideReplies:!0})}function f(){var e=$(".piechart-style2").find(".chart-container");e.each(function(e){var n=$(this),t=n.find("canvas"),i=t.get(0).getContext("2d"),a=[];n.find(".chart-data").find("li").each(function(){var e=$(this);a.push({value:e.data("value"),color:e.data("color"),label:e.text()})}),window.doughnutChart=new Chart(i).Doughnut(a,{animateRotate:!1,segmentShowStroke:!1,showTooltips:!1,percentageInnerCutout:55,legendTemplate:'<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'});var o=doughnutChart.generateLegend();n.append(o)})}function u(){var e=$(".piechart-style3").find(".chart-container");e.each(function(e){var n=$(this),t=n.find("canvas"),i=t.get(0).getContext("2d"),a=[];n.find(".chart-data").find("li").each(function(){var e=$(this);a.push({value:e.data("value"),color:e.data("color"),label:e.text()})}),window.pieChart=new Chart(i).Pie(a,{animateRotate:!1,segmentShowStroke:!1,showTooltips:!1,legendTemplate:'<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'});var o=pieChart.generateLegend();n.append(o)})}function m(){$(".cover-box-style2").each(function(){var e=$(this),n=e.find(".cover-box-contents").find(".slides"),t=e.find(".cover-box-tabs").find(".slides"),i=n.find("li").find("figure");e.imagesLoaded(function(){n.owlCarousel({singleItem:!0,items:1,mouseDrag:!1,touchDrag:!1,animateIn:"fadeInDown",animateOut:"fadeOutDown"}),t.owlCarousel({mouseDrag:!1,touchDrag:!1});var e=t.find(".owl-stage").find(".owl-item");e.first().addClass("active").siblings().removeClass("active"),e.on("click",function(){var e=$(this),t=e.index();e.addClass("active").siblings().removeClass("active"),n.trigger("to.owl.carousel",t)}),i.each(function(){var e=$(this),n=e.find("img");e.css("background-image","url("+n.attr("src")+")")})})})}function h(){$(".expandable-section").find(".contents").hide(),$(".expandable-section").on("click",".toggle h6",function(e){e.preventDefault();var n=$(this).find("a");n.parents(".expandableSection");n.parents(".toggle").siblings(".contents").slideToggle().parents(".expandable-section").toggleClass("open").end().end().end(),n.text()==n.data("hide-text")?n.text(n.data("show-text")):(n.data("show-text",n.text()),n.text(n.data("hide-text")))})}function g(){var e=$(".pricing-table-style2"),n=e.find(".plan-features");n.hide(),e.on("mouseenter",function(){$(this).find(".plan-features").delay(600).slideDown(500)}).on("mouseleave",function(){$(this).find(".plan-features").slideUp(500)}),$(".pricing-table-style2").each(function(e){var n=$(this).find(".plan-features").find("li");n.each(function(e){$(this).css({"-webkit-transition-delay":e/5+"s","-moz-transition-delay":e/5+"s","transition-delay":e/5+"s"})})})}function p(){var e=$(".countdown"),n=function(n){return e.hasClass("countdown-style1")?"ODHMS":e.hasClass("countdown-style2")?"DHMS":void 0};$(".countdown-timer").countdown({until:new Date(2015,8,15),format:n()})}function v(){var e=$(".portfolio-item-wrapper").isotope({itemSelector:".portfolio-item-container",layoutMode:"masonry",transitionDuration:"0.85s",hiddenStyle:{opacity:0,transform:"scale(0.2)"},visibleStyle:{opacity:1,transform:"scale(1)"}});$(".portfolio-filter-container").on("click","li",function(){var n=$(this).attr("data-filter");e.isotope({filter:n})}),$(".portfolio-filter-container").each(function(e,n){var t=$(n);t.on("click","li",function(){t.find(".active").removeClass("active"),$(this).addClass("active")})}),$(".portfolio-item-container").each(function(){var n=$(this);parseInt(n.css("left"),10)>=e.width()/2?n.addClass("right-positioned"):n.addClass("left-positioned")})}function w(){var e=$(".project-image-carousel");e.owlCarousel({singleItem:!0,items:1,loop:!0,nav:!0,autoHeight:!0,navText:['<i class="icon-knight-510"></i>','<i class="icon-knight-522"></i>'],animateIn:"fadeInLeft",animateOut:"fadeOutRight"})}function b(){var e=$(".blog-timeline"),n=e.width();e.imagesLoaded(function(){e.isotope({itemSelector:".article-container",layoutMode:"masonry"}),$(".article-container").each(function(){var e=$(this);parseInt(e.css("left"),10)>=n/2?e.addClass("right-positioned").removeClass("left-positioned"):e.addClass("left-positioned").removeClass("right-positioned")})})}function y(){var e=$(".blog-masonry");e.imagesLoaded(function(){e.isotope({itemSelector:".article-container",layoutMode:"masonry"})})}function C(){var e=$(".products-container.filterable");e.isotope({itemSelector:".product",layoutMode:"masonry",transitionDuration:"0.85s",hiddenStyle:{opacity:0,transform:"scale(0.2)"},visibleStyle:{opacity:1,transform:"scale(1)"}}),$(".product-filter-container").on("click","li",function(){var n=$(this).attr("data-filter");e.isotope({filter:n})}),$(".product-filter-container").each(function(e,n){var t=$(n);t.on("click","li",function(){t.find(".active").removeClass("active"),$(this).addClass("active")})})}function k(){var e=$(".post.format-gallery").find(".entry-image");e.imagesLoaded(function(){e.owlCarousel({singleItem:!0,items:1,dots:!0,loop:!0,animateIn:"fadeInDown",animateOut:"fadeOutDown"})})}function x(){var e=$(".product-slider");e.imagesLoaded(function(){e.owlCarousel({singleItem:!0,items:1,loop:!0,autoplay:!0,autoplayTimeout:4e3,autoplayHoverPause:!0,dots:!0,animateIn:"fadeInLeft",animateOut:"fadeOut"})})}function D(){var e,n=$(".single-product-image-container");n.imagesLoaded(function(){n.each(function(){function n(){e=t.hasClass("thumbnails-left")||t.hasClass("thumbnails-right")?"vertical":"horizontal"}var t=$(this),i=t.find(".slider"),a=t.find(".thumbnails");n(),i.flexslider({animation:"slide",controlNav:!1,animationLoop:!1,slideshow:!1,sync:a}),a.flexslider({animation:"slide",itemWidth:100,controlNav:!1,direction:e,animationLoop:!1,slideshow:!1,maxItems:4,asNavFor:i})})})}function I(){var e=$(".side-image.fullwidth");e.each(function(){var e=$(this),n=e.find(".image-holder"),t=n.find("img"),i=t.attr("src");n.css("background-image","url("+i+")"),t.hide()})}function T(){var e=$(".icon-box-wrapper-style2");e.each(function(){var e=$(this),n=e.find(".icon-box-image figure"),t=n.find("img"),i=t.attr("src"),a=e.find(".icon-box-container"),o=a.outerHeight();n.height(o).css("background-image","url("+i+")"),t.hide()})}function O(){$(".menu").each(function(){var e=$(this),n=e.find(".nav-container"),t=n.find(".navigation"),i=e.find(".menu-contents"),a=i.find(".menu-carousel");a.owlCarousel({items:1,nav:!0,loop:!0,navContainer:t,navText:['<i class="icon-knight-349"></i>','<i class="icon-knight-348"></i>'],responsiveClass:!0,responsive:{480:{items:1},992:{items:3}}})})}function L(){$(".breaking-news-widget").find(".slides").owlCarousel({singleItem:!0,items:1,loop:!0,autoplay:!0,animateIn:"fadeInDown",animateOut:"fadeOutRight",nav:!0,navText:['<i class="icon-knight-510"></i>','<i class="icon-knight-522"></i>']})}function S(){var e=$(".carousel"),n=e.find(".slides"),t=e.attr("data-items");n.each(function(){$(this).owlCarousel({items:t,dots:!0,margin:80,responsive:{0:{items:1},480:{items:t}}})})}function H(){var e=$(".main-header .main-nav").clone(),n=$(".main-nav.offcanvas-menu:not(.mobile-nav)"),t=$(".main-nav.offcanvas-menu:not(.offcanvas-menu-style2) .search-form"),i=$(".main-nav.mobile-nav"),a=$(".mobile-header-wrapper"),o=a.find(".search-form-wrapper"),s=a.find(".search-form-trigger"),r=a.find(".search-form-close-trigger");e.children("ul").appendTo(i).insertBefore(t),e.hasClass("style4")&&e.children(".navigation").children("ul").appendTo(i).insertBefore(t),n&&n.clone().children("ul").appendTo(i).insertBefore(t),(e.hasClass("iconic-items")||$(".main-nav.offcanvas-menu").hasClass("iconic-items"))&&i.addClass("iconic-items"),n.length&&n.hasClass("offcanvas-menu-style2")&&i.addClass("offcanvas-menu-style2"),s.on("click",function(e){e.preventDefault(),o.fadeIn()}),r.on("click",function(e){e.preventDefault(),o.fadeOut()})}function P(){var e=$(".main-nav.mobile-nav"),n=$(".mobile-header-wrapper"),t=$(".main-wrapper");$("body").hasClass("mobile-header-style2")&&$(window).width()<=991&&n.find(".logo-container").imagesLoaded(function(){var i=n.outerHeight();e.css({"margin-top":i,"padding-bottom":i+25}),t.css("padding-top",i)})}function R(){var e=$(".equal-heights"),n=e.find(".left-section"),t=e.find(".right-section");e.imagesLoaded(function(){var e=(n.outerHeight(),t.outerHeight());n.height(e)})}function U(){var e=$(".cover-box-style3");e.on("mouseenter",function(){$(this).addClass("active").siblings().removeClass("active")})}if($("body.sticky-header").length&&e(),$(".main-nav.style4").length||n(),$(".main-nav.style4").length&&t(),$(".preloader-container").length&&$("body").jpreLoader({splashID:"#preloader-container",loaderVPos:"70%"}),$(".wow").length){var M=new WOW({mobile:!1});M.init()}if($("body").on("click",'a[data-toggle="dropdown"]',function(e){if(e.preventDefault(),e.stopPropagation(),$(window).width()<=991||$(this).parents(".offcanvas-menu-style2").length||$(this).parents(".fixed-menu").length){var n=$(this);n.parent().siblings().removeClass("open").children(".sub-menu").slideUp(300).end().end().toggleClass("open"),n.siblings(".sub-menu").slideToggle(300)}if(1==$(".main-nav").hasClass("style4")&&$(window).width()>=992){var n=$(this);n.siblings(".sub-menu").slideToggle(300).end().parents(".main-nav").find("li").removeClass("open").children(".sub-menu").slideUp(300).end().end().end().parent().toggleClass("open")}}),$("body").on("mouseenter","li.dropdown",function(e){e.preventDefault(),$(this).parents(".menu-container").addClass("hover")}).on("mouseleave","li.dropdown",function(e){e.preventDefault(),$(this).parents(".menu-container").removeClass("hover")}),$(".mega-menu").length&&i(),$(".mega-menu").find(".product-preview").find("a").on("click",function(e){e.stopPropagation()}),$(".main-header").find(".logo-container").imagesLoaded(function(){$(".checkout-style2").length&&a()}),$(".title-bar").length&&$(".main-header.overlay-header").length&&o(),$(".widget-flickr-feed").length&&$(".widget-flickr-feed").find("ul").jflickrfeed({limit:$(".widget-flickr-feed").find("ul").attr("data-photo-limit"),qstrings:{id:"40905678@N02"},itemTemplate:'<li><a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a></li>'}),l(),d(),$(".signup-form").length&&$(".signup-form").ajaxChimp({url:"YOUR MAILCHIMP URL"}),$("#instafeed").length){var j=new Instafeed({get:"user",accessToken:"YOUR ACCESS TOKEN HERE",userId:303273692,limit:6,template:'<li><a href="{{link}}"><img src="{{image}}" /></a></li>'});j.run()}$(".twittie-slider").length&&c(),f(),u(),$(".clients-carousel").length&&$(".clients-carousel").each(function(){function e(e){return n.hasClass("fullwidth")?6:3}var n=$(this);n.owlCarousel({items:e(),autoplay:!0,responsive:{0:{items:2},480:{items:3},992:{items:e()}}})}),$(".cover-box-style2").length&&m(),$(".image-popup-link").length&&$(".image-popup-link").magnificPopup({type:"image",gallery:{enabled:!0},mainClass:"mfp-with-fade",removalDelay:300}),h(),g(),$(".testimonials-container").length&&$(".testimonials-container").each(function(){var e=$(this),n=e.find(".testimonials-carousel"),t=e.find(".testimonials-carousel-dots"),i=e.find(".testimonials-carousel-nav"),a=e.find(".testimonial-avatar");n.owlCarousel({items:1,singleItem:!0,loop:!0,nav:!0,mouseDrag:!1,touchDrag:!1,animateIn:"fadeInLeft",animateOut:"fadeOutRight",dotsContainer:t,navContainer:i,navText:['<i class="icon-knight-349"></i>','<i class="icon-knight-348"></i>']}),a.owlCarousel({items:1,singleItem:!0,loop:!0,nav:!0,mouseDrag:!1,touchDrag:!1,animateIn:"fadeIn",animateOut:"fadeOut",dotsContainer:t,navContainer:i,navText:['<i class="icon-knight-349"></i>','<i class="icon-knight-348"></i>']})}),$(".countdown-timer").length&&p(),$(".open-popup-link").length&&$(".open-popup-link").magnificPopup({type:"inline",midClick:!0,mainClass:"mfp-with-fade",removalDelay:850}),$(".post.format-gallery").length&&k(),$(".product-slider").length&&x(),$(".single-product-image").length&&D(),I(),$(".onepage-nav").length&&$(".onepage-nav").onePageNav({currentClass:"active"}),$("input[type=number]").length&&$("input[type=number]").number(),$(".fixed-nav").length&&$(".fixed-nav").find(".fixed-menu").niceScroll(),$(".menu").length&&O(),$(".breaking-news-widget").length&&L(),$(".carousel").length&&S(),H(),P(),$(".offcanvas-menu").not(".mobile-nav").children("ul").children("li").each(function(e){var e=e;$(this).css({"-webkit-transition-delay":e/15+"s","-moz-transition-delay":e/15+"s","transition-delay":e/15+"s"})}),$(".equal-heights").length&&$(window).width()>=992&&R(),$(".cover-box-style3").length&&$(window).width()>=992&&U(),$(".play-video-trigger").length&&$(".play-video-trigger").magnificPopup({disableOn:700,type:"iframe",mainClass:"mfp-with-fade",removalDelay:160,preloader:!1,fixedContentPos:!1}),$(".more-contents").length&&($(".more-contents").hide(),$(".more-trigger").on("click",function(e){e.preventDefault();var n=$(this).attr("href");$(n).slideDown(300)})),$(".section-video-container").length&&$(".section-video-container").find(".poster").each(function(){var e=$(this);e.css({backgroundImage:"url("+e.children("img").attr("src")+")"}).find("img").hide()}),$(window).on("load",function(){$(".shifter").length&&$.shifter({maxWidth:1/0}),$(".parallax").length&&$(window).stellar({horizontalOffset:"50%",horizontalScrolling:!1,responsive:!0}),$(".portfolio-container").length&&v(),$(".project-image-carousel").length&&w(),$(".counter").length&&$(".counter").appear(function(){var e=$(this),n=e.find(".number");n.countTo({to:e.find(".number").text(),refreshInterval:3})}),$(".h-progress").length&&$(".h-progress .progress-bar").each(function(){var e=$(this),n=e.find(".percentage");e.appear(function(){e.width(n.text()+"%"),n.countTo({speed:1500,to:n.text(),refreshInterval:20})})}),$(".v-progress").length&&$(".v-progress .progress-bar").each(function(){var e=$(this),n=e.find(".percentage");e.appear(function(){e.height(n.text()+"%"),n.countTo({speed:1500,to:n.text(),refreshInterval:20})})}),$(".piechart.piechart-style1").length&&$(".piechart.piechart-style1").each(function(){var e=$(this),n=e.children("input"),t=n.attr("value");n.knob({readOnly:!0,width:200,inputColor:"#444",dynamicDraw:!0}),e.appear(function(){$({value:0}).animate({value:t},{duration:1500,easing:"swing",progress:function(){n.val(Math.ceil(this.value)).trigger("change")}})})}),$(".back-to-top").on("click","a",function(e){e.preventDefault(),$("html, body").animate({scrollTop:0},{duration:1e3})}),$("video").not(".vjs-tech").length&&$("video").mediaelementplayer({features:["playpause","progress","current","duration"]}),$("audio").length&&$("audio").mediaelementplayer({features:["playpause","progress","current","duration"]}),$(".products-container.filterable").length&&C()}),$(window).on("resize",function(){$(".mega-menu").length&&i(),P(),$(".main-bar").removeAttr("style"),n(),o(),$(".checkout-style2").length&&a(),$(".portfolio-container").length&&v(),$(window).width()>=992&&$("html, body").removeClass("shifter-open"),$(".cover-box-style3").length&&$(window).width()>=992&&U()}),$(window).on("load resize",function(){T(),$(".blog-timeline").length&&b(),$(".blog-masonry").length&&y(),$(".equal-heights").length&&$(window).width()>=992&&R()})}();
//# sourceMappingURL=main.js.map