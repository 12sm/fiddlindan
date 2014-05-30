<div class="row" id="bg-1">
	<div class="col-sm-12 home-slider-container">
	<?php echo do_shortcode('[wpv-view name="home-top-banners"]'); ?>
	</div>
</div>
<div class="row home-content" id="bg-2">
	<div class=" col-xs-12 col-sm-6 col-sm-offset-1">
		<div id="home-2-content">
		<?php
		$page_id = 44;  //Page ID
		$page_data = get_page( $page_id );
		global $more;
		$more = 0;
		$content = apply_filters('the_content', $page_data->post_excerpt);
		echo $content;
		?>
		<a href="/about/">
		<button class="btn btn-read">Full Bio</button>
		</a>
		</div>
	</div>
</div>
<div class="row home-content" id="bg-3">
	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		<div id="home-3-content">
					<h2>Dan Can<br />
					Rock Your Track</h2>
	<?php echo do_shortcode('[wpv-view name="home-audio-slider"]'); ?>
	<a href="#bg-4"><button class="btn btn-read">Book Dan</button></a> <a href="/sessionwork/"><button class="btn btn-music">More Music</button></a>
		</div>
	</div>
</div>
<div class="row home-content" id="bg-4">
	<div class="col-sm-6 col-sm-offset-3">
		<?php echo do_shortcode('[vfb id=1]'); ?>
	</div>
</div>