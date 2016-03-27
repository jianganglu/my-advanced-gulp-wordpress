<?php get_header(); ?>
  <h1>你好，世界！</h1>
  <ul>
  <?php if ( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>
      <li>
        <h2><?php the_title(); ?></h2>
        <p><?php the_excerpt(); ?></p>
      </li>
    <?php endwhile; ?>
  <?php endif; ?>
  </ul>
  <?php get_template_part( 'custom-template' ); ?>
  <?php get_template_part( 'custom', 'template' ); ?>
<?php get_footer(); ?>
