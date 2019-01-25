<?php

if( ! class_exists('CSF') ) return;

$prefix = 'shaper_options';

/**
 * Shaper global options
 * 
 * 
 */
CSF::createOptions(
    $prefix,
    [
        'menu_title' => __( 'Shaper Options', 'shaper-wp' ),
        'menu_slug'  => 'shaper-options'
    ]
);


/**
 * ==========================================
 * Header Section
 * ==========================================
 */
CSF::createSection(
    $prefix,
    [
        'title'  => __( 'Header Options', 'shaper-wp' ),
        'fields' => [
            [
                'id'    => 'logo_confusion',
                'type'  => 'switcher',
                'title' => __('Choose Logo Type', 'shaper-wp'),
                'label' => __( 'On for image type', 'shaper-wp' )
            ],
            [
                'id'         => 'shaper_header_logo',
                'type'       => 'text',
                'title'      => __( 'Header Logo', 'shaper-wp' ),
                'dependency' => ['logo_confusion', '==', 0]
            ],
            [
                'id'           => 'shaper_header_img_logo',
                'type'         => 'upload',
                'title'        => __( 'Header Logo', 'shaper-wp' ),
                'library'      => 'image',
                'button_title' => 'Add Image',
                'remove_title' => 'Remove Image',
                'dependency' => ['logo_confusion', '==', 1]
            ]
        ]
    ]
);


/**
 * ==========================================
 * Header Section
 * ==========================================
 */
CSF::createSection(
    $prefix,
    [
        'title'  => __( 'Hero Area', 'shaper-wp' ),
        'fields' => [
            [
                'id'           => 'banner_thumbnail',
                'type'         => 'upload',
                'title'        => __( 'Hero Area Image', 'shaper-wp' ),
                'library'      => 'image',
                'button_title' => 'Add Image',
                'remove_title' => 'Remove Image'
            ],
            [
                'id'         => 'hero_area_title',
                'type'       => 'text',
                'title'      => __( 'Hero Area Title', 'shaper-wp' )
            ],
            [
                'id'         => 'hero_area_content',
                'type'       => 'textarea',
                'title'      => __( 'Hero Area Content', 'shaper-wp' )
            ],
            [
                'id'      => 'ha_button_switcher',
                'type'    => 'switcher',
                'title'   => __('Hero Area Button', 'shaper-wp'),
                'default' => true
            ],
            [
                'id'         => 'hero_btn_text',
                'type'       => 'text',
                'title'      => __( 'Button Text', 'shaper-wp' ),
                'dependency' => ['ha_button_switcher', '==', 'true' ]
            ],
            [
                'id'         => 'hero_btn_link',
                'type'       => 'text',
                'title'      => __( 'Button Link', 'shaper-wp' ),
                'dependency' => ['ha_button_switcher', '==', 'true' ]
            ],
            [
                'id'         => 'hero_btn_bg_color',
                'type'       => 'color',
                'title'      => __( 'Button Background Color', 'shaper-wp' ),
                'default'    => '#f9a743',
                'dependency' => ['ha_button_switcher', '==', 'true' ]
            ],
            [
                'id'         => 'hero_btn_color',
                'type'       => 'color',
                'title'      => __( 'Button Text Color', 'shaper-wp' ),
                'default'    => '#ffffff',
                'dependency' => ['ha_button_switcher', '==', 'true' ]
            ],
        ]
    ]
);


/**
 * ==========================================
 * Features Section
 * ==========================================
 */
