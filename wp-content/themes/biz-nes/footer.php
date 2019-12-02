<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biznes
 */

?>

	 <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->


       <!--провіряєм чи головна сторінка для виводу блоку Контакти -->
      <?php if(is_front_page()|| is_page_template( 'home-page.php' )):
        get_template_part('template-parts\contact','page');
       endif;?>
      <footer>
        <section class="widget well3">
          <div class="container">
            <div class="row">
              <div class="grid_4">
              <?php if(is_active_sidebar('footer_left')):
                dynamic_sidebar('footer_left');
              endif;?>
              </div>
              <!-- /.grid_4 -->
              <div class="grid_4">
              <?php if(is_active_sidebar('footer_center')){
                dynamic_sidebar('footer_center');
              } ?>
              </div>
              <!-- /.grid_4 -->
              <div class="grid_4">
              <?php if(is_active_sidebar('footer_right')){ 
                dynamic_sidebar('footer_right');
              }?>
              </div>
              <!-- /.grid_4 -->
            </div>
          </div>  <!--/container-->
      </section>
      <!-- /.widget -->
        <section>
          <div class="container">
            <div class="copyright">
            <?php if (ot_get_option( 'footer_copiright' )){
              echo do_shortcode( ot_get_option( 'footer_copiright' ));
            }?> © <span id="copyright-year"></span>.&nbsp;&nbsp;<a href="index-5.html">Privacy Policy</a>
            </div>
          </div>
        </section>
      </footer>
    </div>

<?php wp_footer(); ?>

</body>
</html>
