<section class="location-icons__section container">
  <div class="location-icons">
	<?php
	$locations = new WP_Query(
		array(
			'post_type' => 'location',
			'orderby'   => 'ID',
			'order'     => 'ASC',
		)
	);

	if ( $locations->have_posts() ) {
		while ( $locations->have_posts() ) {
			$locations->the_post();
			get_template_part( 'template-parts/components/location-icon' );
		}
	}
	wp_reset_postdata();
	?>
  </div>
</section>
