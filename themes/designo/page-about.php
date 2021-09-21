<?php get_header(); ?>

<header class="about-header__section container">
  <div class="about-header text-white">
    <?php
      $rows = get_field( 'media_&_text' );
      $about_header_content = $rows[0];
    ?>
    <div class="about-header__content container">
      <h1 class="about-header__title text-white"><?php echo $about_header_content['title'] ?></h1>
      <?php echo $about_header_content['text'] ?>
    </div>
    <div class="about-header__image">
      <img
        src="<?php echo $about_header_content['image']['url'] ?>"
        alt="people working around a table using digital devices"
      />
    </div>
  </div>
</header>

<section class="image-text__section container">
  <div class="image-text image-text--image-left">
  <?php
      $about_content_section_1 = $rows[1];
    ?>
    <div class="image-text__content container">
      <h2 class="image-text__title"><?php echo $about_content_section_1['title'] ?></h2>
      <?php echo $about_content_section_1['text'] ?>
    </div>
    <div class="image-text__image">
      <img
        src="<?php echo $about_content_section_1['image']['url'] ?>"
        alt="people working around a table using digital devices"
      />
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/section', 'location-icons' ); ?>

<section class="image-text__section container">
  <div class="image-text image-text--image-right">
    <?php
      $about_content_section_2 = $rows[2];
    ?>
    <div class="image-text__content container">
      <h2 class="image-text__title"><?php echo $about_content_section_2['title'] ?></h2>
      <?php echo $about_content_section_2['text'] ?>
    </div>
    <div class="image-text__image">
      <img
        src="<?php echo $about_content_section_2['image']['url'] ?>"
        alt="people working around a table using digital devices"
      />
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/section', 'contact' ); ?>

<?php get_footer(); ?>
