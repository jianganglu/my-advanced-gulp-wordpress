;(function() {
	require(['jquery'], function($) {
		$(window).scroll(function(){
		    //滚动条到顶部的距离
			var scrTop = $(window).scrollTop();
			//回到顶部按钮距离窗口右侧的距离
			var myWidth = ($(window).width() > $('#temp').width())
			?(($(window).width() - $('#temp').width())/2 - 80):0;
			var windowTop = $(window).height();
			if ((windowTop-300)<scrTop){
				//滚动高度大于一页
				/*$('.go-top').css('top',(scrTop + windowTop -100))
				.css('right',myWidth).fadeIn('slow');*/
				$('.backToTop').css('top',(scrTop + windowTop -100))
				.fadeIn('slow');
			}
			else{
				//滚动高度小于一页
				/*$('.go-top').css('top',(scrTop + windowTop -100))
				.css('right',myWidth).fadeOut('slow');*/
				$('.backToTop').css('top',(scrTop + windowTop -100))
				.fadeOut('slow');
			}
		});
		//按钮被点击后，滑动到顶部
		$('#backToTop').click(function(){$('html,body').animate({scrollTop: '0px'}, 800);});
	});
})();



   