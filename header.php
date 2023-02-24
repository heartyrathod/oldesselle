<?php
/**
 * The header.

 * @package WordPress
 * @subpackage esselle
 * @since esselle 1.0
 */


?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Esselle">
    <title>Esselle</title>
    <!-- <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet"> -->
    <!-- <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/home.min.css" rel="stylesheet"> -->
    <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <!-- drawer menu start -->
    <div class="es-menu-navigation-drawer container-fluid">
      <div class="es-header-wrap">
        <div class="es-header-navbar">
          <a href="<?php echo site_url(); ?>" class="es-header-logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/esselle logo.png" width="242" height="115" class="img-fluid" alt="Esselle">
          </a>
          <div class="es-searchBox">
            <form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
                <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>" />
                <div class="search-icon">
                  <input type="submit" value="<?php echo esc_attr_x( '', 'submit button', 'woocommerce' ); ?>" />
                </div>
                <input type="hidden" name="post_type" value="product" />
              </form>
            <!-- <input type="text" id="search" placeholder="Search">
            <label for="search" class="icon">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/magnifying.png" width="29" height="28">
            </label> -->
          </div>
          <?php
                wp_nav_menu(array(
                  'theme_location'=>'primary-menu',
                  'menu_class'=>'', 'container' => 'ul')
                );
              ?>
          <!-- <ul class="es-header-list">
            <li>
              <a href="ourstory.html" class="nav-link">Our story</a>
            </li>
            <li>
              <a href="brand.html" class="nav-link">Brands</a>
            </li>
            <li class="dropdown">
              <a href="product.html" class="dropbtn nav-link">Our Products</a>
              <ul class="dropdown-content">
                <li><a href="#">All product</a></li>
                <li><a href="#">By category</a></li>
                <li><a href="#">By room</a></li>
                <li><a href="#">By brand</a></li>
              </ul>
            </li>
            <li>
              <a href="news.html" class="nav-link">News & Events</a>
            </li>
            <li>
              <a href="contact.html" class="nav-link" target="_blank">Contact US</a>
            </li>
            <ul>
              <li><a href="#">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/instagram.png" width="35" height="35" class="img-fluid">
                </a></li>
              <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/facebook.png" width="35" height="35" class="img-fluid"></a></li>

              <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/linkedin.png" width="35" height="35" class="img-fluid"></a></li>
            </ul>
          </ul> -->
        </div>
        <div class="es-social">
          <div class="es-social-icon">
            <?php if ( is_user_logged_in() ) { ?>
              <a href="<?php echo site_url('my-account'); ?>">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/login.png" width="35" height="35" class="img-fluid">
                  <div class="title">My Account</div>
                </a>
            <?php } else { ?>
            <a href="#">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/login.png" width="35" height="35" class="img-fluid">
              <div class="title">My trade login</div>
            </a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="es-overlay"></div>
    <!-- drawer menu end -->

    <!-- header start -->
    <header class="es-header">
      <div class="container">
        <div class="es-header-wrap">
          <div class="es-header-navbar">
             <?php
              $custom_logo_id = get_theme_mod('custom_logo');
              $image = wp_get_attachment_image_src($custom_logo_id, 'full');
            ?>
            <a href="<?php echo site_url(); ?>">
              <img src="<?php echo $image[0]; ?>" alt="<?php bloginfo('name'); ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" class="img-fluid">
            </a>
             <?php
                wp_nav_menu(array(
                  'theme_location'=>'primary-menu',
                  'menu_class'=>'es-header-list', 'container' => 'ul')
                );
              ?>
            <!-- <ul>
              <li>
                <a href="ourstory.html">Our story</a>
              </li>
              <li>
                <a href="brand.html">Brands</a>
              </li>
              <li class="dropdown">
                <a href="product.html" class="dropbtn">Our products</a>
                <ul class="dropdown-content">
                  <li><a href="#">All product</a></li>
                  <li><a href="#">By category</a></li>
                  <li><a href="#">By room</a></li>
                  <li><a href="#">By brand</a></li>
                </ul>
              </li>
              <li>
                <a href="news.html">News & events</a>
              </li>
              <li>
                <a href="contact.html">Contact us</a>
              </li>
            </ul> -->
          </div>
          <div class="es-social">
            <div class="es-social-icon">
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
                <!-- <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/facebook.png" width="35" height="35" class="img-fluid"></a></li>
                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/linkedin.png" width="35" height="35" class="img-fluid"></a></li> -->
              </ul>
              <?php if ( is_user_logged_in() ) { ?>
                <a href="<?php echo site_url('my-account'); ?>">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/login.png" width="35" height="35" class="img-fluid">
                  <div class="title">My Account</div>
                </a>

                  <?php $items_count = WC()->cart->get_cart_contents_count(); ?>
                <a href="<?php echo wc_get_cart_url() ?>" class="es-cart">
                  <div class="es-cart-content">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/Group-1.svg" width="35" height="35">
                    <?php if($items_count>0){ ?>
                      <div class="es-cart-item" id="es-cart-item"><?php echo $items_count; ?></div>
                    <?php } ?>
                  </div>

                </a>
              <?php } else { ?>
                <a href="<?php echo site_url('my-account'); ?>">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/login.png" width="35" height="35" class="img-fluid">
                  <div class="title">My trade login</div>
                </a>
              <?php } ?>
            </div>
            <div class="es-searchBox">
              <form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
                <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>" />
                <div class="search-icon">
                  <input type="submit" value="<?php echo esc_attr_x( '', 'submit button', 'woocommerce' ); ?>" />
                </div>
                <input type="hidden" name="post_type" value="product" />
              </form>
            </div>
          </div>
          <div class="es-icons">
            <div class="es-header-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
              </svg>
            </div>
              <?php $items_count = WC()->cart->get_cart_contents_count(); ?>
              <a href="<?php echo wc_get_cart_url() ?>" class="es-cart">
                <div class="es-cart-content">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/header/Group-1.svg" width="35" height="35">
                  <?php if($items_count>0){ ?>
                    <div class="es-cart-item" id="es-cart-item"><?php echo $items_count; ?></div>
                  <?php } ?>
                </div>

              </a>
          </div>
        </div>
      </div>
    </header>
    <!-- header end -->
