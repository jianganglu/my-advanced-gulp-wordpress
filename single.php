<?php
if( is_single( '4' ) ) {
  get_header( 'single' );
}else {
  get_header();
}
?>
您的位置：<a href="<?php bloginfo( 'url' ); ?>">首页</a> / <?php the_category(); ?> / <?php the_title_attribute(); ?>
<h1>single.php</h1>

<?php
if( have_posts() ) :
  while( have_posts() ) : the_post();
    the_content();
  endwhile;
endif;
?>

<?php previous_post_link( $link ); ?>
<?php next_post_link( $link ); ?>
<?php get_footer(); ?>