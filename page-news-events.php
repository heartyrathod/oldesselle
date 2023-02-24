<?php
/**
 * Auther: Kaushal Patel


 * @link https:C:\xampp\htdocs\wordpress\wp-content\themes\esselle-child
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<section class="es-contact-banner">
  <div class="es-contact-banner-img">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/banner/banner.png" width="1920" height="893" class="img-fluid">
    <div class="es-contact-banner-text">
      <h1>News And Events</h1>
      <div class="es-subline">
        <a href="<?php echo site_url(); ?>">Home</a>
        <b>/</b>
        <p>News And Events</p>
      </div>
    </div>
  </div>
</section>
<section class="news">
  <div class="container">
    <div class="row">
      <?php
        $args = array(
            'numberposts' => -1,
            'post_type'   => 'event'
          );

          $latest_event = get_posts( $args );
          foreach($latest_event as $event){
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $event->ID ), 'single-post-thumbnail' );
            // $thumbnail_id = get_term_meta( $event->ID, 'thumbnail_id', true );
            // $image = wp_get_attachment_url( $thumbnail_id );
        ?>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="news-content">
          <div class="news-content-wrap">
            <div class="image-block">
              <a href="#" class="news-link">
                <img src="<?php  echo $image[0]; ?>" alt="<?php echo $event->post_title; ?>">
              </a>
            </div>
            <div class="news-desc">
              <a href="<?php echo get_permalink($event->ID); ?>" class="news-eventdate">
              <?php echo $event->post_title; ?></a>
              <p><?php echo $event->post_excerpt; ?></p>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="news-content">
          <div class="news-content-wrap">
            <div class="image-block">
              <a href="#" class="news-link">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/event/event.png" alt="Highly Recommend">
              </a>
            </div>
            <div class="news-desc">
              <a href="#" class="news-eventdate">Category Name</a>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="news-content">
          <div class="news-content-wrap">
            <div class="image-block">
              <a href="#" class="news-link">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/event/event.png" alt="Highly Recommend">
              </a>
            </div>
            <div class="news-desc">
              <a href="#" class="news-eventdate">Category Name</a>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor</p>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>
<?php
 get_footer();
?>