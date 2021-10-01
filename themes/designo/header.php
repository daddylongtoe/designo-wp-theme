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
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="profile" href="https://gmpg.org/xfn/11"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
>
<?php wp_body_open(); ?>
<div class="content-wrapper">
	<?php get_template_part( 'template-parts/header/site-nav' ); ?>
    <header class="service-header__section bg-peach container entry-header">
        <div class="service-header container text-white">
            <div class="service-header__content">
                <h1 class="service-header__title text-white" style="padding-bottom: 0"><?php the_title(); ?></h1>
				<?php echo( has_excerpt() ? '<p class="service-header__text">' . get_the_excerpt() . '</p>' : null ); ?>
            </div>
        </div>
    </header>
