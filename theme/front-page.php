<?php
/**
 * Homepagina: intro, drie recentste projecten en een contactsectie.
 */
get_header(); ?>

<section class="hero" aria-labelledby="hero-heading">
  <h1 id="hero-heading"><?php bloginfo('name'); ?></h1>
  <p class="lead"><?php bloginfo('description'); ?></p>
  <a class="button" href="#contact">Neem contact op</a>
</section>

<section aria-labelledby="projects-heading">
  <div class="section-title">
    <h2 id="projects-heading">Projecten</h2>
    <a href="<?php echo esc_url(get_post_type_archive_link('project')); ?>">Alle projecten</a>
  </div>
  <div class="projects">
    <?php
    $projects = new WP_Query(['post_type' => 'project', 'posts_per_page' => 3]);
    while ($projects->have_posts()) : $projects->the_post();
        get_template_part('template-parts/project-card');
    endwhile;
    wp_reset_postdata();
    ?>
  </div>
</section>

<section class="contact" id="contact" aria-labelledby="contact-heading">
  <h2 id="contact-heading">Contact</h2>
  <p>Op zoek naar een stagiair? Ik hoor graag van je.</p>
  <a class="button" href="mailto:<?php echo esc_attr(get_option('admin_email')); ?>">Stuur een e-mail</a>
</section>

<?php get_footer();
