<?php get_template_part('content', 'primary_header'); ?>
	<!-- Content -->
	<div id="content">
            <div id="circle">
                <h1 class="heading center thin">
                    <p class="en">EVENTS</p>
                    <p class="jp">イベント情報</p>
                </h1>
                <div class="container-narrow">
                    <?php
                        $event = get_posts(array(
                            'category_name' => 'event'
                        ));                   
                    ?>
                    <ul class="onerow" id="events-list">
                        <?php foreach($event as $post) : setup_postdata($post)?>
                        <li class="evemts-item">
                            <?php
                                $cat = get_the_category();
                                $cat = $cat[0];
                            ?>

                            <div class="events-item__img col4">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            </div>
                            <div class="events-item__body col8 last">
                                <span class="date"><?php the_date() ?></span>
                                <h3><?php the_title(); ?></h3>
                                <?php the_excerpt(); ?>
                                <?php the_tags('<ul class="tags"><li>','</li><li>','</li></ul>'); ?>

                            </div>

                            <span class="category-label <?php echo $cat->category_nicename; ?>"><?php the_category($separator); ?></span>
                        </li>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
	</div>
<?php get_footer() ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/script.js"></script>
</body>
</html>