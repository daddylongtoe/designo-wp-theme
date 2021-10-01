<section class="services__section">
    <div class="services container">

		<?php
		$related_services = new WP_Query(
			array(
				'posts_per_page' => 2,
				'post_type'      => 'service',
				'post__not_in'   => array( get_the_ID() ),
			)
		);

		if ( $related_services->have_posts() ) {
			while ( $related_services->have_posts() ) {
				$related_services->the_post();
				get_template_part( 'template-parts/components/service-tile' );
			}
		}
		wp_reset_postdata();
		?>

    </div>
</section>
