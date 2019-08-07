<?php

class queryCats{
    function getCatNames(){
        $taxonomy     = 'product_cat';
        $orderby      = 'name';  
        $show_count   = 0;      // 1 for yes, 0 for no
        $pad_counts   = 0;      // 1 for yes, 0 for no
        $hierarchical = 1;      // 1 for yes, 0 for no  
        $title        = '';  
        $empty        = 0;
        $parent       = 0;
      
        $args = array(
               'taxonomy'     => $taxonomy,
               'orderby'      => $orderby,
               'show_count'   => $show_count,
               'pad_counts'   => $pad_counts,
               'hierarchical' => $hierarchical,
               'title_li'     => $title,
               'hide_empty'   => $empty,
               'parent'       => $parent
        );
          $categories=get_categories($args);
          foreach($categories as $category) {
            $term_link = get_category_link($category->term_id );
            $term_link = esc_url( $term_link );
            echo '<option value="'. $term_link.'" data-value="'.$category->cat_name.'">';
            echo $category->cat_name;
            echo '</option>';
        } 
    }
}











//$sarchCats = new queryCats;