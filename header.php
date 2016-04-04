<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <title>Help Restore the Shrine of Christ the King</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="verify-v1" content="DfYrVDPQi+MYVt6aZ4/FXEHMSSnWjguEdXZKX+gq4aU=">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
    <script inline src="<?php echo home_url(); ?>/wp-content/themes/shrinelandmark/js/all.min.js"></script>
    <script>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-131347-8']);
      _gaq.push(['_trackPageview']);
      (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </head>
  <body <?php body_class(); ?>>
    <div id="container" class="home">
      <?php wp_nav_menu(); ?>
      <div id="nav-collapse">
        <div id="nav-icon"><svg version="1.1" id="Untitled-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="12px" viewBox="0 0 18 12" enable-background="new 0 0 18 12" xml:space="preserve"><path fill="none" d="z"/><g id="Layer_x25_201"><rect width="18" height="2"/><rect y="5" width="18" height="2"/><rect y="10" width="18" height="2"/></g><path fill="none" d="z"/></svg></div>
        <div id="nav-text">Help Restore an Historic Landmark</div>
      </div>
      <div id="content">
