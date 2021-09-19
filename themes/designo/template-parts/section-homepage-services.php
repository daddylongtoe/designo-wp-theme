<section class="services__section" id="services">
  <div class="services container">

    <?php
      $rows = get_field('service_tile');
      $first_service_tile = $rows[0];
    ?>

    <div class="services--left">
      <div class="service-tile" id="web-design">
        <a href="<?php echo $first_service_tile['link']['url']; ?>" class="service-tile__link">
          <h2 class="service-tile__heading">
            <?php echo $first_service_tile['title'] ?>
          </h2>
          <p><?php echo $first_service_tile['link']['title']; ?></p>
        </a>
        <div class="service-tile-bg" style="background-image: url('<?php echo $first_service_tile['background_image']['url']; ?>');"></div>
      </div>
    </div>

    <div class="services--right">
    <?php
      $right_tiles = array_slice($rows,1,3);
      if($right_tiles){
        foreach($right_tiles as $row) {
        ?>

          <div class="service-tile" id="app-design">
            <a href="<?php echo $row['link']['url']; ?>" class="service-tile__link">
              <h2 class="service-tile__heading">
                <?php echo $row['title'] ?>
              </h2>
              <p><?php echo $row['link']['title']; ?></p>
            </a>
            <div class="service-tile-bg" style="background-image: url('<?php echo $row['background_image']['url']; ?>');"></div>
          </div>

        <?php
        }
      }
    ?>
    </div>

  </div>
</section>