<?php
/*
Plugin Name: Simple Attachment Redirect
Plugin URI: https://github.com/mangomkt/simple-attachment-redirect
Description: Redirect Attachment to media
Version: 0.1
Author: Curtis Grant
Text Domain: simple-attachment-redirect
Class Name: simple_attachment_redirect
*/

add_action( 'template_redirect', 'simple_attachment_redirect' );
echo wp_get_attachment_url( get_the_ID() );
function simple_attachment_redirect() {
  if ( is_attachment() ) {
    wp_redirect( wp_get_attachment_url( get_the_ID() ), 301 );
    exit();
  }

}
?>