<?php get_header(); ?>

<?php if( have_posts() ) : ?>
  <?php while( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <p>学习人数<?php tmpl_course_clicked(); ?></p>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>