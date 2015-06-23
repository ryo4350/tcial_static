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
                    <aside class="cf" id="related-posts">
                        <h2>新着記事</h2>
                        <?php
                            $new_posts = get_posts(array(
                                'posts_per_page' => '6'
                            ));                   
                        ?>
                        <ul class="post-list post-list--m post-list--hover">
                        <?php foreach($new_posts as $post) : setup_postdata($post)?>
                            <li class="col4">
                                <?php
                                    $cats = get_the_category();
                                    $cat = $cats[0];
                                ?>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="post-list--m__img-wrap">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="post-list--m__header">
                                        <span class="post-list--m__date"><?php echo get_the_date() ?></span>
                                        <h3 class="post-list--m__title"><?php the_title(); ?></h3>
                                    </div>
                                </a>
                                <span class="category-label <?php echo $cat->category_nicename; ?>"><?php the_category($separator); ?></span>
                            </li>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
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
