<section class="location-icons__section container">
  <div class="location-icons">
    <?php
    $locations = new WP_Query(
      array (
        'post_type' => 'location',
        'orderby'   => 'ID',
				'order'     => 'ASC',
      )
    );

    if ( $locations->have_posts() ) {
      while ( $locations->have_posts() ) {
        $locations->the_post();
        ?>

        <div class="location-icon">
          <img
            src="<?php echo get_field( 'icon' )['url'] ?>"
            alt="working hard on design"
            class="location-icon__img"
          />
          <h3 class="location-icon__title"><?php the_title() ?></h3>
          <button
            onclick="window.location.href='<?php echo get_site_url() . '/locations/#' . $post->post_name ;  ?>';"
            type="button"
            class="location-icon__button btn-secondary"
          >
          See Location
          </button>
      </div>

      <?php
      }
    }
    ?>
  </div>
</section>