<?php
/**
 * Homepagina: intro, drie projecten en contactsectie. Teksten komen uit content.php.
 */
$c = portfolio_content();
get_header(); ?>

<section class="hero" aria-labelledby="hero-heading">
  <h1 id="hero-heading"><?php echo esc_html($c['naam']); ?></h1>
  <p class="lead"><?php echo esc_html($c['slogan']); ?></p>
  <p><?php echo esc_html($c['intro']); ?></p>
  <a class="button" href="#contact">Neem contact op</a>
</section>

<section aria-labelledby="projects-heading">
  <div class="section-title">
    <h2 id="projects-heading">Projecten</h2>
    <a href="<?php echo esc_url(home_url('/projecten/')); ?>">Alle projecten</a>
  </div>
  <div class="projects">
    <?php foreach (array_slice($c['projecten'], 0, 3) as $project) {
        get_template_part('template-parts/project-card', null, $project);
    } ?>
  </div>
</section>

<section class="contact" id="contact" aria-labelledby="contact-heading">
  <h2 id="contact-heading">Contact</h2>
  <p><?php echo esc_html($c['contact']); ?></p>
  <a class="button" href="mailto:<?php echo esc_attr($c['email']); ?>"><?php echo esc_html($c['email']); ?></a>
</section>

<?php get_footer();
