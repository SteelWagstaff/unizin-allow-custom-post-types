<?php
/**
 * Plugin Name: Unizin Allow Custom Post Types
 * Version: 1.0
 * Description: This plugin allows additional custom post types in Pressbooks.
 * Authors:  Steel Wagstaff <swagstaff@wisc.edu>
 * License: GPLv2 (or any later version)
 */

/**
 * Allows additional custom post types. In this case, 'glossary'--defined by the CM Tooltip Glossary plugin: https://wordpress.org/plugins/enhanced-tooltipglossary/).
 * To add additional types, just add them to the array before or after 'glossary'.
 * Per: https://github.com/pressbooks/pressbooks/blob/4.0.0/inc/posttype/namespace.php#L16-L29 as of 2017-7-12
 */

function unizin_add_post_types ( $post_types) {
	return array_merge( $post_types, [ 'glossary' ] );
}

add_filter( 'pb_supported_post_types', 'unizin_add_post_types' );

?>
