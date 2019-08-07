<?php

function main_menu_remove(){
   wp_reset_query();
    if(is_front_page()){
      $menu_location = 'the-main-menu';
    	$menu_args = apply_filters( 'wpex_header_menu_args', array(
		'theme_location' => $menu_location,
		'menu_class'     => wpex_header_menu_ul_classes(),
		'container'      => false,
		'fallback_cb'    => false,
		'link_before'    => '<span class="link-inner">',
		'link_after'     => '</span>',
		'walker'         => new WPEX_Dropdown_Walker_Nav_Menu(),
        ) );
        
        ?>
        
        <div id="site-navigation-wrap" class="<?php echo wpex_header_menu_classes( 'wrapper' ); ?>">
            <nav id="site-navigation" class="<?php echo wpex_header_menu_classes( 'inner' ); ?>"<?php wpex_schema_markup( 'site_navigation' ); ?><?php wpex_aria_landmark( 'site_navigation' ); ?> aria-label="<?php echo wpex_get_mod( 'main_menu_aria_label', esc_attr_x( 'The Main Menu', 'aria-label', 'total' ) ); ?>">
        <?php
            return wp_nav_menu( $menu_args );
            echo '</nav></div>'; 
   }  
}
add_action( 'wpex_hook_header_bottom', 'main_menu_remove' ); 

function desktops_cat(){ // Monitors Category
    $categoryID = get_queried_object_id();
    if($categoryID == 61){
    	$menu_location = 'desktops-cat-menu';
    	$menu_args = apply_filters( 'wpex_header_menu_args', array(
		'theme_location' => $menu_location,
		'menu_class'     => wpex_header_menu_ul_classes(),
		'container'      => false,
		'fallback_cb'    => false,
		'link_before'    => '<span class="link-inner">',
		'link_after'     => '</span>',
		'walker'         => new WPEX_Dropdown_Walker_Nav_Menu(),
        ) );
        
        ?>
        
        <div id="site-navigation-wrap" class="<?php echo wpex_header_menu_classes( 'wrapper' ); ?>">
            <nav id="site-navigation" class="<?php echo wpex_header_menu_classes( 'inner' ); ?>"<?php wpex_schema_markup( 'site_navigation' ); ?><?php wpex_aria_landmark( 'site_navigation' ); ?> aria-label="<?php echo wpex_get_mod( 'main_menu_aria_label', esc_attr_x( 'Desktops Category Menu', 'aria-label', 'total' ) ); ?>">
        <?php
            return wp_nav_menu( $menu_args );
            echo '</nav></div>'; 
   }
}
add_action( 'wpex_hook_header_bottom', 'desktops_cat' );
    
function computers_cat(){ // Computers Category
    $categoryID = get_queried_object_id();
    if($categoryID == 60){
    	$menu_location = 'computers-cat-menu';
    	$menu_args = apply_filters( 'wpex_header_menu_args', array(
		'theme_location' => $menu_location,
		'menu_class'     => wpex_header_menu_ul_classes(),
		'container'      => false,
		'fallback_cb'    => false,
		'link_before'    => '<span class="link-inner">',
		'link_after'     => '</span>',
		'walker'         => new WPEX_Dropdown_Walker_Nav_Menu(),
        ) );
        
        ?>
        
        <div id="site-navigation-wrap" class="<?php echo wpex_header_menu_classes( 'wrapper' ); ?>">
            <nav id="site-navigation" class="<?php echo wpex_header_menu_classes( 'inner' ); ?>"<?php wpex_schema_markup( 'site_navigation' ); ?><?php wpex_aria_landmark( 'site_navigation' ); ?> aria-label="<?php echo wpex_get_mod( 'main_menu_aria_label', esc_attr_x( 'Computers Category Menu', 'aria-label', 'total' ) ); ?>">
        <?php
            return wp_nav_menu( $menu_args );
            echo '</nav></div>'; 
   }
}
add_action( 'wpex_hook_header_bottom', 'computers_cat' );

