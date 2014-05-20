<div class="row">
	<div class="col-sm-12">
	<?php while (have_posts()) : the_post(); ?>
	  <?php the_content(); ?>
	<?php endwhile; ?>
	</div>
</div>
<div class="row">
	<div class="col-sm-10 col-sm-offset-1 col-lg-12 col-lg-offset-0">
			<ul class="photos-page">
			</ul>
	</div>
</div>