=== RelatedPosts ===
Contributors: test
Tags: post, widget, sidebar, posts, links, plugin, tags, search, navigation, link, tag, widgets
Stable tag: trunk
Requires at least: 2.3
Tested up to: 2.99999

This WordPress plugin provides multiple options to show the via tags related posts of a post (for example via a sidebar widget).

== Description ==

This WordPress plugin provides multiple options to show the via tags related posts of a post. It contains a sidebar widget that is only visible when viewing a single post and displays a list of posts that are related with the current post via the tags. The number of related posts to display can be configured. The posts are sorted by the number of matching tags and then by the post date. It is also possible to insert the list of related post in a post via a placeholder. You can also embedd the list of related post in template files to add it to the bottom of each post page.

Placeholders for the widget configuration, and function arguments:
%title% will be replaced with the title of the post.
%permalink% will be replaced with the permalink of the post.

To embedd the list of related posts in a post, you can use the placeholder "%RELATEDPOSTS%" within your text, which will get replaced with the list.

To include the list of related posts at the end of each post you can add the folowing line in the "singel.php" of your template:
<?php 
  if( function_exists('rp_related_posts') )
    rp_related_posts( '<br />Verwandte Beitr&auml;ge:' );
?>


== Installation ==

1. Upload the folder 'related-posts' with all files to '/wp-content/plugins' on your webserver
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Make sure that your posts have tags (no tags = no relations).
4. Add the widget "related posts" to your sidebar and configure it as you like, use the placeholder "%RELATEDPOSTS%" within your posts, or add the following code to the single.php of your theme:
<?php 
  if( function_exists('rp_related_posts') )
    rp_related_posts( '<br />Related Posts:' );
?>

German screenshots of the installation, configuration and usage of this plugin: related-posts_install_de.jpg