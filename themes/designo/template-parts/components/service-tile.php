<div class="service-tile">
  <a href="<?php the_permalink(); ?>" class="service-tile__link">
	<h2 class="service-tile__heading"><?php the_title(); ?></h2>
	<p>View Projects</p>
  </a>
  <div class="service-tile-bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
</div>
