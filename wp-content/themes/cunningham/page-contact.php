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
            <div class="container-narrow">
                <div id="contact-form">
                    <h1 class="heading thin">お気軽にお問い合わせ下さい。</h1>
                    <p class="contact-form__text">我々にご興味を持っていただいてありがとうございます。<br>
                         教室見学や体験授業から授業のシステムや授業料について等、何でもお気軽にご相談ください。
                    </p>

                    <?php while ( have_posts() ) : the_post(); ?>                        
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