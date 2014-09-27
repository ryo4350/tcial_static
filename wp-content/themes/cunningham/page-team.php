<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cunningham
 */

get_template_part('content', 'magazine_header'); 
?>
	<!-- Content -->
        <div id="content-blog">
            <div class="container">
                <div class="onerow">
                    <div class="col9">
                        <div class="widget-header">
                            <h1><?php the_title(); ?></h1>
                        </div>
                        <?php $users = get_users();
                        foreach($users as $user) :?>
                        <ul class="authors">
                            <li class="onerow cf">
                                <div class="col3">
                                    <div class="col12">
                                        <?php echo get_simple_local_avatar($user->ID, 200); ?>
                                    </div>
                                    <div class="col12">
                                        <h3><?php echo $user->display_name; ?></h3>
                                        <div class="link">
                                            <a href="">プロフィールを見る</a>
                                            <span>/</span>
                                            <a href="<?php echo home_url('author/').$user->user_login; ?>">記事一覧を見る</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col9 last">
                                    <?php 
                                    $id = $user->ID;
                                    $posts = get_posts(array(
                                        'author' => $id,
                                        'posts_per_page' => 3,    
                                    )); ?>
                                    <ul class="articles">
                                    <?php if($posts) : foreach ($posts as $key => $post) : ?>
                                        <li class="col4 <?php if($key === 2)echo "last"; ?>">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="front-article-img">
                                                    <?php the_post_thumbnail(); ?>
                                                    <div class="category-label"><?php the_category(); ?></div>
                                                </div>
                                            </a>
                                            <div class="recomended-article-info">
                                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                <p class="post-date"><a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a></p>
                                            </div>
                                        </li>
                                    <?php endforeach;
                                    else :?>
                                        <h2>記事はありません</h2>
                                    <?php endif; ?>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <?php endforeach; ?>
                    </div>
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