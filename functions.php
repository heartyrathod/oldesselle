<?php
remove_role('student');
remove_role('parent');
remove_role('teacher');
add_action('after_setup_theme', 'woocommerce_support');
function woocommerce_support()
{
  add_theme_support('woocommerce');
}
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

function enqueue_parent_styles()
{

  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}


add_filter('woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count', 10, 1);
function wc_refresh_mini_cart_count($fragments)
{
  ob_start();
  $items_count = WC()->cart->get_cart_contents_count();
  if ($items_count > 0) {
?>
    <div class="es-cart-item" id="es-cart-item"><?php echo $items_count ? $items_count : '&nbsp;'; ?></div>
  <?php
  } else {
  ?>
<?php
  }
  $fragments['#es-cart-item'] = ob_get_clean();
  return $fragments;
}

add_filter('woocommerce_add_to_cart_fragments', 'wc_refresh_free_delevery_msg', 10, 1);
function wc_refresh_free_delevery_msg($fragments)
{
  ob_start();
  $items_count = WC()->cart->subtotal;
  if ((int)$items_count <= 500) {
?>
    <div class="free_delevery_msg" id="free_delevery_msg"><?php echo esc_html__( 'Note: Order over £500.00 to be eligible for free delivery.', 'woocommerce' ); ?></div>
  <?php
  } else {
    ?>
    <div class="free_delevery_msg" id="free_delevery_msg"></div>

<?php
  }
  $fragments['#free_delevery_msg'] = ob_get_clean();
  return $fragments;
}

// function my_custom_scripts() {
//   wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/home.min.css', false, '1.1', 'all');
//   wp_enqueue_script('myscript', get_stylesheet_directory_uri() . 'assets/js/jquery-3.6.1.min.js');
//   wp_enqueue_script('myscript', get_stylesheet_directory_uri() . 'assets/js/script.js', array('jquery'));
// }
// add_action('wp_enqueue_scripts', 'my_custom_scripts');

function pomerol_home_enqueue_scripts()
{

  if (is_front_page()) {
    wp_register_style('pom_carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1');
    wp_enqueue_style('pom_carousel');
    wp_register_style('pom_home_css', get_stylesheet_directory_uri() . '/assets/css/home.min.css', array(), '1');
    wp_enqueue_style('pom_home_css');
  } else if (is_page('brands')) {
    wp_register_style('brands-style', get_stylesheet_directory_uri() . '/assets/css/brands.min.css', array(), '1');
    wp_enqueue_style('brands-style');
  } else if (is_page('catalogues')) {
    wp_register_style('brands-style', get_stylesheet_directory_uri() . '/assets/css/brands.min.css', array(), '1');
    wp_enqueue_style('brands-style');
  } else if (is_page('contact-us')) {
    wp_register_style('contact-min', get_stylesheet_directory_uri() . '/assets/css/contact-inner.min.css', array(), '1');
    wp_enqueue_style('contact-min');
  } else if (is_page('my-account') || is_page('register')) {
    wp_register_style('login-min', get_stylesheet_directory_uri() . '/assets/css/login.min.css', array(), '1');
    wp_enqueue_style('login-min');
    wp_register_style('my-account', get_stylesheet_directory_uri() . '/assets/css/my-account.min.css', array(), '1');
    wp_enqueue_style('my-account');
  } else if (is_page('cart')) {
    wp_register_style('cart-min', get_stylesheet_directory_uri() . '/assets/css/cart-inner.min.css', array(), '1');
    wp_enqueue_style('cart-min');
  } else if (is_page('checkout')) {
    wp_register_style('checkout-min', get_stylesheet_directory_uri() . '/assets/css/checkout.min.css', array(), '1');
    wp_enqueue_style('checkout-min');
  } else if (is_shop() || is_product() || is_product_category() || is_tax()) {
    wp_register_style('ess-shop', get_stylesheet_directory_uri() . '/assets/css/shop.min.css', array(), '1');
    wp_enqueue_style('ess-shop');
  } else if (is_page('our-story')) {
    wp_register_style('pom_carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1');
    wp_enqueue_style('pom_carousel');
    wp_register_style('ourstory-inner', get_stylesheet_directory_uri() . '/assets/css/ourstory-inner.min.css', array(), '1');
    wp_enqueue_style('ourstory-inner');
  } else if (is_page('news-events')) {
    wp_register_style('news-events', get_stylesheet_directory_uri() . '/assets/css/news_event.min.css', array(), '1');
    wp_enqueue_style('news-events');
  } else {
    wp_register_style('common-style', get_stylesheet_directory_uri() . '/assets/css/common.min.css', array(), '1');
    wp_enqueue_style('common-style');
  }
  // if (is_shop() || is_product() || is_product_category()  || is_tax()) {

  // } else {
  //   wp_register_style('common-style', get_stylesheet_directory_uri() . '/assets/css/common.min.css', array(), '1');
  //   wp_enqueue_style('common-style');
  // }
}
add_action('wp_enqueue_scripts', 'pomerol_home_enqueue_scripts');