function laptops_cat(){ //Laptops Category
    $categoryID = get_queried_object_id();
    if($categoryID == 62){
    	$menu_location = 'laptop-cat-menu';
    	$menu_args = apply_filters( 'wpex_header_menu_args', array(
		'theme_location' => $menu_location,
		'menu_class'     => wpex_header_menu_ul_classes(),
		'container'      => false,
		'fallback_cb'    => false,
		'link_before'    => '<span class="link-inner">',
		'link_after'     => '</span>',
		'walker'         => new WPEX_Dropdown_Walker_Nav_Menu(),
        ) );
        
        ?>
        
        <div id="site-navigation-wrap" class="<?php echo wpex_header_menu_classes( 'wrapper' ); ?>">
            <nav id="site-navigation" class="<?php echo wpex_header_menu_classes( 'inner' ); ?>"<?php wpex_schema_markup( 'site_navigation' ); ?><?php wpex_aria_landmark( 'site_navigation' ); ?> aria-label="<?php echo wpex_get_mod( 'main_menu_aria_label', esc_attr_x( 'Laptops Category Menu', 'aria-label', 'total' ) ); ?>">
        <?php
            return wp_nav_menu( $menu_args );
            echo '</nav></div>'; 
   }
}
add_action( 'wpex_hook_header_bottom', 'laptops_cat' );

function tablets_cat(){ //  Category
    $categoryID = get_queried_object_id();
    if($categoryID == 63){
    	$menu_location = 'tablets-cat-menu';
    	$menu_args = apply_filters( 'wpex_header_menu_args', array(
		'theme_location' => $menu_location,
		'menu_class'     => wpex_header_menu_ul_classes(),
		'container'      => false,
		'fallback_cb'    => false,
		'link_before'    => '<span class="link-inner">',
		'link_after'     => '</span>',
		'walker'         => new WPEX_Dropdown_Walker_Nav_Menu(),
        ) );
        
        ?>
        
        <div id="site-navigation-wrap" class="<?php echo wpex_header_menu_classes( 'wrapper' ); ?>">
            <nav id="site-navigation" class="<?php echo wpex_header_menu_classes( 'inner' ); ?>"<?php wpex_schema_markup( 'site_navigation' ); ?><?php wpex_aria_landmark( 'site_navigation' ); ?> aria-label="<?php echo wpex_get_mod( 'main_menu_aria_label', esc_attr_x( 'Tablets Category Menu', 'aria-label', 'total' ) ); ?>">
        <?php
            return wp_nav_menu( $menu_args );
            echo '</nav></div>'; 
   }
}
add_action( 'wpex_hook_header_bottom', 'tablets_cat' );

function monitors_cat(){ // Monitors Category
    $categoryID = get_queried_object_id();
    if($categoryID == 64){
    	$menu_location = 'monitor-cat-menu';
    	$menu_args = apply_filters( 'wpex_header_menu_args', array(
		'theme_location' => $menu_location,
		'menu_class'     => wpex_header_menu_ul_classes(),
		'container'      => false,
		'fallback_cb'    => false,
		'link_before'    => '<span class="link-inner">',
		'link_after'     => '</span>',
		'walker'         => new WPEX_Dropdown_Walker_Nav_Menu(),
        ) );
        
        ?>
        
        <div id="site-navigation-wrap" class="<?php echo wpex_header_menu_classes( 'wrapper' ); ?>">
            <nav id="site-navigation" class="<?php echo wpex_header_menu_classes( 'inner' ); ?>"<?php wpex_schema_markup( 'site_navigation' ); ?><?php wpex_aria_landmark( 'site_navigation' ); ?> aria-label="<?php echo wpex_get_mod( 'main_menu_aria_label', esc_attr_x( 'Monitors Category Menu', 'aria-label', 'total' ) ); ?>">
        <?php
            return wp_nav_menu( $menu_args );
            echo '</nav></div>'; 
   }
}
add_action( 'wpex_hook_header_bottom', 'monitors_cat' );

