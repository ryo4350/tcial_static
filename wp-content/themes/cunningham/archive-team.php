<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cunningham
 */

get_template_part('content', 'primary_header'); 
?>
	<!-- Content -->
        <div id="content">
            <section id="team">
                <div class="container">
                    <h1>
                        <p class="en">Team Member</p>
                        <p class="jp">運営チーム/講師紹介</p>
                    </h1>
                    <div class="flexbox">
                        <?php if(have_posts()) :while(have_posts()) : the_post(); ?>
                        <div class="member__wrap">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                                <p class="name"><?php echo esc_html(post_custom('name')); ?></p>
                                <h2><?php the_title(); ?></h2>
                                <p class="subject-info"><?php echo esc_html(post_custom('subject')); ?></p>
                                <p class="work-info"><?php echo esc_html(post_custom('role')); ?></p>
                            </a>                            
                        </div>
                        <?php endwhile;?>
                        <?php else :?>
                            <?php get_template_part( 'content', 'none' ); ?>
                        <?php endif; ?>
                        <div class="member__wrap">
                            <a href="/recruite">
                                <img src="<?php bloginfo('template_directory');?>/img/team/join.png" class="img-rounded" />
                                <p class="name">YOU</p>
                                <p class="subject-info">どの科目でも！</p>
                                <p class="work-info">JOIN US!</p>
                            </a>
                        </div>
                    </div>
               </div>
            </section>
	</div>
        <!-- /Content -->
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/script.js"></script>
</body>
</html>