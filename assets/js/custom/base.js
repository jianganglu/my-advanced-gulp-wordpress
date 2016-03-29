requirejs.config({
  baseUrl: '.',
  paths: {
    jquery:    'assets/vendor/jquery/jquery',
    bootstrap: 'assets/vendor/bootstrap/js/bootstrap',
    isotope:   'assets/vendor/isotope/isotope.pkgd',
    bridget:   'assets/vendor/jquery-bridget/jquery-bridget',
    carousel:  'assets/vendor/owl-carousel2/owl.carousel'
  },
  shim: {
    bootstrap: ['jquery'],
    isotope: ['jquery'],
    carousel: ['jquery']
  }

});
