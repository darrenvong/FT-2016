<!doctype html>
  <html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
      <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
      <?php wp_head(); ?>

    </head>
    <body name="top">

      <header>
        <a href="http://forgetoday.com"><img class="siteLogo" src="<?php echo get_stylesheet_directory_uri() . "/logo-dark.svg"; ?>" alt="Forge"/></a>
        <nav class="left">
          <?php
          $args = array(
          'theme_location' => 'left',
          );
          wp_nav_menu( $args);
          ?>
        </nav>
        <nav class="right mobileHide">
        <?php
        $args = array(
        'theme_location' => 'right',
        );
        wp_nav_menu( $args);
        ?>
        </nav>

      </header>