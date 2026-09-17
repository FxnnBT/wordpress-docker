<?php
/**
 * Over mij-pagina (/over-mij/). Tekst komt uit content.php.
 */
$c = portfolio_content();
get_header(); ?>

<article class="page-content">
  <h1>Over mij</h1>
  <?php foreach ($c['over_mij'] as $alinea) : ?>
    <p><?php echo esc_html($alinea); ?></p>
  <?php endforeach; ?>
</article>

<?php get_footer();
