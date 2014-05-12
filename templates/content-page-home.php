<div class="row" id="bg-1">
	<div class="col-sm-12">
	<h1>TEST</h1>
	<?php echo do_shortcode('[wpv-view name="Home page - Slider"]'); ?>
	</div>
</div>
<div class="row" id="bg-2">
	<div class="col-sm-6">
		<?php
		$page_id = 44;  //Page ID
		$page_data = get_page( $page_id ); 
		$title = $page_data->post_title; 
		$content = apply_filters('the_content', $page_data->post_content);
		echo $title;
		echo $content;
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