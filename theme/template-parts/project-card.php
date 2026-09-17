<?php
/**
 * Eén projectkaart. Gebruikt op de homepagina en in het projectoverzicht.
 */
?>
<article class="project-card">
  <?php if (has_post_thumbnail()) : ?>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium_large'); ?></a>
  <?php endif; ?>
  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  <p><?php echo esc_html(get_the_excerpt()); ?></p>
  <?php $tags = get_the_term_list(get_the_ID(), 'technologie', '', ', '); ?>
  <?php if ($tags) : ?><p class="tags"><?php echo wp_kses_post($tags); ?></p><?php endif; ?>
</article>
