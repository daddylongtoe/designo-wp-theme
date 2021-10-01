<div class="footer__navigation">
    <div class="footer__logo-container">
        <a href="/"
        ><img
                    src="<?php echo get_theme_file_uri( 'assets/images/shared/desktop/logo-light.png' ); ?>"
                    alt="Designo logo"
                    class="footer__logo"
            /></a>
    </div>
	<?php
	wp_nav_menu(
		array(
			'theme_location' =>
				'footer-menu',
		)
	);
	?>
</div>
