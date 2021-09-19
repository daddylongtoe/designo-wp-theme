<?php get_header(); ?>

<section class="locations__section container">
  <div class="locations">
    <div class="locations__item locations__item--map-right" id="canada">
      <div class="locations__map">
        <picture>
          <source
            srcset="<?php echo get_theme_file_uri( '/assets/locations/tablet/image-map-canada.png' ); ?>"
            type="image/png"
            media="all and (max-width:1199px)"
          />
          <source
            srcset="<?php echo get_theme_file_uri( '/assets/locations/desktop/image-map-canada.png' ); ?>"
            type="image/png"
            media="all and (min-width:1200px)"
          />
          <img
            src="<?php echo get_theme_file_uri( '/assets/locations/tablet/image-map-canada.png' ); ?>"
            alt="map of office location"
          />
        </picture>
      </div>
      <div class="locations__details">
        <h2 class="locations__title">Canada</h2>
        <div class="locations__info">
          <div class="locations__contact-address">
            <p class="text-bold">Designo Central Office</p>
            <p>3886 Wellington Street</p>
            <p>Toronto, Ontario M9C 3J5</p>
          </div>
          <div class="locations__contact-details">
            <p class="text-bold">Contact</p>
            <a href="tel:+1 253-863-8967">P: +1 253-863-8967</a>
            <a href="mailto: contact@designo.co">M: contact@designo.co</a>
          </div>
        </div>
      </div>
    </div>
    <div class="locations__item locations__item--map-left" id="australia">
      <div class="locations__map">
        <picture>
          <source
            srcset="<?php echo get_theme_file_uri( '/assets/locations/tablet/image-map-australia.png' ); ?>"
            type="image/png"
            media="all and (max-width:1199px)"
          />
          <source
            srcset="<?php echo get_theme_file_uri( '/assets/locations/desktop/image-map-australia.png' ); ?>"
            type="image/png"
            media="all and (min-width:1200px)"
          />
          <img
            src="<?php echo get_theme_file_uri( '/assets/locations/tablet/image-map-australia.png' ); ?>"
            alt="map of office location"
          />
        </picture>
      </div>
      <div class="locations__details">
        <h2 class="locations__title">Australia</h2>
        <div class="locations__info">
          <div class="locations__contact-address">
            <p class="text-bold">Designo AU Office</p>
            <p>19 Balonne Street</p>
            <p>New South Wales 2443</p>
          </div>
          <div class="locations__contact-details">
            <p class="text-bold">Contact</p>
            <a href="tel:(02) 6720 9092">P: (02) 6720 9092</a>
            <a href="mailto: contact@designo.au">M: contact@designo.au</a>
          </div>
        </div>
      </div>
    </div>
    <div
      class="locations__item locations__item--map-right"
      id="united-kingdom"
    >
      <div class="locations__map">
        <picture>
          <source
            srcset="<?php echo get_theme_file_uri( '/assets/locations/tablet/image-map-uk.png' ); ?>"
            type="image/png"
            media="all and (max-width:1199px)"
          />
          <source
            srcset="<?php echo get_theme_file_uri( '/assets/locations/desktop/image-map-united-kingdom.png' ); ?>"
            type="image/png"
            media="all and (min-width:1200px)"
          />
          <img
            src="<?php echo get_theme_file_uri( '/assets/locations/tablet/image-map-uk.png' ); ?>"
            alt="map of office location"
          />
        </picture>
      </div>
      <div class="locations__details">
        <h2 class="locations__title">United Kingdom</h2>
        <div class="locations__info">
          <div class="locations__contact-address">
            <p class="text-bold">Designo UK Office</p>
            <p>13 Colorado Way</p>
            <p>Rhyd-y-fro SA8 9GA</p>
          </div>
          <div class="locations__contact-details">
            <p class="text-bold">Contact</p>
            <a href="tel:078 3115 1400">P: 078 3115 1400</a>
            <a href="mailto: contact@designo.uk">M: contact@designo.uk</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/section', 'contact' ); ?>

<?php get_footer(); ?>
