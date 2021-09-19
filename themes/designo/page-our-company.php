<?php get_header(); ?>

<header class="about-header__section container">
  <div class="about-header text-white">
    <div class="about-header__content container">
      <h1 class="about-header__title text-white">About us</h1>
      <p class="about-header__text">
        Founded in 2010, we are a creative agency that produces lasting
        results for our clients. We’ve partnered with many startups,
        corporations, and nonprofits alike to craft designs that make real
        impact. We’re always looking forward to creating brands, products,
        and digital experiences that connect with our clients' audiences.
      </p>
    </div>
    <div class="about-header__image">
      <picture>
        <source
          srcset="<?php echo get_theme_file_uri( '/assets/about/mobile/image-about-hero.jpg' ); ?>"
          type="image/jpg"
          media="all and (max-width:600px)"
        />
        <source
          srcset="<?php echo get_theme_file_uri( '/assets/about/tablet/image-about-hero.jpg' ); ?>"
          type="image/jpg"
          media="all and (min-width:601px) and (max-width:1199px)"
        />
        <source
          srcset="<?php echo get_theme_file_uri( '/assets/about/desktop/image-about-hero.jpg' ); ?>"
          type="image/jpg"
          media="all and (min-width:1200px)"
        />
        <img
          src="<?php echo get_theme_file_uri( '/assets/about/mobile/image-about-hero.jpg' ); ?>"
          alt="people working around a table using digital devices"
        />
      </picture>
    </div>
  </div>
</header>

<section class="image-text__section container">
  <div class="image-text image-text--image-left">
    <div class="image-text__content container">
      <h2 class="image-text__title">World-class talent</h2>
      <p class="image-text__text">
        We are a crew of strategists, problem-solvers, and technologists.
        Every design is thoughtfully crafted from concept to launch,
        ensuring success in its given market. We are constantly updating our
        skills in a myriad of platforms.
      </p>
      <p class="image-text__text">
        Our team is multi-disciplinary and we are not merely interested in
        form — content and meaning are just as important. We give great
        importance to craftsmanship, service, and prompt delivery. Clients
        have always been impressed with our high-quality outcomes that
        encapsulates their brand’s story and mission.
      </p>
    </div>
    <div class="image-text__image">
      <picture>
        <source
          srcset="<?php echo get_theme_file_uri( '/assets/about/mobile/image-world-class-talent.jpg' ); ?>"
          type="image/jpg"
          media="all and (max-width:600px)"
        />
        <source
          srcset="<?php echo get_theme_file_uri( '/assets/about/tablet/image-world-class-talent.jpg' ); ?>"
          type="image/jpg"
          media="all and (min-width:601px) and (max-width:1199px)"
        />
        <source
          srcset="<?php echo get_theme_file_uri( '/assets/about/desktop/image-world-class-talent.jpg' ); ?>"
          type="image/jpg"
          media="all and (min-width:1200px)"
        />
        <img
          src="<?php echo get_theme_file_uri( '/assets/about/mobile/image-world-class-talent.jpg' ); ?>"
          alt="people working around a table using digital devices"
        />
      </picture>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/section', 'location-icons' ); ?>

<section class="image-text__section container">
  <div class="image-text image-text--image-right">
    <div class="image-text__content container">
      <h2 class="image-text__title">The real deal</h2>
      <p class="image-text__text">
        As strategic partners in our clients’ businesses, we are ready to
        take on any challenge as our own. Solving real problems require
        empathy and collaboration, and we strive to bring a fresh
        perspective to every opportunity. We make design and technology more
        accessible and give you tools to measure success.
      </p>
      <p class="image-text__text">
        We are visual storytellers in appealing and captivating ways. By
        combining business and marketing strategies, we inspire audiences to
        take action and drive real results.
      </p>
    </div>
    <div class="image-text__image">
      <picture>
        <source
          srcset="<?php echo get_theme_file_uri( '/assets/about/mobile/image-real-deal.jpg' ); ?>"
          type="image/jpg"
          media="all and (max-width:600px)"
        />
        <source
          srcset="<?php echo get_theme_file_uri( '/assets/about/tablet/image-real-deal.jpg' ); ?>"
          type="image/jpg"
          media="all and (min-width:601px) and (max-width:1199px)"
        />
        <source
          srcset="<?php echo get_theme_file_uri( '/assets/about/desktop/image-real-deal.jpg' ); ?>"
          type="image/jpg"
          media="all and (min-width:1200px)"
        />
        <img
          src="<?php echo get_theme_file_uri( '/assets/about/mobile/image-real-deal.jpg' ); ?>"
          alt="people working around a table using digital devices"
        />
      </picture>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/section', 'contact' ); ?>

<?php get_footer(); ?>
