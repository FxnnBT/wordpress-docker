<?php
/**
 * Standaard pagina-template voor pagina's zonder eigen template (bv. /portfolio/).
 * Toont de titel en inhoud uit de WordPress-editor.
 */
get_header();

while (have_posts()) : the_post(); ?>

<section class="page" aria-labelledby="page-heading">
  <h1 id="page-heading"><?php the_title(); ?></h1>
  <div class="content">
    <?php the_content(); ?>
  </div>
</section>

<?php endwhile;

get_footer();
