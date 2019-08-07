<?php

class customMenu {
    
    function computerCategoryMenu() {
    
    }
    
     function laptopCategoryMenu() {
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

     function monitorCategoryMenu() {
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     function appleCategoryMenu() {
		$menu_location = 'apple-cat-menu';
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
        
        <img src="https://21centuryelectronics.com/wp-content/uploads/2019/04/Authorized-Apple-Reseller.jpg">
        <div id="site-navigation-wrap" class="<?php echo wpex_header_menu_classes( 'wrapper' ); ?>">
            
            <nav id="site-navigation" class="<?php echo wpex_header_menu_classes( 'inner' ); ?>"<?php wpex_schema_markup( 'site_navigation' ); ?><?php wpex_aria_landmark( 'site_navigation' ); ?> aria-label="<?php echo wpex_get_mod( 'main_menu_aria_label', esc_attr_x( 'Apple Category Menu', 'aria-label', 'total' ) ); ?>">
        <?php
            return wp_nav_menu( $menu_args );
            echo '</nav></div>';      
    }
}


$computerMenu = new customMenu;
$appleMenu = new customMenu;
$laptopMenu = new customMenu;
$monitorMenu = new customMenu;

