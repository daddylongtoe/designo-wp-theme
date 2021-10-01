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
            <p class="text-bold"><?php the_field( 'contact_details_title', 'option' ); ?></p>
            <p>P : <?php echo esc_html( $main_office->phone_number ); ?></p>
            <p>M : <?php echo esc_html( $main_office->email_address ); ?></p>
        </div>

		<?php
	}
	?>

    <div class="social-icons">
		<?php
		if ( have_rows( 'social_icons', 'option' ) ) {
			while ( have_rows( 'social_icons', 'option' ) ) {
				the_row();
				get_template_part( 'template-parts/components/social-icon' );
			}
		}
		?>
    </div>
</div>
