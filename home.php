<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>
  <title>官网模板</title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <meta name="renderer" content="webkit" /> 
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link href="<?php bloginfo( 'template_url' ); ?>/assets/css/libs.css" rel="stylesheet">
  <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <!-- page-wrapper start -->
  <!-- ================ -->
  <div class="page-wrapper">
    <!-- header-top start (Add "dark" class to .header-top in order to enable dark header-top e.g <div class="header-top dark">) -->
    <!-- ================ -->
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-2 col-sm-6">
            <!-- header-top-first start -->
            <!-- ================ -->
            <div class="header-top-first">
              <ul class="social-links clearfix hidden-xs">
                <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
                <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
                <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
                <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
            <!-- header-top-first end -->
          </div>
          <div class="col-xs-10 col-sm-6">
            <!-- header-top-second start -->
            <!-- ================ -->
            <div id="header-top-second">
              <!-- header-top-dropdown start -->
              <!-- ================ -->
              <div class="header-top-dropdown">
                <div class="btn-group dropdown">
                  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-search"></i>
                    Search
                  </button>
                  <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                    <li>
                      <form role="search" class="search-box">
                        <div class="form-group has-feedback">
                          <input type="text" class="form-control" placeholder="Search">
                          <i class="fa fa-search form-control-feedback"></i>
                        </div>
                      </form>
                    </li>
                  </ul>
                </div>
                <div class="btn-group dropdown">
                  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user"></i>
                    Login
                  </button>
                  <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                    <form class="login-form">
                      <div class="form-group has-feedback">
                        <label class="control-label">Username</label>
                        <input type="text" class="form-control" placeholder>
                        <i class="fa fa-user form-control-feedback"></i>
                      </div>
                      <div class="form-group has-feedback">
                        <label class="control-label">Password</label>
                        <input type="password" class="form-control" placeholder>
                        <i class="fa fa-lock form-control-feedback"></i>
                      </div>
                      <button type="submit" class="btn btn-group btn-dark btn-sm">Log In</button>
                      <span>or</span>
                      <button type="submit" class="btn btn-group btn-default btn-sm">Sign Up</button>
                      <ul>
                        <li><a href="#">Forgot your password?</a></li>
                      </ul>
                      <div class="divider"></div>
                      <span class="text-center">Login with</span>
                      <ul class="social-links">
                        <li class="feedback">
                          <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="twitter">
                          <a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="googleplus">
                          <a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a>
                        </li>
                      </ul>
                    </form>
                  </ul>
                </div>
                <div class="btn-group dropdown">
                  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-shopping-cart"></i>
                    Cart(8)
                  </button>
                  <ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
                    <li>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th class="quantity">QTY</th>
                            <th class="product">Product</th>
                            <th class="amount">Subtotal</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="quantity">2 x</td>
                            <td class="product"><a href="shop-product.html">Android 4.4 Smartphone</a><span class="small">4.7" Dual Core 1GB</span></td>
                            <td class="amount">$199.00</td>
                          </tr>
                          <tr>
                            <td class="quantity">3 x</td>
                            <td class="product"><a href="shop-product.html">Android 4.2 Tablet</a><span class="small">7.3" Quad Core 2GB</span></td>
                            <td class="amount">$299.00</td>
                          </tr>
                          <tr>
                            <td class="quantity">3 x</td>
                            <td class="product"><a href="shop-product.html">Desktop PC</a><span class="small">Quad Core 3.2MHz, 8GB RAM, 1TB Hard Disk</span></td>
                            <td class="amount">$1499.00</td>
                          </tr>
                          <tr>
                            <td class="total-quantity" colspan="2">Total 8 Items</td>
                            <td class="total-amount">$1997.00</td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="panel-body text-right"> 
                        <a href="shop-cart.html" class="btn btn-group btn-default btn-sm">View Cart</a>
                        <a href="shop-checkout.html" class="btn btn-group btn-default btn-sm">Checkout</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- header-top-dropdown end -->
            </div>
            <!-- header-top-second end -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-top end -->
  </div>
  <!-- page-wrapper end -->
<?php get_footer(); ?>
<script src="<?php bloginfo( 'template_url' ); ?>/assets/js/about.js"></script>
