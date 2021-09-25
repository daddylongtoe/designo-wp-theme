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
	<div class="content-wrapper">
  <?php get_template_part( 'template-parts/header/site-nav' ); ?>
	<header class="about-header__section container">
	  <div class="about-header text-white">
	  <div class="about-header__content container">
	  <h1 class="about-header__title text-white"><?php echo $args['content']['title']; ?></h1>
	  <?php echo $args['content']['text']; ?>
	  </div>
	  <div class="about-header__image">
	  <img
	  src="<?php echo $args['content']['image']['url']; ?>"
	  alt="people working around a table using digital devices"
	  />
	  </div>
	  </div>
	</header>
