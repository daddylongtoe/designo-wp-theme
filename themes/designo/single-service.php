<?php get_header(); ?>

<?php

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
    ?>

    <header class="service-header__section bg-peach container">
      <div class="service-header container text-white">
        <div class="service-header__content">
          <h1 class="service-header__title text-white"><?php the_title(); ?></h1>
          <p class="service-header__text">
            <?php echo get_the_excerpt(); ?>
          </p>
        </div>
      </div>
    </header>

    <?php
    $related_projects = new WP_Query(
      array(
        'posts_per_page' => -1,
        'post_type'      => 'project',
        'meta_query'     => array(
          array(
            'key'     => 'related_services',
            'compare' => 'LIKE',
            'value'   => '"' . get_the_ID() . '"',
          ),
        ),
      )
    );

    if ( $related_projects->have_posts() ) { 
      ?>

      <section class="projects__section">
        <div class="projects container">

        <?php
        while ( $related_projects->have_posts() ) {
          $related_projects->the_post();
          ?>

          <div class="project-card">
            <img
              src="<?php the_post_thumbnail_url(); ?>"
              alt="3 HGVs on the road"
              class="project-card__image"
            />
            <div class="project-card__details">
              <h3 class="project-card__title"><?php the_title(); ?></h3>
              <p class="project-card__text">
                <?php echo get_the_excerpt(); ?>
              </p>
            </div>
          </div>
       <?php } ?>
        </div>
      </section>
    <?php }

    wp_reset_postdata();

    get_template_part( 'template-parts/section', 'servicepage-services' );

     }
    }
     ?>

<?php get_template_part( 'template-parts/section', 'contact' ); ?>

<?php get_footer(); ?>
