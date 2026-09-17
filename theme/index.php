<?php
/**
 * Verplicht fallback-template (WordPress eist dat dit bestand bestaat).
 * Wordt alleen gebruikt voor pagina's die geen eigen template hebben.
 */
get_header(); ?>

<article class="page-content">
  <h1>Pagina niet gevonden</h1>
  <p><a href="<?php echo esc_url(home_url('/')); ?>">Terug naar home</a></p>
</article>

<?php get_footer();
