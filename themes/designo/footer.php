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

      <footer class="footer">
        <div class="container">
          <div class="footer__navigation">
            <div class="footer__logo-container">
              <a href="/"
                ><img
                  src="<?php echo get_theme_file_uri( '/assets/shared/desktop/logo-light.png' ); ?>"
                  alt="Designo logo"
                  class="footer__logo"
              /></a>
            </div>
            <?php
            wp_nav_menu(
              array(
                'theme_location' =>
                'footer-menu', ) ); 
            ?>
          </div>
              <div class="footer__info">
                <div class="footer__details">
                  <p class="text-bold"><?php the_field( 'location_name', 'option' ) ?></p>
                  <p><?php the_field( 'address_line_1', 'option' ) ?></p>
                  <p><?php the_field( 'address_line_2', 'option' ) ?></p>
                </div>
                <div class="footer__details">
                  <p class="text-bold"><?php the_field( 'contact_details_title', 'option' ) ?></p>
                  <p>P : <?php the_field( 'phone_number', 'option' ) ?></p>
                  <p>M : <?php the_field( 'email_address', 'option' ) ?></p>
                </div>
                <div class="social-icons">
                <?php
                if( have_rows( 'social_icons', 'option' ) ){
                  while( have_rows( 'social_icons', 'option' ) ) {
                    the_row();
                    ?>

                    <a href="<?php the_sub_field( 'url' ) ?>">
                      <img
                          src="<?php echo get_sub_field( 'icon' )['url']; ?>"
                          alt="social media link"
                      />
                    </a>

                    <?php
                  }
                }
                ?>
                </div>
              </div>

              
        </div>
      </footer>

      <?php wp_footer(); ?>
      </div>
  </body>
</html>
