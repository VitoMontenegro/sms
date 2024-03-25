<?php

// Добавляем свой раздел блоков
add_filter( 'block_categories_all', 'custom_block_category', 10, 2 );
function custom_block_category( $default_categories, $post ) {
    $res =  array_merge(
        $default_categories,
        [
            [
                'slug'  => 'bdt-category',     // Слаг категории который будем использовать при регистрации блока
                'title' => __( 'bdt Blocks', 'my-plugin' ),      // Отображаемое название категории
                'icon'  => 'wordpress'      // Иконка для категории, можно передать null если иконка не нужна
            ],
        ]
    );

    return array_reverse ($res);
}

add_action('acf/init', 'review_block_init');
function review_block_init() {
	
    // check function exists
    if( function_exists('acf_register_block_type') ) {

        /*advantages*/
        acf_register_block_type(array(
            'name'      => 'advantages',
            'title'     => 'Блок с преимуществами',
            'description'       => 'Блок с преимуществами',
            'render_callback'   => 'my_acf_block_render_callback',
            'category'      => 'bdt-category',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#eccb13',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#fff',
                // Specifying a dashicon for the block
                'src' => 'lpb',
            ),
            'example'           => [],
        ));

        /*partners*/
        acf_register_block_type(array(
            'name'      => 'partners',
            'title'     => 'Блок с партнерами',
            'description'       => 'Блок с партнерами',
            'render_callback'   => 'my_acf_block_render_callback',
            'category'      => 'bdt-category',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#eccb13',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#fff',
                // Specifying a dashicon for the block
                'src' => 'lpb',
            ),
            'example'           => [],
        ));

        /*quotes*/
        acf_register_block_type(array(
            'name'      => 'quotes',
            'title'     => 'Блок с цитатами',
            'description'       => 'Блок с цитатами',
            'render_callback'   => 'my_acf_block_render_callback',
            'category'      => 'bdt-category',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#eccb13',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#fff',
                // Specifying a dashicon for the block
                'src' => 'lpb',
            ),
            'example'           => [],
        ));

        /*service*/
        acf_register_block_type(array(
            'name'      => 'services',
            'title'     => 'Блок с услугами',
            'description'       => 'Блок с услугами',
            'render_callback'   => 'my_acf_block_render_callback',
            'category'      => 'bdt-category',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#eccb13',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#fff',
                // Specifying a dashicon for the block
                'src' => 'lpb',
            ),
            'example'           => [],
        ));

        /*stages*/
        acf_register_block_type(array(
            'name'      => 'stages',
            'title'     => 'Блок этапы работ',
            'description'       => 'Блок этапами работ',
            'render_callback'   => 'my_acf_block_render_callback',
            'category'      => 'bdt-category',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#eccb13',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#fff',
                // Specifying a dashicon for the block
                'src' => 'lpb',
            ),
            'example'           => [],
        ));

        /*employees*/
        acf_register_block_type(array(
            'name'      => 'employees',
            'title'     => 'Блок руководящий состав',
            'description'       => 'Блок руководящий состав',
            'render_callback'   => 'my_acf_block_render_callback',
            'category'      => 'bdt-category',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#eccb13',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#fff',
                // Specifying a dashicon for the block
                'src' => 'lpb',
            ),
            'example'           => [],
        ));

        /*employees*/
        acf_register_block_type(array(
            'name'      => 'devdirections',
            'title'     => 'Блок Направления разработки',
            'description'       => 'Блок Направления разработки',
            'render_callback'   => 'my_acf_block_render_callback',
            'category'      => 'bdt-category',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#eccb13',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#fff',
                // Specifying a dashicon for the block
                'src' => 'lpb',
            ),
            'example'           => [],
        ));

        /*counter*/
        acf_register_block_type(array(
            'name'      => 'counter',
            'title'     => 'Блок с цифрами',
            'description'       => 'counter',
            'render_callback'   => 'my_acf_block_render_callback',
            'category'      => 'bdt-category',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#eccb13',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#fff',
                // Specifying a dashicon for the block
                'src' => 'lpb',
            ),
            'example'           => [],
        ));

        /*slider*/
        acf_register_block_type(array(
            'name'      => 'slider',
            'title'     => 'Блок слайдер',
            'description'       => 'Блок слайдер',
            'render_callback'   => 'my_acf_block_render_callback',
            'category'      => 'bdt-category',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#eccb13',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#fff',
                // Specifying a dashicon for the block
                'src' => 'lpb',
            ),
            'example'           => [],
        ));

    }
}

function my_acf_block_render_callback( $block ) {

    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);

    // include a template part from within the "template-parts/block" folder
    if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
            include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
    }
}


