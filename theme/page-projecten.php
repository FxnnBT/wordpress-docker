<?php
/**
 * Projectoverzicht (/projecten/): alle projecten uit content.php als kaarten.
 */
$c = portfolio_content();
get_header(); ?>

<section aria-labelledby="archive-heading">
  <h1 id="archive-heading">Projecten</h1>
  <div class="projects">
    <?php foreach ($c['projecten'] as $project) {
        get_template_part('template-parts/project-card', null, $project);
    } ?>
  </div>
</section>

<?php get_footer();
