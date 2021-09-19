<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package designo
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>
  >
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>
    >
    <?php wp_body_open(); ?>
    <nav class="navbar">
      <div class="navbar__container">
        <a href="/"
          ><img
            src="<?php echo get_theme_file_uri( '/assets/shared/desktop/logo-dark.png' ); ?>"
            alt="logo"
            class="navbar__logo"
        /></a>
        <div class="navbar__menu-icon">
          <img
            src="<?php echo get_theme_file_uri( '/assets/shared/mobile/icon-hamburger.svg' ); ?>"
            alt="Hamburger menu icon"
            class="navbar__menu-icon--hamburger"
          />
          <img
            src="<?php echo get_theme_file_uri( '/assets/shared/mobile/icon-close.svg' ); ?>"
            alt="Menu close icon"
            class="navbar__menu-icon--close"
          />
        </div>
        <div class="navbar__menu">
          <?php
			wp_nav_menu(
				array(
					'theme_location' =>
          'primary-menu', ) ); ?>
        </div>
      </div>
    </nav>
  </body>
</html>
