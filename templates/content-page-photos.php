<div class="row">
	<div class="col-sm-12">
	<?php while (have_posts()) : the_post(); ?>
	  <?php the_content(); ?>
	<?php endwhile; ?>
	</div>
</div>
<div class="row">
	<div class="col-sm-12 photos-cols">
			<ul class="photos-page">
			</ul>
	</div>
</div>