
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
