<?php

/**
 * Template name: About
 */

get_header();
?>
	
	<main class="mobile-center">
        <section class="well1 ins3">
          <div class="container">
            <h2><?php the_title();?></h2>
            <div class="row off1">
              <div class="grid_6">
                <div class="about_content">
				<?php
				while ( have_posts() ) : the_post();
					the_content();

				endwhile; // End of the loop.
				?>
				</div>
				</div>
				<div class="grid_6">
                <h2>Quick facts</h2>
                <div class="row">
                  <div class="grid_3">
                    <dl class="info">
					 <?php if(get_post_meta($post->ID,'quick_facts_name', true)) : ?>
                      <dt>Name</dt>
                      <dd><?php echo get_post_meta($post->ID,'quick_facts_name', true);?></dd>
				  <?php endif;?>
				  <?php if(get_post_meta($post->ID,'quick_facts_date', true)) : ?>
                      <dt>Birth Date</dt>
                      <dd><?php echo get_post_meta($post->ID,'quick_facts_date', true);?></dd>
					<?php endif;?>
					<?php if(get_post_meta($post->ID,'quick_facts_birth', true)) : ?>
                      <dt>Place of birth</dt>
                      <dd><?php echo get_post_meta($post->ID,'quick_facts_birth', true);?></dd>
					<?php endif;?>
                    </dl>
                  </div>
                  <div class="grid_3">
                    <dl class="info">
					<?php if(get_post_meta($post->ID,'quick_facts_history',true)):?>
                      <dt>History</dt>
                      <dd>
						<?php $history_content=apply_filters('the_content', get_post_meta($post->ID,'quick_facts_history',true));
						echo $history_content;?>
                      </dd>
					<?php endif;?>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
		</section>
		<section class="well1 ins3">
          	<div class="container">
              <div class="grid_12">
              <?php if (get_post_meta($post->ID,'staff_title', true)) :?>
                <h3>
                  <?php echo get_post_meta($post->ID,'staff_title', true);?>
                </h3>
              <?php endif; ?>
               <?php if (get_post_meta($post->ID,'about_staff_desc', true)) :?>
                <div class="about_staff_desc">
                  <?php echo get_post_meta($post->ID,'about_staff_desc', true)?>
                </div>
              <?php endif; ?>
               <!--Gallery-->
              <?php if (get_post_meta($post->ID,'about_staff_gallery', true)) :
              ?>
              <div class="row">
              <?php 
              $data_wow_delay=0;
              $about_staff_gallery = explode(',',get_post_meta($post->ID,'about_staff_gallery',true));
              foreach($about_staff_gallery as $item):
                  $img=wp_get_attachment_image_src( $item, 'medium');
                  $data_wow_delay+=0.1;
                  ?>                        
                  <div data-wow-delay="<?php echo $data_wow_delay;?>s" class="grid_2  wow fadeInRight">
                    <img src="<?php echo $img[0];?>" alt="/">
                  </div>
                <?php endforeach;?>
             </div>  <!--/row--> 
              <?php endif;?>
                <hr>
              
            </div>  <!--/grid_12-->
          </div>  <!--/container-->
        </section>
        <!--======Our awards======-->
 <?php if (get_post_meta($post->ID,'about_page_awards_show', true)!='off'):?>
        <section class="well1 ins3 bg-primary">
          <div class="container">
          <?php if (get_post_meta($post->ID,'about_page_awards_list', true)): ?>
            <h2><?php echo get_post_meta($post->ID,'about_page_awards_list', true)?></h2>
          <?php endif;?>
            <ul class="product-list row off1">
              <li class="grid_6">
              </li>
              <li class="grid_6">    
              </li>
            </ul>
          </div>  <!--/container-->
       
        </section>
         <?php endif;?>
        <!--======/Our awards======-->
        <section class="well1">
          <div class="container">
            <div class="row">
              <div class="grid_4">
                <h2>Duties</h2>
                <p>Aenean ac leo eget nunc fringilla a non nulla! Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum, justo eget ultrices vestibulum, erat tortor venenatis risus, sit amet cursus dui augue a arcu.</p>
              </div>
              <div class="grid_4">
                <h2>Skills</h2>
                <p>Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum, justo eget ultrices vestibulum, erat tortor venenatis risus, sit amet cursus dui augue a arcu. Quisque mauris risus, gravida a molestie eu, dictum.</p>
              </div>
              <div class="grid_4">
                <h2>Opportunities</h2>
                <p>Quisque mauris risus, gravida a molestie eu, dictum ac augue. Integer sodales tempor lectus; sit amet dictum metus pharetra nec. Fusce bibendum dapibus pretium. Nunc eu sem vitae lacus laoreet elementum.</p>
              </div>
            </div>
          </div>
        </section>
      </main>


<?php
get_footer();
