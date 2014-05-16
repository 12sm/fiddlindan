<div class="row col">
	<div class="co-sm-7 col-sm-offset-5">
<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>
	</div>
</div>
<?php echo do_shortcode('[wpv-view name="music-page-songs"]'); ?>