<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package cunningham
 */

get_template_part('content', 'primary_header'); ?>

	<!-- Content -->
	<div id="content">
            <div class="container">
                <section class="error-404 not-found">
                    <h2 class="page-title"><?php _e( '404 NOT FOUND', 'cunningham' ); ?></h2>
                    <p><?php _e( 'お探しのページは見つかりませんでした。', 'cunningham' ); ?></p>
                    <ul>
                        <li><a href="/">個別指導塾ティーシャルホームページへ</a></li>
                        <li><a href="/magazine/">ティーシャルブログトップへ</a></li>
                    </ul>
                </section><!-- .error-404 -->
            </div><!-- #primary -->
            <section id="new-post">
                <div class="container">
                    <h2 class="center">最新記事</h2>
                    <ul class="onerow features">
                    <?php query_posts('posts_per_page=4'); ?>
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                        <li class="col3 article">
                            <a href="<?php the_permalink(); ?>">
                                <div class="sidebar-article-img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="recomended-article-info">
                                    <h4><?php the_title(); ?></h4>
                                    <p class="post-date"><?php echo get_the_date(); ?></p>
                                </div>
                            </a>
                            <div class="category-label"><?php the_category(); ?></div>
                        </li>
                        <?php endwhile;
                    else :?>
                        <?php get_template_part( 'content', 'none' ); ?>
                    <?php endif; ?>
                    </ul>
                    <div class="center">
                        <a href="magazine/" target="_blank" class=" font-blue">もっと記事をみる≫</a>
                    </div>
               </div>
            </section>
        </div>
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/script.js"></script>
