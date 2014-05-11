<div class="row">
	<div class="co-sm-8 col-sm-offset-4">
<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>
	</div>
</div>
<?php echo do_shortcode('[wpv-view name="music-page-songs"]'); ?>