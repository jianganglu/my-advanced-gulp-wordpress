<?php
/**
 * Template Name: portfolio
 */

get_header();
?>
<!-- page-intro start -->
<div class="page-intro">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li>
            <i class="fa fa-home"></i>
            <a href="#">Home</a>
          </li>
          <li class="active">Protfolio 3 Columns</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- page-intro end -->
<!-- main-container start -->
<div class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-title">Portfolio 3 Columns</h1>
        <div class="separator-2"></div>
        <div class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas nulla suscipit 
unde rerum mollitia dolorum.</div>
        <div class="filters">
          <ul class="nav nav-pills">
            <li class="active">
              <a href="#" data-filter="*">ALL</a>
            </li>
            <li>
              <a href="#" data-filter=".web-design">WEB DESIGN</a>
            </li>
            <li>
              <a href="#" data-filter=".app-development">APP DEVELOPMENT</a>
            </li>
            <li>
              <a href="#" data-filter=".site-building">SITE BUILDING</a>
            </li>
          </ul>
        </div>
        <!-- portfolio items start -->
        <div class="isotope-container row">

          <?php
          query_posts( 'post_type=portfolio' );
          while( have_posts() ) : the_post();
          ?>
          <div class="col-md-4 col-sm-16 isotope-item web-design">
            <div class="image-box">
              <div class="overlay-container">
                <?php the_post_thumbnail(); ?>
                <div class="overlay">
                  <div class="overlay-links">
                    <a href="<?php the_permalink(); ?>">
                      <i class="fa fa-link"></i></a>
                    <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-1.jpg" class="popup-img">
                      <i class="fa fa-search-plus"></i>
                    </a>
                  </div>
                  <span>Web Design</span>
                </div>
              </div>
              <div class="image-box-body">
                <h3 class="title"><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="link">
                  <span>Read More</span>
                </a>
              </div>
            </div>
          </div>
          <?php
          endwhile;
          wp_reset_query();
          ?>

          <div class="col-md-4 col-sm-16 isotope-item web-design">
            <div class="image-box">
              <div class="overlay-container">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-1.jpg">
                <div class="overlay">
                  <div class="overlay-links">
                    <a href="protfolio.item.html">
                      <i class="fa fa-link"></i></a>
                    <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-1.jpg" class="popup-img">
                      <i class="fa fa-search-plus"></i>
                    </a>
                  </div>
                  <span>Web Design</span>
                </div>
              </div>
              <div class="image-box-body">
                <h3 class="title">Project Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                <a href="portfolio-item.html" class="link">
                  <span>Read More</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-16 isotope-item app-development">
            <div class="image-box">
              <div class="overlay-container">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-2.jpg">
                <div class="overlay">
                  <div class="overlay-links">
                    <a href="protfolio.item.html">
                      <i class="fa fa-link"></i></a>
                    <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-2.jpg" class="popup-img">
                      <i class="fa fa-search-plus"></i>
                    </a>
                  </div>
                  <span>Web Design</span>
                </div>
              </div>
              <div class="image-box-body">
                <h3 class="title">Project Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                <a href="portfolio-item.html" class="link">
                  <span>Read More</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-16 isotope-item web-design">
            <div class="image-box">
              <div class="overlay-container">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-3.jpg">
                <div class="overlay">
                  <div class="overlay-links">
                    <a href="protfolio.item.html">
                      <i class="fa fa-link"></i></a>
                    <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-3.jpg" class="popup-img">
                      <i class="fa fa-search-plus"></i>
                    </a>
                  </div>
                  <span>Web Design</span>
                </div>
              </div>
              <div class="image-box-body">
                <h3 class="title">Project Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                <a href="portfolio-item.html" class="link">
                  <span>Read More</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-16 isotope-item site-building">
            <div class="image-box">
              <div class="overlay-container">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-4.jpg">
                <div class="overlay">
                  <div class="overlay-links">
                    <a href="protfolio.item.html">
                      <i class="fa fa-link"></i></a>
                    <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-4.jpg" class="popup-img">
                      <i class="fa fa-search-plus"></i>
                    </a>
                  </div>
                  <span>Web Design</span>
                </div>
              </div>
              <div class="image-box-body">
                <h3 class="title">Project Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                <a href="portfolio-item.html" class="link">
                  <span>Read More</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-16 isotope-item app-development">
            <div class="image-box">
              <div class="overlay-container">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-5.jpg">
                <div class="overlay">
                  <div class="overlay-links">
                    <a href="protfolio.item.html">
                      <i class="fa fa-link"></i></a>
                    <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-5.jpg" class="popup-img">
                      <i class="fa fa-search-plus"></i>
                    </a>
                  </div>
                  <span>Web Design</span>
                </div>
              </div>
              <div class="image-box-body">
                <h3 class="title">Project Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                <a href="portfolio-item.html" class="link">
                  <span>Read More</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-16 isotope-item web-design">
            <div class="image-box">
              <div class="overlay-container">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-6.jpg">
                <div class="overlay">
                  <div class="overlay-links">
                    <a href="protfolio.item.html">
                      <i class="fa fa-link"></i></a>
                    <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-6.jpg" class="popup-img">
                      <i class="fa fa-search-plus"></i>
                    </a>
                  </div>
                  <span>Web Design</span>
                </div>
              </div>
              <div class="image-box-body">
                <h3 class="title">Project Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                <a href="portfolio-item.html" class="link">
                  <span>Read More</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-16 isotope-item site-building">
            <div class="image-box">
              <div class="overlay-container">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-7.jpg">
                <div class="overlay">
                  <div class="overlay-links">
                    <a href="protfolio.item.html">
                      <i class="fa fa-link"></i></a>
                    <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-7.jpg" class="popup-img">
                      <i class="fa fa-search-plus"></i>
                    </a>
                  </div>
                  <span>Web Design</span>
                </div>
              </div>
              <div class="image-box-body">
                <h3 class="title">Project Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                <a href="portfolio-item.html" class="link">
                  <span>Read More</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-16 isotope-item web-design">
            <div class="image-box">
              <div class="overlay-container">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-8.jpg">
                <div class="overlay">
                  <div class="overlay-links">
                    <a href="protfolio.item.html">
                      <i class="fa fa-link"></i></a>
                    <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/portfolio-8.jpg" class="popup-img">
                      <i class="fa fa-search-plus"></i>
                    </a>
                  </div>
                  <span>Web Design</span>
                </div>
              </div>
              <div class="image-box-body">
                <h3 class="title">Project Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium.</p>
                <a href="portfolio-item.html" class="link">
                  <span>Read More</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- portfolio items end -->
      </div>
    </div>
  </div>
</div>
<!-- main-container end -->
<!--
<?php get_footer(); ?>
-->

<script src="<?php bloginfo( 'template_url' ); ?>/assets/vendor/jquery/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/assets/js/portfolios.js"></script>