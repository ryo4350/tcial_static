<?php get_template_part('content', 'primary_header'); ?>
	<!-- Content -->

<!--            <div class="l-banner">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 blog-header 
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-3257663944757805"
     data-ad-slot="2251011573"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
            </div>-->
    <div id="content-blog">
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
                    <li>
                        <?php
                            $cat = get_the_category();
                            $cat = $cat[0];
                        ?>
                        <div class="blog-header cf">
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <span class="author">
                                <a href="<?php echo home_url('magazine/author/').$user; ?>">
                                    <?php echo get_simple_local_avatar($post->post_author); ?>
                                    <span>
                                        <?php the_author(); ?>
                                    </span>
                                </a>
                            </span>
                            <ul>
                                <li><?php echo get_the_date(); ?></li>
                                <li>カテゴリ - <?php the_category(); ?></li>
                                <li>タグ - <?php the_tags(); ?></li>
                            </ul>
                        </div>
                        <div class="article-img-tl">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <span class="category-label <?php echo $cat->category_nicename; ?>"><?php the_category($separator); ?></span>
                        </div>
                        <div class="blog-body">
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="aricle-link btn btn-flat">続きを読む</a>
                            <!--<span class="comment-num"><?php comments_popup_link('Comment : 0', 'Comment : 1', 'Comments : %'); ?></span>-->
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