/**
 * @snippet       WooCommerce User Registration Shortcode
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Kaushal Patel
 * @compatible    WooCommerce 6
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
/*add_shortcode( 'wc_reg_form_kp', 'kp_separate_registration_form' );

function kp_separate_registration_form() {
  // if ( is_admin() ) return;
  // if ( is_user_logged_in() ) return;
  ob_start();

  do_action( 'woocommerce_before_customer_login_form' );
  // NOTE: THE FOLLOWING <FORM></FORM> IS COPIED FROM woocommerce\templates\myaccount\form-login.php
  // IF WOOCOMMERCE RELEASES AN UPDATE TO THAT TEMPLATE, YOU MUST CHANGE THIS ACCORDINGLY
  ?>
  <form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

    <?php do_action( 'woocommerce_register_form_start' ); ?>

    <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
    <label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label>
    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
    </p>

    <?php endif; ?>
    <div class="form-input">
      <label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
      <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" />
    </div>
    <div class="form-input">
      <label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?><span class="required">*</span></label>
      <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" value="" />
    </div>
    <div class="form-input">
      <label for="reg_password2"><?php _e( 'Password Repeat', 'woocommerce' ); ?><span class="required">*</span></label>
      <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password2" id="reg_password2" autocomplete="new-password" value="" />
    </div>


    <?php do_action( 'woocommerce_register_form' ); ?>
    <!-- <p class="woocommerce-FormRow form-row"> -->
    <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
    <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
    <!-- </p> -->

    <?php do_action( 'woocommerce_register_form_end' ); ?>

  </form>
  <?php

  return ob_get_clean();
}*/

// add_filter('woocommerce_registration_errors', 'registration_errors_validation', 10,3);
// function registration_errors_validation($reg_errors, $sanitized_user_login, $user_email) {
//     global $woocommerce;
//     extract( $_POST );
//     if ( strcmp( $password, $password2 ) !== 0 ) {
//         return new WP_Error( 'registration-error', __( 'Passwords do not match.', 'woocommerce' ) );
//     }
//     return $reg_errors;
// }

