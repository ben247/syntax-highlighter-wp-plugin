<?php
/**
 * Plugin Name: Syntax Highlighter (Lite)
 * Plugin URI: https://benwhalley.dev/
 * Description: Syntax Highlighter plugin
 * Author: Ben Whalley
 * Version: 1.0.0
 * Author URI: https://benwhalley.dev/
 */

function syntax_highlighter_lite_enqueue_scripts(){
    wp_enqueue_style( 'syntax-highlighter-lite-css', plugins_url( '/assets/css/atom-one-dark.min.css' , __FILE__ ), array(), '11.3.1');
    wp_enqueue_script( 'syntax-highlighter-lite-js', plugins_url( '/assets/js/highlight.min.js' , __FILE__ ), array(), '11.3.1', false );
    wp_add_inline_script('syntax-highlighter-lite-js', 'hljs.initHighlightingOnLoad();', 'after');
}
add_action( 'wp_enqueue_scripts', 'syntax_highlighter_lite_enqueue_scripts' );