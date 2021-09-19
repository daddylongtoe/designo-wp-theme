<section class="values__section container">
  <div class="values container">

      <?php
      if( have_rows('value_block') ){
        while( have_rows('value_block') ) {
          the_row();
          ?>

          <div class="value-icon">
            <img
              src="<?php echo get_sub_field('image')['url']; ?>"
              alt="working hard on design"
              class="value-icon__img"
            />
            <div class="value-icon__info">
              <h3 class="value-icon__title"><?php echo get_sub_field('title'); ?></h3>
              <p class="value-icon__text"><?php echo get_sub_field('text'); ?></p>
            </div>
          </div>

          <?php
        }
      }
      ?>
  </div>
</section>