/**
 * @snippet       Hide Price & Add to Cart for Logged Out Users
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli, BusinessBloomer.com
 * @testedwith    WooCommerce 5
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
add_filter('woocommerce_get_price_html', 'bbloomer_hide_price_addcart_not_logged_in', 9999, 2);

function bbloomer_hide_price_addcart_not_logged_in($price, $product)
{
  if (!is_user_logged_in()) {
    $price = '<div><a href="' . get_permalink(wc_get_page_id('myaccount')) . '">' . __('Login to see prices', 'bbloomer') . '</a></div>';
    remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
  }
  return $price;
}

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
add_filter('woocommerce_subcategory_count_html', '__return_null');

function wpdocs_theme_slug_widgets_init()
{
  register_sidebar(array(
    'name'          => __('Product Sidebar', 'textdomain'),
    'id'            => 'kp_product_sidebar',
    'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ));
}
add_action('widgets_init', 'wpdocs_theme_slug_widgets_init');

function unhook_parent_style()
{
  wp_dequeue_style('twenty-twenty-one-style');
  wp_deregister_style('twenty-twenty-one-style');

  wp_dequeue_style('twenty-twenty-one-print-style');
  wp_deregister_style('twenty-twenty-one-print-style');
  wp_dequeue_style('parent-style');
  wp_deregister_style('parent-style');
}
add_action('wp_enqueue_scripts', 'unhook_parent_style', 20);

function project_dequeue_unnecessary_scripts()
{
  wp_dequeue_script('twenty-twenty-one-primary-navigation-script');
  wp_deregister_script('twenty-twenty-one-primary-navigation-script');

  wp_dequeue_script('twenty-twenty-one-responsive-embeds-script');
  wp_deregister_script('twenty-twenty-one-responsive-embeds-script');
}
add_action('wp_print_scripts', 'project_dequeue_unnecessary_scripts');

// add_action('wp_enqueue_scripts', 'adt_home_enqueue_scripts');

//remove srcset
function remove_max_srcset_image_width($max_width)
{
  return false;
}
add_filter('max_srcset_image_width', 'remove_max_srcset_image_width');

/*
function my_enqueue_script() {
  wp_enqueue_script( 'my-js', 'assets/js/script.js', false );
  wp_enqueue_script( 'my-js', 'assets/js/query-3.6.1.min.js', false );
}

add_action( 'wp_enqueue_scripts', 'my_enqueue_script' );
add_action( 'wp_enqueue_scripts', 'my_enqueue_script' );


*/

register_nav_menus(array('primary-menu' => 'main menu'));







// function enqueue_jquery_balloon() {
//   wp_enqueue_script('jquery');
//   wp_enqueue_script('jquery-balloon', get_stylesheet_directory_uri().'assets/js/jquery.js', array('jquery'), false, false);
//   wp_enqueue_script('activate-balloon', get_stylesheet_directory_uri().'assets/js/jquery.js', array('jquery-balloon'), false, false);
// }

// add_action('wp_enqueue_scripts', 'enqueue_jquery_balloon');

/*

function unhook_parent_style()
{
  wp_dequeue_style('twenty-twenty-one-style');
  wp_deregister_style('twenty-twenty-one-style');

  wp_dequeue_style('twenty-twenty-one-print-style');
  wp_deregister_style('twenty-twenty-one-print-style');
}
add_action('wp_enqueue_scripts', 'unhook_parent_style', 20);

function project_dequeue_unnecessary_scripts()
{
  wp_dequeue_script('twenty-twenty-one-primary-navigation-script');
  wp_deregister_script('twenty-twenty-one-primary-navigation-script');

  wp_dequeue_script('twenty-twenty-one-responsive-embeds-script');
  wp_deregister_script('twenty-twenty-one-responsive-embeds-script');
}
add_action('wp_print_scripts', 'project_dequeue_unnecessary_scripts');

add_action('wp_enqueue_scripts', 'adt_home_enqueue_scripts');

//remove srcset
function remove_max_srcset_image_width($max_width)
{
  return false;
}
add_filter('max_srcset_image_width', 'remove_max_srcset_image_width');*/














function create_post_type()
{
  $labels = array(
    'name'               => _x('event', 'post type general name'),
    'singular_name'      => _x('event', 'post type singular name'),
    'add_new'            => _x('Add New', 'book'),
    'add_new_item'       => __('Add New Event'),
    'edit_item'          => __('Edit Event'),
    'new_item'           => __('New Event'),
    'all_items'          => __('All Event'),
    'view_item'          => __('View Event'),
    'search_items'       => __('Search Event'),
    'not_found'          => __('No products found'),
    'not_found_in_trash' => __('No products found in the Trash'),
    // 'parent_item_colon'  => '',
    'menu_name'          => 'event'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Event',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
    'has_archive'   => true,
  );
  register_post_type('event', $args);
}
add_action('init', 'create_post_type');





// function create_post_type() {
//   register_post_type( 'event',
//   array(
//            'labels' => array(
//           'name' => __( 'event' ),
//           'singular_name' => __( 'event' ),
//           'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
//       ),
//       'public' => true,
//       'has_archive' => true,
//       'rewrite' => array('slug' => 'event'),
//       'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
//   )
// );

// }






