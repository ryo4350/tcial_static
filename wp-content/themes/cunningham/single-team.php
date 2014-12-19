<?php get_template_part('content', 'primary_header'); ?>
        <!-- Content -->
	<div id="content">
            <div class="container">
                <div class="breadcrumb">
                    <?php if(class_exists('WP_SiteManager_bread_crumb')){WP_SiteManager_bread_crumb::bread_crumb('home_label=top&type=string');} ?>
                </div>
                <div class="onerow">
                        <div class="col12">
                        <div class="blog-header-info">
                            <?php if(function_exists("wp_social_bookmarking_light_output_e")){wp_social_bookmarking_light_output_e();}?>
                        </div>
                        <div class="onerow">
                            <?php while(have_posts()) : the_post(); ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="onerow cf">
                                    <div class=" col4">
                                        <div class="team-img">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                    </div>
                                    <div class="col8 last">
                                        <div class="team-detail">
                                            <h2 class="team-name-en"><?php echo esc_html(post_custom('name')); ?></h2>
                                            <h1 class="team-name-jp"><?php the_title(); ?></h1>                                          
                                            <p><?php the_content(); ?></p>                                        
                                            <ul class="sns-list cf">
                                                <li><a href="<?php echo esc_html(post_custom('facebook')); ?>" target="_blank">facebook</a></li>
                                                <li><a href="<?php echo esc_html(post_custom('twitter')); ?>" target="_blank">twitter</a></li>
                                                <li><a href="<?php echo esc_html(post_custom('blog')); ?>" target="_blank">blog</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="onerow cf">
                                    <div class="col6">
                                        <h2>趣味</h2>
                                        <p><?php echo esc_html(post_custom('hobby')); ?></p>    
                                    </div>
                                    <div class="col6 last">
                                        <h2>得意科目</h2>
                                        <p><?php echo esc_html(post_custom('subject')); ?></p>    
                                    </div>
                                </div>
                                <div class="onerow cf">
                                    <?php
                                        $team = get_posts(array(
                                            'numberposts' => '4',
                                            'author' => post_custom('author_num')
                                        ));
                                    ?>
                                    <ul class="post-list" id="team-post">
                                        <?php foreach($team as $post) : setup_postdata($post)?>
                                        <li class="col3">
                                            <?php
                                                $cat = get_the_category();
                                                $cat = $cat[0];
                                            ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="event-img-wrap">
                                                    <?php the_post_thumbnail(); ?>
                                                </div>
                                                <div class="event-detail">
                                                    <h3><?php the_title(); ?></h3>
                                                </div>
                                            </a>
                                            <span class="category-label <?php echo $cat->category_nicename; ?>"><?php the_category($separator); ?></span>
                                        </li>
                                        <?php endforeach;?>
                                    </ul>
                                    
                                </div>
                            </div>
                            <?php endwhile; ?>                            
                        </div>
                    </div>
                </div>
            </div>
	</div>
        <!-- Content -->
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/single.js"></script>
</body>
</html>
