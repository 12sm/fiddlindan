<div class="row col">
	<div class="co-md-7 col-md-offset-5 songwriting-body">
<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>
	</div>
</div>
<?php echo do_shortcode('[wpv-view name="music-page-songs"]'); ?>