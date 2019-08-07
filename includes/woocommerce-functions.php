<?php
function wpb_woo_my_account_order() {
 $myorder = array(
 'points-and-rewards' => __('My Points', 'woocommerce'),
 'subscriptions' => __('My Subscriptions', 'woocommerce'),
 'edit-account' => __( 'My Account', 'woocommerce' ),
 'orders' => __( 'My Orders', 'woocommerce' ),
 'wp-support' => __('WP Support Store', 'woocommerce'),
 'customer-logout' => __( 'Logout', 'woocommerce' ),
 );
 return $myorder;
}
add_filter ( 'woocommerce_account_menu_items', 'wpb_woo_my_account_order' );

/** Create account Checked True**/
/*add_filter('woocommerce_create_account_default_checked' , function ($checked){
    return true;
});*/

function modify_products() {
    if ( post_type_exists( 'post' ) ) {

        /* Give products hierarchy (for house plans) */
        global $wp_post_types, $wp_rewrite;
        $wp_post_types['post']->hierarchical = true;
        add_post_type_support('post','page-attributes');
    }
}
add_action( 'init', 'modify_products', 1 );

function sww_add_images_woocommerce_emails( $output, $order ) {
	
	// set a flag so we don't recursively call this filter
	static $run = 0;
  
	// if we've already run this filter, bail out
	if ( $run ) {
		return $output;
	}
  
	$args = array(
		'show_image'   	=> true,
		'image_size'    => array( 100, 100 ),
	);
  
	// increment our flag so we don't run again
	$run++;
  
	// if first run, give WooComm our updated table
	return $order->email_order_items_table( $args );
}
add_filter( 'woocommerce_email_order_items_table', 'sww_add_images_woocommerce_emails', 10, 2 );

add_action('wp_head','yourwp_order_pay');
function yourwp_order_pay(){
?>
<?php if(is_wc_endpoint_url( 'order-pay' )): ?>
<style>
@media (min-width: 993px){
    #order_review_heading,
    .woocommerce #order_review,
    .woocommerce-page #order_review {
        width: 100% !important;
padding-top:40px !important;
float:none !important;
    }        
}

</style>
<?php endif; ?>
<?php
}

function custom_pre_get_posts_query( $q ) {

    $tax_query = (array) $q->get( 'tax_query' );

    $tax_query[] = array(
           'taxonomy' => 'product_cat',
           'field' => 'slug',
           'terms' => array( 'invoices' ), // Don't display products in the clothing category on the shop page.
           'operator' => 'NOT IN'
    );


    $q->set( 'tax_query', $tax_query );

}
add_action( 'woocommerce_product_query', 'custom_pre_get_posts_query' );
