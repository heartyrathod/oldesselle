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
          <h1>Brands</h1>
          <div class="es-subline">
            <a href="<?php echo site_url(); ?>">Home</a>
            <b>/</b>
            <p>Brands</p>
          </div>
        </div>
      </div>
    </section>
    <!-- banner end -->
    <!-- brand section start -->
    <section class="es-brand-content">
      <div class="container">
        <div class="row">
      <?php
              $taxonomy     = 'brands';
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
              $image = get_field('image', $taxonomy . '_' . $cat->term_id);

              ?>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="box-img">
              <div class="front">
                <div class="front-img">
                  <img src="<?php echo $image['url']; ?>" class=" img" alt="Box image" width="509" height="339">
                  <div class="box-text">
                    <p><?php echo $cat->name; ?></p>
                  </div>
                </div>
              </div>
              <?php  if(!empty($cat->description)){
              ?>
              <div class="back">
                <p><?php echo $cat->description; ?></p>
              </div>
              <?php } ?>
            </div>
          </div>
        <!-- <div class="es-list-content">
          <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-sm-12">
              <a href="#" class="product-img">
                <img src="<?php echo $image['url']; ?>" width="632" height="503" alt="Product1" class="img-fluid">
              </a>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-sm-12">
              <div class="product-text">
                <a href="<?php echo get_term_link($cat->slug, 'brands'); ?>">
                <?php echo $cat->name; ?></a>
                <p><?php echo $cat->description; ?></p>
              </div>
            </div>
          </div>
        </div> -->

        <?php } ?>
      </div>
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