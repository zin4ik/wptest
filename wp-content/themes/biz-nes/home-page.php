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
<!-- ========= блок 1 банер========--> 
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
		  
<!--========= блок 2 - advansed ============-->

		  <section>
		  <?php if ($advansed_main && (get_post_meta($post->ID, 'home_page_advansed_show',true) != 'off')) : ?>
          <div class="container banner_wr">		  
            <ul class="banner">
		<?php	
		foreach($advansed_main as $advansed):
	 	  $advansed_icon=$advansed['home_page_advansed_icon'] ? $advansed['home_page_advansed_icon']: '' ;
			$advansed_name=$advansed['home_page_advansed_name'] ? $advansed['home_page_advansed_name']: '';
			$advansed_descrip=$advansed['home_page_advansed_descrip'] ? $advansed['home_page_advansed_descrip']: '';
			$advansed_link=$advansed['home_page_advansed_link'] ? $advansed['home_page_advansed_link']: '';
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

<!-- =============блок 3 - product-list============== -->

		<section class="well ins1">
          <div class="container hr">
            <ul class="row product-list">            
          <?php 
          $delay_wow=0;
				  foreach($services_main as $services_id):
					$service = get_post( $services_id['home_page_services_post_type_select'], ARRAY_A );
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
                  </div> <!--/box_cnt__no-flow-->
                </li> <!--/box wow fadeInRight-->
				 <?php endforeach;?>
            </ul>
          </div>
        </section>

<!--============блок 4 про нас============-->

        <section class="well1">
          <div class="container">
            <div class="row">
            <!-- About -->
              <div class="grid_4">
              <?php if (get_post_meta($post->ID, 'home_about_page_select', true)):
                $about = get_post( get_post_meta($post->ID, 'home_about_page_select', true),ARRAY_A );
              endif;?>
                <h2><?php echo $about['post_title'];?></h2>
                <?php echo get_the_post_thumbnail( get_post_meta($post->ID, 'home_about_page_select',true),'large');?>
                <p><?php echo wp_trim_words($about['post_content'],50,'...');?></p>
                <a href="<?php get_the_permalink($about['ID']);?>" class="btn">Read more</a>
              </div>
              <!-- Services -->
              <div class="grid_4">
                <h2>Services</h2>
                <?php
                 if (get_post_meta($post->ID, 'home_services_desc', true)):?>
                 <p><?php echo get_post_meta($post->ID, 'home_services_desc', true);?></p>
                 <?php
              endif;  
              $post_per_service=get_post_meta($post->ID, 'home_services_numeric_slider', true);
              $arg=array(
                'post_type'=>'biz_nes_servise',
                'posts_per_page'=>$post_per_service,
              );
              $service_query= new WP_Query($arg);

              if ($service_query->have_posts()):?>
                <ul class="marked-list">
               <?php while($service_query->have_posts()):
                $service_query->the_post()?>
               <li>
               <a href="<?php echo get_permalink();?>">
               <?php echo the_title();?></a>
               </li>
               <?php endwhile;
               wp_reset_postdata();?>
               </ul>
                <?php endif;
                $services_all_link=get_post_meta($post->ID, 'home_services_link', true) ?
                 get_post_meta($post->ID, 'home_services_link', true): '';
                $services_link_btn=get_post_meta($post->ID, 'home_services_btn', true) ?
                 get_post_meta($post->ID, 'home_services_btn', true): '';?>
                
                <a href="<?php echo $services_all_link; ?>" class="btn"><?php echo $services_link_btn; ?></a> 
              </div>
              <!-- Help center -->
              <div class="grid_4">
              <?php 
              $services_home_help_work=get_post_meta($post->ID, 'home_help_work', true) ?
              get_post_meta($post->ID, 'home_help_work', true): '';
              $services_home_help_sat=get_post_meta($post->ID, 'home_help_sat', true) ?
              get_post_meta($post->ID, 'home_help_sat', true): '';
              $services_home_help_sun=get_post_meta($post->ID, 'home_help_sun', true) ?
              get_post_meta($post->ID, 'home_help_sun', true): '';
              $services_home_help_support=get_post_meta($post->ID, 'home_help_support', true) ?
              get_post_meta($post->ID, 'home_help_support', true): '';
              ?>
                <div class="info-box">
                  <h2 class="fa-comment">Help center</h2>
                  <hr>
                  <h3>Ask professionals:</h3>
                  <dl>
                    <dt>Monday - Friday:</dt>
                    <dd><?php echo $services_home_help_work;?></dd>
                  </dl>
                  <dl>
                    <dt>Saturday:</dt>
                    <dd><?php echo $services_home_help_sat;?></dd>
                  </dl>
                  <dl>
                    <dt>Sunday:</dt>
                    <dd><?php echo $services_home_help_sun;?></dd>
                  </dl>
                  <hr>
                  <h3>24/7 Online Support:</h3>
                  <dl>
                  <a href="tel:<?php echo str_replace(array(' ','-',')','('), '',
                   $services_home_help_support)?>">
                   <?php echo $services_home_help_support ?>
                   </a>
                    
                  </dl>
                </div>
<!--============carusel review================-->
                <div class="owl-carousel">
                <?php
                if (get_post_meta($post->ID, 'home_page_review_show', true)!='off'):
                 $arg_review = array(
                    'post_type'   => 'biz_nes_reviews',
                    'post_status' => 'publish',
                    'order'       => 'DESC',
                    'orderby'     => -1,
                  );
                  $query_review = new WP_Query($arg_review);
                  if ($query_review->have_posts()) :
                    while($query_review->have_posts()) :
                       $query_review->the_post();
                  ?>

                  <div class="item">
                 
                    <blockquote class="box">
                      <div class="box_aside">
                      <?php echo get_the_post_thumbnail($post->ID, array(80,80));?>
                      </div> <!--/box_aside-->
                      <div class="box_cnt__no-flow">
                        <p>
                          <q><?php echo wp_trim_words(get_the_content(),10,'...');?></q>
                        </p>
                        <cite>
                        <?php if(get_post_meta($post->ID, 'review_regal', true)):?>
                        <span class="review_regal"> <?php echo get_post_meta($post->ID, 'review_regal', true); ?></span>
                    <?php endif;?>
                    <?php if(get_post_meta($post->ID, 'review_name', true) || get_post_meta($post->ID, 'review_link', true) ):?>
                        <?php if (get_post_meta($post->ID, 'review_link', true)):?>
                        <a href="<?php echo get_post_meta($post->ID, 'review_link', true);?>">
                       <span><?php echo get_post_meta($post->ID, 'review_name', true); ?></span>
                        </a>
                        <?php else:?>
                          <span><?php echo get_post_meta($post->ID, 'review_name', true); ?></span>
                        <?php endif;?>
                        <?php endif;?>
                        </cite>
                      </div>
                    </blockquote>
                  </div>  <!--/item-->
                  <?php 
                  endwhile;
                  endif; 
                   ?>               
                </div> <!---/owl-carousel-->
                <?php wp_reset_postdata();
                   endif;?>
              </div>
            </div>
          </div>
        </section>
		</main><!-- #main -->
<?php
get_footer();
