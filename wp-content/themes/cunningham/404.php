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
                <section class="error-404 not-found section">
                    <h1 class="heading center"><?php _e( '404 NOT FOUND', 'cunningham' ); ?></h1>
                    <p><?php _e( 'お探しのページは見つかりませんでした。', 'cunningham' ); ?></p>
                    <ul>
                        <li><a href="/">個別指導塾ティーシャルホームページへ</a></li>
                        <li><a href="/magazine/">ティーシャルブログトップへ</a></li>
                    </ul>
                </section><!-- .error-404 -->
                <section class="section">
                    <h2 class="heading thin center">こちらの記事はいかがですか？</h2>
                    <?php
                        $posts = get_posts(array(
                            'posts_per_page' => '12'
                        ));
                    ?>
<?php get_template_part('content', 'post_list_m'); ?>
                    <a href="magazine/" class="center">もっと記事をみる≫</a>
                </section>
            </div>
        </div>
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/script.js"></script>
