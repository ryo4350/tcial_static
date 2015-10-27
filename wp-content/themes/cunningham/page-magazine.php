<?php get_template_part('content', 'primary_header'); ?>
    <!-- Content -->
    <div id="content--blog">
        <div class="container">
            <div class="breadcrumb">
                <?php if(class_exists('WP_SiteManager_bread_crumb')){WP_SiteManager_bread_crumb::bread_crumb('home_label=top&type=string');} ?>
            </div>
            <div class="onerow cf">
                <div id="infobar" class="col2">
                    <?php get_template_part('content', 'infobar') ?>
                </div>
                <ul class="col7 articles"id="tl">
                    <?php $paged = get_query_var('paged'); ?>
                    <?php query_posts("posts_per_page=12&paged=$paged"); ?>
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <?php $user = get_the_author_login(); ?>
                    <li class="blog-grid">
                        <?php
                            $cats = get_the_category();
                            $cat = $cats[0];
                        ?>
                        <div class="post__header cf">
                            <h1 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <ul class="post__info--tl cf">
                                <li>
                                    <a href="<?php echo home_url('magazine/author/').$user; ?>">
                                        <?php echo get_simple_local_avatar($post->post_author); ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('magazine/author/').$user; ?>">
                                        <span>
                                            <?php the_author(); ?>
                                        </span>
                                    </a>
                                </li>
                                <li class="post__date--tl"><?php echo get_the_date(); ?></li>
                                <li class="post__category--tl">カテゴリ - <?php echo the_category(); ?></li>
                                <li class="post__tag--tl">タグ - <?php echo the_tags(); ?></li>
                            </ul>
                        </div>
                        <div class="post__img post__img--tl">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <span class="category-label  <?php echo $cat->category_nicename; ?>"><?php the_category($separator); ?></span>
                        </div>
                        <div class="post__body">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="center">
                            <a href="<?php the_permalink(); ?>" class="btn btn--bordered btn--bk btn--s btn--hv">続きを読む</a>
                        </div>
                     </li>
                    <?php endwhile; ?>
                    <?php cunningham_paging_nav(); ?>
                    <?php else :?>
                        <?php get_template_part( 'content', 'none' ); ?>
                    <?php endif; ?>
                </ul>           
                <?php query_posts('posts_per_page=4'); ?>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
        <!-- /Content -->
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/script.js"></script>
</body>
</html>