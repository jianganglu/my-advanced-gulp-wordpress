;(function() {
  require(['jquery'], function($) {
    // 选择所需fix的dom
    var $fixNav = $('#sidebar');
    // 选择头部dom（所需fix住的dom以上的dom）
    var $header = $('#header');
    // 选择底部dom
    var $footer = $('#footer');
    // 头部dom的高度
    var header_height = $header.height();
    // 滚动条位置（整个文档被上卷的高度）
    var scroll_position = 0;
    // 底部dom的位置（相对于document的垂直位置）
    var footer_position = $footer.offset().top;
    // $fixNav的位置（相对于document的垂直位置）
    var fixNav_position = $fixNav.offset().top;
    // $fixNav的位置和头部dom的高度的差值
    var relative_position = fixNav_position - header_height;
    // $header的高度和滚动条位置的差值
    var difference_header = 0;
    // $footer的位置和滚动条位置的差值
    var difference_footer = 0;
    var i = 0;
    var top_arr = new Array();
    function init() {
        fixed();
    };
    // 监听函数，顶部和底部absolute，中部fix
    function fixed() {
        $(window).scroll(function(){
            scroll_position = $(window).scrollTop();
            difference_header = header_height - scroll_position;
            difference_footer = footer_position - scroll_position;
            if(difference_header < 0) {
                $fixNav.css('top', relative_position);
                $fixNav.addClass('nav-fixed');
                $fixNav.removeClass('nav-absolute');                  
            }else {
                $fixNav.addClass('nav-absolute');
                $fixNav.removeClass('nav-fixed');
                $fixNav.removeAttr('style');
            };            
            if(difference_footer < 500) {
                $fixNav.removeClass('nav-fixed');
                $fixNav.addClass('nav-absolute-bottom');
                top_arr[i] = $(window).scrollTop();
                i++;
                $fixNav.css('top', top_arr[0]-480);                 
            }else {
                $fixNav.addClass('nav-fixed');
                $fixNav.removeClass('nav-absolute-bottom');
                $fixNav.css('top', relative_position);
            };
        });
    };
    init();
  });
})();
