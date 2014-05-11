<div class="row" id="bg-1">
	<div class="col-sm-12">
	<?php echo do_shortcode('[wpv-view name="Home page - Slider"]'); ?>
	</div>
</div>
<div class="row" id="bg-2">
	<div class="col-sm-6">
		<? php
			$the_query = new WP_Query( 'page_id=44' )
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
			        the_content();
			endwhile;
			wp_reset_postdata();
		?>
	</div>
	<div class="col-sm-6">
		<img src="...." id="bg-2-img" />
	</div>
</div>
<div class="row" id="bg-3">
	<div class="col-sm-8">
	<?php echo do_shortcode('[wpv-view name="homecrossfaderthing"]'); ?>
	</div>
</div>