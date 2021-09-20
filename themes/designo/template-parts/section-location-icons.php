<section class="location-icons__section container">
  <div class="location-icons">
    <?php
    if( have_rows( 'location_icon', 'option' ) ) {
      while( have_rows( 'location_icon', 'option' ) ) { 
        the_row();
      ?>
      <div class="location-icon">
        <img
          src="<?php echo get_sub_field( 'image' )['url'] ?>"
          alt="working hard on design"
          class="location-icon__img"
        />
        <h3 class="location-icon__title"><?php the_sub_field( 'title' ) ?></h3>
        <button
          onclick="window.location.href='<?php echo get_sub_field('button')['url'] ?>';"
          type="button"
          class="location-icon__button btn-secondary"
        >
        <?php echo get_sub_field( 'button' )['title'] ?>
        </button>
      </div>
      <?php
      }
    }
    ?>
  </div>
</section>