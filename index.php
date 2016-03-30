<?php get_header(); ?>
  <h1>你好，世界！</h1>
  <ul>
  <?php
    query_posts( 'showposts=10&cat=5' );
    while( have_posts() ) : the_post();
  ?>
    <li>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?><span><?php the_time( 'd-y' ); ?></span></a>
      <p><?php the_excerpt(); ?></p>
      <p><?php the_content(); ?></p>
      <p><?php the_post_thumbnail(); ?></p>
    </li>
  <?php
    endwhile;
    wp_reset_query();
  ?>
  </ul>
  <?php wp_list_bookmarks( 'title_li&categorize=0&orderby=rand&limit=5' ); ?>
<?php get_footer(); ?>
