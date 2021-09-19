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
            <p class="text-bold">Designo Central Office</p>
            <p>3886 Wellington Street</p>
            <p>Toronto, Ontario M9C 3J5</p>
          </div>
          <div class="footer__details">
            <p class="text-bold">Contact Us (Central Office)</p>
            <p>P : +1 253-863-8967</p>
            <p>M : contact@designo.co</p>
          </div>
          <div class="social-icons">
            <a href="https://facebook.com"
              ><img
                src="<?php echo get_theme_file_uri( '/assets/shared/desktop/icon-facebook.svg' ); ?>"
                alt="facebook"
            /></a>
            <a href="https://youtube.com"
              ><img
                src="<?php echo get_theme_file_uri( '/assets/shared/desktop/icon-youtube.svg' ); ?>"
                alt="youtune"
            /></a>
            <a href="https://twitter.com"
              ><img
                src="<?php echo get_theme_file_uri( '/assets/shared/desktop/icon-twitter.svg' ); ?>"
                alt="twitter"
            /></a>
            <a href="https://pinterest.com"
              ><img
                src="<?php echo get_theme_file_uri( '/assets/shared/desktop/icon-pinterest.svg' ); ?>"
                alt="pinterest"
            /></a>
            <a href="https://instagram.com"
              ><img
                src="<?php echo get_theme_file_uri( '/assets/shared/desktop/icon-instagram.svg' ); ?>"
                alt="instagram"
            /></a>
          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
