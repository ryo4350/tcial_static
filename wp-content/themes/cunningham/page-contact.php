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
                <div class="onerow">
                    <div class="col12">
                        <?php while ( have_posts() ) : the_post(); ?>                        
                        <div class="widget-header">
                            <h1><?php the_title(); ?></h1>    
                        </div>
                        <div class="contact-form">
                            <p>Tcialにご興味を持っていただいてありがとうございます。<br />
ご意見、ご感想等ございましたらお気軽にお問い合わせください。<br />
また、個別指導やサークルの体験も受け付けております。</p>
                            <?php the_content(); ?>
                        </div>
                         <?php endwhile; // end of the loop. ?>
                    </div>
                </div>
            </div>
	</div>
        <!-- /Content -->
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/script.js"></script>
<script type="text/javascript">
    $(function(){
        $(".sub-menu").hide();
        $(".menu").mouseover(function(){
            $(".sub-menu").show();
        }).mouseout(function(){
            $(".sub-menu").hide();
        });
    });
});
</script>
</body>
</html>