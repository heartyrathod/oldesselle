<?php
/**
 * new file


 * @link https:C:\xampp\htdocs\wordpress\wp-content\themes\esselle-child
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>



<main>
  <section class="es-banner">
    <?php echo do_shortcode('[rev_slider alias="banner"][/rev_slider]'); ?>

    <!-- <div class="owl-carousel es-banner-slider">
          <div class="item">
            <div class="es-banner-img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/banner/banner.png" width="1920" height="893" class="img-fluid" alt="banner">
              <div class="es-banner-text">
                <h1>Live <span>Beautifully. </span>Love <span>Endlessly.</span></h1>
                <a href="#" class="e-btn">Shop the range</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="es-banner-img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/banner/banner.png" width="1920" height="893" class="img-fluid" alt="banner">
              <div class="es-banner-text">
                <h1>Live <span>Beautifully. </span>Love <span>Endlessly.</span></h1>
                <a href="#" class="e-btn">Shop the range</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="es-banner-img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/banner/banner.png" width="1920" height="893" class="img-fluid" alt="banner">
              <div class="es-banner-text">
                <h1>Live <span>Beautifully. </span>Love <span>Endlessly.</span></h1>
                <a href="#" class="e-btn">Shop the range</a>
              </div>
            </div>
          </div>
        </div> -->
  </section>
  <section class="es-brand">
    <div class="section-titleBox">
      <div class="section-titleBox-title">Brands</div>
      <div class="section-titleBox-link"></div>
    </div>
    <div class="container">
      <div class="owl-carousel es-brand-slider">
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
              // print_r($image);
              ?>
        <div class="item">
          <div class="es-brand-img">
            <a href="<?php echo get_term_link($cat->slug, 'brands'); ?>">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $cat->name; ?>" widht="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" class="img-fluid">
            </a>
          </div>
        </div>
        <?php } ?>
        <!-- <div class="item">
          <div class="es-brand-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Brand/brand2.png" alt="brand2" widht="150" height="150" class="img-fluid">
          </div>
        </div>
        <div class="item">
          <div class="es-brand-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Brand/brand3.png" alt="brand3" widht="150" height="150" class="img-fluid">
          </div>
        </div>
        <div class="item">
          <div class=" es-brand-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Brand/brand4.png" alt="brand4" widht="150" height="150" class="img-fluid">
          </div>
        </div>
        <div class="item">
          <div class="es-brand-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Brand/brand5.png" alt="brand5" widht="150" height="150" class="img-fluid">
          </div>
        </div>
        <div class="item">
          <div class="es-brand-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Brand/brand6.png" alt="brand6" widht="150" height="150" class="img-fluid">
          </div>
        </div>
        <div class="item">
          <div class="es-brand-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Brand/brand7.png" alt="brand7" widht="150" height="150" class="img-fluid">
          </div>
        </div>
        <div class="item">
          <div class="es-brand-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Brand/brand8.png" alt="brand8" widht="150" height="150" class="img-fluid">
          </div>
        </div>
        <div class="item">
          <div class="es-brand-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Brand/brand9.png" alt="brand9" widht="150" height="150" class="img-fluid">
          </div>
        </div> -->
      </div>
      <div class="es-brand-navigation">
        <a href="javascript:void(0)" class="b-prevnavigation">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" height="18" width="18">
            <path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
          </svg>
        </a>
        <a href="javascript:void(0)" class="b-nextnavigation">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" height="18" width="18">
            <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
          </svg>
        </a>
      </div>
    </div>
  </section>
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
      ?>
  <section class="es-product">
    <div class="es-product-content">
      <div class="section-titleBox">
        <div class="section-titleBox-title">Products by category</div>
        <div class="section-titleBox-link"></div>
      </div>
      <div class="es-product-list">
        <?php foreach ($all_categories as $cat) {
              $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
              // get the image URL
              $image = wp_get_attachment_url( $thumbnail_id );
              ?>
        <div class="list">
          <div class="es-product-img">
            <img src="<?php echo $image; ?>" width="632" height="503" alt="Rugs" class="img-fluid">
            <a href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>" class="es-product-link">
              <?php echo $cat->name; ?>
              <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" viewBox="0 0 140 140">
                <g id="arrow" transform="translate(-1584 -840)">
                  <rect id="Rectangle_1083" data-name="Rectangle 1083" width="140" height="140" transform="translate(1584 840)" fill="none" />
                  <g id="Group_1587" data-name="Group 1587" transform="translate(20 -3)">
                    <path id="Path_6317" data-name="Path 6317" d="M1568,888h132" transform="translate(0 25)" fill="none" stroke="#d7d2cb" stroke-width="1" />
                    <path id="Path_6318" data-name="Path 6318" d="M1592,880l33,33-33,33" transform="translate(75 0)" fill="none" stroke="#d7d2cb" stroke-width="1" />
                  </g>
                </g>
              </svg>

            </a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>




  <?php
     $args = array( 'post_type' => 'event', 'posts_per_page' => 1 );
     $loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post();

?>
  <!-- <section class="es-event">
    <div class="es-event-content">
      <div class="section-titleBox">
        <div class="section-titleBox-title">Upcoming Event</div>
        <div class="section-titleBox-link"></div>
      </div>
      <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="es-event-img">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($loop->ID)) ?>" class="img-responsive" />
          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="es-event-text">

            <h3>
              <?php echo the_title(); ?>
            </h3>
            <?php echo get_field( "date", $loop->ID ); ?> -->
  <!-- <h4> <?php //echo the_title(); ?></h4> -->
  <!-- <p>
              <?php echo the_content(); ?>
            </p>
            <div class="es-event-button">
              <a href="<?php echo get_permalink($loop->ID) ?>" class="e-btn">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <?php endwhile;
      ?>


  <section class="es-home">
    <div class="es-home-content">
      <div class="section-titleBox">
        <div class="section-titleBox-title">In your home</div>
        <div class="section-titleBox-link"></div>
      </div>
      <div class="container">
        <div class="es-home-slide">
          <div class="row">
            <div class="owl-carousel es-home-slider">
              <?php
              $args = array(
                  'numberposts' => 5,
                  'post_type'   => 'product'
                );

                $latest_product = get_posts( $args );
                foreach($latest_product as $prdt){
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $prdt->ID ), 'single-post-thumbnail' );
                  // $thumbnail_id = get_term_meta( $prdt->ID, 'thumbnail_id', true );
                  // $image = wp_get_attachment_url( $thumbnail_id );
              ?>
              <div class="item">
                <div class="es-home-img">
                  <img src="<?php  echo $image[0]; ?>" width="632" height="503" class="img-fluid" alt="<?php echo $prdt->post_title; ?>">
                  <a herf="<?php echo get_permalink($prdt->ID); ?>" class="e-btn">
                    <?php echo $prdt->post_title; ?>
                  </a>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>

        </div>
        <div class="btns">
          <div class="container">
            <div class="es-home-navigation">
              <a href="javascript:void(0)" class="e-prevnavigation">
                <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="140" height="140" viewBox="0 0 140 140">
                  <rect id="Rectangle_1083" data-name="Rectangle 1083" width="140" height="140" fill="none" />
                  <g id="Group_1587" data-name="Group 1587" transform="translate(4 37)">
                    <path id="Path_6317" data-name="Path 6317" d="M1700,888H1568" transform="translate(-1568 -855)" fill="none" stroke="#d7d2cb" stroke-width="1" />
                    <path id="Path_6318" data-name="Path 6318" d="M1625,880l-33,33,33,33" transform="translate(-1592 -880)" fill="none" stroke="#d7d2cb" stroke-width="1" />
                  </g>
                </svg>

              </a>
              <a href="javascript:void(0)" class="e-nextnavigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" viewBox="0 0 140 140">
                  <g id="arrow" transform="translate(-1584 -840)">
                    <rect id="Rectangle_1083" data-name="Rectangle 1083" width="140" height="140" transform="translate(1584 840)" fill="none" />
                    <g id="Group_1587" data-name="Group 1587" transform="translate(20 -3)">
                      <path id="Path_6317" data-name="Path 6317" d="M1568,888h132" transform="translate(0 25)" fill="none" stroke="#d7d2cb" stroke-width="1" />
                      <path id="Path_6318" data-name="Path 6318" d="M1592,880l33,33-33,33" transform="translate(75 0)" fill="none" stroke="#d7d2cb" stroke-width="1" />
                    </g>
                  </g>
                </svg>

              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>







<?php
 get_footer();
?>