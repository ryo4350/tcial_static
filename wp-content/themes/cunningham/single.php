<?php get_template_part('content', 'magazine_header'); ?>
        <!-- Content -->
	<div id="content">
        <div class="l-banner">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- blog-header -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-3257663944757805"
     data-ad-slot="2251011573"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
        </div>
            <div class="container">
                <div class="breadcrumb">
                    <?php if(class_exists('WP_SiteManager_bread_crumb')){WP_SiteManager_bread_crumb::bread_crumb('home_label=top&type=string');} ?>
                </div>
                <div class="onerow">
                    <div class="col9">
                        <div class="onerow">
                            <?php while(have_posts()) : the_post(); ?>
                            <div class="blog-grid" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div id="article-main">
                                    <div class="blog-header">
                                        <h1><?php the_title(); ?></h1>
                                        <div class="blog-header-info">
                                            <?php if(function_exists("wp_social_bookmarking_light_output_e")){wp_social_bookmarking_light_output_e();}?>
                                        </div>
                                    </div>
                                    <div class="article-img">
                                        <?php the_post_thumbnail(); ?>
                                        <div class="category-label"><?php the_category(); ?></div>
                                    </div>
                                    <div class="blog-body">
                                        <p><?php the_content(); ?></p>
                                    </div>
                                    <div class="blog-header-info">
                                        <?php if(function_exists("wp_social_bookmarking_light_output_e")){wp_social_bookmarking_light_output_e();}?>
                                    </div>
        <!--                            <div class="blog-header-info">
                                        <span class="comment-num"><?php comments_popup_link('Comment : 0', 'Comment : 1', 'Comments : %'); ?></span>
                                    </div>-->
                                    <div class="single-bottom-ad">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- blog-single-bottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-3257663944757805"
     data-ad-slot="8503877979"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                                    </div>

                                </div>
                                <div id="article-side" class="article-side">
                                    <p class="single-post-date"><?php echo get_the_date(); ?></p>
                                    <ul id="single-post-info">
                                        <li><?php echo get_simple_local_avatar($post->post_author); ?></li>
                                        <li id="writer-name"><?php the_author(); ?></p></li>
                                        <li id="writer-desc"><?php the_author_description(); ?></p></li>
                                        <ul class="blog-keywords">
                                            <li><p>カテゴリ</p><a><?php the_category(); ?></a></li>
                                            <li><p>タグ</p><a><?php the_tags(); ?></a></li>
                                        </ul>
                                    </ul>
                                </div>
                                <?php cunningham_post_nav(); ?>
                            </div>
                            <?php endwhile; ?>
                            <div class="recommend-wrap cf">
                                <h3>新着記事</h3>
                                <ul class="articles">
                                <?php query_posts('posts_per_page=4'); ?>
                                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                                    <li class="col3">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="front-article-img">
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                        </a>
                                        <div class="recomended-article-info">
                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <p class="post-date"><?php echo get_the_date(); ?></p>
                                        </div>                                        
                                        <div class="category-label"><?php the_category(); ?></div>
                                    </li>
                                    <?php endwhile;
                                 else :?>
                                    <p>記事はありません</p>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
	</div>
        <!-- Content -->
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/single.js"></script>
</body>
</html>
