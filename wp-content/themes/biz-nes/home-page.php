<?php
/**
 * Template name: Головна сторінка
 */

get_header();
?>
<?php 
$sliders_main = get_post_meta($post->ID, 'home_page_slider_list_item',true);
$advansed_main = get_post_meta($post->ID, 'home_page_advansed_list',true);
$services_main = get_post_meta($post->ID, 'home_page_advansed_list',true);

// echo'<pre>';
// print_r($advansed_main);
// echo'<pre>';
 ?>


	<main>
	<?php if ($sliders_main && (get_post_meta($post->ID, 'home_page_slider_show',true) != 'off')) : ?>
	


		<section class="camera_container">
          <div id="camera" class="camera_wrap">

	<?php	
	
	 foreach($sliders_main as $slider):
		$slider_img=$slider[home_page_slider_upload] ? $slider[home_page_slider_upload]: '' ;
		$slider_name=$slider[home_page_slider_name] ? $slider[home_page_slider_name]: '';
	 
	 ?>
            <div data-src="<?php echo $slider_img;?>">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6"><?php echo $slider_name;?></div>
                  </div>
                </div>
              </div>
            </div>
			<?php endforeach;?>
				</div>
			</section>
	 <?php endif;?>
		  

<!------------------ advansed -------------------->

		  <section>
		  <?php if ($advansed_main && (get_post_meta($post->ID, 'home_page_advansed_show',true) != 'off')) : ?>
          <div class="container banner_wr">
		  
            <ul class="banner">
		<?php	
		foreach($advansed_main as $advansed):
	 	    $advansed_icon=$advansed[home_page_advansed_icon] ? $advansed[home_page_advansed_icon]: '' ;
			$advansed_name=$advansed[home_page_advansed_name] ? $advansed[home_page_advansed_name]: '';
			$advansed_descrip=$advansed[home_page_advansed_descrip] ? $advansed[home_page_advansed_descrip]: '';
			$advansed_link=$advansed[home_page_advansed_link] ? $advansed[home_page_advansed_link]: '';
			?>
              <li>
                <div class="<?php echo $advansed_icon?>"></div>
                <h3><?php echo $advansed_name?></h3>
                <p><?php echo $advansed_descrip?></p><a href="<?php echo $advansed_link?>"></a>
              </li>
			<?php endforeach;?>
            </ul>
			
          </div>
		  
        </section>
		<?php endif;?>
<!-- =============product-list============== -->
		<section class="well ins1">
          <div class="container hr">
            <ul class="row product-list">
              <!-- <li class="grid_6"> -->
                <li class="grid_6 box wow fadeInRight product-list_services">  
                  <div class="box_aside">
                    <div class="icon fa-comments"></div>
                  </div> <!--/box_aside-->
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Incididunt ut labore et dolore</a></h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                  </div> <!--/box_cnt__no-flow-->
                </li> <!--/box wow fadeInRight-->
               
            </ul>
          </div>
        </section>
		</main><!-- #main -->
<?php
get_footer();
