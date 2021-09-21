<?php get_header(); ?>

<section class="locations__section container">
  <div class="locations">

    <?php
    $index = 0;
    $locations = new WP_Query (
      array (
        'post_type' => 'location',
        'orderby'   => 'ID',
        'order'     => 'ASC',
      )
    );

    if ( $locations->have_posts() ) {
      while ( $locations->have_posts() ) {
        $index++;
        $locations->the_post(); ?>

        <div class="locations__item <?php echo odd_left_even_right($index); ?>" id="canada">
          <div class="locations__map">
            <img
              src="<?php echo get_field( 'map' )['url']; ?>"
              alt="map of office location"
            />
          </div>
          <div class="locations__details">
            <h2 class="locations__title"><?php the_title(); ?></h2>
            <div class="locations__info">
              <div class="locations__contact-address">
                <p class="text-bold"><?php echo get_field( 'office_name' ); ?></p>
                <p><?php echo get_field( 'address_line_1' ); ?></p>
                <p><?php echo get_field( 'address_line_2' ); ?></p>
              </div>
              <div class="locations__contact-details">
                <p class="text-bold">Contact</p>
                <a href="tel:+1 253-863-8967">P: <?php echo get_field( 'phone_number' ); ?></a>
                <a href="mailto: contact@designo.co">M: <?php echo get_field( 'email_address' ); ?></a>
              </div>
            </div>
          </div>
        </div>

        <?php
        }
      }
      wp_reset_postdata(); ?>

  </div>
</section>

<?php get_template_part( 'template-parts/section', 'contact' ); ?>

<?php get_footer(); ?>
