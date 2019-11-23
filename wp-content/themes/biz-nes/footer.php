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
      <footer>

      <!--провіряєм чи головна сторінка для виводу блоку Контакти -->
      <?php if(is_front_page()|| is_page_template( 'home-page.php' )): ?>
      <section class="well3">
          <div class="container">
            <ul class="row contact-list">
            
              <li class="grid_4">
              <?php if(ot_get_option('contact_adress')):?>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-map-marker"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <address><?php echo ot_get_option('contact_adress');?></address>
                  </div>
                </div>
                 <?php endif;?>
                 <?php if(ot_get_option('contact_email')):?>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-envelope"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                  <a href="mailto:<?php echo ot_get_option('contact_email');?>">
                  <?php echo ot_get_option('contact_email');?></a>
                  </div>
                </div>
                <?php endif;?>
              </li>
           
              <li class="grid_4">
              <?php if(ot_get_option('contact_tel')):?>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-phone"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="tel:<?php echo str_replace(array(' ','-',')','('), '', ot_get_option( 'contact_tel' ))?>">
                  <?php echo ot_get_option('contact_tel');?></a>
                  </div>
                </div>
              <?php endif;?>
              <?php if(ot_get_option('contact_fax')):?>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-fax"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="tel:<?php echo str_replace(array(' ','-',')','('), '', ot_get_option( 'contact_fax' ))?>">
                  <?php echo ot_get_option('contact_fax');?></a>
                </div>
              <?php endif;?>
              </li>
              <li class="grid_4">
              <?php if(ot_get_option('contact_fb')):?>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-facebook"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="<?php echo ot_get_option('contact_fb');?>">Follow on facebook</a></div>
                </div>
              <?php endif;?>
              <?php if(ot_get_option('contact_tw')):?>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-twitter"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="<?php echo ot_get_option('contact_tw');?>">Follow on Twitter</a></div>
                </div>
              <?php endif;?>
              </li>
            </ul>
          </div>
        </section>
<?php endif;?>
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
