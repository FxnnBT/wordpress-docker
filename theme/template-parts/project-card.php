<?php
/**
 * Eén projectkaart. Krijgt titel/tekst/tags/link mee via $args.
 */
?>
<article class="project-card">
  <h3><a href="<?php echo esc_url($args['link']); ?>"><?php echo esc_html($args['titel']); ?></a></h3>
  <p><?php echo esc_html($args['tekst']); ?></p>
  <p class="tags"><?php echo esc_html($args['tags']); ?></p>
</article>
