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

        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
            <?php 
              wp_nav_menu([
                'theme_location'  => 'pimary',
                'menu'            => '', 
                'menu_class'      => 'sf-menu', 
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'items_wrap'      => '<ul id="%1$s" data-type="navbar" class="%2$s">%3$s</ul>',
              ]);
            ?>
            </nav>
          </div>  <!-- /container -->
        </div>  <!-- /stuck_container -->
      </header>
     