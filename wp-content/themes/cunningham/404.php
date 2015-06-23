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
                <section id="new-post">
                    <h2 class="heading thin center">新着記事</h2>
                    <?php
                        $event = get_posts(array(
                            'posts_per_page' => '6'
                        ));                   
                    ?>
                    <ul class="post-list post-list--m post-list--hover">
                        <?php foreach($event as $post) : setup_postdata($post)?>
                        <li class="col4">
                            <?php
                                $cat = get_the_category();
                                $cat = $cat[0];
                            ?>
                            <a href="<?php the_permalink(); ?>">
                                <div class="post-list--m__img-wrap">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="post-list--m__header">
                                    <span class="post-list--m__date"><?php echo get_the_date(); ?></span>
                                    <h3 class="post-list--m__title"><?php the_title(); ?></h3>                                
                                </div>
                            </a>
                            <span class="category-label <?php echo $cat->category_nicename; ?>"><?php the_category($separator); ?></span>
                        </li>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                    <a href="magazine/" target="_blank" class="center">もっと記事をみる≫</a>
                </section>
            </div>
        </div>
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/script.js"></script>
