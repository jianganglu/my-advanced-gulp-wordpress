<?php
if( is_single( '4' ) ) {
  get_header( 'single' );
}else {
  get_header();
}
?>
<h1>single.php</h1>
<?php get_footer(); ?>