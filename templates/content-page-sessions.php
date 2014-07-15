<div class="row dan-bg">
	<div class="col">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
	<?php while (have_posts()) : the_post(); ?>
	  <?php the_content(); ?>
	<?php endwhile; ?>
		</div>
	</div>
</div>
<div class="row" id="bg-4"> 
	<div class="col-sm-12 booking-form">
		<?php echo do_shortcode('[vfb id=1]'); ?>
	</div>
</dvi>