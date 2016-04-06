requirejs.config({
  baseUrl: '.',
  paths: {
    require:   'assets/vendor/require/require',
    jquery:    'assets/vendor/jquery/jquery',
    bootstrap: 'assets/vendor/bootstrap/js/bootstrap',
    isotope:   'assets/vendor/isotope/isotope.pkgd',
    bridget:   'assets/vendor/jquery-bridget/jquery-bridget',
    carousel:  'assets/vendor/owl-carousel2/owl.carousel',
    countTo:   'assets/vendor/jquery-countTo/jquery.countTo',
    parallax:  'assets/vendor/parallax/jquery.parallax',
    header:    'assets/js/header'
  },
  shim: {
    bootstrap: ['jquery'],
    isotope: ['jquery'],
    carousel: ['jquery'],
    parallax: ['jquery']
  }

});
