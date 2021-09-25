<?php
/**
 * Template part for displaying contact section above footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package designo
 */

?>

<section id="contact-section" class="container">
	<div class="contact">
	  <div class="contact__content">
		<h2 class="contact__title text-white">
		  <?php the_field( 'contact_title', 'option' ); ?>
		</h2>
		<p class="contact__text text-white">
		  <?php the_field( 'contact_text', 'option' ); ?>
		</p>
	  </div>
	  <div class="contact__cta">
		<?php
		  $contact_button = get_field( 'contact_button', 'option' );
		?>
		<button
		  onclick="window.location.href='<?php echo $contact_button['url']; ?>';"
		  type="button"
		  class="contact__button btn-primary"
		>
		  <?php echo $contact_button['title']; ?>
		</button>
  </div>
</div>
</section>
