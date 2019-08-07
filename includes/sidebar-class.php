<?php

class wooSidebar{
    
    function wooCatSidebar(){
        echo    '<div id="sidebar" class="woo-cats">';
		   dynamic_sidebar('main-sidebar');
		echo    '</div>';
    }
}

$wooMainSideBar = new wooSidebar;