<section class="image-text__section container">
  <div class="image-text <?php echo $args['orientation']; ?>">
	<div class="image-text__content container">
	  <h2 class="image-text__title"><?php echo $args['content']['title']; ?></h2>
	  <?php echo $args['content']['text']; ?>
	</div>
	<div class="image-text__image">
	  <img
		src="<?php echo $args['content']['image']['url']; ?>"
		alt="people working around a table using digital devices"
	  />
	</div>
  </div>
</section>
