<?php get_header(); ?>
<!-- banner start -->
<!-- ================ -->
<div class="banner">
  <div class="fixed-image"></div>
</div>
<!-- banner end-->
<!-- page-intro start-->
<!-- ================ -->
<div class="page-intro">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li><i class="fa fa-home pr-10"></i><a href="index.html">Home</a></li>
          <li class="active">Portfolio Item</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- page-intro end-->
<!-- main-container start -->
<!-- ================ -->
<section class="main-container">
  <div class="container">
    <div class="row">
      <!-- main start -->
      <!-- ================ -->
      <div class="main col-md-12">
        <!-- page-title start -->
        <!-- ================ -->
        <h1 class="page-title margin-top-clear">Portfolio Item</h1>
        <!-- page-title end -->
        <div class="row">
          <div class="col-md-6">
            <h3>Project Description</h3>
            <div class="separator-2"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
            <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
          </div>
          <div class="col-md-6">
            <!-- Nav tabs -->
            <ul class="nav nav-pills white space-top" role="tablist">
              <li class="active"><a href="#portfolio-images" role="tab" data-toggle="tab" title="images"><i class="fa fa-camera pr-5"></i> Photo</a></li>
              <li><a href="#portfolio-video" role="tab" data-toggle="tab" title="video"><i class="fa fa-video-camera pr-5"></i> Video</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content clear-style">
              <div class="tab-pane active" id="portfolio-images">
                <div class="owl-carousel content-slider-with-controls owl-theme" style="opacity: 1; display: block;">
                  <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 3330px; left: 0px; display: block;"><div class="owl-item" style="width: 555px;"><div class="overlay-container">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-item-1.jpg" alt="">
                    <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-item-1.jpg" class="popup-img overlay" title="image title"><i class="fa fa-search-plus"></i></a>
                  </div></div><div class="owl-item" style="width: 555px;"><div class="overlay-container">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-item-2.jpg" alt="">
                    <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-item-2.jpg" class="popup-img overlay" title="image title"><i class="fa fa-search-plus"></i></a>
                  </div></div><div class="owl-item" style="width: 555px;"><div class="overlay-container">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-item-3.jpg" alt="">
                    <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-item-3.jpg" class="popup-img overlay" title="image title"><i class="fa fa-search-plus"></i></a>
                  </div></div></div></div>
                  
                  
                <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev"></div><div class="owl-next"></div></div></div></div>
              </div>
              <div class="tab-pane" id="portfolio-video">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="//player.vimeo.com/video/29198414?byline=0&amp;portrait=0"></iframe>
                  <p><a href="http://vimeo.com/29198414">Introducing Vimeo Music Store</a> from <a href="http://vimeo.com/staff">Vimeo Staff</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-3 col-xs-6">
            <h3>Project Info</h3>
            <ul class="list">
              <li><strong class="vertical-divider">Client </strong> John Doe</li>
              <li><strong class="vertical-divider">Date </strong> OCT 2014</li>
              <li><strong class="vertical-divider">In </strong> Web Design</li>
              <li><strong class="vertical-divider">Place </strong> Europe</li>
              <li><strong class="vertical-divider">URL </strong> <a href="http://www.htmlcoder.me/preview/idea/v.1.0/">www.idea.com</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-xs-6">
            <h3>Share This</h3>
            <div id="share" class="sharrre"><ul class="social-links clearfix"><li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li><li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li><li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li></ul></div>
          </div>
          <div class="col-md-6 col-xs-12">
            <h3>More info</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            <form role="form">
              <div class="form-group has-feedback">
                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                <i class="fa fa-envelope-o form-control-feedback"></i>
              </div>
              <a href="#" class="btn btn-white margin-top-clear">Subscribe</a>
            </form>
          </div>
        </div>
      </div>
      <!-- main end -->

    </div>
  </div>