function pp_scripts()
{
  // Registering Bootstrap style
  //wp_enqueue_style( 'bootstrap_min', get_stylesheet_directory_uri().'/css/bootstrap.min.css' );

  //wp_enqueue_script('jquery');
  //Registering Bootstrap Script
  // wp_enqueue_script( 'bootstrap_min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
}
add_action('wp_enqueue_scripts', 'pp_scripts');

add_action('init', 'custom_bootstrap_slider');
/**
 * Register a Custom post type for.
 */
function custom_bootstrap_slider()
{
  $labels = array(
    'name'               => _x('Product', 'post type general name'),
    'singular_name'      => _x('Slide', 'post type singular name'),
    'menu_name'          => _x('Slider', 'admin menu'),
    'name_admin_bar'     => _x('Slide', 'add new on admin bar'),
    'add_new'            => _x('Add New', 'Slide'),
    'add_new_item'       => __('Name'),
    'new_item'           => __('New Slide'),
    'edit_item'          => __('Edit Slide'),
    'view_item'          => __('View Slide'),
    'all_items'          => __('All Slide'),
    'featured_image'     => __('Featured Image', 'text_domain'),
    'search_items'       => __('Search Slide'),
    'parent_item_colon'  => __('Parent Slide:'),

    'not_found'          => __('No Slide found.'),
    'not_found_in_trash' => __('No Slide found in Trash.'),
  );

  $args = array(
    'labels'             => $labels,
    'menu_icon'       => 'dashicons-star-half',
    'description'        => __('Description.'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => true,
    'menu_position'      => null,

    'supports'           => array('title', 'editor', 'thumbnail', 'button')
  );

  register_post_type('slider', $args);
}


// add_filter('login_errors', create_function('$a', "return '<b>Error:</b> Usuario o contraseña invalido';"));
function kp_woocommerce_login_errors( $a ) {
    $msg = $a;
    if($a=='Unknown email address. Check again or try your username.'){
      $msg = 'Sorry, that email does not appear to exist on our system. Check again or try your username.';
    } else if(strpos($a, 'Lost your password') !== false){
      $msg = str_replace("Lost","Forgot",$a);
    }
    return ''.$msg;
}
add_filter( 'login_errors', 'kp_woocommerce_login_errors' );

add_filter( 'default_checkout_b2bking_custom_field_523', 'change_default_checkout_country' );

function change_default_checkout_country() {
  return 'GB'; // country code
}

function add_this_script_footer(){
  if (is_page('my-account') || is_page('register')) {
  ?>

<script>
  console.log('sdf');
  $('#b2bking_custom_field_523').val('GB');
  $('#billing_state').attr('placeholder', 'County');
  $('#billing_state_field').prepend('<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide b2bking_country_or_state"><label for="b2bking_custom_field_523">County&nbsp;<span class="required">*</span></label></p>');
</script>

<?php } } add_action('wp_footer', 'add_this_script_footer');


// Change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_add_to_cart_button_text_single' );
function woocommerce_add_to_cart_button_text_single() {
    return __( 'Add To Cart', 'woocommerce' );
}

// Change add to cart text on product archives page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_add_to_cart_button_text_archives' );
function woocommerce_add_to_cart_button_text_archives() {
    return __( 'Add To Cart', 'woocommerce' );
}

/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options –> Reading
  // Return the number of products you wanna show per page.
  $cols = 12;
  return $cols;
}


// function change_lost_your_password ($text) {
//   if ($text == 'Lost your password?'){
//       $text = 'Forgot your password?';
//   }
//   return $text;
// }
// add_filter( 'gettext', 'change_lost_your_password' );


remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 50 );


// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
//add_action( 'woocommerce_after_shop_loop_item_title', 'acf_template_loop_product_meta', 10 );
function acf_template_loop_product_meta() {
    global $product;

    if ( $price_html = $product->get_price_html() ) : ?>
	<span class="price"><?php echo $price_html; ?></span>
<?php endif;
}

add_filter('woocommerce_style_smallscreen_breakpoint','woo_custom_breakpoint');

function woo_custom_breakpoint($px) {
  $px = '991px';
  return $px;
}


