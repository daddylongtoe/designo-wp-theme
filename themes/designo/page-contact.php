<?php get_header( 'no-banner' ); ?>

<header class="contact-header__section">
    <div class="contact-header container text-white">
        <div class="contact-header__content">
            <h1 class="contact-header__title text-white">Contact us</h1>
            <p class="contact-header__text">
                Ready to take it to the next level? Let’s talk about your project or
                idea and find out how we can help your business grow. If you are
                looking for unique digital experiences that’s relatable to your
                users, drop us a line.
            </p>
        </div>
		<?php get_template_part( 'template-parts/components/contact-form' ); ?>
    </div>
</header>

<?php get_template_part( 'template-parts/sections/location-icons' );

get_footer( 'short' ); ?>
