<!-- <footer class="es-footer">
      <div class="es-footer-content">
        <div class="container">
          <div class="es-footer-text">
            <div class="es-footer-logo">
              <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $image = wp_get_attachment_image_src($custom_logo_id, 'full');
              ?>
              <img src="<?php echo $image[0]; ?>" alt="<?php bloginfo('name'); ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" class="img-fluid">
            </div>
            <h5>Ethically Produced. Environmentally Sourced. Exquisitely Handcrafted.
              From Concept to Customer, we pride ourselves in delivering beautifully hand-crafted products from Artisan producers across the globe, for every home.</h5>
            <h6>Live <span>Beautifully. </span>Love <span>Endlessly.</span></h6>
            <div class="es-footer-add">
              <p><?php echo get_field( "address", 288 ); ?></p>
              <div class="es-footer-socila-link">
                <a href="tel:<?php echo get_field( "phone", 288 ); ?>"><b>t</b>:
                 <?php echo get_field( "phone", 288 ); ?></a>
                <a href="mailto:<?php echo get_field( "emiail", 288 ); ?>"><b>e</b>:
                <?php echo get_field( "emiail", 288 ); ?></a>
              </div>
              <div class="es-footer-privacy">
                <?php wp_nav_menu( array('menu'=>'Footer Menu')); ?>
                <!-- comment -->

<!-- <a href="#">Privacy Policy</a>
                <a href="#">Terms & Condition</a> -->

<!-- comment -->
<!-- </div>  -->
<!-- <div class="es-footer-copyright">
                <p>Copyright 2022 ESSELLE Limited. All Rights Reserved.</p>
                <ul class="es-footer-social-icon">
                  <?php if( have_rows('social_menu', 288) ):

                    // Loop through rows.
                    while( have_rows('social_menu', 288) ) : the_row();
                    $social_image = get_sub_field('image');
                    $social_name = get_sub_field('name');
                    $social_link = get_sub_field('link');
                    // print_r($social_image['url']);
                    ?>
                    <li>
                      <a href="<?php echo $social_link; ?>" target="_blank">
                        <img src="<?php echo $social_image['url']; ?>" width="35" height="35" class="img-fluid">
                      </a>
                    </li>
                    <?php
                    // End loop.
                      endwhile;
                    endif;
                  ?> -->

<!-- comment -->

<!-- <li><a href="#">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/instagram.png" width="35" height="35" class="img-fluid">
                    </a></li>
                  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/facebook.png" width="35" height="35" class="img-fluid"></a></li>
                  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/linkedin.png" width="35" height="35" class="img-fluid"></a></li> -->

<!-- comment -->

<!-- </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer> -->
<?php if (is_shop() || is_product() || is_product_category()  || is_tax()) { ?>
  <?php if ( !is_user_logged_in() ) { ?>
<section class="es-trade-account">
  <div class="container">
    <div class="es-trade-content">
      <p>if you want to see more... apply for a trade account.</p>
      <a href="<?php echo site_url('my-account'); ?>" class="e-btn" type="submit">Apply for trade account</a>
    </div>
  </div>
</section>
<?php } } ?>
<section class="es-new-subs">
  <div class="es-new-subs-content">
    <div class="container">
      <div class="section-titleBox">
        <div class="section-titleBox-title">Don't Miss Out</div>
        <div class="section-titleBox-link"></div>
      </div>
      <div class="subs-content-text">
        <p>
          Sign up to our newsletters and be the first to hear the latest events,
          news, and updates from Esselle. Read our Privacy Policy here.
        </p>
        <div class="tnp  ">
          <form method="post" action="<?php echo site_url(); ?>/?na=s">

          <input type="hidden" name="nlang" value="">
          <div class="tnp-field tnp-field-email form-content">
            <!-- <label for="tnp-3">Email</label> -->
            <input class="tnp-email" type="email" name="ne" id="tnp-3" value="" required placeholder="Email Address">
            <!-- <input class="tnp-submit" type="submit" value="Subscribe" > -->
            <button type="submit" class="e-btn">Subscribe</button>
          </div>
          </form>
        </div>
        <!-- <form>
          <div class="form-content">
            <input type="email" class="email" placeholder="Email Address">
            <button type="submit" class="e-btn">Submit</button>
          </div>
        </form> -->
      </div>
    </div>
  </div>
