<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package designo
 */

?>

	  <footer class="footer short-footer">
		<div class="container">
		  <?php
			get_template_part( 'template-parts/footer/nav-footer' );
			get_template_part( 'template-parts/footer/info-footer' );
			?>
		</div>
	  </footer>

	  <?php wp_footer(); ?>
	  </div>
  </body>
</html>
