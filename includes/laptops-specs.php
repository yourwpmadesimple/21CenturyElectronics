<?php
function laptop_specs_display(){
    ob_start();
        // $operating_system
        $operating_system = get_field_object('operating_system');
        echo '<div class="product-specs">';
        echo '<h3>'.$operating_system['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('operating_system') ): while( have_rows('operating_system') ): the_row(); ?>
		<?php
		$os  = get_sub_field_object('os');
        
        if($os['value']){
         echo '<li><strong>'; echo $os['label'].'</strong> '; echo '<span>'.$os['value'].'</span>'; echo '</li>';   
        }
        
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
        
        // $processor
        $processor = get_field_object('processor');
        echo '<div class="product-specs" id="Processor">';
        echo '<h3>'.$processor['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('processor') ): while( have_rows('processor') ): the_row(); ?>
		<?php
		$processor_chipset  = get_sub_field_object('processor_chipset');
        
        if($processor_chipset['value']){
         echo '<li><strong>'; echo $processor_chipset['label'].'</strong> '; echo '<span>'.$processor_chipset['value'].'</span>'; echo '</li>';   
        }
        
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
        
        // $display
        $design = get_field_object('display');
        echo '<div class="product-specs" id="Display">';
        echo '<h3>'.$design['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('display') ): while( have_rows('display') ): the_row(); ?>
		<?php
		$touchscreen   = get_sub_field_object('touchscreen');
        $aspect_ratio  = get_sub_field_object('aspect_ratio');
        $brightness    = get_sub_field_object('brightness');
        $display_att   = get_sub_field_object('display_att');
        
        if($touchscreen['value']){
         echo '<li><strong>'; echo $touchscreen['label'].'</strong> '; echo '<span>'.$touchscreen['value'].'</span>'; echo '</li>';   
        }
        
        
        if($aspect_ratio['value']){
         echo '<li><strong>'; echo $aspect_ratio['label'].'</strong> '; echo '<span>'.$aspect_ratio['value'].'</span>'; echo '</li>';   
        }
        
        
        if($brightness['value']){
         echo '<li><strong>'; echo $brightness['label'].'</strong> '; echo '<span>'.$brightness['value'].'</span>'; echo '</li>';   
        }
        
        
        if($display_att['value']){
         echo '<li><strong>'; echo $display_att['label'].'</strong> '; echo '<span>'.$display_att['value'].'</span>'; echo '</li>';   
        }
        
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
        // $system_memory
        $system_memory = get_field_object('system_memory');
        echo '<div class="product-specs">';
        echo '<h3>'.$system_memory['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('system_memory') ): while( have_rows('system_memory') ): the_row(); ?>
		<?php
		$max_system_memory   = get_sub_field_object('max_system_memory');
        $memory          = get_sub_field_object('memory');
        
        if($max_system_memory['value']){
         echo '<li><strong>'; echo $max_system_memory['label'].'</strong> '; echo '<span>'.$max_system_memory['value'].'</span>'; echo '</li>';   
        }
        
        if($memory['value']){
         echo '<li><strong>'; echo $memory['label'].'</strong> '; echo '<span>'.$memory['value'].'</span>'; echo '</li>';   
        }
        
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php        
        
        
        // $storage
        $storage = get_field_object('storage');
        echo '<div class="product-specs" id="Storage">';
        echo '<h3>'.$storage['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('storage') ): while( have_rows('storage') ): the_row(); ?>
		<?php
		$storage_interface   = get_sub_field_object('storage_interface');
        $hard_drive          = get_sub_field_object('hard_drive');
        
        if($storage_interface['value']){
         echo '<li><strong>'; echo $storage_interface['label'].'</strong> '; echo '<span>'.$storage_interface['value'].'</span>'; echo '</li>';   
        }
        
        if($hard_drive['value']){
         echo '<li><strong>'; echo $hard_drive['label'].'</strong> '; echo '<span>'.$hard_drive['value'].'</span>'; echo '</li>';   
        }
        
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
        
        // $graphics
        $graphics = get_field_object('graphics');
        echo '<div class="product-specs">';
        echo '<h3>'.$graphics['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('graphics') ): while( have_rows('graphics') ): the_row(); ?>
		<?php
		$chipset                   = get_sub_field_object('chipset');
        $external_or_integrated    = get_sub_field_object('external_or_integrated');
        $maximum_graphics_memory   = get_sub_field_object('maximum_graphics_memory');
        
        if($chipset['value']){
         echo '<li><strong>'; echo $chipset['label'].'</strong> '; echo '<span>'.$chipset['value'].'</span>'; echo '</li>';   
        }
        
        if($external_or_integrated['value']){
         echo '<li><strong>'; echo $external_or_integrated['label'].'</strong> '; echo '<span>'.$external_or_integrated['value'].'</span>'; echo '</li>';   
        }
        
        if($maximum_graphics_memory['value']){
         echo '<li><strong>'; echo $maximum_graphics_memory['label'].'</strong> '; echo '<span>'.$maximum_graphics_memory['value'].'</span>'; echo '</li>';   
        }
        
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
        
        // $odd
        $odd = get_field_object('odd');
        echo '<div class="product-specs">';
        echo '<h3>'.$odd['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('odd') ): while( have_rows('odd') ): the_row(); ?>
		<?php
		$optical_disk_drive = get_sub_field_object('optical_disk_drive');
        
        if($optical_disk_drive['value']){
         echo '<li><strong>'; echo $optical_disk_drive['label'].'</strong> '; echo '<span>'.$optical_disk_drive['value'].'</span>'; echo '</li>';   
        }
        
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
        // $sound_and_camera
        $sound_and_camera = get_field_object('sound_and_camera');
        echo '<div class="product-specs" id="Camera">';
        echo '<h3>'.$sound_and_camera['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('sound_and_camera') ): while( have_rows('sound_and_camera') ): the_row(); ?>
		<?php
		$audio_type = get_sub_field_object('audio_type');
        $multimedia = get_sub_field_object('multimedia');
        
        if($audio_type['value']){
         echo '<li><strong>'; echo $audio_type['label'].'</strong> '; echo '<span>'.$audio_type['value'].'</span>'; echo '</li>';   
        }
        
        if($multimedia['value']){
         echo '<li><strong>'; echo $multimedia['label'].'</strong> '; echo '<span>'.$multimedia['value'].'</span>'; echo '</li>';   
        }
        
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
        
        // $wireless
        $wireless = get_field_object('wireless');
        echo '<div class="product-specs">';
        echo '<h3>'.$wireless['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('wireless') ): while( have_rows('wireless') ): the_row(); ?>
		<?php
		$wireless_lan_antenna = get_sub_field_object('wireless_lan_antenna');
        $network              = get_sub_field_object('network');
        
        if($wireless_lan_antenna['value']){
         echo '<li><strong>'; echo $wireless_lan_antenna['label'].'</strong> '; echo '<span>'.$wireless_lan_antenna['value'].'</span>'; echo '</li>';   
        }
        
        if($network['value']){
         echo '<li><strong>'; echo $network['label'].'</strong> '; echo '<span>'.$network['value'].'</span>'; echo '</li>';   
        }
        
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
        
         // $io_ports
        $io_ports = get_field_object('io_ports');
        echo '<div class="product-specs">';
        echo '<h3>'.$io_ports['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('io_ports') ): while( have_rows('io_ports') ): the_row(); ?>
		<?php
		$sleep_and_charge_usb = get_sub_field_object('sleep_and_charge_usb');
        $ports                = get_sub_field_object('ports');
        
        if($sleep_and_charge_usb['value']){
         echo '<li><strong>'; echo $sleep_and_charge_usb['label'].'</strong> '; echo '<span>'.$sleep_and_charge_usb['value'].'</span>'; echo '</li>';   
        }
        
        if($ports['value']){
         echo '<li><strong>'; echo $ports['label'].'</strong> '; echo '<span>'.$ports['value'].'</span>'; echo '</li>';   
        }
        
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
        
         // $input_devices
        $input_devices = get_field_object('input_devices');
        echo '<div class="product-specs">';
        echo '<h3>'.$input_devices['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('input_devices') ): while( have_rows('input_devices') ): the_row(); ?>
		<?php
		$touch_pad__track_points = get_sub_field_object('touch_pad__track_point');
        $backlit_keyboard        = get_sub_field_object('backlit_keyboard');
        $spill_resistant         = get_sub_field_object('spill_resistant');
        $number_of_keys          = get_sub_field_object('number_of_keys');
        
        if($touch_pad__track_points['value']){
         echo '<li><strong>'; echo $touch_pad__track_points['label'].'</strong> '; echo '<span>'.$touch_pad__track_points['value'].'</span>'; echo '</li>';   
        }
        
        if($backlit_keyboard['value']){
         echo '<li><strong>'; echo $backlit_keyboard['label'].'</strong> '; echo '<span>'.$backlit_keyboard['value'].'</span>'; echo '</li>';   
        }
        
        if($spill_resistant['value']){
         echo '<li><strong>'; echo $spill_resistant['label'].'</strong> '; echo '<span>'.$spill_resistant['value'].'</span>'; echo '</li>';   
        }
        
        if($number_of_keys['value']){
         echo '<li><strong>'; echo $number_of_keys['label'].'</strong> '; echo '<span>'.$number_of_keys['value'].'</span>'; echo '</li>';   
        }
        
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
        
         // $power
        $power = get_field_object('power');
        echo '<div class="product-specs" id="Battery">';
        echo '<h3>'.$power['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('power') ): while( have_rows('power') ): the_row(); ?>
		<?php
		$number_of_cells_cell_type = get_sub_field_object('number_of_cells_cell_type');
        $mah                       = get_sub_field_object('mah');
        $battery_life              = get_sub_field_object('battery_life');
        $test_used                 = get_sub_field_object('test_used');
        $power_att                 = get_sub_field_object('power_att');
        
        if($number_of_cells_cell_type['value']){
        echo '<li><strong>'; echo $number_of_cells_cell_type['label'].'</strong> '; echo '<span>'.$number_of_cells_cell_type['value'].'</span>'; echo '</li>';            
        }        

        if($mah['value']){
        echo '<li><strong>'; echo $mah['label'].'</strong> '; echo '<span>'.$mah['value'].'</span>'; echo '</li>';  }       

        if($battery_life['value']){
         echo '<li><strong>'; echo $battery_life['label'].'</strong> '; echo '<span>'.$battery_life['value'].'</span>'; echo '</li>';   
        }
        
        if($test_used['value']){
        echo '<li><strong>'; echo $test_used['label'].'</strong> '; echo '<span>'.$test_used['value'].'</span>'; echo '</li>';            
        }
        
        if($power_att['value']){
        echo '<li><strong>'; echo $power_att['label'].'</strong> '; echo '<span>'.$power_att['value'].'</span>'; echo '</li>';
        }
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
 
         // $security_and_safety
        $security_and_safety = get_field_object('security_and_safety');
        echo '<div class="product-specs">';
        echo '<h3>'.$security_and_safety['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('security_and_safety') ): while( have_rows('security_and_safety') ): the_row(); ?>
		<?php
		$bios_hdd_password = get_sub_field_object('bios_hdd_password');
        $security          = get_sub_field_object('security');
        
        echo '<li><strong>'; echo $bios_hdd_password['label'].'</strong> '; echo '<span>'.$bios_hdd_password['value'].'</span>'; echo '</li>';
        
        echo '<li><strong>'; echo $security['label'].'</strong> '; echo '<span>'.$security['value'].'</span>'; echo '</li>';        
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php        
        
        
         // $certification
        $certification = get_field_object('certification');
        echo '<div class="product-specs">';
        echo '<h3>'.$certification['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('certification') ): while( have_rows('certification') ): the_row(); ?>
		<?php
		$energy_star_certified = get_sub_field_object('energy_star_certified');
        
        echo '<li><strong>'; echo $energy_star_certified['label'].'</strong> '; echo '<span>'.$energy_star_certified['value'].'</span>'; echo '</li>';
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
        
         // $dimensions
        $dimensions = get_field_object('dimensions');
        echo '<div class="product-specs">';
        echo '<h3>'.$dimensions['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('dimensions') ): while( have_rows('dimensions') ): the_row(); ?>
		<?php
		$system_dimensions  = get_sub_field_object('system_dimensions');
        $package_dimensions = get_sub_field_object('package_dimensions');
        
        echo '<li><strong>'; echo $system_dimensions['label'].'</strong> '; echo '<span>'.$system_dimensions['value'].'</span>'; echo '</li>';
        
        echo '<li><strong>'; echo $package_dimensions['label'].'</strong> '; echo '<span>'.$package_dimensions['value'].'</span>'; echo '</li>';
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
        
         // $weight
        $weight = get_field_object('weight');
        echo '<div class="product-specs">';
        echo '<h3>'.$weight['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('weight') ): while( have_rows('weight') ): the_row(); ?>
		<?php
		$system_weight  = get_sub_field_object('system_weight');
        
        echo '<li><strong>'; echo $system_weight['label'].'</strong> '; echo '<span>'.$system_weight['value'].'</span>'; echo '</li>';
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
        
         // $key_features
        $key_features = get_field_object('key_features');
        echo '<div class="product-specs">';
        echo '<h3>'.$key_features['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('key_features') ): while( have_rows('key_features') ): the_row(); ?>
		<?php
		$premium_notebook   = get_sub_field_object('premium_notebook');
        $full_hd_display    = get_sub_field_object('full_hd_display');
        $rotating_display   = get_sub_field_object('rotating_display');
        $fast_charging      = get_sub_field_object('fast_charging');
        $built_in_pen       = get_sub_field_object('built_in_pen');
        
        if($premium_notebook['value']){
          echo '<li><strong>'; echo $premium_notebook['label'].'</strong> '; echo '<span>'.$premium_notebook['value'].'</span>'; echo '</li>';  
        }
        
        if($full_hd_display['value']){
           echo '<li><strong>'; echo $full_hd_display['label'].'</strong> '; echo '<span>'.$full_hd_display['value'].'</span>'; echo '</li>'; 
        }
        
        if($rotating_display['value']){
           echo '<li><strong>'; echo $rotating_display['label'].'</strong> '; echo '<span>'.$rotating_display['value'].'</span>'; echo '</li>'; 
        }
        if($fast_charging['value']){
           echo '<li><strong>'; echo $fast_charging['label'].'</strong> '; echo '<span>'.$fast_charging['value'].'</span>'; echo '</li>'; 
        }
        if($built_in_pen['value']){
          echo '<li><strong>'; echo $built_in_pen['label'].'</strong> '; echo '<span>'.$built_in_pen['value'].'</span>'; echo '</li>';  
        }
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php        
        
    return ob_get_clean();
}
add_shortcode('laptop_specs_display','laptop_specs_display');