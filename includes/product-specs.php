<?php
function product_specs_display(){
    ob_start();
        // Display Product Specs
        $display_header = get_field_object('display');
        echo '<div class="product-specs">';
        echo '<h3>'.$display_header['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('display') ): while( have_rows('display') ): the_row(); ?>
		<?php
		$display_header                 = get_field_object('display');
		$display_size                   = get_sub_field_object('display_size');
		$display_resolution             = get_sub_field_object('resolution');
		$display_pixel_density          = get_sub_field_object('pixel_density');
		$display_technology             = get_sub_field_object('technology');
		$display_screen_to_body_ratio   = get_sub_field_object('screen_to_body_ratio');
		$display_features               = get_sub_field_object('display_size');
		
		echo '<li><strong>'; echo $display_size['label'].'</strong> '; echo '<span>'.$display_size['value'].'</span>'; echo '</li>';
		echo '<li><strong>'; echo $display_resolution['label'].'</strong> '; echo '<span>'.$display_resolution['value'].'</span>'; echo '</li>';
		echo '<li><strong>'; echo $display_pixel_density['label'].'</strong>  '; echo '<span>'.$display_pixel_density['value'].'</span>'; echo '</li>';
		echo '<li><strong>'; echo $display_technology['label'].'</strong> '; echo '<span>'.$display_technology['value'].'</span>'; echo '</li>';
		echo '<li><strong>'; echo $display_screen_to_body_ratio['label'].'</strong> '; echo '<span>'.$display_screen_to_body_ratio['value'].'</span>'; echo '</li>';
		echo '<li><strong>'; echo $display_features['label'].'</strong> '; echo '<span>'.$display_features['value'].'</span>'; echo '</li>';
		?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        
        <?php
        //// Camera Product Specs
        $camera_header = get_field_object('camera');
        echo '<div class="product-specs">';
        echo '<h3>'.$camera_header['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('camera') ): while( have_rows('camera') ): the_row(); ?>
		<?php
		$camera_header  = get_field_object('camera');
        $camera_rear    = get_sub_field_object('rear');
		$camera_flash   = get_sub_field_object('flash');
        $camera_front   = get_sub_field_object('front');		
        echo '<li><strong>'; echo $camera_rear['label'].'</strong> '; echo '<span>'.$camera_rear['value'].'</span>'; echo '</li>';
            ?>
            <?php if( have_rows('main_camera') ): while( have_rows('main_camera') ): the_row(); ?>
                <?php
                $camera_main_camera_label   = get_sub_field_object('main_camera_label');
                $camera_specifications      = get_sub_field_object('specifications');
                $camera_hardware_features   = get_sub_field_object('hardware_features');
                
                echo '<li><strong>'; echo $camera_main_camera_label['label'].'</strong> '; echo '<span>'.$camera_main_camera_label['value'].'</span>';
                echo '<li><em>'.$camera_specifications['label'].'</em>';  echo '<span>'.$camera_specifications['value'].'</span>'; echo '</li>';
                echo '<li><em>'.$camera_hardware_features['label'].'</em>';  echo '<span>'.$camera_hardware_features['value'].'</span>'; echo '</li>';
                echo '</li>';
                ?>
                <?php endwhile; ?>
                <?php endif; ?>
                    <?php
                    echo '<li><strong>'; echo $camera_flash['label'].'</strong> '; echo '<span>'.$camera_flash['value'].'</span>'; echo '</li>';
                    ?>
            <?php if( have_rows('video_recording') ): while( have_rows('video_recording') ): the_row(); ?>
                    <?php          
                    $camera_video_recording_label   = get_sub_field_object('video_recording_label');
                    $camera_features                = get_sub_field_object('features');
                    echo '<li><strong>'; echo $camera_video_recording_label['label'].'</strong> '; echo '<span>'.$camera_video_recording_label['value'].'</span>';
                    
                    echo '<li><em>'.$camera_features['label'].'</em>';  echo '<span>'.$camera_features['value'].'</span>'; echo '</li>';
                    echo '</li>';
                    ?>
                <?php endwhile; ?>
                <?php endif; ?>        
        <?php
        echo '<li><strong>'; echo $camera_front['label'].'</strong> '; echo '<span>'.$camera_front['value'].'</span>'; echo '</li>';
		?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        
        <?php
        // HARDWARE & PERFORMANCE Product Specs
        $hardware_and_performance_header = get_field_object('hardware_performance');
        echo '<div class="product-specs">';
        echo '<h3>'.$hardware_and_performance_header['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('hardware_performance') ): while( have_rows('hardware_performance') ): the_row(); ?>
		<?php
		$hardware_and_performance_system_chip       = get_field_object('system_chip ');
        $hardware_and_performance_processor         = get_sub_field_object('processor');
        $hardware_and_performance_gpu               = get_sub_field_object('gpu');
        $hardware_and_performance_ram               = get_sub_field_object('ram');
        $hardware_and_performance_internal_storage  = get_sub_field_object('internal_storage');
        $hardware_and_performance_storage_expansion = get_sub_field_object('storage_expansion');
        $hardware_and_performance_os                = get_sub_field_object('os');
		
		echo '<li><strong>'; echo $hardware_and_performance_system_chip['label'].'</strong> '; echo '<span>'.$hardware_and_performance_system_chip['value'].'</span>'; echo '</li>';
        
		echo '<li><strong>'; echo $hardware_and_performance_processor['label'].'</strong> '; echo '<span>'.$hardware_and_performance_processor['value'].'</span>'; echo '</li>';
        
		echo '<li><strong>'; echo $hardware_and_performance_gpu['label'].'</strong>  '; echo '<span>'.$hardware_and_performance_gpu['value'].'</span>'; echo '</li>';
        
		echo '<li><strong>'; echo $hardware_and_performance_ram['label'].'</strong> '; echo '<span>'.$hardware_and_performance_ram['value'].'</span>'; echo '</li>';
        
		echo '<li><strong>'; echo $hardware_and_performance_internal_storage['label'].'</strong> '; echo '<span>'.$hardware_and_performance_internal_storage['value'].'</span>'; echo '</li>';
        
		echo '<li><strong>'; echo $hardware_and_performance_storage_expansion['label'].'</strong> '; echo '<span>'.$hardware_and_performance_storage_expansion['value'].'</span>'; echo '</li>';
        
        echo '<li><strong>'; echo $hardware_and_performance_os['label'].'</strong> '; echo '<span>'.$hardware_and_performance_os['value'].'</span>'; echo '</li>';
		?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        
        <?php
        // BATTERY Product Specs
        $battery_header = get_field_object('battery');
        echo '<div class="product-specs">';
        echo '<h3>'.$battery_header['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('battery') ): while( have_rows('battery') ): the_row(); ?>
		<?php
		$battery_capacity               = get_field_object('capacity');
        $battery_talk_time              = get_sub_field_object('talk_time');
        $battery_stand_by_time          = get_sub_field_object('stand_by_time');
        $battery_talk_time_3g           = get_sub_field_object('talk_time_3g');
        $battery_stand_by_time_3g       = get_sub_field_object('capacity');
		
		echo '<li><strong>'; echo $battery_capacity['label'].'</strong> '; echo '<span>'.$battery_capacity['value'].'</span>'; echo '</li>';
        
        echo '<li><strong>'; echo $battery_talk_time['label'].'</strong> '; echo '<span>'.$battery_talk_time['value'].'</span>'; echo '</li>';
        
        echo '<li><strong>'; echo $battery_stand_by_time['label'].'</strong> '; echo '<span>'.$battery_stand_by_time['value'].'</span>'; echo '</li>';
        
        echo '<li><strong>'; echo $battery_talk_time_3g['label'].'</strong> '; echo '<span>'.$battery_talk_time_3g['value'].'</span>'; echo '</li>';
        
        echo '<li><strong>'; echo $battery_stand_by_time_3g['label'].'</strong> '; echo '<span>'.$battery_stand_by_time_3g['value'].'</span>'; echo '</li>';
        
		?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
    <?php
    return ob_get_clean();
};
add_shortcode('product_specs_display','product_specs_display');