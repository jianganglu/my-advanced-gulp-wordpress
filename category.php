<?php get_header(); ?>
您的位置：<a href="<?php bloginfo( 'url' ); ?>">首页</a> / <?php the_category(); ?>
<?php
if( have_posts() ) :
  while( have_posts() ) : the_post();
    the_title();
  endwhile;
endif;
?>
<?php get_footer(); ?>