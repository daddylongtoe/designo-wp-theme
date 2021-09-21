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

      <footer class="footer short-footer">
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
                <?php
                $main_office = get_field( 'location', 'option' );
                if ( $main_office ) {
                  ?>

                  <div class="footer__details">
                    <p class="text-bold"><?php echo esc_html( $main_office->office_name ); ?></p>
                    <p><?php echo esc_html( $main_office->address_line_1 ); ?></p>
                    <p><?php echo esc_html( $main_office->address_line_2 ); ?></p>
                  </div>
                  <div class="footer__details">
                    <p class="text-bold"><?php the_field( 'contact_details_title', 'option' ) ?></p>
                    <p>P : <?php echo esc_html( $main_office->phone_number ); ?></p>
                    <p>M : <?php echo esc_html( $main_office->email_address ); ?></p>
                  </div>

                  <?php
                }
                ?>

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
