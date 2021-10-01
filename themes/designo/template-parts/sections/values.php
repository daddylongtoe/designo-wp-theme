<section class="values__section container">
    <div class="values container">

		<?php
		if ( have_rows( 'value_block' ) ) {
			while ( have_rows( 'value_block' ) ) {
				the_row();
				get_template_part( 'template-parts/components/value-icon' );
			}
		}
		?>
    </div>
</section>
