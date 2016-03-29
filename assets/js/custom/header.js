;(function() {
  require(['jquery','bootstrap'], function($) {
    //初始化页面
    function init() {
      //启动轮播
      $('#carousel').carousel();
        $('#carousel').find('img').addClass('carousel-img');
      $('.carousel-inner').find('.item:first').addClass('active');
    };
    init();
  });
})();

