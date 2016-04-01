<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title>官网模板</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="renderer" content="webkit" /> 
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="<?php bloginfo( 'template_url' ); ?>/assets/css/libs.css" rel="stylesheet">
	<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">

	<?php 
		global $pageIdHtml;
	?>
	<!-- <link href="<?php get_static_url();?>wp-content/themes/twentyfifteen/build/css/view/<?php echo $pageIdHtml;?>.css" rel="stylesheet"> -->
	<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
		<script src="<?php get_static_url();?>wp-content/themes/twentyfifteen/build/vendor/IE-responsive/html5shiv.min.js"></script>
		<script src="<?php get_static_url();?>wp-content/themes/twentyfifteen/build/vendor/IE-responsive/respond.min.js"></script>
	<![endif]-->
	<?php /*wp_head();*/ ?>
</head>

<body id="<?php echo $pageIdHtml ?>">
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel">iDea Clean and Unique Design</h4>
				</div>
				<div class="modal-body">
					<p>Consectetur adipisicing elit. Nemo architecto debitis dolorum ullam in ut sint, odit maiores eaque explicabo, repellendus minima soluta sunt! Nisi minima blanditiis voluptate, ut atque.</p>
					<ul class="list-icons">
						<li><i class="icon-check"></i> Nisi minima blanditiis voluptate</li>
						<li><i class="icon-check"></i> Officiis nisi nam doloribus explicabo</li>
						<li><i class="icon-check"></i> Debitis delectus corporis aspernatur</li>
						<li><i class="icon-check"></i> Dolore temporibus odio distinctio</li>
						<li><i class="icon-check"></i> Reprehenderit optio unde accusantium quia</li>
					</ul>
					<p>Culpa expedita! Quisquam, itaque officiis nisi nam doloribus explicabo possimus, dolorum alias provident maxime temporibus, enim voluptatibus! Molestias, accusantium cum impedit sint velit exercitationem deserunt, corporis magni provident earum, ullam iusto voluptatem iste animi inventore ab cupiditate quod laborum quasi libero doloremque obcaecati eius. Ut, reprehenderit optio unde accusantium quia qui! Debitis delectus corporis aspernatur nemo aut, odio harum ea repellendus quidem, saepe, incidunt? Assumenda deserunt unde minima aspernatur ducimus velit molestiae, minus eius inventore, dolore temporibus odio distinctio optio.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="icon-check"></i> Ok</button>
				</div>
			</div>
		</div>
	</div>
	<div class="backToTop">
		<a id="backToTop" href="javascript:void(0)" onclick="return false" title="返回顶部"></a>
	</div>
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 col-sm-6">

					<!-- header-top-first start -->
					<!-- ================ -->
					<div class="header-top-first clearfix">
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
						<div class="social-links hidden-lg hidden-md hidden-sm">
							<div class="btn-group dropdown">
								<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
								<ul class="dropdown-menu dropdown-animation">
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
						</div>
					</div>
					<!-- header-top-first end -->

				</div>
				<div class="col-xs-10 col-sm-6">

					<!-- header-top-second start -->
					<!-- ================ -->
					<div id="header-top-second" class="clearfix">

						<!-- header top dropdowns start -->
						<!-- ================ -->
						<div class="header-top-dropdown">
							<div class="btn-group dropdown">
								<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i> 搜索</button>
								<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
									<li>
										<form role="search" class="search-box">
											<div class="form-group has-feedback">
												<input type="text" class="form-control" placeholder="请输入搜索内容">
												<i class="fa fa-search form-control-feedback"></i>
											</div>
										</form>
									</li>
								</ul>
							</div>
							<div class="btn-group dropdown">
								<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 登入</button>
								<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
									<li>
										<form class="login-form">
											<div class="form-group has-feedback">
												<label class="control-label">用户名</label>
												<input type="text" class="form-control" placeholder="">
												<i class="fa fa-user form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label class="control-label">密码</label>
												<input type="password" class="form-control" placeholder="">
												<i class="fa fa-lock form-control-feedback"></i>
											</div>
											<button type="submit" class="btn btn-group btn-dark btn-sm">登 入</button>
											<span>or</span>
											<button type="submit" class="btn btn-group btn-default btn-sm">注 册</button>

											<ul>
												<li><a href="#">忘记密码?</a></li>
											</ul>
											<div class="divider"></div>
										</form>
									</li>
								</ul>
							</div>
							<div class="btn-group dropdown">
								<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
									<a href="<?php $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];if(get_bloginfo('language')=='zh-CN'){echo 'http://'.$url;if(stripos($url,"?")){echo '&lang=en';}else{echo '?lang=en';};$show_lang='简体中文';}else{echo 'http://'.$url;$show_lang='English';}?>" aria-expanded="false">
										<i class="glyphicon glyphicon-globe"></i>
										<?php echo $show_lang;?> 
										<span class="caret"></span>
									</a>
								</button>
								<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
									<li id="change-lan">		
										<ul id="lan">
											<li><a href="<?php echo 'http://'.$url;if(stripos($url,'?')){echo'&lang=en';} else {echo '?lang=en';}?>">English</a></li>
											<li><a href="<?php echo 'http://'.$url;if(stripos($url,'?')){echo'&lang=zh';} else {echo '?lang=zh';}?>">简体中文</a></li>
										</ul> 
									</li>
								</ul>
							</div>
						</div>
						<!--  header top dropdowns end -->

					</div>
					<!-- header-top-second end -->

				</div>
			</div>
		</div>
	</div>

	<header class="header fixed clearfix">
		<div class="container">
			<div class="row">
				<div class="col-md-3">

					<!-- header-left start -->
					<!-- ================ -->
					<div class="header-left clearfix">

						<!-- logo -->
						<div class="logo">
							<a href="index.html"><img id="logo" src="<?php bloginfo( 'template_url' ); ?>/assets/img/ht_blue_logo.png" alt="LOGO"></a>
						</div>

						<!-- name-and-slogan -->
						<div class="site-slogan">
							浙江网新恒天软件有限公司
						</div>

					</div>
					<!-- header-left end -->

				</div>
				<div class="col-md-9">

					<!-- header-right start -->
					<!-- ================ -->
					<div class="header-right clearfix">

						<!-- main-navigation start -->
						<!-- ================ -->
						<div class="main-navigation animated">

							<!-- navbar start -->
							<!-- ================ -->
							<nav class="navbar navbar-default" role="navigation">
								<div class="container-fluid">

									<!-- Toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>

									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse" id="navbar-collapse-1">
										
										<?php
										if( function_exists('wp_nav_menu') ) {
											wp_nav_menu(array(
												'theme_location' => 'primary',
												'menu_id' => 'nav',
												'menu_class' => 'nav navbar-nav navbar-right',
												'container' => 'ul',
												'container_class' => '',
												'walker' => new Custom_Walker_Nav_Menu() ));
										}
										?>

										<ul class="nav navbar-nav navbar-right">
											<li class="dropdown active" style="">
												<a href="index.html" class="dropdown-toggle" data-toggle="dropdown">首页</a>
												<ul class="dropdown-menu">
													<li class="active"><a href="index.html">Home - Default</a></li>
													<li><a href="index-2.html">Home - 2</a></li>
												</ul>
											</li>
											<li class="dropdown" style="">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">模块</a>
												<ul class="dropdown-menu">
													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">Email Templates <span class="default-bg badge">v1.1</span></a>
														<ul class="dropdown-menu">
															<li><a target="_blank" href="../email_templates/email_template_red.html">Email Template Red</a></li>
														</ul>
													</li>												
													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">Footers</a>
														<ul class="dropdown-menu">
															<li><a href="features-footer-1.html#footer">Footer 1 (Default)</a></li>
															<li><a href="features-footer-2.html#footer">Footer 2</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login/Sign Up <span class="default-bg badge">v1.2</span></a>
														<ul class="dropdown-menu">
															<li><a href="page-login.html">Login</a></li>
															<li><a href="page-signup.html">Sign Up</a></li>
														</ul>
													</li>												
												</ul>
											</li>													
											<!-- mega-menu start -->
											<li class="dropdown mega-menu" style="">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">页面</a>
												<ul class="dropdown-menu">
													<li>
														<div class="row">
															<div class="col-lg-4 col-md-3 hidden-sm">
																<h4>Premium HTML5 Template</h4>
																<p>iDea is perfectly suitable for corporate, business and company webpages.</p>
																<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/section-image-3.png" alt="iDea">
															</div>
															<div class="col-lg-8 col-md-9">
																<h4>Pages</h4>
																<div class="row">
																	<div class="col-sm-4">
																		<div class="divider"></div>
																		<ul class="menu">
																			<li><a href="page-about.html"><i class="icon-right-open"></i>About Us</a></li>
																			<li><a href="page-about-2.html"><i class="icon-right-open"></i>About Us 2</a></li>
																			<li><a href="page-about-3.html"><i class="icon-right-open"></i>About Us 3</a></li>
																			<li><a href="page-about-me.html"><i class="icon-right-open"></i>About Me</a></li>
																			<li><a href="page-team.html"><i class="icon-right-open"></i>Our Team - Options</a></li>
																			<li><a href="page-services.html"><i class="icon-right-open"></i>Services</a></li>
																		</ul>
																	</div>
																	<div class="col-sm-4">
																		<div class="divider"></div>
																		<ul class="menu">
																			<li><a href="page-contact.html"><i class="icon-right-open"></i>Contact</a></li>
																			<li><a href="page-contact-2.html"><i class="icon-right-open"></i>Contact 2</a></li>
																			<li><a href="page-coming-soon.html"><i class="icon-right-open"></i>Coming Soon Page</a></li>
																			<li><a href="page-404.html"><i class="icon-right-open"></i>404 error</a></li>
																			<li><a href="page-faq.html"><i class="icon-right-open"></i>FAQ page</a></li>
																			<li><a href="page-affix-sidebar.html"><i class="icon-right-open"></i>Sidebar - Affix Menu</a></li>
																		</ul>
																	</div>
																	<div class="col-sm-4">
																		<div class="divider"></div>
																		<ul class="menu">
																			<li><a href="page-left-sidebar.html"><i class="icon-right-open"></i>Left Sidebar</a></li>
																			<li><a href="page-right-sidebar.html"><i class="icon-right-open"></i>Right Sidebar</a></li>
																			<li><a href="page-two-sidebars.html"><i class="icon-right-open"></i>Two Sidebars</a></li>
																			<li><a href="page-no-sidebar.html"><i class="icon-right-open"></i>No Sidebars</a></li>
																			<li><a href="page-sitemap.html"><i class="icon-right-open"></i>Sitemap</a></li>
																			<li><a href="page-invoice.html"><i class="icon-right-open"></i>Invoice <span class="badge">v1.1</span></a></li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</li>										
										</ul>
									</div>

								</div>
							</nav>
							<!-- navbar end -->

						</div>
						<!-- main-navigation end -->

					</div>
					<!-- header-right end -->

				</div>
			</div>
		</div>
	</header>

		
