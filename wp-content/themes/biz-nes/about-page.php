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
                <h3>What we offer</h3>
                <div class="row">
                  <div data-wow-delay="0.2s" class="grid_3 wow fadeInLeft"><img src="images/page-2_img01.jpg" alt=""></div>
                  <div class="grid_3 wow fadeInLeft"><img src="images/page-2_img02.jpg" alt=""></div>
                </div>
                <p>Nam justo elit, dictum id tempus a, ultricies tempus lacus. Nunc purus nibh; eleifend eget facilisis ac, sagittis non tortor. Vivamus eu enim a orci accumsan tincidunt ut ut elit. Vestibulum nisi orci, rutrum ac auctor non, viverra et magna?</p>
              </div>
              <div class="grid_6">
                <h3>Our staff</h3>
                <div class="row">
                  <div class="grid_2 wow fadeInRight"><img src="images/page-2_img03.jpg" alt=""><img src="images/page-2_img06.jpg" alt=""></div>
                  <div data-wow-delay="0.2s" class="grid_2 wow fadeInRight"><img src="images/page-2_img04.jpg" alt=""><img src="images/page-2_img07.jpg" alt=""></div>
                  <div data-wow-delay="0.4s" class="grid_2 wow fadeInRight"><img src="images/page-2_img05.jpg" alt=""><img src="images/page-2_img08.jpg" alt=""></div>
                </div>
                <p>Curabitur facilisis pellentesque pharetra. Donec justo urna, malesuada a viverra ac, pellentesque vitae nunc. Aenean ac leo eget nunc fringilla a non nulla! Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum, justo eget ultrices.</p>
                <hr>
                <h3>Our advantages</h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Suspendisse commodo tempor sagittis! In justo est, sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus rutrum odio at rhoncus. Pellentesque vitae tortor id neque fermentum pretium.</p>
              </div>
            </div>
          </div>
        </section>
        <section class="well1 ins3 bg-primary">
          <div class="container">
            <h2>Our awards</h2>
            <ul class="product-list row off1">
              <li class="grid_6">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon fa-asterisk"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3>Vestibulum elementum tempus eleifend</h3>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna. Suspendisse commodo tempor sagittis! In justo est sollicitudin.</p>
                  </div>
                </div>
                <hr>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon fa-asterisk"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3>Congue dui ut porta aenean laoreet</h3>
                    <p>Pellentesque vitae tortor id neque fermentum pretium. Maecenas ac lacus ut neque rhoncus laoreet sed id tellus.</p>
                  </div>
                </div>
                <hr>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon fa-asterisk"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3>Aenean laoreet viverra turpis a com</h3>
                    <p>Maecenas ac lacus ut neque rhoncus laoreet sed id tellus. Donec justo tellus, tincidunt vitae pellentesque nec, pharetra a orci. Praesent</p>
                  </div>
                </div>
              </li>
              <li class="grid_6">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon fa-asterisk"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3>Tempus eleifend cum sociis natoque</h3>
                    <p>Labore et dolore magna. Suspendisse commodo tempor sagittis! In justo est sollicitudin eu scelerisque pretium, placerat eget elit.</p>
                  </div>
                </div>
                <hr>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon fa-trophy"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3>Sociis natoque penatibus vestibulum</h3>
                    <p>Suspendisse commodo tempor sagittis! In justo est sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus rutrum.</p>
                  </div>
                </div>
                <hr>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon fa-trophy"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3>Penatibus vestibulum congue dui ut</h3>
                    <p>In justo est sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus rutrum odio at rhoncus.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
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
