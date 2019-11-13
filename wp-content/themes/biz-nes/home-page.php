<?php
/**
 * Template name: Головна сторінка
 */

get_header();
?>
<?php 
$sliders_main = get_post_meta($post->ID, 'home_page_slider_list_item',true);
$advansed_main = get_post_meta($post->ID, 'home_page_advansed_list',true);
$services_main = get_post_meta($post->ID, 'home_page_services_list',true);

// echo'<pre>';
// print_r($services_main);
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
                <p><?php echo wp_trim_words($advansed_descrip, 25, '...');?></p>
                <a href="<?php echo $advansed_link?>"></a>
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
             
          <?php 
          $delay_wow=0;
				  foreach($services_main as $services_id):
					$service = get_post( $services_id['home_page_services_post_type_select'], ARRAY_A );
  // print_r($service);
          $delay_wow++;
				 ?>

                <li data-wow-delay="0.<?php echo $delay_wow?>s" class="grid_6 box wow fadeInRight product-list_services">  
                  <div  class="box_aside">
                  <?php 
                  if (get_post_meta($service['ID'], 'services_icon', true)):?>
 <!-- ============div icon============ -->
                  <div class="icon <?php echo get_post_meta($service['ID'], 'services_icon', true)?>"></div>
<!-- ============/div icon============ -->
<!-- ============/img============ -->
                  <?php else :
                  echo get_the_post_thumbnail( $service['ID'],'service_img' );
                  endif;?>
                    
                  </div> <!--/box_aside-->
                  <div class="box_cnt__no-flow">
                    <h3><a href="<?php get_the_permalink($service['ID']);?>"><?php echo $service['post_title'];?></a></h3>
		            	<p><?php echo wp_trim_words($service['post_content'], 10, '...');?></p>
					
					<!-- https://www.youtube.com/watch?v=9x4TglmhOBw -->

                  </div> <!--/box_cnt__no-flow-->
                </li> <!--/box wow fadeInRight-->
				 <?php endforeach;?>
            </ul>
          </div>
        </section>
		</main><!-- #main -->
<?php
get_footer();
