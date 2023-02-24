<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <main>
    <!-- banner start -->
    <section class="es-brand-banner">
      <div class="es-brand-banner-img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/banner/banner.png" width="1920" height="893" class="img-fluid">
        <div class="es-brand-banner-text">
          <h1>Catalogues</h1>
          <div class="es-subline">
            <a href="<?php echo site_url(); ?>">Home</a>
            <b>/</b>
            <p>Catalogues</p>
          </div>
        </div>
      </div>
    </section>
    <!-- banner end -->
    <!-- brand section start -->
    <section class="es-brand-content">
      <div class="container">
        <?php if(isset($_GET['dflip']) && $_GET['dflip']!=''){ ?>
           <?php echo do_shortcode('[dflip id="'.$_GET['dflip'].'" ][/dflip]'); ?>
        <?php } else { ?>
          <div class="row">
            <?php
              $args = array(
                'numberposts' => -1,
                'post_type'   => 'dflip'
              );

              $latest_product = get_posts( $args );
              // echo "<pre>"; print_r($latest_product); "</pre>";
              foreach($latest_product as $prdt){
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $prdt->ID ), 'single-post-thumbnail' );
                // echo "<pre>"; print_r($image); "</pre>";
                ?>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="box-img">
                  <div class="front">
                    <div class="">
                      <a href="<?php echo get_permalink($post->ID); ?>?dflip=<?php echo $prdt->ID; ?>" target="_blank"><img src="<?php echo $image[0]; ?>" class="img" alt="<?php echo $prdt->post_title; ?>" width="509" height="339"></a>
                    </div>
                    <div class=" mt-2">
                      <a href="<?php echo get_permalink($prdt->ID); ?>"  target="_blank"><h3><?php echo $prdt->post_title; ?></h3></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        <?php } ?>
      </div>
    </section>
    <!-- brand section end -->
    <!-- <section class="es-brand-content">
      <div class="container">
        <div class="row">
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-md-12">
            <div class="box-img">
              <div class="front">
                <div class="front-img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Brand/b1.png" class="img-fluid img" alt="Box image" width="509" height="339">
                  <div class="box-text">
                    <p>Mayfair</p>
                  </div>
                </div>
              </div>
              <div class="back">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-md-12">
            <div class="box-img">
              <div class="front">
                <div class="front-img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Brand/b2.png" class="img-fluid img" alt="Box image" width="509" height="339">
                  <div class="box-text">
                    <p>Kavala</p>
                  </div>
                </div>
              </div>
              <div class="back">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-md-12">
            <div class="box-img">
              <div class="front">
                <div class="front-img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Brand/b3.png" class="img-fluid img" alt="Box image" width="509" height="339">
                  <div class="box-text">
                    <p>Naturelle</p>
                  </div>
                </div>
              </div>
              <div class="back">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-md-12">
            <div class="box-img">
              <div class="front">
                <div class="front-img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Brand/b4.png" class="img-fluid img" alt="Box image" width="509" height="339">
                  <div class="box-text">
                    <p>Revival</p>
                  </div>
                </div>
              </div>
              <div class="back">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-md-12">
            <div class="box-img">
              <div class="front">
                <div class="front-img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Brand/b5.png" class="img-fluid img" alt="Box image" width="509" height="339">
                  <div class="box-text">
                    <p>Pride Of Place</p>
                  </div>
                </div>
              </div>
              <div class="back">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>

          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-md-12">
            <div class="box-img">
              <div class="front">
                <div class="front-img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Brand/b6.png" class="img-fluid img" alt="Box image" width="509" height="339">
                  <div class="box-text">
                    <p>Splendid Home</p>
                  </div>
                </div>
              </div>
              <div class="back">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-md-12">
            <div class="box-img">
              <div class="front">
                <div class="front-img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Brand/b7.png" class="img-fluid img" alt="Box image" width="509" height="339">
                  <div class="box-text">
                    <p>Charlie and Coco</p>
                  </div>
                </div>
              </div>
              <div class="back">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-md-12">
            <div class="box-img">
              <div class="front">
                <div class="front-img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Brand/b8.png" class="img-fluid img" alt="Box image" width="509" height="339">
                  <div class="box-text">
                    <p>Home Sense</p>
                  </div>
                </div>
              </div>
              <div class="back">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-md-12">
            <div class="box-img">
              <div class="front">
                <div class="front-img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Brand/b9.png" class="img-fluid img" alt="Box image" width="509" height="339">
                  <div class="box-text">
                    <p>Diya</p>
                  </div>
                </div>
              </div>
              <div class="back">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-md-12">
            <div class="box-img">
              <div class="front">
                <div class="front-img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Brand/b10.png" class="img-fluid img" alt="Box image" width="509" height="339">
                  <div class="box-text">
                    <p>Mudstopper</p>
                  </div>
                </div>
              </div>
              <div class="back">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
  </main>

</article>
<?php
get_footer();
?>