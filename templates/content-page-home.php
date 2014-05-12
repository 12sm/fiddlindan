<div class="row" id="bg-1">
	<div class="col-sm-12 home-slider-container">
	<?php echo do_shortcode('[wpv-view name="home-top-banners"]'); ?>
	</div>
</div>
<div class="row" id="bg-2">
	<div class="col-sm-6">
		<div id="home-2-content">
		<?php
		$page_id = 44;  //Page ID
		$page_data = get_page( $page_id );
		$content = apply_filters('the_content', $page_data->post_content);
		echo $content;
		?>
		</div>
	</div>
</div>
<div class="row" id="bg-3">
	<div class="col-sm-8">
	<?php echo do_shortcode('[wpv-view name="home-audio-slider"]'); ?>
	</div>
</div>