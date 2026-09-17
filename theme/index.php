<?php
/**
 * Fallback-template: toont alles waarvoor geen specifieker template bestaat (o.a. een los project).
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
  <article class="page-content">
    <h1><?php the_title(); ?></h1>
    <?php the_post_thumbnail('large'); ?>
    <?php the_content(); ?>
  </article>
<?php endwhile; ?>

<?php get_footer();
