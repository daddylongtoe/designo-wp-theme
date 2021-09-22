<div class="locations__item <?php echo odd_left_even_right( $args['index'] ); ?>" id="<?php echo $args['name']; ?>">
  <div class="locations__map">
  <picture>
	<source
	srcset="<?php echo get_field( 'map_tablet' )['url']; ?>"
	type="image/png"
	media="all and (max-width:1199px)"
	/>
	<source
	srcset="<?php echo get_field( 'map_desktop' )['url']; ?>"
	type="image/png"
	media="all and (min-width:1200px)"
	/>
	<img
	src="<?php echo get_field( 'map_tablet' )['url']; ?>"
	alt="map of office location"
	/>
  </picture>
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
