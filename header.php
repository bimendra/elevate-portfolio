<?php
/**
 * Header template
 * 
 * @package elevate_portfolio
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'elevate_portfolio' ); ?></a>
  <?php wp_body_open(); ?>
  <header class="header">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'elevate_portfolio' ); ?></button>
    <?php the_custom_logo(); ?>
    <nav class="main-navigation">
      <?php
        wp_nav_menu([
          'theme_location' => 'header_menu',
          'menu_id' => 'header_menu',
        ]);
      ?>
    </nav>
  </header>