<!-- <div class="container">
			<nav class="navbar navbar-default" role="navigation">
			   	<div class="navbar-header">
			      	<button type="button" class="navbar-toggle" data-toggle="collapse" 
			         	data-target="#example-navbar-collapse">
			         	<span class="sr-only">切换导航</span>
			         	<span class="icon-bar"></span>
			         	<span class="icon-bar"></span>
			         	<span class="icon-bar"></span>
			      	</button>
			   	</div>
			   	<div class="collapse navbar-collapse" id="example-navbar-collapse">
			      	<ul class="nav navbar-nav">
			      		<li><a href="">首页</a></li>
			      		<li><a href="">关于我们</a></li>
			      		<li><a href="">联系我们</a></li>
			         	<li <?php $page_id=get_page_by_slug("templates-index"); ?> class="<?php if (is_page('templates-index')) { ?>active <?php } ?>"><a href="<?php echo get_permalink($page_id) ?>"><?php _e('Index', 'twentyfifteen'); ?></a></li>
			         	<li <?php $page_id=get_page_by_slug("templates-page1"); ?> class="<?php if (is_page('templates-page1')) { ?>active <?php } ?>"><a href="<?php echo get_permalink($page_id) ?>"><?php _e('Template page 1', 'twentyfifteen'); ?></a></li>
			         	<li <?php $page_id=get_page_by_slug("templates-page2"); ?> class="<?php if (is_page('templates-page2')) { ?>active <?php } ?>"><a href="<?php echo get_permalink($page_id) ?>"><?php _e('Template page 2', 'twentyfifteen'); ?></a></li>
			         	<li <?php $page_id=get_page_by_slug("templates-contact"); ?> class="<?php if (is_page('templates-contact')) { ?>active <?php } ?>"><a href="<?php echo get_permalink($page_id) ?>"><?php _e('Contact us', 'twentyfifteen'); ?></a></li>
			      	</ul>
			   	</div>
			</nav>
		</div> -->