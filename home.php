<?php get_header();

global $wdwt_front;
?>
<?php
 if (is_plugin_active('slider-wd/slider-wd.php') && $show_slider_wd && function_exists("wd_slider")) {
	 if ($show_slider != "Hide Slider" &&
			($show_slider == "On all the pages and posts")
	 ) {
		 ?>
		 <div class="container">
			 <?php wd_slider($slider_wd_id); ?>
		 </div>
		 <?php
	 }
 } else {
	 $wdwt_front->slideshow();
 }
 ?>
	</header>
	<div class="container">
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
			<aside id="sidebar1" >
				<div class="sidebar-container">
					<?php  dynamic_sidebar( 'sidebar-1' ); 	?>
					<div class="clear"></div>
				</div>
			</aside>
		<?php } ?>

		<div id="content">
			<?php
			if( 'posts' == get_option( 'show_on_front' ) ){
				news_magazine_frontend_functions::top_posts();
				?>
				<div id="content_posts_section">
					<?php news_magazine_frontend_functions::content_posts(); ?>
				</div>
				<?php
				news_magazine_frontend_functions::categories_vertical_tabs();
			}
			elseif('page' == get_option( 'show_on_front' ))
				news_magazine_frontend_functions::homepage();
			?>
		</div>

		<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			<aside id="sidebar2">
				<div class="sidebar-container">
					<?php  dynamic_sidebar( 'sidebar-2' ); 	?>
					<div class="clear"></div>
				</div>
			</aside>
		<?php } ?>
		<div class="clear"></div>
	</div>



<?php get_footer(); ?>
