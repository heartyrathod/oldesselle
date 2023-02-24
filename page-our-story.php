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

<section class="es-story-banner">
  <div class="es-story-banner-img">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/banner/banner.png" width="1920" height="893" class="img-fluid">
    <div class="es-story-banner-text">
      <h1>Our story</h1>
      <div class="es-subline">
        <a href="<?php echo site_url(); ?>">Home</a>
        <b>/</b>
        <p>Our story</p>
      </div>
    </div>
  </div>
</section>
<!-- <section class="es-story-content">
  <div class="container">
    <div class="es-story-text">
      <h1>Live <span>Beautifully. </span>Love <span>Endlessly.</span></h1>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id nostrum unde mollitia ullam sit cum ut eius quibusdam vero repudiandae, aliquam laboriosam accusantium, cupiditate aliquid, sapiente amet quos a impedit!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor distinctio nihil repudiandae impedit consectetur quia ut voluptate sequi velit tenetur earum architecto odio sunt numquam necessitatibus, omnis, exercitationem pariatur possimus.
      </p>

    </div>
  </div>
</section> -->
<!--
<section class="es-mission">
  <div class="container">
    <div class="section-titleBox">
      <div class="section-titleBox-title">Our Mission</div>
      <div class="section-titleBox-link"></div>
    </div>
    <div class="row">
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="mission-img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/ourstory/mission.jpg" class="img-fluid">
        </div>
      </div>
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="mission-text">
          <div class="mission-icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/ourstory/mission-icon.png" class="img-fluid">

          </div>
          <h3>Our Mission</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </div>
</section> -->

<section class="es-story-content">
  <div class="container">
    <div class="row">
        <?php 
    if( have_rows('story') ):
      while( have_rows('story') ) : the_row(); ?>
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
      <?php
          the_sub_field('containt'); 
      ?>
    </div>
    <?php 
      endwhile;
      endif;
    ?>
    <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="box">
              <h2>We Design. We Produce. We Distribute.</h2>
              <p>Founded in 2018, Esselle provides a seamless end-to-end supply chain solution for global retailers, online marketplaces & commercial industry. We source, develop and distribute a fabulous range of branded handcrafted artisan houseware products. We also offer bespoke and own label product</p>
            </div>
      </div> 
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="box-img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/products/cushions.jpg" class="img-fluid img" alt="Box image" width="509" height="339">
          <div class="box-text">
            <p>Live Beautifully. Love Endlessly.</p>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="box">
          <h2>Ethically Produced. Environmentally Sourced.</h2>
          <p>Exquisitely Handcrafted. From concept to customer, we pride ourselves in delivering beautifully hand-crafted products from artisan producers across the globe, for every home</p>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="box">
          <h2>We are Designers. We are Manufacturers. We are Supply-Chain Experts.</h2>
          <p>We are an equal opportunity firm, driven by a diverse workforce from across the globe, all working towards an uncompromising commitment to customer satisfaction. Our customer is at the heart of everything we do</p>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="box-img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/products/frag.png" class="img-fluid img" alt="Box image" width="632" height="503">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/ourstory/logo.png" class="img-fluid logo-img" alt="Box image" width="150" height="150">
        </div>
      </div>
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="box">
          <h2>We are a Global Business</h2>
          <p>We have sourcing and merchandising capabilities based in India, combined with our development & design office in the UK. With years of experience building relationships, we have grown to become a leading manufacturer and supply partner across 8 houseware categories. You will find our products in a number of high-street & online retailers, including B&Q, TK Maxx, B&M & Next to name a few.
          </p>
        </div>
      </div> -->
    </div>
  </div>
</section>
<section class="es-history">
  <div class="container">
    <div class="es-history-img">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/ourstory/history.png" class="img-fluid">
    </div>
  </div>
</section>

<?php get_footer();