</section>

<section class="on-top">
  <div class="container">
    <a href="#" class="on-top-img">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
      </svg>
      <p>Bake to top</p>
    </a>
  </div>
</section>

<footer class="es-footer">
  <div class="es-footer-content">
    <div class="es-footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="icon-content">
              <div class="icon-text">
                <p>supporting</p>
                <p>independent business</p>
              </div>
              <div class="icon-img">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="20" height="20">
                  <path d="M506.1 127.1c-17.97-20.17-61.46-61.65-122.7-71.1c-22.5-3.354-45.39 3.606-63.41 18.21C302 60.47 279.1 53.42 256.5 56.86C176.8 69.17 126.7 136.2 124.6 139.1c-7.844 10.69-5.531 25.72 5.125 33.57c4.281 3.157 9.281 4.657 14.19 4.657c7.406 0 14.69-3.375 19.38-9.782c.4062-.5626 40.19-53.91 100.5-63.23c7.457-.9611 14.98 .67 21.56 4.483L227.2 168.2C214.8 180.5 207.1 196.1 207.1 214.5c0 17.5 6.812 33.94 19.16 46.29C239.5 273.2 255.9 279.1 273.4 279.1s33.94-6.813 46.31-19.19l11.35-11.35l124.2 100.9c2.312 1.875 2.656 5.251 .5 7.97l-27.69 35.75c-1.844 2.25-5.25 2.594-7.156 1.063l-22.22-18.69l-26.19 27.75c-2.344 2.875-5.344 3.563-6.906 3.719c-1.656 .1562-4.562 .125-6.812-1.719l-32.41-27.66L310.7 392.3l-2.812 2.938c-5.844 7.157-14.09 11.66-23.28 12.6c-9.469 .8126-18.25-1.75-24.5-6.782L170.3 319.8H96V128.3L0 128.3v255.6l64 .0404c11.74 0 21.57-6.706 27.14-16.14h60.64l77.06 69.66C243.7 449.6 261.9 456 280.8 456c2.875 0 5.781-.125 8.656-.4376c13.62-1.406 26.41-6.063 37.47-13.5l.9062 .8126c12.03 9.876 27.28 14.41 42.69 12.78c13.19-1.375 25.28-7.032 33.91-15.35c21.09 8.188 46.09 2.344 61.25-16.47l27.69-35.75c18.47-22.82 14.97-56.48-7.844-75.01l-120.3-97.76l8.381-8.382c9.375-9.376 9.375-24.57 0-33.94c-9.375-9.376-24.56-9.376-33.94 0L285.8 226.8C279.2 233.5 267.7 233.5 261.1 226.8c-3.312-3.282-5.125-7.657-5.125-12.31c0-4.688 1.812-9.064 5.281-12.53l85.91-87.64c7.812-7.845 18.53-11.75 28.94-10.03c59.75 9.22 100.2 62.73 100.6 63.29c3.088 4.155 7.264 6.946 11.84 8.376H544v175.1c0 17.67 14.33 32.05 31.1 32.05L640 384V128.1L506.1 127.1zM48 352c-8.75 0-16-7.245-16-15.99c0-8.876 7.25-15.99 16-15.99S64 327.2 64 336.1C64 344.8 56.75 352 48 352zM592 352c-8.75 0-16-7.245-16-15.99c0-8.876 7.25-15.99 16-15.99s16 7.117 16 15.99C608 344.8 600.8 352 592 352z" />
                </svg>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="icon-content">
              <div class="icon-text">
                <p>family run </p>
                <p>company</p>
              </div>
              <div class="icon-img">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
                </svg>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="icon-content">
              <div class="icon-text">
                <p>free nationwide </p>
                <p>delivery</p>
              </div>
              <div class="icon-img">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                  <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                </svg>

              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="icon-content">
              <div class="icon-text">
                <p>trade only</p>
                <p>showrooms open daily</p>
              </div>
              <div class="icon-img">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                  <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z" />
                  <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z" />
                </svg>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="es-footer-bottom">
      <div class="container">
        <div class="es-footer-links">
          <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <h6>Categories</h6>
              <ul>
                <?php
              $taxonomy     = 'product_cat';
              $orderby      = 'name';
              $show_count   = 0;      // 1 for yes, 0 for no
              $pad_counts   = 0;      // 1 for yes, 0 for no
              $hierarchical = 1;      // 1 for yes, 0 for no
              $title        = '';
              $empty        = 0;

              $args = array(
                    'taxonomy'     => $taxonomy,
                    'orderby'      => $orderby,
                    'show_count'   => $show_count,
                    'pad_counts'   => $pad_counts,
                    'hierarchical' => $hierarchical,
                    'title_li'     => $title,
                    'hide_empty'   => $empty
              );
            $all_categories = get_categories( $args );
            // print_r($all_categories);
          ?>
          <?php foreach ($all_categories as $key=>$cat) {
            ?>
                <li>
                  <a href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>"><?php echo $cat->name; ?></a>
                </li>
                <?php } ?>
                <!-- <li>
                  <a href="#">Doormats</a>
                </li>
                <li>
                  <a href="#">Home Fragrance</a>
                </li>
                <li>
                  <a href="#">Rugs</a>
                </li>
                <li>
                  <a href="#">Storage</a>
                </li>
                <li>
                  <a href="#">Tableware</a>
                </li> -->
              </ul>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <h6>About</h6>
              <?php
                wp_nav_menu(array(
                  'menu'=>'Footer Menu',
                  'menu_class'=>'', 'container' => 'ul')
                );
              ?>
              <!-- <ul>
                <li>
                  <a href="#">About Us</a>
                </li>
                <li>
                  <a href="#">Privacy and Policy</a>
                </li>
                <li>
                  <a href="#">Home Fragrance</a>
                </li>
                <li>
                  <a href="#">Terms and Conditions</a>
                </li>
                <li>
                  <a href="#">Contact Us</a>
                </li>
              </ul> -->
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <h6>Account</h6>
              <ul>
                <li>
                  <a href="<?php echo site_url('my-account'); ?>">Create an account</a>
                </li>
                <li>
                  <a href="<?php echo site_url('my-account'); ?>">Login</a>
                </li>
              </ul>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 social">
              <div class="social-icon-content">
                <h6>Visit us on social media</h6>
                <ul class="social-icon">
                  <?php if( have_rows('social_menu', 288) ):

                  // Loop through rows.
                  while( have_rows('social_menu', 288) ) : the_row();
                  $social_image = get_sub_field('image');
                  $social_name = get_sub_field('name');
                  $social_link = get_sub_field('link');
                  $social_icon = get_sub_field('icon');
                  // print_r($social_image['url']);
                  ?>
                  <li>
                    <a href="<?php echo $social_link; ?>" target="_blank">
                      <?php echo $social_icon; ?>
                      <!-- <img src="<?php echo $social_image['url']; ?>" width="35" height="35" class="img-fluid"> -->
                    </a>
                  </li>
                  <?php
                  // End loop.
                    endwhile;
                  endif;
                ?>
                  <!-- <li><a href="#">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/instagram.png" width="35" height="35" class="img-fluid">
                    </a></li>
                  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/facebook.png" width="35" height="35" class="img-fluid"></a></li>
                  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/linkedin.png" width="35" height="35" class="img-fluid"></a></li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="es-footer-text">
          <div class="es-footer-logo mb-3">
            <?php
              $custom_logo_id = get_theme_mod('custom_logo');
              $image = wp_get_attachment_image_src($custom_logo_id, 'full');
            ?>
            <img src="<?php echo $image[0]; ?>" alt="<?php bloginfo('name'); ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" class="img-fluid">
          </div>
          <h6>Live <span>Beautifully. </span>Love <span>Endlessly.</span></h6>
          <div class="es-footer-address">
            <p><?php echo get_field( "address", 288 ); ?></p>
            <div class="es-footer-contact">
              <a href="tel:<?php echo get_field( "phone", 288 ); ?>"><b>t: </b><?php echo get_field( "phone", 288 ); ?></a>
              <a href="mailto:<?php echo get_field( "emiail", 288 ); ?>"><b>e: </b><?php echo get_field( "emiail", 288 ); ?></a>
            </div>
			 
            <p>Copyright 2022 ESSELLE Limited. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.6.1.min.js" type="text/javascript">
</script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.min.js" type="text/javascript">
</script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/script.js" type="text/javascript"></script>



<?php wp_footer(); ?>