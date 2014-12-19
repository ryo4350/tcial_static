<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cunningham
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name=”format-detection” content=”telephone=no” />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Lily+Script+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41472504-1', 'tcial.jp');
  ga('send', 'pageview');

</script>
</head>