<?php get_header(); ?>

<section class="locations__section container">
  <div class="locations">

	<?php
	$index     = 1;
	$locations = new WP_Query(
		array(
			'post_type' => 'location',
			'orderby'   => 'ID',
			'order'     => 'ASC',
		)
	);

	if ( $locations->have_posts() ) {
		while ( $locations->have_posts() ) {
			$index++;
			$locations->the_post();
			get_template_part(
				'template-parts/components/location',
				'details',
				array(
					'index' => $index,
					'name'  => $post->post_name,
				)
			);
		}
	}
	  wp_reset_postdata();
	?>

  </div>
</section>

<?php get_template_part( 'template-parts/section', 'contact' ); ?>

<?php get_footer(); ?>
