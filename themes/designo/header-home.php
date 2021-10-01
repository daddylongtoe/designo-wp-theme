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
    <header class="header__section container">
        <div class="header row container text-white">
            <div class="header__content">
                <h1 class="header__title text-white">
					<?php the_field( 'hero_title' ); ?>
                </h1>
                <p class="header__text">
					<?php the_field( 'hero_text' ); ?>
                </p>
				<?php
				$button = get_field( 'hero_button' );
				?>
                <button
                        onclick="window.location.href='<?php echo $button['url']; ?>';"
                        type="button"
                        class="header__btn btn-primary"
                >
					<?php echo $button['title']; ?>
                </button>
            </div>
            <div class="header__image">
                <img
                        src="<?php echo get_theme_file_uri( 'assets/images/home/desktop/image-hero-phone.png' ); ?>"
                        alt="mobile phone"
                />
            </div>
        </div>
    </header>
