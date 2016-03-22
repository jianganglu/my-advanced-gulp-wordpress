<?php
/**
 * Template Name: Custom Contact Form
 */

get_header(); ?>

联系我们

<?php
  if(have_posts()) : 
    while(have_posts()) : the_post();
      the_content();
    endwhile;
  endif;
?>

<div id="main">

<h2>Archives by Month:</h2>
  <ul>
    <?php wp_get_archives('type=monthly'); ?>
  </ul>

<h2>Archives by Subject:</h2>
  <ul>
     <?php wp_list_cats(); ?>
  </ul>

</div>

<?php get_footer(); ?>