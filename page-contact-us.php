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
      <h1>Contact us</h1>
      <div class="es-subline">
        <a href="<?php echo site_url(); ?>">Home</a>
        <b>/</b>
        <p>Contact us</p>
      </div>
    </div>
  </div>
</section>
<section class="es-contact-form">
  <div class="container">
    <div class="es-contact-text">
      <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="es-row-text text-start">
            <p>Whether it's a product query or issue, a query about an order, or general feedback, we'd love to hear from you.</p>
            <p>You can contact us via any of the options below.</p>
            <p class="mt-3 mb-2">Phone Customer Enquiries:</p>
            <div class="contact-details">
              <p>Call: <a href="tel:+44 (0)161 243 0991">+44 (0)161 243 0991</a></p>
              <span>(Monday to Friday from 8:30am to 5:30pm excluding Bank Holidays as times may vary)
              </span>
            </div>
            <p class="mt-3 mb-2">Email: <a href="mailto:sales@esselleltd.com">sales@esselleltd.com</a></p>
          </div>
          <!-- <div class="es-row-text1">
            <ul>
              <li>
                <div class="es-social-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                  </svg>
                </div>
                <p><?php echo get_field( "address" ); ?></p>
              </li>
              <li>
                <div class="es-social-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                  </svg>
                </div>
                <a href="tel:<?php echo get_field( "phone" ); ?>"><?php echo get_field( "phone" ); ?></a>
              </li>
              <li>
                <div class="es-social-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                  </svg>
                </div>
                <a href="mailto:<?php echo get_field( "email" ); ?>"><?php echo get_field( "email" ); ?></a>
              </li>

            </ul>
          </div> -->
        </div>
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="es-row-text2">
            <?php echo do_shortcode('[contact-form-7 id="526" title="Contact form 1"]'); ?>
            <!-- <form>
              <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-6">
                  <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="name" required>
                  </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-6">
                  <div>
                    <label for="phone">Phone</label>
                    <input type="phone" name="phone" id="phone" class="phone" required>
                  </div>
                </div>
              </div>

              <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="email" required>
              </div>
              <div>
                <label for="msg">Message</label>
                <textarea name="msg" id="msg" class="msg" rows="8"></textarea>
              </div>
              <div class="form-btn">
                <button class="e-btn" type="submit">Send</button>
              </div>

            </form> -->
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
  </div>
</section>
<!-- <section class="es-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.70717984336!2d72.43965621445858!3d23.020497769509888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1668236884785!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section> -->



<?php
 get_footer();
?>