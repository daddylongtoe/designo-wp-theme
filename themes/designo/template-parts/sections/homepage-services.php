<section class="services__section" id="services">
    <div class="services container">

		<?php
		$index    = 0;
		$services = new WP_Query(
			array(
				'posts_per_page' => 3,
				'post_type'      => 'service',
				'orderby'        => 'ID',
				'order'          => 'ASC',
			)
		);

		if ( $services->have_posts() ) {
			while ( $services->have_posts() ) {
				$services->the_post();
				if ( $index == 0 ) {
					echo '<div class="services--left">';
					get_template_part( 'template-parts/components/service-tile' );
					echo '</div>';
				}
				$index ++;
			}
		}

		echo '<div class="services--right">';
		$index = 0;
		if ( $services->have_posts() ) {
			while ( $services->have_posts() ) {
				$services->the_post();
				if ( $index > 0 ) {
					get_template_part( 'template-parts/components/service-tile' );
				}
				$index ++;
			}
		}

		wp_reset_postdata();
		echo '</div>';
		?>
    </div>
</section>
