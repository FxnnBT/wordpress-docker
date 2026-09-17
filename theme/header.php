<?php $c = portfolio_content(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="wrap">
    <a class="site-title" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html($c['naam']); ?></a>
    <nav class="site-nav" aria-label="Hoofdmenu">
      <ul>
        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li><a href="<?php echo esc_url(home_url('/projecten/')); ?>">Projecten</a></li>
        <li><a href="<?php echo esc_url(home_url('/over-mij/')); ?>">Over mij</a></li>
      </ul>
    </nav>
  </div>
</header>
<main class="wrap">
