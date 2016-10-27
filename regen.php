<?php

// important - this must go straight to your websites root directory to the wp-blog-header.php script.
require('/servers/full/direct/path/to/this/script/wp-blog-header.php');
 
	global $wpdb;

    $images = $wpdb->get_results( "SELECT ID FROM wp_posts WHERE post_type = 'attachment' AND post_mime_type LIKE 'image/%' AND DATE(`post_date`) > DATE_SUB(CURDATE(), INTERVAL 3 DAY)" );

    foreach ( $images as $image ) {
        
      $fullsizepath = get_attached_file( $image->ID );

      wp_update_attachment_metadata( $image->ID, wp_generate_attachment_metadata( $image->ID, $fullsizepath ) );

    }