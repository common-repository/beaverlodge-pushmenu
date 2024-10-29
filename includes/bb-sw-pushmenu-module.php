<?php

$menu_items = wp_get_nav_menu_items($menu->post_title);

class SWPushmenuClass extends FLBuilderModule {

    public function __construct()
    {

        parent::__construct(array(
            'name'          => __( 'Pushmenu', 'sw_menu' ),
            'description'   => __( 'Add off canvas menu to your site!', 'sw_menu' ),
            'category'      => __( 'Beaverlodge', 'sw_menu' ),
            'dir'           => SW_PUSHMENU_MODULE_DIR . '/',
            'url'           => SW_PUSHMENU_URL . '/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));
        
        $this->add_js('jquery.sidr.min.js', $this->url . 'js/jquery.sidr.min.js', array(), '', true);
    }    
    
    	public static function _get_menus(){
		$get_menus =  get_terms( 'nav_menu', array( 'hide_empty' => true ) );
		$fields = array(
		    'type'          => 'select',
		    'label'         => __( 'Menu', 'sw_menu' ),
		    'helper'		=> __( 'Select a WordPress menu that you created in the admin under Appearance > Menus.', 'sw_menu' )
		);
		
		if( $get_menus ){

			foreach( $get_menus as $key => $menu ){

				if( $key == 0 ){
					$fields['default'] = $menu->name;
				}

				$menus[ $menu->slug ] = $menu->name;
			}

			$fields['options'] = $menus;
			
		} else {
			$fields['options'] = array( '' => __( 'No Menus Found', 'sw_menu' ) );			
		}

		return $fields;

	}
    
}

FLBuilder::register_module( 'SWPushmenuClass', array(
    
    'menu-tab'      => array(
        'title'         => __( 'Menu Option', 'sw_menu' ),
        'sections'      => array(
            'menu_select'  => array(
                'title'         => __( 'Menu', 'sw_menu' ),
                'fields'        => array(
                    
                    'menu' => FLMenuModule::_get_menus(),
                        
                    
                    'menu_location'     => array(
                        'type'          => 'select',
                        'label'         => __( 'Off-Canvas Location', 'sw_menu' ),
                        'default'       => 'left',
                        'options'       => array(
                            'left'      => 'Left',
                            'right'     => 'Right',
                        ),
                    ), 
                    
                    'menu_link'     => array(
                        'type'          => 'select',
                        'label'         => __( 'Off-Canvas Link', 'sw_menu' ),
                        'default'       => 'text',
                        'options'       => array(
                            'text'      => 'Text',
                            'icon'     => 'Icon',
                            'icon_left'     => 'Icon Left/Text Right',
                            'icon_right'     => 'Icon Right/Text Left',
                        ),
                        'toggle'        => array(
                            'text'      => array(
                                'fields'    => array( 'menu_text' ),
                            ),
                            'icon'      => array(
                                'fields'    => array( 'menu_icon' ),
                            ),
                            'icon_right'      => array(
                                'fields'    => array( 'menu_icon', 'menu_text' ),
                            ),
                            'icon_left'      => array(
                                'fields'    => array( 'menu_icon', 'menu_text' ),
                            ),
                        ),
                    ), 
                    
                    'link_position'     => array(
                        'type'      => 'select',
                        'label'     => __( 'Link Position', 'sw_menu' ),
                        'default'   => 'left',
                        'options'   => array(
                            'left'  => 'Left',
                            'right' => 'Right',
                        ),
                    ),
                    
                    
                    'menu_text'     => array(
                        'type'      => 'text',
                        'label'     => __( 'Menu Link Text', 'sw_menu' ),
                        'default'   => 'Menu',
                    ),
                    
                    'menu_icon'     => array(
                        'type'      => 'icon',
                        'label'     => __( 'Menu Icon', 'sw_menu' ),
                        'default'   => 'fi-list',
                    ),
                    
                    'menu_style'     => array(
                        'type'      => 'select',
                        'label'     => __( 'Menu Theme', 'sw_menu' ),
                        'default'   => 'dark',
                        'options'   => array(
                            'dark'  => 'Dark',
                            'light' => 'Light',
                        ),
                    ),                    
                    
                    'menu_break'     => array(
                        'type'      => 'text',
                        'label'     => __( 'Breakpoint', 'sw_menu' ),
                        'default'   => '767',
                        'maxlength'     => '4',
                        'size'          => '5',
                        'description'   => 'px',
                        'placeholder'   => '767'
                    ),
                    
                    'menu_width'     => array(
                        'type'      => 'text',
                        'label'     => __( 'Off Canvas Width', 'sw_menu' ),
                        'default'   => '260',
                        'maxlength'     => '4',
                        'size'          => '5',
                        'description'   => 'px',
                        'placeholder'   => '260'
                    ),
                    
                    
                ),                     
                    
            ), // end menu select            
            

        )
    
    ),     
    
    'menu-style'      => array(
        'title'         => __( 'Styling', 'sw_menu' ),
        'sections'      => array(
            'menu_styling'  => array(
                'title'         => __( 'Main Menu', 'sw_menu' ),
                'fields'        => array(
                    
                    'font_color'     => array(
                        'type'          => 'color',
                        'label'         => __( 'Font', 'sw_menu' ),
                        'default'        => 'fcfcfc',
                    ), 
                    
                    'font_hover_color'     => array(
                        'type'          => 'color',
                        'label'         => __( 'Font Hover', 'sw_menu' ),
                        'default'        => 'fcfcfc',
                    ), 
                    
                    'background_color'     => array(
                        'type'          => 'color',
                        'label'         => __( 'Background', 'sw_menu' ),
                        'default'        => '372f2b',
                    ), 
                    
                    'background_hover'     => array(
                        'type'          => 'color',
                        'label'         => __( 'Background Hover', 'sw_menu' ),
                        'default'        => '4b4441',
                    ),
                    
                    'font'          => array(
						'type'          => 'font',
						'default'		=> array(
							'family'		=> 'Default',
							'weight'		=> 300
						),
						'label'         => __('Font', 'sw_menu'),
						'preview'         => array(
							'type'            => 'font',
							'selector'        => '.pushy-menu > li > a'
						)					
					),
                    
					'font_size'     => array(
						'type'          => 'select',
						'label'         => __('Font Size', 'sw_menu'),
						'default'       => 'default',
						'options'       => array(
							'default'       =>  __('Default', 'sw_menu'),
							'custom'        =>  __('Custom', 'sw_menu')
						),
						'toggle'        => array(
							'custom'        => array(
								'fields'        => array('custom_font_size')
							)
						)
					),
                    
					'custom_font_size' => array(
						'type'          => 'text',
						'label'         => __('Custom Font Size', 'sw_menu'),
						'default'       => '13',
						'maxlength'     => '3',
						'size'          => '4',
						'description'   => 'px'
					),
                    
					'height' => array(
						'type'          => 'text',
						'label'         => __('Height', 'sw_menu'),
						'default'       => '54',
						'maxlength'     => '3',
						'size'          => '4',
						'description'   => 'px'
					),
                    
                    'letter_spacing'     => array(
                        'type'          => 'select',
                        'label'         => __( 'Letter Spacing', 'sw_menu' ),
                        'default'       => '0',
                        'options'       => array(
                            '-3'    => '-3',  
                            '-2'    => '-2',  
                            '-1'    => '-1',  
                            '0'    => '0',  
                            '1'    => '1',  
                            '2'    => '2',  
                            '3'    => '3',
                        ),
                        'description'   => 'px',
                    ), 
                    
                    
                    'show_border'     => array(
                        'type'      => 'select',
                        'label'     => __( 'Show Borders', 'sw_menu' ),
                        'default'   => 'yes',
                        'options'   => array(
                            'yes'  => 'Yes',
                            'no' => 'No',
                        ),
                    ),
                    
                    
                ),                     
                    
            ), // end menu select            
            

        )
    
    ), 
    

)); 
    