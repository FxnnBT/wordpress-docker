<?php
/**
 * Projectoverzicht: alle projecten als kaarten, op /projecten/.
 */
get_header(); ?>

<section aria-labelledby="archive-heading">
  <h1 id="archive-heading">Projecten</h1>
  <div class="projects">
    <?php while (have_posts()) : the_post();
        get_template_part('template-parts/project-card');
    endwhile; ?>
  </div>
</section>

<?php get_footer();
