<?php
//-----------------------------------------------------------------------------
/*
Plugin Name: Related Posts
Version: 0.3.2
Description: This wordpress plugin provides tagcloud that shows the related posts of a post, and can replace a keyword within a post to a list of related posts.
Author: Jure Ham
Min WP Version: 2.3
*/
//-----------------------------------------------------------------------------
?>
<?php
  function rp_plugin_basename() {
    return plugin_basename(__FILE__);
  }  
  include 'related-posts/related-posts.php';
?>