</section>
<!-- main-container end -->
<!-- section start -->
<!-- ================ -->
<div class="section dark-translucent-bg parallax-bg-3 parallax" style="background-position: 50% 15px;">
  <div class="container">
    <div class="call-to-action">
      <div class="row">
        <div class="col-md-8">
          <h1 class="title text-center">We offer more possibilities to meet your every need.</h1>
        </div>
        <div class="col-md-4">
          <div class="text-center">
            <a href="#" class="btn btn-default btn-lg">Purchase</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- section end-->
<!-- section start -->
<!-- ================ -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Related Projects</h2>
        <div class="separator-2"></div>
        <p>Sed ut Perspiciatis Unde Omnis Iste Sed ut sit  voluptatem accusan tium </p>
        <div class="owl-carousel carousel owl-theme">
          <div class="image-box object-non-visible animated object-visible fadeInLeft" data-animation-effect="fadeInLeft" data-effect-delay="300">
            <div class="overlay-container">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-1.jpg" alt="">
              <a href="portfolio-item.html" class="overlay small">
                <i class="fa fa-link"></i>
                <span>Web Design</span>
              </a>
            </div>
            <a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">Project Title</a>
          </div>

          <div class="image-box object-non-visible animated object-visible fadeInLeft" data-animation-effect="fadeInLeft" data-effect-delay="300">
            <div class="overlay-container">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-2.jpg" alt="">
              <a href="portfolio-item.html" class="overlay small">
                <i class="fa fa-link"></i>
                <span>Web Design</span>
              </a>
            </div>
            <a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">Project Title</a>
          </div>

          <div class="image-box object-non-visible animated object-visible fadeInLeft" data-animation-effect="fadeInLeft" data-effect-delay="300">
            <div class="overlay-container">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-3.jpg" alt="">
              <a href="portfolio-item.html" class="overlay small">
                <i class="fa fa-link"></i>
                <span>Web Design</span>
              </a>
            </div>
            <a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">Project Title</a>
          </div>

          <div class="image-box object-non-visible animated object-visible fadeInLeft" data-animation-effect="fadeInLeft" data-effect-delay="300">
            <div class="overlay-container">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-4.jpg" alt="">
              <a href="portfolio-item.html" class="overlay small">
                <i class="fa fa-link"></i>
                <span>Web Design</span>
              </a>
            </div>
            <a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">Project Title</a>
          </div>

          <div class="image-box object-non-visible animated object-visible fadeInLeft" data-animation-effect="fadeInLeft" data-effect-delay="300">
            <div class="overlay-container">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-5.jpg" alt="">
              <a href="portfolio-item.html" class="overlay small">
                <i class="fa fa-link"></i>
                <span>Web Design</span>
              </a>
            </div>
            <a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">Project Title</a>
          </div>

          <div class="image-box object-non-visible animated object-visible fadeInLeft" data-animation-effect="fadeInLeft" data-effect-delay="300">
            <div class="overlay-container">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-6.jpg" alt="">
              <a href="portfolio-item.html" class="overlay small">
                <i class="fa fa-link"></i>
                <span>Web Design</span>
              </a>
            </div>
            <a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">Project Title</a>
          </div>

          <div class="image-box object-non-visible animated object-visible fadeInLeft" data-animation-effect="fadeInLeft" data-effect-delay="300">
            <div class="overlay-container">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-7.jpg" alt="">
              <a href="portfolio-item.html" class="overlay small">
                <i class="fa fa-link"></i>
                <span>Web Design</span>
              </a>
            </div>
            <a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">Project Title</a>
          </div>

          <div class="image-box object-non-visible animated object-visible fadeInLeft" data-animation-effect="fadeInLeft" data-effect-delay="300">
            <div class="overlay-container">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-8.jpg" alt="">
              <a href="portfolio-item.html" class="overlay small">
                <i class="fa fa-link"></i>
                <span>Web Design</span>
              </a>
            </div>
            <a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">Project Title</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- section end -->

<?php get_footer(); ?>
<script src="<?php bloginfo( 'template_url' ); ?>/assets/js/single-portfolio.js"></script>