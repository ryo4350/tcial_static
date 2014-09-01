<?php
/**
 * @package cunningham
 */
?>
<?php get_header(); ?>
<body <?php body_class(); ?>>
    <header>
        <div id="header-magazine">
            <div class="container">
                <h1><a href="<?php echo home_url('/magazine'); ?>"><?php bloginfo('name'); ?></a></h1>
                <h2 id="top-description"><a href="/" target="_blank">個別指導塾ティーシャル</a>が運営するウェブマガジン</h2>
            </div>
        </div>

        <nav id="nav" class="magazine-nav" role="navigation">
            <div class="container">
                <?php wp_nav_menu( array( 'theme_location' => 'category' ) ); ?>
            </div>
        </nav>
    </header>

    <nav class="contact" id="contact">
        <ul class="sns-contact">
            <li><a class="btn btn-flat-icon" id="fb-icon" href="https://www.facebook.com/tcialcom" target="_blank">f</a></li>
            <li><a class="btn btn-flat-icon" id="tw-icon" href="https://twitter.com/Tcial315" target="_blank">t</a></li>
            <li></li>
        </ul>
    </nav>
    <a id="menu-open" class="btn btn-flat">メニュー</a>


    <nav id="home-blog">
        <a href="<?php echo home_url('/magazine'); ?>">Tcial</a>
    </nav>
    <!-- /header -->
