<div class="row about-row">
	<div class="col-sm-12 col-xs-12">
<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>
	</div>
</div>