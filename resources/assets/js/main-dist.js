!function(){"use strict";function e(){var e=$(".main-header:not(.fixed-menu)"),t=e.find(".main-bar"),i=t.find(".main-nav:not(.style7)"),n=t.find(".logo-container"),a=t.css("padding-top"),s=t.css("padding-bottom");i.css("min-height",n.find(".logo").find("img").height()),n.css({"padding-top":a,"padding-bottom":s}),i.children("ul").children("li").children("a").each(function(){var e=$(this);e.css({"padding-top":n.outerHeight()/2-e.height()/2,"padding-bottom":n.outerHeight()/2-e.height()/2})}),i.find("li.icons").find(".icon").children("a").each(function(){var e=$(this);e.css({"padding-top":n.outerHeight()/2-e.height()/2,"padding-bottom":n.outerHeight()/2-e.height()/2})}),i.find("li.icons").find(".icon").children("a").each(function(){var e=$(this);e.css({"padding-top":n.outerHeight()/2-e.height()/2,"padding-bottom":n.outerHeight()/2-e.height()/2})}),i.find("ul.shopping-menu").find(".icon").each(function(){var e=$(this);e.css({"padding-top":n.outerHeight()/2-e.height()/2,"padding-bottom":n.outerHeight()/2-e.height()/2})}),t.find("ul.options").find("li").each(function(){var e=$(this);e.css({"padding-top":n.outerHeight()/2-e.height()/2,"padding-bottom":n.outerHeight()/2-e.height()/2})}),t.find(".search-form").each(function(){var e=$(this);e.css({"padding-top":n.outerHeight()/2-e.height()/2,"padding-bottom":n.outerHeight()/2-e.height()/2})}),t.css({"padding-bottom":0,"padding-top":0})}function t(){var e=$(".main-header"),t=e.find(".main-bar"),i=t.find(".main-nav.style7"),n=t.find(".logo-container"),a=t.css("padding-top"),s=t.css("padding-bottom");i.css("min-height",n.find(".logo").find("img").height()),n.css({"padding-top":a,"padding-bottom":s}),i.each(function(){var e=$(this);e.css({"padding-top":n.outerHeight()/2-e.height()/2,"padding-bottom":n.outerHeight()/2-e.height()/2})}),t.css({"padding-bottom":0,"padding-top":0})}function i(){$(".mega-menu:not(.full-width)").children(".sub-menu").css("left",$(".container").offset().left)}function n(){var e=$(".dropdown.checkout-style2"),t=e.children(".sub-menu"),i=$(".container");e.each(function(){$(this);t.css("right",i.offset().left)})}function a(){var e=$(".main-header.overlay-header").find(".title-bar");e.css("padding-top",e.siblings(".main-header-inner").outerHeight())}function s(){$(".subscribe-form-result").html("Submitting...").slideDown()}function o(e){$(".subscribe-form-result").html(e),$(".subscribe-form #email").val("")}function r(){$(".subscribe-form").submit(function(){var e=$(this).attr("action");return s(),$.ajax({url:e,type:"POST",data:{email:$(".subscribe-email").val()},success:function(e){o(e)},error:function(e){o(e)}}),!1})}function l(){function e(){$(".contact-form1").submit(t)}function t(){var e=$(this);return $(".name").val()&&$(".email").val()&&$(".subject").val()&&$(".message").val()?($(".sendingMessage").slideDown(),$.ajax({url:e.attr("action")+"?ajax=true",type:e.attr("method"),data:e.serialize(),success:i})):$(".incompleteMessage").slideDown().delay(n).slideUp(),!1}function i(e){e=$.trim(e),$(".sendingMessage").slideUp(),"success"==e?($(".successMessage").slideDown().delay(n).slideUp(),$(".name").val(""),$(".email").val(""),$(".subject").val(""),$(".message").val("")):$(".failureMessage").slideDown().delay(n).slideUp()}var n=2e3;e()}function c(){function e(){$(".contact-form2").submit(t)}function t(){var e=$(this);return $(".name").val()&&$(".email").val()&&$(".message").val()?($(".sendingMessage").slideDown(),$.ajax({url:e.attr("action")+"?ajax=true",type:e.attr("method"),data:e.serialize(),success:i})):$(".incompleteMessage").slideDown().delay(n).slideUp(),!1}function i(e){e=$.trim(e),$(".sendingMessage").slideUp(),"success"==e?($(".successMessage").slideDown().delay(n).slideUp(),$(".name").val(""),$(".email").val(""),$(".message").val("")):$(".failureMessage").slideDown().delay(n).slideUp()}var n=2e3;e()}function d(){function e(){$(".contact-form3").submit(t)}function t(){var e=$(this);return $(".name").val()&&$(".email").val()?($(".sendingMessage").slideDown(),$.ajax({url:e.attr("action")+"?ajax=true",type:e.attr("method"),data:e.serialize(),success:i})):$(".incompleteMessage").slideDown().delay(n).slideUp(),!1}function i(e){e=$.trim(e),$(".sendingMessage").slideUp(),"success"==e?($(".successMessage").slideDown().delay(n).slideUp(),$(".name").val(""),$(".email").val("")):$(".failureMessage").slideDown().delay(n).slideUp()}var n=2e3;e()}function h(){var e=$(".piechart-style2").find(".chart-container");e.each(function(){var e=$(this),t=e.find("canvas"),i=t.get(0).getContext("2d"),n=[];e.find(".chart-data").find("li").each(function(){var e=$(this);n.push({value:e.data("value"),color:e.data("color"),label:e.text()})}),window.doughnutChart=new Chart(i).Doughnut(n,{animateRotate:!1,segmentShowStroke:!1,showTooltips:!1,percentageInnerCutout:55,legendTemplate:'<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'});var a=doughnutChart.generateLegend();e.append(a)})}function g(){var e=$(".piechart-style3").find(".chart-container");e.each(function(){var e=$(this),t=e.find("canvas"),i=t.get(0).getContext("2d"),n=[];e.find(".chart-data").find("li").each(function(){var e=$(this);n.push({value:e.data("value"),color:e.data("color"),label:e.text()})}),window.pieChart=new Chart(i).Pie(n,{animateRotate:!1,segmentShowStroke:!1,showTooltips:!1,legendTemplate:'<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'});var a=pieChart.generateLegend();e.append(a)})}function u(){var e=$(".container").first();$(".cover-box-style2").each(function(){var t=$(this),i=t.find(".cover-box-contents"),n=t.find(".cover-box-tabs");i.css("margin-right",-e.offset().left),n.flexslider({controlNav:!1,animationLoop:!1,slideshow:!1,asNavFor:i}),i.flexslider({animation:"fade",controlNav:!1,animationLoop:!1,slideshow:!1,sync:n})})}if($(".shifter").length&&$.shifter({maxWidth:1/0}),$(".offcanvas-menu").find("li").each(function(e){var e=e;$(this).css({"-webkit-transition-delay":e/15+"s","-moz-transition-delay":e/15+"s","transition-delay":e/15+"s"})}),$('ul.dropdown-menu a[data-toggle="dropdown"]').on("click",function(e){e.preventDefault(),e.stopPropagation();var t=$(this);t.parent().siblings().removeClass("open").end().toggleClass("open")}),$(".mega-menu").find(".product-preview").find("a").on("click",function(e){e.stopPropagation()}),$(".widget-flickr-feed").length&&$(".widget-flickr-feed").find("ul").jflickrfeed({limit:$(".widget-flickr-feed").find("ul").attr("data-photo-limit"),qstrings:{id:"40905678@N02"},itemTemplate:'<li><a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a></li>'}),r(),$("#instafeed").length){var f=new Instafeed({get:"user",accessToken:"54840800.007647a.27e7ca0cba44472ea520e4102a68ab11",userId:303273692,limit:6,template:'<li><a href="{{link}}"><img src="{{image}}" /></a></li>'});f.run()}$(".widget-twitter").length&&$(".widget-twitter .twetts-container").twittie({username:"google",dateFormat:"%B %d, %Y",template:"<p>{{tweet}}<span>{{date}}</span></p>",count:2,hideReplies:!0,apiPath:"php/twitter-feed/tweet.php"}),h(),g(),$(".clients-carousel").length&&$(".clients-carousel").each(function(){function e(){return t.hasClass("fullwidth")?6:3}var t=$(this);t.owlCarousel({items:e(),autoplay:!0})}),$(window).on("load",function(){if($(".parallax").length&&$(window).stellar({horizontalOffset:0,horizontalScrolling:!1}),$(".wow").length){var s=new WOW({mobile:!1});s.init()}$(".main-nav.style7").length||e(),$(".main-nav.style7").length&&t(),$(".mega-menu:not(.full-width)").length&&i(),$(".checkout-style2").length&&n(),$(".title-bar").length&&$(".main-header.overlay-header").length&&a(),$(".contact-form1").length&&l(),$(".contact-form2").length&&c(),$(".contact-form3").length&&d(),$(".counter").length&&$(".counter").appear(function(){var e=$(this),t=e.find(".number");t.countTo({to:e.find(".number").text(),refreshInterval:3})}),$(".h-progress").length&&$(".h-progress .progress-bar").each(function(){var e=$(this),t=e.find(".percentage");e.appear(function(){e.width(t.text()+"%"),t.countTo({speed:1300,to:t.text(),refreshInterval:20})})}),$(".v-progress").length&&$(".v-progress .progress-bar").each(function(){var e=$(this),t=e.find(".percentage");e.appear(function(){e.height(t.text()+"%"),t.countTo({speed:1300,to:t.text(),refreshInterval:20})})}),$(".piechart.piechart-style1").length&&$(".piechart.piechart-style1").each(function(){var e=$(this),t=e.children("input"),i=t.attr("value");t.knob({readOnly:!0,width:200,inputColor:"#444",dynamicDraw:!0}),e.appear(function(){$({value:0}).animate({value:i},{duration:1500,easing:"swing",progress:function(){t.val(Math.ceil(this.value)).trigger("change")}})})}),$(".cover-box-style2").length&&u()})}();
