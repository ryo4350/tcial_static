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
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Lily+Script+One' rel='stylesheet' type='text/css'>
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

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
        <header>
            <div id="header-magazine">
                <div class="container">
                    <h1 id="logo"><a href="<?php echo home_url('/magazine'); ?>"><?php bloginfo('name'); ?></a></h1>
                    <h2 id="top-description" class="top-desc-magazine"><a href="/" target="_blank">個別指導ティーシャル</a>が運営するウェブマガジン</h2>
                </div>
            </div>

            <nav id="nav" role="navigation">
                <div class="container">
                    <?php wp_nav_menu( array( 'theme_location' => 'category' ) ); ?>
                </div>
            </nav>
	</header>

	<nav class="contact" id="contact">
            <?php wp_nav_menu( array( 'theme_location' => 'primary_magazine' ) ); ?>
            <ul class="sns-contact">
                <li><a class="btn-flat-icon" id="fb-icon" href="https://www.facebook.com/tcialcom" target="_blank">f</a></li>
                <li><a class="btn-flat-icon" id="tw-icon" href="https://twitter.com/Tcial315" target="_blank">t</a></li>
            </ul>
	</nav>

	<nav id="home">
		<a href="<?php echo home_url('/magazine'); ?>" class="btn-flat-icon">Tcial</a>
	</nav>
        <!-- /header -->
