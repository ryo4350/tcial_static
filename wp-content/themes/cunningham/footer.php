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
            <div class="footer-inner" id="footer-top">
                <div class="col6">
                    <h4>お気軽にお問い合わせください。</h4>
                </div>
                <div class="col6 last">
                    <a href="/trial/" class="footer-btn">体験授業の申し込みはこちら</a>
                    <p class="tel">☎045-620-0679</p>
                    <p class="mail">メールアドレス:info@tcial.jp</p>
                </div>
            </div>
            <div class="footer-inner" id="footer-bottom">
                <div class="col3">
                    <img src="<?php bloginfo('template_directory');?>/img/logo_60.png" alt="個別指導塾Tcial">
                    <h4>個別指導塾Tcial</h4>
                    <address>
                        〒221-0844
                        神奈川県横浜市神奈川区沢渡2-2第二泉ビル3F
                    </address>
                </div>
                <div class="col3">
                    <img src="<?php bloginfo('template_directory');?>/img/logo_magazine_60.png" alt="ティーシャルマガジン">
                    <h4>ティーシャルマガジン</h4>
                </div>
                <div class="col6 last">
                    <h4>フェイスブック</h4>
                </div>
            </div>
            <div class="site-info">
                <span>&copy;<?php bloginfo('name'); ?>All Rights Reserved.</span>｜
                <a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'cunningham' ), 'WordPress' ); ?></a>
                <span class="sep"> | </span>
                <?php printf( __( 'Theme: %1$s by %2$s.', 'cunningham' ), 'cunningham', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
            </div><!-- .site-info -->
            <div class="spectrum"></div>
	</footer>
        <!-- /Footer -->