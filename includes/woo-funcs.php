<?php
class wooFuncs {
    function tvTabs(){
        // Loop through child categories for category name.
        $catTerms = get_terms('product_cat', array(
            'hide_empty' => 0, 
            'orderby' => 'ASC', 
            'child_of'=>'47'
        ));
        $i=1;
        echo '<div id="cat-tabs">';
        echo  '<ul>';
        foreach($catTerms as $catName){
            echo '<li><a href="#cat-tabs-'.$i++.'">'.$catName->name.'</a></li>';
        }
        echo '</ul>';
        
        // Loop throught the category content.
        $args = array(
            'hide_empty' => 0, 
            'orderby' => 'ASC', 
            'child_of'=>'47'
        );
        $products = new WP_Query( $args );
        while ( $products->have_posts() ) {
            echo '<div id="tabs-'.$i++.'">'.$products->the_post().'</div>';
        }
        echo '</div>';
    }
    
    function wooCategoryImages(){
        add_action( 'woocommerce_archive_description', 'woocommerce_category_image', 2 );
        $get_featured_cats = array(
            'taxonomy'     => 'product_cat',
            'orderby'      => 'name',
            'hide_empty'   => '0',
            'slug'         =>  array('laptops','desktops','monitors','tablets','networking','computer-accessories','memory',                    'computer-components','drives-storage'),
            //'include'      => $cat_array
        );
        $all_categories = get_categories( $get_featured_cats );
        $j = 1;
        echo '<div class="cat-grid-wrap">';
        echo '<ul class="cat-grid-image">';
        foreach ($all_categories as $cat) {
            $cat_id   = $cat->term_id;
            $cat_link = get_category_link( $cat_id );
            
            $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true ); // Get Category Thumbnail
            $image = wp_get_attachment_url( $thumbnail_id ); 
            if ( $image ) {
                    echo '<li>';
                    echo '<a href="'.$cat_link.'">';
                    echo '<img src="' . $image . '" alt="" />';
                    echo '<div class="cat-grid-title">'.$cat->name.'</div>'; // Get Category Name';
                    echo '</a>';
                    echo '</li>';
            }
            $j++;
        }
        echo '</ul>';
        echo '</div>';
        // Reset Post Data
        wp_reset_query();       
    }
}

// Class Opjects
$tv_video = new wooFuncs;
$woo_cat_images = new wooFuncs;

// Regular funtions
/**
 * Changes the external product button's add to cart text
 *
 * @param string $button_text the button's text
 * @param \WC_Product $product
 * @return string - updated button text
 */
/**
 * Changes the external product button's add to cart text
 *
 * @param string $button_text the button's text
 * @param \WC_Product $product
 * @return string - updated button text
 */
add_filter('woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text');
 
function woo_custom_cart_button_text() {
return __('Buy on Amazon', 'woocommerce');
}