function computer_access_cat(){ // Monitors Category
    $categoryID = get_queried_object_id();
    if($categoryID == 65){
    	$menu_location = 'computer-access-cat-menu';
    	$menu_args = apply_filters( 'wpex_header_menu_args', array(
		'theme_location' => $menu_location,
		'menu_class'     => wpex_header_menu_ul_classes(),
		'container'      => false,
		'fallback_cb'    => false,
		'link_before'    => '<span class="link-inner">',
		'link_after'     => '</span>',
		'walker'         => new WPEX_Dropdown_Walker_Nav_Menu(),
        ) );
        
        ?>
        
        <div id="site-navigation-wrap" class="<?php echo wpex_header_menu_classes( 'wrapper' ); ?>">
            <nav id="site-navigation" class="<?php echo wpex_header_menu_classes( 'inner' ); ?>"<?php wpex_schema_markup( 'site_navigation' ); ?><?php wpex_aria_landmark( 'site_navigation' ); ?> aria-label="<?php echo wpex_get_mod( 'main_menu_aria_label', esc_attr_x( 'Computer Accessories Category Menu', 'aria-label', 'total' ) ); ?>">
        <?php
            return wp_nav_menu( $menu_args );
            echo '</nav></div>'; 
   }
}
add_action( 'wpex_hook_header_bottom', 'computer_access_cat' );

function pc_comp_cat(){ // Monitors Category
    $categoryID = get_queried_object_id();
    if($categoryID == 94){
    	$menu_location = 'pc-comp-cat-menu';
    	$menu_args = apply_filters( 'wpex_header_menu_args', array(
		'theme_location' => $menu_location,
		'menu_class'     => wpex_header_menu_ul_classes(),
		'container'      => false,
		'fallback_cb'    => false,
		'link_before'    => '<span class="link-inner">',
		'link_after'     => '</span>',
		'walker'         => new WPEX_Dropdown_Walker_Nav_Menu(),
        ) );
        
        ?>
        
        <div id="site-navigation-wrap" class="<?php echo wpex_header_menu_classes( 'wrapper' ); ?>">
            <nav id="site-navigation" class="<?php echo wpex_header_menu_classes( 'inner' ); ?>"<?php wpex_schema_markup( 'site_navigation' ); ?><?php wpex_aria_landmark( 'site_navigation' ); ?> aria-label="<?php echo wpex_get_mod( 'main_menu_aria_label', esc_attr_x( 'PC Components Category Menu', 'aria-label', 'total' ) ); ?>">
        <?php
            return wp_nav_menu( $menu_args );
            echo '</nav></div>'; 
   }
}
add_action( 'wpex_hook_header_bottom', 'pc_comp_cat' );

function pc_gaming_cat(){ // Monitors Category
    $categoryID = get_queried_object_id();
    if($categoryID == 71){
    	$menu_location = 'pc-gaming-cat-menu';
    	$menu_args = apply_filters( 'wpex_header_menu_args', array(
		'theme_location' => $menu_location,
		'menu_class'     => wpex_header_menu_ul_classes(),
		'container'      => false,
		'fallback_cb'    => false,
		'link_before'    => '<span class="link-inner">',
		'link_after'     => '</span>',
		'walker'         => new WPEX_Dropdown_Walker_Nav_Menu(),
        ) );
        
        ?>
        
        <div id="site-navigation-wrap" class="<?php echo wpex_header_menu_classes( 'wrapper' ); ?>">
            <nav id="site-navigation" class="<?php echo wpex_header_menu_classes( 'inner' ); ?>"<?php wpex_schema_markup( 'site_navigation' ); ?><?php wpex_aria_landmark( 'site_navigation' ); ?> aria-label="<?php echo wpex_get_mod( 'main_menu_aria_label', esc_attr_x( 'PC Gaming Category Menu', 'aria-label', 'total' ) ); ?>">
        <?php
            return wp_nav_menu( $menu_args );
            echo '</nav></div>'; 
   }
}
add_action( 'wpex_hook_header_bottom', 'pc_gaming_cat' );

















