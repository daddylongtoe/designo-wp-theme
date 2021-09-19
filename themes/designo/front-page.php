<?php get_header(); ?>

<div class="main-container">
  <header class="header__section container">
    <div class="header row container text-white">
      <div class="header__content">
        <h1 class="header__title text-white">
          <?php the_field( 'hero_title' ); ?>
        </h1>
        <p class="header__text">
          <?php the_field( 'hero_text' ); ?>
        </p>
        <?php
          $button = get_field( 'hero_button' );
        ?>
        <button
          onclick="window.location.href='<?php echo $button['url']; ?>';"
          type="button"
          class="header__btn btn-primary"
        >
          <?php echo $button['title']; ?>
        </button>
      </div>
      <div class="header__image">
        <img
          src="<?php echo get_theme_file_uri( '/assets/home/desktop/image-hero-phone.png' ); ?>"
          alt="mobile phone"
        />
      </div>
    </div>
  </header>

  <?php get_template_part( 'template-parts/section', 'homepage-services' ); ?>

  <?php get_template_part( 'template-parts/section', 'values' ); ?>

</div>

<?php get_template_part( 'template-parts/section', 'contact' ); ?>

<?php get_footer(); ?>
