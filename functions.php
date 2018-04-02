<?php
 
 function andrewasquith_enqueue_styles() {
   wp_enqueue_style( 'twentyseventeen-style', get_template_directory_uri() . '/style.css' );
 }
 
 add_action( 'wp_enqueue_scripts', 'andrewasquith_enqueue_styles' );
 
 function andrewasquith_disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );   
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );     
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
 }
 
 add_action( 'init', 'andrewasquith_disable_emojis' );
 
?>
