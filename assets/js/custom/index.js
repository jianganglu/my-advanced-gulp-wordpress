;(function() {

  	require(['jquery', 'carousel', 'parallax', 'header'], function($) {
  		var owl1 = $('#owl-carousel1');
  		var owl2 = $('#owl-carousel2');
  		var owl3 = $('#owl-carousel3');
	    //初始化页面
	    function init() {

	    	//启动轮播，bootstrap轮播插件carousel
            $('#carousel').carousel();
                $('#carousel').find('img').addClass('carousel-img');
            $('.carousel-inner').find('.item:first').addClass('active');
            //owl-carousel slider插件
	    	owl1.owlCarousel({
	    		items: 1,
			    loop: true,
			    margin: 10,
			    nav: false,
			    autoplay: true,
			    autoplayTimeout: 10000,
				autoplayHoverPause: false
			});	
		   	owl2.owlCarousel({
			    loop: true,
			    margin: 10,
			    nav: false,
			    autoplay: false,
			    responsiveClass: true,
			    responsive: {
			        0: {
			            items: 1,
			        },
			        600: {
			            items: 2,
			        },
			        1000: {
			            items: 4,
			        }
			    }
			});
			owl3.owlCarousel({
			    loop: true,
			    margin: 50,
			    nav: false,
			    autoplay: true,
			    autoplayTimeout: 10000,
				autoplayHoverPause: false,
			    responsiveClass: true,
			    responsive: {
			        0: {
			            items: 1,
			        },
			        600: {
			            items: 2,
			        },
			        1000: {
			            items: 4,
			        }
			    }
			});
			//owl-carousel 翻页事件
			$('.owl-next').click(function() {
			    owl2.trigger('next.owl.carousel');
			})
			$('.owl-prev').click(function() {
			    owl2.trigger('prev.owl.carousel', [300]);
			})
			// Parallax section
			//-----------------------------------------------
			if (($(".parallax").length>0)){
				$(".parallax").parallax("50%", 0.2, false);
			};

			if (($(".parallax-2").length>0)){
				$(".parallax-2").parallax("50%", 0.2, false);
			};
			if (($(".parallax-text").length>0)){
				$(window).scroll(function() {
					//Get the scoll position of the page
					scrollPos = $(this).scrollTop();

					//Scroll and fade out the banner text
					$('.parallax-text').css({
						'opacity' : 1-(scrollPos/400)
					});
				});
			};

			//hc-tabs
			//-----------------------------------------------
			if ($('.hc-tabs').length>0) {
				$(window).load(function() {
					var currentTab = $(".hc-tabs .nav.nav-tabs li.active a").attr("href"),
					tabsImageAnimation = $(".hc-tabs-top").find("[data-tab='" + currentTab + "']").attr("data-tab-animation-effect");
					$(".hc-tabs-top").find("[data-tab='" + currentTab + "']").addClass("current-img show " + tabsImageAnimation + " animated");
					
					$('.hc-tabs .nav.nav-tabs li a').on('click', function(event) {
						var currentTab = $(this).attr("href"),
						tabsImageAnimation = $(".hc-tabs-top").find("[data-tab='" + currentTab + "']").attr("data-tab-animation-effect");
						$(".current-img").removeClass("current-img show " + tabsImageAnimation + " animated");
						$(".hc-tabs-top").find("[data-tab='" + currentTab + "']").addClass("current-img show " + tabsImageAnimation + " animated");
					});
				});

			}
	    };
    	init();
  	});
})();



