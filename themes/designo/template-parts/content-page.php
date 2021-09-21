<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package designo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="service-header__section bg-peach container entry-header">
    <div class="service-header container text-white">
        <h1 class="service-header__title text-white" style="padding-bottom: 0"><?php the_title(); ?></h1>
    </div>
  </header>

	<?php designo_post_thumbnail(); ?>

	<div class="entry-content page-content">
		<?php
		the_content();

	  ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
