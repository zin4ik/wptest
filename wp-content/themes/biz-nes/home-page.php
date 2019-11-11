<?php
/**
 * Template name: Головна сторінка
 */

get_header();
?>
<?php 
$sliders_main = get_post_meta($post->ID, 'home_page_slider_list_item',true);
// echo'<pre>';
// print_r($sliders_main);
// echo'<pre>';
 ?>


	<main>
		<section class="camera_container">
          <div id="camera" class="camera_wrap">

		  <?php foreach($sliders_main as $slider): ?>
            <div data-src="<?php echo $slider[home_page_slider_upload];?>">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6"><?php echo $slider[home_page_slider_name];?></div>
                  </div>
                </div>
              </div>
            </div>
			<?php endforeach;?>
				</div>
			</section>
		</main><!-- #main -->
<?php
get_footer();
