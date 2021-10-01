<nav class="navbar">
    <div class="navbar__container">
        <a href="/"
        ><img
                    src="<?php echo get_theme_file_uri( 'assets/images/shared/desktop/logo-dark.png' ); ?>"
                    alt="logo"
                    class="navbar__logo"
            /></a>
        <div class="navbar__menu-icon">
            <img
                    src="<?php echo get_theme_file_uri( 'assets/images/shared/mobile/icon-hamburger.svg' ); ?>"
                    alt="Hamburger menu icon"
                    class="navbar__menu-icon-item navbar__menu-icon-item--active"
            />
            <img
                    src="<?php echo get_theme_file_uri( 'assets/images/shared/mobile/icon-close.svg' ); ?>"
                    alt="Menu close icon"
                    class="navbar__menu-icon-item"
            />
        </div>
        <div class="navbar__menu">
			<?php
			wp_nav_menu(
				array(
					'theme_location' =>
						'primary-menu',
				)
			);
			?>
        </div>
    </div>
</nav>
