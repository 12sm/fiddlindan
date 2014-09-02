<footer class="content-info container-fluid" role="contentinfo">
  <div class="row">
    <div class="col-lg-12">
      <div class="row sidebar-footer">
      	<?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
     <div class="row">
      <div class="col-sm-11 col-sm-offset-1">
      <div id="social" class="social-nav">
  <?php
     if (has_nav_menu('social_navigation')) :
       wp_nav_menu(array('theme_location' => 'social_navigation', 'menu_class' => ''));
     endif;
  ?>
    </div>
    <div class="footer-nav">    
  <?php
     if (has_nav_menu('footer_navigation')) :
       wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => ''));
     endif;
  ?>
  </div> 
  <div class="col-sm-5 col-xs-12 credits">
      <p class="credits">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>  |  <a href="http://12southmusic.com/" target="_blank">built by 12SM</a></p>
	  </div>


    </div>
  </div>
  </div>
  </div>
  <!-- <div class="row from-the-road">
    <div class="col-md-2 col-sm-3 col-sm-offset-1 col-xs-offset-2">
     <h3 class="from-the">From The</h3> 
	 <h3 class="road">Road</h3>
    </div>
    <div class="col-md-9 col-sm-8 col-sm-offset-0 col-xs-8 col-xs-offset-2">  
      <div class="photo-footer">
        <ul class="photo-footer-list">
        </ul>
        <a href="/road-photos/" class="footer-link">
          <h4>More Photos from the Road</h4>
          <i class="fa fa-chevron-right big-icon"></i>
        </a>
      </div>
    </div>
  </div> -->
</footer>

<?php wp_footer(); ?>

<!-- Begin 12SM Network Analytics <!-->   
  <script type="text/javascript">
	var _gaq = _gaq || [];
  	_gaq.push(['_setAccount', 'UA-27814560-1']);
  	_gaq.push(['_setDomainName', '12southmusic.com']);
  	_gaq.push(['_setAllowLinker', true]);
  	_gaq.push(['_trackPageview']);
 	(function() {
	  	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	  	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	  	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  	})();
	</script>
  <!-- End 12SM Network Analytics <!--> 
  
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27814560-31', 'auto');
  ga('send', 'pageview');

</script>  
  