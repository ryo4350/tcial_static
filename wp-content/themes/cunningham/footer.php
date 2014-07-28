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
<!--            <div id="footer-top">
                <div class="container footer-inner">
                    <div class="col6">
                        <h4>お気軽にお問い合わせください。</h4>
                    </div>
                    <div class="col6 last">
                        <a href="/contact/" class="footer-btn">体験授業の申し込みはこちら</a>
                        <p class="tel">☎045-620-0679</p>
                        <p class="mail">メールアドレス:info@tcial.jp</p>
                    </div>
                </div>
            </div>-->
            <div id="footer-bottom">
                <div class="container footer-inner">
                    <div class="col3">
                        <a href="/"><img src="<?php bloginfo('template_directory');?>/img/logo_new_0_w.png" alt="個別指導塾Tcial"></a>
                        <a href="/magazine/" target="_blank"><img src="<?php bloginfo('template_directory');?>/img/logo-blog-kana.png" alt="ティーシャルスタッフズブログ"></a>
                    </div>
                    <div class="col9 last">
                        <div class="footer-fb">
<div class="fb-like-box" data-href="https://www.facebook.com/tcialcom" data-height="180" data-width="880" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
                        </div>
                    </div>
                </div>
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