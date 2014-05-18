<div class="row">
	<div class="col-sm-4">
<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>
	</div>
	<div class="col-sm-8">
<?php echo do_shortcode('[wpv-view name="Audio Slider 2.0"]'); ?>
	</div>
</div>
<div class="row" id="bg-4"> 
	<!--<div class="col-sm-12">
		<?php echo do_shortcode('[vfb id=1]'); ?>
	</div>
</dvi>-->