/**
*  @param $user
*  @author Webkul
*/
add_action( 'edit_user_profile', 'wk_custom_user_profile_fields' );
function wk_custom_user_profile_fields( $user )
{
    // echo '<h3 class="heading">Custom Fields</h3>';

    ?>

    <table class="form-table">
    <tr>
      <th><label for="paymemt_terms"><h3 class="heading">Payment Terms</h3></label></th>
      <td>
        <?php
            //get dropdown saved value
            $selected = get_user_meta( $user->ID, 'paymemt_terms', true  ); //there was an extra ) here that was not needed
            ?>
            <select name="paymemt_terms" id="paymemt_terms">
              <option value="">Select Payment Terms</option>
              <option value="0 days" <?php echo ($selected == "0 days")?  'selected="selected"' : '' ?>>0 days</option>
              <option value="1 week" <?php echo ($selected == "1 week")?  'selected="selected"' : '' ?>>1 week</option>
              <option value="2 week" <?php echo ($selected == "2 week")?  'selected="selected"' : '' ?>>2 week</option>
              <option value="30 Days" <?php echo ($selected == "30 Days")?  'selected="selected"' : '' ?>>30 Days</option>
              <option value="60 Days" <?php echo ($selected == "60 Days")?  'selected="selected"' : '' ?>>60 Days</option>
            </select>
        <!-- <input type="text" class="input-text form-control" name="contact" id="paymemt_terms" /> -->
      </td>
    </tr>
    </table>

    <?php
}

add_action( 'show_user_profile', 'wk_custom_user_profile_fields' );

add_action( 'edit_user_profile_update', 'wk_save_custom_user_profile_fields' );
/**
*   @param User Id $user_id
*/
function wk_save_custom_user_profile_fields( $user_id )
{

    $custom_data = $_POST['paymemt_terms'];
    update_user_meta( $user_id, 'paymemt_terms', $custom_data );
}



function sv_wc_add_my_account_orders_column( $columns ) {

    $new_columns = array();

    foreach ( $columns as $key => $name ) {

        $new_columns[ $key ] = $name;

        // add ship-to after order status column
        if ( 'order-date' === $key ) {  //this is the line!
            $new_columns['order_due_date'] = __( 'Due Date', 'woocommerce' );
        }
        if ( 'order-total' === $key ) {
            $new_columns['order_paid_amount'] = __( 'Paid Amount', 'woocommerce' );
        }
    }

    return $new_columns;
}
add_filter( 'woocommerce_my_account_my_orders_columns', 'sv_wc_add_my_account_orders_column' );


function wc_custom_column_display( $order ) {
    // echo "testing";
    $user_ID = get_current_user_id();
    $paymemt_terms = get_user_meta( $user_ID, 'paymemt_terms', true  );
    $payment_days = payment_days($paymemt_terms);
    $orderDate = wc_format_datetime( $order->get_date_created(), 'Y-m-d' );
    echo date('d-m-Y', strtotime($orderDate. ' + '.$payment_days.' days'));
}
add_action( 'woocommerce_my_account_my_orders_column_order_due_date', 'wc_custom_column_display' );

function wc_order_paid_amount_display( $order ) {
    // do something here
  global $wpdb;
    $order_payment = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}order_payment WHERE 1=1 AND order_id = {$order->get_id()}");
    if(!empty($order_payment)){
      if(isset($order_payment->credit_amount)){
        echo get_woocommerce_currency_symbol().''.$order_payment->credit_amount;
      } else {
        echo get_woocommerce_currency_symbol().' 0.0';
      }
    } else {
      echo get_woocommerce_currency_symbol().' 0.0';
    }
    // echo "<pre>";print_r($order->get_id());

}
add_action( 'woocommerce_my_account_my_orders_column_order_paid_amount', 'wc_order_paid_amount_display' );


function payment_days($paymemt_terms){
  $payment_days = 0;
  if($paymemt_terms=='0 days'){
    $payment_days = 0;
  } else if($paymemt_terms=='1 week'){
    $payment_days = 7;
  } else if($paymemt_terms=='2 week'){
    $payment_days = 14;
  } else if($paymemt_terms=='30 Days'){
    $payment_days = 30;
  } else if($paymemt_terms=='60 Days'){
    $payment_days = 60;
  } else {
    $payment_days = 0;
  }
  return $payment_days;
}


