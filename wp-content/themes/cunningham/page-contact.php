<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cunningham
 */

?>
<?php get_template_part('content', 'primary_header'); ?>
	<!-- Content -->
        <div id="content">
            <div class="container">
                <div id="contact-form">
                    <h1 class="heading thin">教室見学・体験授業大歓迎です。</h1>
                    <p class="contact-form__text">我々にご興味を持っていただいてありがとうございます。<br>
                         ティーシャルでは入塾前に必ず、見学・学習カウンセリング・体験授業を行っています。<br>
                         なんとなく始めるのではなく、実際に体験してみてこれから勉強していくイメージを固めてから入塾してほしいからです。<br>
                         現在、個別指導４回・個別トレーニング４回の体験授業をご用意しております。お気軽にお問い合わせください。
                    </p>

                    <?php while ( have_posts() ) : the_post(); ?>                        
                    <div class="widget-header">
                        <h2><?php the_title(); ?></h2>    
                    </div>
                    <div class="cf">
                        <?php the_content(); ?>
                    </div>
                    <?php endwhile; // end of the loop. ?>
                </div>
            </div>
	</div>
        <!-- /Content -->
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/script.js"></script>
</body>
</html>