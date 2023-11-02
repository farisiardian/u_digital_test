<?php
/*
Plugin Name: myFirst_block
Author: webkul
*/
function myFirst_block()
{

    // automatically load dependencies and version
    $asset_file = include(plugin_dir_path(__FILE__) . 'build/index.asset.php');

    wp_register_script(
        'fancy-custom-block-block-editor',
        plugins_url('build/index.js', __FILE__),
        $asset_file['dependencies'],
        $asset_file['version']
    );

    // Register JavasScript File build/index.js
    wp_register_script(
        'myFirstblock',
        plugins_url('src/editor.css', __FILE__),
        array(),
        filemtime(plugin_dir_path(__FILE__) . 'src/editor.css')
        // plugins_url('build/index.js', __FILE__),
        // array('wp-blocks', 'wp-element', 'wp-editor'),
    );

    // Register editor style src/editor.css
    wp_register_style(
        'myFirst_block-editor-style',
        plugins_url('src/style.css', __FILE__),
        array(),
        filemtime(plugin_dir_path(__FILE__) . 'src/style.css')
        // plugins_url('src/editor.css', __FILE__),
    );

    register_block_type('gutenreact/myFirst_block', array(
        'editor_script' => 'myFirstblock',
        'editor_style'  => 'myFirst_block-editor-style',
    ));

    // $styleURI = plugin_dir_url(__FILE__) . '/src/style.css';
    // //Enquee style
    // wp_enqueue_style(
    //     'myFirst_block-style',
    //     $styleURI,
    // );

    // // Register JavasScript File build/index.js
    // wp_register_script(
    //     'myFirstblock',
    //     plugins_url('build/index.js', __FILE__),
    //     array('wp-blocks', 'wp-element', 'wp-editor'),
    // );

    // // Register editor style src/editor.css
    // wp_register_style(
    //     'myFirst_block-editor-style',
    //     plugins_url('src/editor.css', __FILE__),
    // );

    // // Register block
    // register_block_type('gutenreact/myFirst_block', array(
    //     'editor_script' => 'myFirstblock',
    //     'editor_style' => 'myFirst_block-editor-style',
    // ));
}

add_action('init', 'myFirst_block');
