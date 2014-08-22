<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package cunningham
 */
?>
	<!-- Footer -->
	<footer id="footer">
            <div class="container-narrow cf">
                <div class="footer-fb">
                    <div class="col12">
<div class="fb-like-box" data-href="https://www.facebook.com/tcialcom" data-height="240" data-width="925" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
                    </div>
                </div>
                <nav id="footer-nav" class="cf">
                    <div class="col6">
                        <div class="footer-nav-about">
                            <h2><a href="/"><img src="<?php bloginfo('template_directory');?>/img/logo_w.png" alt="個別指導塾Tcial"></a></h2>
                            <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
                        </div>
                    </div>
                    <div class="col6 last">
                        <div class="footer-nav-blog">
                            <h2><a href="/magazine/" target="_blank"><img src="<?php bloginfo('template_directory');?>/img/logo-blog-kana.png" alt="ティーシャルスタッフズブログ"></a></h2>
                            <?php wp_nav_menu( array( 'theme_location' => 'footer_magazine' ) ); ?>
                        </div>
                    </div>
                </nav>
            </div>
<!--            <div id="footer-link">
                <div class="container">
                    <h5>協力団体</h5>
                    <ul>
                        <li><a href="http://www.budo.or.jp/"><img src="<?php bloginfo('template_directory') ?>/img/banner/bnr_budo.png"></a></li>
                        <li><a href="http://www.dhyana-jp.com/"><img src="<?php bloginfo('template_directory') ?>/img/banner/bnr_dhyana.png"></a></li>
                        <li><a href="http://www.zendokai.jp/"><img src="<?php bloginfo('template_directory') ?>/img/banner/bnr_zendohkai.png"></a></li>
                    </ul>
                </div>
            </div>-->
            <div class="site-info">
                <span>&copy;<?php bloginfo('name'); ?>All Rights Reserved.</span>｜
                <a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'cunningham' ), 'WordPress' ); ?></a>
                <span class="sep"> | </span>
                <?php printf( __( 'Theme: %1$s by %2$s.', 'cunningham' ), 'cunningham', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
            </div><!-- .site-info -->
            <div class="spectrum"></div>
	</footer>
        <!-- /Footer -->