function get_sum_of_all_orders(){
  $customer = wp_get_current_user();
  $customer_orders = get_posts(array(
      'numberposts' => -1,
      'meta_key' => '_customer_user',
      'orderby' => 'date',
      'order' => 'DESC',
      'meta_value' => get_current_user_id(),
      'post_type' => wc_get_order_types(),
      'post_status' => array_keys(wc_get_order_statuses()), 'post_status' => array('wc-pending', 'wc-processing', 'wc-on-hold', 'wc-completed', 'wc-cancelled', 'wc-refunded', 'wc-failed', 'wc-checkout-draft'),
  ));

  $orderTotalAmount = 0.0;
  foreach ($customer_orders as $customer_order) {
      $orderq = wc_get_order($customer_order);
      $orderTotalAmount += $orderq->get_total();
  }
  return wc_format_decimal($orderTotalAmount,2);
}



function bd_change_product_query( $q ){
  // $product_ids_on_sale = wc_get_product_ids_on_sale();
  $all_ids = get_posts( array(
    'post_type' => 'product',
    'numberposts' => -1,
    'post_status' => 'publish',
    'fields' => 'ids',
  ) );
  $pids = [];
  foreach ( $all_ids as $id ) {
    $pids[] = $id;
  }
  // echo "<pre>"; print_r($pids); echo "</pre>";
  if (is_shop() || is_product()) {
    if (!$_GET){
      $args = array(
            'taxonomy'     => 'product_cat',
            'orderby'      => 'name',
            'show_count'   => 0,
            'pad_counts'   => 0,
            'hierarchical' => 1,
            'title_li'     => '',
            'hide_empty'   => 1
      );
      $all_categories = get_categories( $args );
      $posts_per_page = 12;
      if(count($all_categories)==1){
        $posts_per_page = 12;
      } else if(count($all_categories)==2){
        $posts_per_page = 6;
      } else if(count($all_categories)==3){
        $posts_per_page = 4;
      } else if(count($all_categories)==4){
        $posts_per_page = 3;
      } else if(count($all_categories)==5){
        $posts_per_page = 2;
      } else if(count($all_categories)==6){
        $posts_per_page = 2;
      }
      $product_ids = [];
      foreach ($all_categories as $cat) {
        $args = array(
          'post_type'             => 'product',
          'post_status'           => 'publish',
          'ignore_sticky_posts'   => 1,
          'posts_per_page'        => $posts_per_page,
          'tax_query'             => array(
              array(
                  'taxonomy'      => 'product_cat',
                  'field' => 'term_id',
                  'terms'         => $cat->term_id
              )
          )
        );
        $products_list = new WP_Query($args);
        if(!empty($products_list)){
          if(isset($products_list->posts)){
            foreach($products_list->posts as $pd){
              $product_ids[]= $pd->ID;
            }
          }
        }
      }

      // echo "<pre>"; print_r($product_ids); echo "</pre>";
      $finalArray = array_unique(array_merge($product_ids,$pids));
      // echo "<pre>"; print_r($finalArray); echo "</pre>";
      $q->set( 'orderby', 'post__in' );
      $q->set( 'post__in', (array) $finalArray );
    }
  }
}

// $property  = new Cuztom_Post_Type( 'dflip', array(
//     'supports' => array('title', 'thumbnail')
// ));
add_theme_support('post-thumbnails');
add_post_type_support( 'dflip', 'thumbnail' );
//add_action( 'woocommerce_product_query', 'bd_change_product_query' );


add_filter( 'woocommerce_account_menu_items', 'bbloomer_myaccount_rename_dashboard_tab_title', 9999 );

function bbloomer_myaccount_rename_dashboard_tab_title( $items ) {
  $items['purchase-lists'] = 'Wish Lists';
  return $items;
}

add_action( 'woocommerce_order_details_after_order_table_items', function ( $order ) {
  echo "<pre>cbcvbcvb</pre>";
	//echo do_shortcode( '[wcpdf_download_invoice order_id="' . $order->get_id() . '"]' );
}, 10, 1 );