CSF::createSection(
    $prefix,
    [
        'title'  => __( 'Features', 'shaper-wp' ),
        'fields' => [
            [
                'id'    => 'feature_section_title',
                'title' => __( 'Feature Section Title', 'shaper-wp' ),
                'type'  => 'text',
                'default'   => __( 'Our Core Features', 'shaper-wp' )
            ],
            [
                'id'     => 'left_side_features',
                'type'   => 'repeater',
                'title'  => __( 'Left Side Features', 'shaper-wp' ),
                'fields' => [
                    [
                        'id'    => 'feature_icon',
                        'title' => __( 'Features', 'shaper-wp' ),
                        'type'  => 'icon'
                    ],
                    [
                        'id'    => 'feature_title',
                        'title' => __( 'Title', 'shaper-wp' ),
                        'type'  => 'text'
                    ],
                    [
                        'id'    => 'feature_content',
                        'title' => __( 'Content', 'shaper-wp' ),
                        'type'  => 'textarea'
                    ]
                ]
            ],
            [
                'id'           => 'feature_image',
                'type'         => 'upload',
                'title'        => __( 'Feature Image', 'shaper-wp' ),
                'library'      => 'image',
                'button_title' => 'Add Image',
                'remove_title' => 'Remove Image'
            ],
            [
                'id'     => 'right_side_features',
                'type'   => 'repeater',
                'title'  => __( 'Right Side Features', 'shaper-wp' ),
                'fields' => [
                    [
                        'id'    => 'feature_icon',
                        'title' => __( 'Features', 'shaper-wp' ),
                        'type'  => 'icon'
                    ],
                    [
                        'id'    => 'feature_title',
                        'title' => __( 'Title', 'shaper-wp' ),
                        'type'  => 'text'
                    ],
                    [
                        'id'    => 'feature_content',
                        'title' => __( 'Content', 'shaper-wp' ),
                        'type'  => 'textarea'
                    ]
                ]
            ]
        ]
    ]
);


/**
 * ==========================================
 * Promo Section
 * ==========================================
 */
CSF::createSection(
    $prefix,
    [
        'title'  => __( 'Promo Section', 'shaper-wp' ),
        'fields' => [
            [
                'id'      => 'promo_area_bg',
                'type'    => 'color',
                'title'   => __('Section Background', 'shaper-wp'),
                'default' => '#f9a743'
            ],
            [
                'id'           => 'promo_image',
                'type'         => 'upload',
                'title'        => __( 'Promo Image', 'shaper-wp' ),
                'library'      => 'image',
                'button_title' => 'Add Image',
                'remove_title' => 'Remove Image',
            ],
            [
                'id'    => 'promo_area_title',
                'type'  => 'text',
                'title' => __('Promo Area Title', 'shaper-wp')
            ],
            [
                'id'    => 'promo_area_content',
                'type'  => 'wp_editor',
                'title' => __('Promo Area Content', 'shaper-wp')
            ],
        ]
    ]
);





/**
 * ==========================================
 * Newsletter Section
 * ==========================================
 */
CSF::createSection(
    $prefix,
    [
        'title'  => __( 'Newsletter Section', 'shaper-wp' ),
        'fields' => [
            [
                'id'           => 'newsletter_section_bg',
                'type'         => 'upload',
                'title'        => __( 'Newsletter Section Background Image', 'shaper-wp' ),
                'library'      => 'image',
                'button_title' => 'Add Image',
                'remove_title' => 'Remove Image',
            ],
            [
                'id'    => 'newsletter_section_title',
                'type'  => 'text',
                'title' => __('Newsletter Section Title', 'shaper-wp')
            ],
            [
                'id'    => 'newsletter_section_content',
                'type'  => 'wp_editor',
                'title' => __('Newsletter Area Content', 'shaper-wp')
            ],
            [
                'id'          => 'newsletter_forms',
                'type'        => 'select',
                'title'       => __( 'Add Newsletter Form', 'shaper-wp' ),
                'placeholder' => 'Select an option',
                'options'     => get_all_cf7()
            ],
        ]
    ]
);



CSF::createSection(
    $prefix,
    [
        'title'  => __( 'Products', 'shaper-wp' ),
        'fields' => [
            [
                'id'     => 'products',
                'type'   => 'repeater',
                'title'  => __( 'Repeater', 'shaper-wp' ),
                'fields' => [
                    [
                        'id'    => 'product_img',
                        'title' => __( 'Product Image', 'shaper-wp' ),
                        'type'  => 'upload'
                    ]
                ]
            ]
        ]
    ]
);


CSF::createSection(
    $prefix,
    [
        'title'  => __( 'Footer Options', 'shaper-wp' ),
        'fields' => [
            [
                'id'    => 'opt-text',
                'type'  => 'text',
                'title' => 'Simple Text',
            ]
        ]
    ]
);
