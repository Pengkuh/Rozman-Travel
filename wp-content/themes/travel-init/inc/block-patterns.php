<?php

/**
 * Block patterns
 */

/**
 * Registers block patterns and block pattern categories.
 *
 * @return void
 */

 // register block pattern category
if(!function_exists('travel_init_register_block_pattern_categories')):
    function travel_init_register_block_pattern_categories(){
        register_block_pattern_category(
            'wensolutions',
            array( 'label' => __( 'Travel Init', 'travel-init' ) )
        );
    }
    add_action('init', 'travel_init_register_block_pattern_categories');
endif;


