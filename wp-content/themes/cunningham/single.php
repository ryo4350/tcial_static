<?php get_template_part('content', 'primary_header'); ?>
        <!-- Content -->

	<div id="content--blog">
            <div class="container">
                <nav class="breadcrumb">
                    <?php if(class_exists('WP_SiteManager_bread_crumb')){WP_SiteManager_bread_crumb::bread_crumb('home_label=top&type=string');} ?>
                </nav>
                <div class="col9">
                    <main role="main">
                        <?php while(have_posts()) : the_post(); ?>
                            <?php get_template_part('content', 'single'); ?>
                        <?php endwhile; ?>
                    </main>
                    <aside class="recommend-posts">
                        <div class="onerow cf">
                            <h2 class="heading thin">この記事と同じカテゴリーの記事</h2>
                            <?php
                                $cats = get_the_category();
                                $cat = $cats[0];
                                $posts = get_posts(array(
                                    'category__in' => $cat->cat_ID,
                                    'post__not_in' => array($post->ID),
                                    'showposts' => 6,
                                    'caller_get_posts' => 1
                                ));                   
                            ?>
    <?php get_template_part('content', 'post_list_m'); ?>
                        </div>

                        <div class="onerow cf">
                            <h2 class="heading thin">新着記事</h2>
                            <?php
                                $posts = get_posts(array(
                                    'posts_per_page' => '6'
                                ));                   
                            ?>
    <?php get_template_part('content', 'post_list_m'); ?>
                        </div>
                    </aside>
                </div>
                <?php query_posts('posts_per_page=4'); ?>
                <?php get_sidebar(); ?>
            </div>
	</div>
        <!-- Content -->
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/single.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/script.js"></script>
</body>
</html>
