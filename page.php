﻿<?php get_header(); ?>
<h1>示例页面</h1>
<?php the_title_attribute();?>
if( have_posts() ) :
  while( have_posts() ) : the_post();
    the_content();
  endwhile;
endif;
?>
<?php get_footer(); ?>