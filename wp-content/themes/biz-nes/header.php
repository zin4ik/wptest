<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biznes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="page">
	<!--
      ========================================================
      							HEADER
      ========================================================
      
      
      -->
      <header>
        <div class="container">
          <div class="brand">

<!-- перевірка головної сторінки -->
          	<?php if (is_front_page() && is_home()){ ?>   

				<?php if (ot_get_option( 'logo_upload' )) {?>
					<div class="brand_name">
						<img class="brand__logo_img" src="<?php echo ot_get_option( 'logo_upload' )?>" alt="<?php bloginfo('name')?>">
					</div>  <!-- /brand_name -->
				<?php } else{?>
            		<h1 class="brand_name"><?php bloginfo('name')?></h1> 
            	<?php }?>

			<?php }else {?>

				<?php if (ot_get_option( 'logo_upload' )) {?>
					<div class="brand_name">
						<img class="brand__logo_img" src="<?php echo ot_get_option( 'logo_upload' )?>" alt="<?php bloginfo('name')?>">
					</div>  <!-- /brand_name -->
				<?php } else{?>
            		<h2 class="brand_name">
            				<a href="<?php echo home_url()?>"><?php bloginfo('name')?>		
            			</a>
            		</h2> 
            	<?php }?>
			<?php }?>
<!-- /перевірка головної сторінки -->


<!-- dscription site -->
		<?php if (ot_get_option( 'desc_on_off' )!='off'){?>
	
            <p class="brand_slogan"><?php bloginfo('description')?></p>

        <?php }?>
<!-- /dscription site -->

          </div>  <!-- /brand -->
<!--phone-->
	 <?php if (ot_get_option( 'headers_cont_phone' )){?>
          <a href="tel:<?php echo str_replace(array(' ','-',')','('), '', ot_get_option( 'headers_cont_phone' ))?>" class="fa-phone"><?php echo ot_get_option( 'headers_cont_phone' ) ?></a>
      <?php }?>

      <!-- feedback -->
	 <?php if (ot_get_option( 'header_feedback_on-off' )=='on'){?>

<!-- link that opens popup -->

		<p><a href="#test-form" class="headers_feedback_title popup-with-form "> <?php echo ot_get_option( 'headers_feedback_title' ) ?></a><p>
		
		<!-- form itself -->
		<div id="test-form" class="white-popup-block mfp-hide">
			<?php if (ot_get_option( 'headers_feedback_form' )){?>
          <p><?php echo do_shortcode( ot_get_option( 'headers_feedback_form' ));  ?></p>
           <?php }?>
		</div>
    		<?php }?>
         
<!--/phone-->
      <?php if (ot_get_option( 'headers_cont_open' )){?>
          <p><?php echo ot_get_option( 'headers_cont_open' ) ?></p>
           <?php }?>

          

        </div>  <!-- /container -->
      <?php 
     wp_nav_menu([
        'theme_location'  => 'pimary',
        'menu'            => '', 
        'container'       => 'div', 
        'container_class' => '', 
        'container_id'    => '',
        'menu_class'      => 'menu', 
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => '',
      ]);
      ?>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
              <ul data-type="navbar" class="sf-menu">
                <li class="active"><a href="./">Home</a>
                </li>
                <li><a href="index-1.html">About</a>
                  <ul>
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">Conse ctetur adipisicing</a></li>
                    <li><a href="#">Elit sed do eiusmod
                        <ul>
                          <li><a href="#">Lorem ipsum</a></li>
                          <li><a href="#">Conse adipisicing</a></li>
                          <li><a href="#">Sit amet dolore</a></li>
                        </ul></a></li>
                    <li><a href="#">Incididunt ut labore</a></li>
                    <li><a href="#">Et dolore magna</a></li>
                    <li><a href="#">Ut enim ad minim</a></li>
                  </ul>
                </li>
                <li><a href="index-2.html">Services</a>
                </li>
                <li><a href="index-3.html">FAQS</a>
                </li>
                <li><a href="index-4.html">Contacts</a>
                </li>
              </ul>
            </nav>
          </div>  <!-- /container -->
        </div>  <!-- /stuck_container -->
      </header>
     