<?php
function tv_specs(){
ob_start();
         // $prduct
        $product = get_field_object('product');
        echo '<div class="product-specs">';
        echo '<h3>'.$product['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('product') ): while( have_rows('product') ): the_row(); ?>
		<?php
		$type   = get_sub_field_object('type');
        
        if($type['value']){
          echo '<li><strong>'; echo $type['label'].'</strong> '; echo '<span>'.$type['value'].'</span>'; echo '</li>';  
        }
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
         // $series
        $series = get_field_object('series');
        echo '<div class="product-specs">';
        echo '<h3>'.$series['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('series') ): while( have_rows('series') ): the_row(); ?>
		<?php
		$series_name   = get_sub_field_object('series_name');
        
        if($series_name['value']){
          echo '<li><strong>'; echo $series_name['label'].'</strong> '; echo '<span>'.$series_name['value'].'</span>'; echo '</li>';  
        }
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
         // $design
        $design = get_field_object('design');
        echo '<div class="product-specs">';
        echo '<h3>'.$design['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('design') ): while( have_rows('design') ): the_row(); ?>
		<?php
		$backlighting          = get_sub_field_object('backlighting');
        $design_name           = get_sub_field_object('design_name');
        $bezel_width           = get_sub_field_object('bezel_width');
        $slim_type             = get_sub_field_object('slim_type');
        $color                 = get_sub_field_object('color');
        $standard_type_color   = get_sub_field_object('standard_type_color');
        $ultra_hd_connected    = get_sub_field_object('ultra_hd_connected');
        $dimming_technology    = get_sub_field_object('dimming_technology');
        $style                 = get_sub_field_object('style');
        $tv_type              = get_sub_field_object('tv_type');
        
        if($backlighting['value']){
          echo '<li><strong>'; echo $backlighting['label'].'</strong> '; echo '<span>'.$backlighting['value'].'</span>'; echo '</li>';  
        }
        
        if($design_name['value']){
          echo '<li><strong>'; echo $design_name['label'].'</strong> '; echo '<span>'.$design_name['value'].'</span>'; echo '</li>';  
        }
        
        if($bezel_width['value']){
          echo '<li><strong>'; echo $bezel_width['label'].'</strong> '; echo '<span>'.$bezel_width['value'].'</span>'; echo '</li>';  
        }
        
        if($slim_type['value']){
          echo '<li><strong>'; echo $slim_type['label'].'</strong> '; echo '<span>'.$slim_type['value'].'</span>'; echo '</li>';  
        }
        
        if($color['value']){
          echo '<li><strong>'; echo $color['label'].'</strong> '; echo '<span>'.$color['value'].'</span>'; echo '</li>';  
        }
        
        if($standard_type_color['value']){
          echo '<li><strong>'; echo $standard_type_color['label'].'</strong> '; echo '<span>'.$standard_type_color['value'].'</span>'; echo '</li>';  
        }
        
        if($ultra_hd_connected['value']){
          echo '<li><strong>'; echo $ultra_hd_connected['label'].'</strong> '; echo '<span>'.$ultra_hd_connected['value'].'</span>'; echo '</li>';  
        }
        
        if($dimming_technology['value']){
          echo '<li><strong>'; echo $dimming_technology['label'].'</strong> '; echo '<span>'.$dimming_technology['value'].'</span>'; echo '</li>';  
        }
        
        if($style['value']){
          echo '<li><strong>'; echo $style['label'].'</strong> '; echo '<span>'.$style['value'].'</span>'; echo '</li>';  
        }
        
        if($tv_type['value']){
          echo '<li><strong>'; echo $tv_type['label'].'</strong> '; echo '<span>'.$tv_type['value'].'</span>'; echo '</li>';  
        }
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
         // $video
        $video = get_field_object('video');
        echo '<div class="product-specs">';
        echo '<h3>'.$video['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('video') ): while( have_rows('video') ): the_row(); ?>
		<?php
		$screen_size                  = get_sub_field_object('screen_size');
        $resolution                   = get_sub_field_object('resolution');
        $motion_rate                  = get_sub_field_object('motion_rate');
        $color                        = get_sub_field_object('color');
        $tenbit_support               = get_sub_field_object('tenbit_support');
        $hdr                          = get_sub_field_object('hdr');
        $blacks                       = get_sub_field_object('blacks');
        $picture_engine               = get_sub_field_object('picture_engine');
        $quantum_dot_color            = get_sub_field_object('quantum_dot_color');
        $depth_enhancing_technology   = get_sub_field_object('depth_enhancing_technology');
        
        if($screen_size['value']){
          echo '<li><strong>'; echo $screen_size['label'].'</strong> '; echo '<span>'.$screen_size['value'].'</span>'; echo '</li>';  
        }
        
        if($resolution['value']){
          echo '<li><strong>'; echo $resolution['label'].'</strong> '; echo '<span>'.$resolution['value'].'</span>'; echo '</li>';  
        }
        
        if($motion_rate['value']){
          echo '<li><strong>'; echo $motion_rate['label'].'</strong> '; echo '<span>'.$motion_rate['value'].'</span>'; echo '</li>';  
        }
        
        if($color['value']){
          echo '<li><strong>'; echo $color['label'].'</strong> '; echo '<span>'.$color['value'].'</span>'; echo '</li>';  
        }
        
        if($tenbit_support['value']){
          echo '<li><strong>'; echo $tenbit_support['label'].'</strong> '; echo '<span>'.$tenbit_support['value'].'</span>'; echo '</li>';  
        }
        
        if($hdr['value']){
          echo '<li><strong>'; echo $hdr['label'].'</strong> '; echo '<span>'.$hdr['value'].'</span>'; echo '</li>';  
        }
        
        if($blacks['value']){
          echo '<li><strong>'; echo $blacks['label'].'</strong> '; echo '<span>'.$blacks['value'].'</span>'; echo '</li>';  
        }
        
        if($picture_engine['value']){
          echo '<li><strong>'; echo $picture_engine['label'].'</strong> '; echo '<span>'.$picture_engine['value'].'</span>'; echo '</li>';  
        }
        
        if($quantum_dot_color['value']){
          echo '<li><strong>'; echo $quantum_dot_color['label'].'</strong> '; echo '<span>'.$quantum_dot_color['value'].'</span>'; echo '</li>';  
        }
        
        if($depth_enhancing_technology['value']){
          echo '<li><strong>'; echo $depth_enhancing_technology['label'].'</strong> '; echo '<span>'.$depth_enhancing_technology['value'].'</span>'; echo '</li>';  
        }
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
         // $audio
        $audio = get_field_object('audio');
        echo '<div class="product-specs">';
        echo '<h3>'.$audio['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('audio') ): while( have_rows('audio') ): the_row(); ?>
		<?php
		$dolby                        = get_sub_field_object('dolby');
        $sound_output                 = get_sub_field_object('sound_output');
        $woofer                       = get_sub_field_object('woofer');
        $speaker_type                 = get_sub_field_object('speaker_type');
        $multiroom_link               = get_sub_field_object('multiroom_link');
        $bluetooh_headset_support     = get_sub_field_object('bluetooh_headset_support');
        
        if($dolby['value']){
          echo '<li><strong>'; echo $dolby['label'].'</strong> '; echo '<span>'.$dolby['value'].'</span>'; echo '</li>';  
        }
        
        if($sound_output['value']){
          echo '<li><strong>'; echo $sound_output['label'].'</strong> '; echo '<span>'.$sound_output['value'].'</span>'; echo '</li>';  
        }
        
        if($woofer['value']){
          echo '<li><strong>'; echo $woofer['label'].'</strong> '; echo '<span>'.$woofer['value'].'</span>'; echo '</li>';  
        }
        
        if($speaker_type['value']){
          echo '<li><strong>'; echo $speaker_type['label'].'</strong> '; echo '<span>'.$speaker_type['value'].'</span>'; echo '</li>';  
        }
        
        if($multiroom_link['value']){
          echo '<li><strong>'; echo $multiroom_link['label'].'</strong> '; echo '<span>'.$multiroom_link['value'].'</span>'; echo '</li>';  
        }
        
        if($bluetooh_headset_support['value']){
          echo '<li><strong>'; echo $bluetooh_headset_support['label'].'</strong> '; echo '<span>'.$bluetooh_headset_support['value'].'</span>'; echo '</li>';  
        }
        
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
         // $wireless_connectivity
        $wireless_connectivity = get_field_object('wireless_connectivity');
        echo '<div class="product-specs">';
        echo '<h3>'.$wireless_connectivity['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('wireless_connectivity') ): while( have_rows('wireless_connectivity') ): the_row(); ?>
		<?php
		$wifi                        = get_sub_field_object('wifi ');
        $wifi_direct                 = get_sub_field_object('wifi_direct');
        
        if($wifi['value']){
          echo '<li><strong>'; echo $wifi['label'].'</strong> '; echo '<span>'.$wifi['value'].'</span>'; echo '</li>';  
        }
        
        if($wifi_direct['value']){
          echo '<li><strong>'; echo $wifi_direct['label'].'</strong> '; echo '<span>'.$wifi_direct['value'].'</span>'; echo '</li>';  
        }
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
         // $features
        $features = get_field_object('features');
        echo '<div class="product-specs">';
        echo '<h3>'.$features['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('features') ): while( have_rows('features') ): the_row(); ?>
		<?php
		$smart_hub                = get_sub_field_object('smart_hub');
        $processor                = get_sub_field_object('processor');
        $apps_platform            = get_sub_field_object('apps_platform');
        $ai_technology            = get_sub_field_object('ai_technology');
        $ai_upscale               = get_sub_field_object('ai_upscale');
        $bixby                    = get_sub_field_object('bixby');
        $google_assistant         = get_sub_field_object('google_assistant');
        $works_with_alexa         = get_sub_field_object('works_with_alexa');
        $digital_clean_view       = get_sub_field_object('digital_clean_view');
        $auto_channel_search      = get_sub_field_object('auto_channel_search');
        $auto_motion_plus         = get_sub_field_object('auto_motion_plus');
        $ultra_black              = get_sub_field_object('ultra_black');
        $connect_share            = get_sub_field_object('connect_share');
        $embedded_pop             = get_sub_field_object('embedded_pop');
        $osd_language             = get_sub_field_object('osd_language');
        $insta_port               = get_sub_field_object('insta_port');
        $anynet                   = get_sub_field_object('anynet');
        $closed_captioning        = get_sub_field_object('closed_captioning');
        $electronic_program_guide = get_sub_field_object('electronic_program_guide');
        $v_chip                   = get_sub_field_object('v_chip');
        $game_mode                = get_sub_field_object('game_mode');
        $ambient_mode             = get_sub_field_object('ambient_mode');
        $usb_hd_support           = get_sub_field_object('usb_hd_support');
        $eco_sensor               = get_sub_field_object('eco_sensor');
        $auto_power_off           = get_sub_field_object('auto_power_off');
        $tv_to_mobile_mirroring   = get_sub_field_object('tv_to_mobile_mirroring');
        $mobile_to_tv_mirroring   = get_sub_field_object('mobile_to_tv_mirroring');
      
        if($smart_hub['value']){
          echo '<li><strong>'; echo $smart_hub['label'].'</strong> '; echo '<span>'.$smart_hub['value'].'</span>'; echo '</li>';  
        }
        
        if($processor['value']){
          echo '<li><strong>'; echo $processor['label'].'</strong> '; echo '<span>'.$processor['value'].'</span>'; echo '</li>';  
        }
        
        if($apps_platform['value']){
          echo '<li><strong>'; echo $apps_platform['label'].'</strong> '; echo '<span>'.$wifi_direct['value'].'</span>'; echo '</li>';  
        }
        
        if($ai_technology['value']){
          echo '<li><strong>'; echo $ai_technology['label'].'</strong> '; echo '<span>'.$ai_technology['value'].'</span>'; echo '</li>';  
        }
        
        if($ai_upscale['value']){
          echo '<li><strong>'; echo $ai_upscale['label'].'</strong> '; echo '<span>'.$ai_upscale['value'].'</span>'; echo '</li>';  
        }
        
        if($bixby['value']){
          echo '<li><strong>'; echo $bixby['label'].'</strong> '; echo '<span>'.$bixby['value'].'</span>'; echo '</li>';  
        }
        
        if($google_assistant['value']){
          echo '<li><strong>'; echo $google_assistant['label'].'</strong> '; echo '<span>'.$google_assistant['value'].'</span>'; echo '</li>';  
        }
        
        if($works_with_alexa['value']){
          echo '<li><strong>'; echo $works_with_alexa['label'].'</strong> '; echo '<span>'.$works_with_alexa['value'].'</span>'; echo '</li>';  
        }
        
        if($digital_clean_view['value']){
          echo '<li><strong>'; echo $digital_clean_view['label'].'</strong> '; echo '<span>'.$digital_clean_view['value'].'</span>'; echo '</li>';  
        }
        
        if($auto_channel_search['value']){
          echo '<li><strong>'; echo $auto_channel_search['label'].'</strong> '; echo '<span>'.$auto_channel_search['value'].'</span>'; echo '</li>';  
        }
        
        if($auto_motion_plus['value']){
          echo '<li><strong>'; echo $auto_motion_plus['label'].'</strong> '; echo '<span>'.$auto_motion_plus['value'].'</span>'; echo '</li>';  
        }
        
        if($ultra_black['value']){
          echo '<li><strong>'; echo $ultra_black['label'].'</strong> '; echo '<span>'.$ultra_black['value'].'</span>'; echo '</li>';  
        }
        
        if($connect_share['value']){
          echo '<li><strong>'; echo $connect_share['label'].'</strong> '; echo '<span>'.$connect_share['value'].'</span>'; echo '</li>';  
        }
        
        if($embedded_pop['value']){
          echo '<li><strong>'; echo $embedded_pop['label'].'</strong> '; echo '<span>'.$embedded_pop['value'].'</span>'; echo '</li>';  
        }
        
        if($osd_language['value']){
          echo '<li><strong>'; echo $osd_language['label'].'</strong> '; echo '<span>'.$osd_language['value'].'</span>'; echo '</li>';  
        }
        
        if($insta_port['value']){
          echo '<li><strong>'; echo $insta_port['label'].'</strong> '; echo '<span>'.$insta_port['value'].'</span>'; echo '</li>';  
        }
        
        if($anynet['value']){
          echo '<li><strong>'; echo $anynet['label'].'</strong> '; echo '<span>'.$anynet['value'].'</span>'; echo '</li>';  
        }
        
        if($closed_captioning['value']){
          echo '<li><strong>'; echo $closed_captioning['label'].'</strong> '; echo '<span>'.$closed_captioning['value'].'</span>'; echo '</li>';  
        }
        
        if($electronic_program_guide['value']){
          echo '<li><strong>'; echo $electronic_program_guide['label'].'</strong> '; echo '<span>'.$electronic_program_guide['value'].'</span>'; echo '</li>';  
        }
        
        if($v_chip['value']){
          echo '<li><strong>'; echo $v_chip['label'].'</strong> '; echo '<span>'.$v_chip['value'].'</span>'; echo '</li>';  
        }
        
        if($game_mode['value']){
          echo '<li><strong>'; echo $game_mode['label'].'</strong> '; echo '<span>'.$game_mode['value'].'</span>'; echo '</li>';  
        }
        
        if($ambient_mode['value']){
          echo '<li><strong>'; echo $ambient_mode['label'].'</strong> '; echo '<span>'.$ambient_mode['value'].'</span>'; echo '</li>';  
        }
        
        if($usb_hd_support['value']){
          echo '<li><strong>'; echo $usb_hd_support['label'].'</strong> '; echo '<span>'.$usb_hd_support['value'].'</span>'; echo '</li>';  
        }
        
        if($eco_sensor['value']){
          echo '<li><strong>'; echo $eco_sensor['label'].'</strong> '; echo '<span>'.$eco_sensor['value'].'</span>'; echo '</li>';  
        }
        
        if($auto_power_off['value']){
          echo '<li><strong>'; echo $auto_power_off['label'].'</strong> '; echo '<span>'.$auto_power_off['value'].'</span>'; echo '</li>';  
        }
        
        if($tv_to_mobile_mirroring['value']){
          echo '<li><strong>'; echo $tv_to_mobile_mirroring['label'].'</strong> '; echo '<span>'.$tv_to_mobile_mirroring['value'].'</span>'; echo '</li>';  
        }
        
        if($mobile_to_tv_mirroring['value']){
          echo '<li><strong>'; echo $mobile_to_tv_mirroring['label'].'</strong> '; echo '<span>'.$mobile_to_tv_mirroring['value'].'</span>'; echo '</li>';  
        }
        
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
         // $inputs_and_outputs
        $inputs_and_outputs = get_field_object('inputs_and_outputs');
        echo '<div class="product-specs">';
        echo '<h3>'.$inputs_and_outputs['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('inputs_and_outputs') ): while( have_rows('inputs_and_outputs') ): the_row(); ?>
		<?php
		$hdmi                  = get_sub_field_object('hdmi ');
        $usb                   = get_sub_field_object('usb');
        $ethernet              = get_sub_field_object('ethernet');
        $rf_in_cable           = get_sub_field_object('rf_in_cable ');
        $rf_in_satelite        = get_sub_field_object('rf_in_satelite');
        $digital_audio_out     = get_sub_field_object('digital_audio_out');
        $audio_return_channel  = get_sub_field_object('audio_return_channel ');
        $r5232c                = get_sub_field_object('r5232c');
        $one_connect           = get_sub_field_object('one_connect');

      
        if($hdmi['value']){
          echo '<li><strong>'; echo $hdmi['label'].'</strong> '; echo '<span>'.$hdmi['value'].'</span>'; echo '</li>';  
        }
        
        if($usb['value']){
          echo '<li><strong>'; echo $usb['label'].'</strong> '; echo '<span>'.$usb['value'].'</span>'; echo '</li>';  
        }
        
        if($ethernet['value']){
          echo '<li><strong>'; echo $ethernet['label'].'</strong> '; echo '<span>'.$ethernet['value'].'</span>'; echo '</li>';  
        }
        
        if($rf_in_cable['value']){
          echo '<li><strong>'; echo $rf_in_cable['label'].'</strong> '; echo '<span>'.$rf_in_cable['value'].'</span>'; echo '</li>';  
        }
        
        if($rf_in_satelite['value']){
          echo '<li><strong>'; echo $rf_in_satelite['label'].'</strong> '; echo '<span>'.$rf_in_satelite['value'].'</span>'; echo '</li>';  
        }
        
        if($digital_audio_out['value']){
          echo '<li><strong>'; echo $digital_audio_out['label'].'</strong> '; echo '<span>'.$digital_audio_out['value'].'</span>'; echo '</li>';  
        }
        
        if($audio_return_channel['value']){
          echo '<li><strong>'; echo $audio_return_channel['label'].'</strong> '; echo '<span>'.$audio_return_channel['value'].'</span>'; echo '</li>';  
        }
        
        if($r5232c['value']){
          echo '<li><strong>'; echo $r5232c['label'].'</strong> '; echo '<span>'.$r5232c['value'].'</span>'; echo '</li>';  
        }
        
        if($one_connect['value']){
          echo '<li><strong>'; echo $one_connect['label'].'</strong> '; echo '<span>'.$one_connect['value'].'</span>'; echo '</li>';  
        }        
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
		$product_size_without_stand = get_sub_field_object('product_size_without_stand ');
        $product_size_with_stand    = get_sub_field_object('product_size_with_stand');
        $standard_size              = get_sub_field_object('standard_size');
        $shipping_size              = get_sub_field_object('shipping_size ');

      
        if($product_size_without_stand['value']){
          echo '<li><strong>'; echo $product_size_without_stand['label'].'</strong> '; echo '<span>'.$product_size_without_stand['value'].'</span>'; echo '</li>';  
        }
        
        if($product_size_with_stand['value']){
          echo '<li><strong>'; echo $product_size_with_stand['label'].'</strong> '; echo '<span>'.$product_size_with_stand['value'].'</span>'; echo '</li>';  
        }
        
        if($standard_size['value']){
          echo '<li><strong>'; echo $standard_size['label'].'</strong> '; echo '<span>'.$standard_size['value'].'</span>'; echo '</li>';  
        }
        
        if($shipping_size['value']){
          echo '<li><strong>'; echo $shipping_size['label'].'</strong> '; echo '<span>'.$shipping_size['value'].'</span>'; echo '</li>';  
        }        
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
		$product_weight_without_stand = get_sub_field_object('product_weight_without_stand ');
        $product_weight_with_stand    = get_sub_field_object('product_weight_with_stand');
        $shipping_weight              = get_sub_field_object('shipping_weight');
        $stand                        = get_sub_field_object('stand');
      
        if($product_weight_without_stand['value']){
          echo '<li><strong>'; echo $product_weight_without_stand['label'].'</strong> '; echo '<span>'.$product_weight_without_stand['value'].'</span>'; echo '</li>';  
        }
        
        if($product_weight_with_stand['value']){
          echo '<li><strong>'; echo $product_weight_with_stand['label'].'</strong> '; echo '<span>'.$product_weight_with_stand['value'].'</span>'; echo '</li>';  
        }
        
        if($shipping_weight['value']){
          echo '<li><strong>'; echo $shipping_weight['label'].'</strong> '; echo '<span>'.$shipping_weight['value'].'</span>'; echo '</li>';  
        }
        
        if($stand['value']){
          echo '<li><strong>'; echo $stand['label'].'</strong> '; echo '<span>'.$stand['value'].'</span>'; echo '</li>';  
        }        
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
         // $power
        $power = get_field_object('power');
        echo '<div class="product-specs">';
        echo '<h3>'.$power['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('power') ): while( have_rows('power') ): the_row(); ?>
		<?php
		$power_supply              = get_sub_field_object('power_supply');
        $typical_power_consumption = get_sub_field_object('typical_power_consumption');
        $maximum_power_consumption = get_sub_field_object('maximum_power_consumption');
        $standby_power_consumption = get_sub_field_object('standby_power_consumption');
      
        if($power_supply['value']){
          echo '<li><strong>'; echo $power_supply['label'].'</strong> '; echo '<span>'.$power_supply['value'].'</span>'; echo '</li>';  
        }
        
        if($typical_power_consumption['value']){
          echo '<li><strong>'; echo $typical_power_consumption['label'].'</strong> '; echo '<span>'.$typical_power_consumption['value'].'</span>'; echo '</li>';  
        }
        
        if($maximum_power_consumption['value']){
          echo '<li><strong>'; echo $maximum_power_consumption['label'].'</strong> '; echo '<span>'.$maximum_power_consumption['value'].'</span>'; echo '</li>';  
        }
        
        if($standby_power_consumption['value']){
          echo '<li><strong>'; echo $standby_power_consumption['label'].'</strong> '; echo '<span>'.$standby_power_consumption['value'].'</span>'; echo '</li>';  
        }        
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
        
         // $system
        $system = get_field_object('system');
        echo '<div class="product-specs">';
        echo '<h3>'.$system['label'].'</h3>';
    	echo '<ul>';
        ?>
		<?php if( have_rows('system') ): while( have_rows('system') ): the_row(); ?>
		<?php
		$dtv_tuner            = get_sub_field_object('dtv_tuner');
        $digital_broadcasting = get_sub_field_object('digital_broadcasting');
        $analog_tuner         = get_sub_field_object('analog_tuner');
      
        if($dtv_tuner['value']){
          echo '<li><strong>'; echo $dtv_tuner['label'].'</strong> '; echo '<span>'.$dtv_tuner['value'].'</span>'; echo '</li>';  
        }
        
        if($digital_broadcasting['value']){
          echo '<li><strong>'; echo $digital_broadcasting['label'].'</strong> '; echo '<span>'.$digital_broadcasting['value'].'</span>'; echo '</li>';  
        }
        
        if($analog_tuner['value']){
          echo '<li><strong>'; echo $analog_tuner['label'].'</strong> '; echo '<span>'.$analog_tuner['value'].'</span>'; echo '</li>';  
        }
               
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
		$quantum_dot_color   = get_sub_field_object('quantum_dot_color');
        $flat_tv             = get_sub_field_object('flat_tv');
        $smart_tv            = get_sub_field_object('smart_tv');
        $design_360          = get_sub_field_object('design_360');
        $samsung_one_remote  = get_sub_field_object('samsung_one_remote');
        $universal_guide     = get_sub_field_object('universal_guide');
        $ultra_viewing_angle = get_sub_field_object('ultra_viewing_angle');
      
        if($quantum_dot_color['value']){
          echo '<li><strong>'; echo $quantum_dot_color['label'].'</strong> '; echo '<span>'.$quantum_dot_color['value'].'</span>'; echo '</li>';  
        }
        
        if($flat_tv['value']){
          echo '<li><strong>'; echo $flat_tv['label'].'</strong> '; echo '<span>'.$flat_tv['value'].'</span>'; echo '</li>';  
        }
        
        if($smart_tv['value']){
          echo '<li><strong>'; echo $smart_tv['label'].'</strong> '; echo '<span>'.$smart_tv['value'].'</span>'; echo '</li>';  
        }
        
        if($design_360['value']){
          echo '<li><strong>'; echo $design_360['label'].'</strong> '; echo '<span>'.$design_360['value'].'</span>'; echo '</li>';  
        }
        
        if($samsung_one_remote['value']){
          echo '<li><strong>'; echo $samsung_one_remote['label'].'</strong> '; echo '<span>'.$samsung_one_remote['value'].'</span>'; echo '</li>';  
        }
        
        if($universal_guide['value']){
          echo '<li><strong>'; echo $universal_guide['label'].'</strong> '; echo '<span>'.$universal_guide['value'].'</span>'; echo '</li>';  
        }
        
        if($ultra_viewing_angle['value']){
          echo '<li><strong>'; echo $ultra_viewing_angle['label'].'</strong> '; echo '<span>'.$ultra_viewing_angle['value'].'</span>'; echo '</li>';  
        }
               
        ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</ul>
        </div>
        <?php
return ob_get_clean();    
}
add_shortcode('tv_specs','tv_specs');

