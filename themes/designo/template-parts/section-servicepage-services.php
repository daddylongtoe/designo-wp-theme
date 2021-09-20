<?php
$related_services = new WP_Query(
  array(
    'posts_per_page' => 2,
    'post_type'      => 'service',
    'post__not_in'   => array( get_the_ID() )
    )
);

if ( $related_services->have_posts() ) {
  ?>

  <section class="services__section">
    <div class="services container">

    <?php
    while ( $related_services->have_posts() ) {
      $related_services->the_post();
      ?>

      <div class="service-tile" id="app-design">
        <a href="<?php the_permalink(); ?>" class="service-tile__link">
          <h2 class="service-tile__heading"><?php the_title(); ?></h2>
          <p>View Projects</p>
        </a>
        <div class="service-tile-bg" style="background-image: url('<?php the_post_thumbnail_url() ?>');"></div>
      </div>

    <?php } ?>
    </div>
  </section>
<?php } ?>