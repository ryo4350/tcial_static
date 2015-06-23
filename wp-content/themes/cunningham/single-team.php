<?php get_template_part('content', 'primary_header'); ?>
        <!-- Content -->
	<div id="content">
            <div class="container">
                <div class="breadcrumb">
                    <?php if(class_exists('WP_SiteManager_bread_crumb')){WP_SiteManager_bread_crumb::bread_crumb('home_label=top&type=string');} ?>
                </div>
            </div>
            <main role="main">
                <?php while(have_posts()) : the_post(); ?>
                <div class="container-narrow">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="team__header cf">
                            <div class="team__header--left">
                                <div class="team__img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                            <div class="team__header--right">
                                <div>
                                    <h2 class="team-name-en"><?php echo esc_html(post_custom('name')); ?></h2>
                                    <h1 class="team-name-jp"><?php the_title(); ?></h1>
                                    <p><?php echo esc_html(post_custom('role')); ?></p> 
                                    <p class="team__copy"><?php echo esc_html(post_custom('copy')); ?></p>                                        
                                    <ul class="sns-list cf">
                                        <li><a href="http<?php echo esc_html(post_custom('facebook')); ?>" target="_blank">facebook</a></li>
                                        <li><a href="<?php echo esc_html(post_custom('twitter')); ?>" target="_blank">twitter</a></li>
                                        <li><a href="<?php echo esc_html(post_custom('blog')); ?>" target="_blank">blog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h2 class="heading team__heading script thin">Interviews</h2>
                            <div class="team-q">
                                <div class="team-q__item">
                                    <h3 class="team-q__heading">―何の科目を教えているのですか？</h3>
                                    <p class="team-q__body"><?php echo post_custom('subject'); ?></p>    
                                </div>

                                <div class="team-q__item">
                                    <h3 class="team-q__heading">―指導をするときに気をつけていることはありますか？</h3>
                                    <p class="team-q__body"><?php echo post_custom('policy'); ?></p>
                                </div>

                                <div class="team-q__item">
                                    <h3 class="team-q__heading">―指導をしていてうれしい瞬間はどんな時ですか？</h3>
                                    <p class="team-q__body"><?php echo post_custom('happiness'); ?></p>
                                </div>
                                
                                <div class="team-q__item">
                                    <h3 class="team-q__heading">―経歴を教えてください</h3>
                                    <p class="team-q__body"><?php echo post_custom('history'); ?></p>    
                                </div>

                                <div class="team-q__item">
                                    <h3 class="team-q__heading">―どんな少年（少女）時代でしたか？</h3>
                                    <p class="team-q__body"><?php echo post_custom('childhood'); ?></p>
                                </div>

                                <div class="team-q__item">
                                    <h3 class="team-q__heading">―何か習い事をしていましたか？</h3>
                                    <p class="team-q__body"><?php echo post_custom('lesson'); ?></p>
                                </div>
                                
                                <div class="team-q__item">
                                    <h3 class="team-q__heading">―学生時代に好きだった科目は何ですか？</h3>
                                    <p class="team-q__body"><?php echo post_custom('subject-past'); ?></p>    
                                </div>

                                <div class="team-q__item">
                                    <h3 class="team-q__heading">―学生時代は何部でしたか？</h3>
                                    <p class="team-q__body"><?php echo post_custom('club'); ?></p>    
                                </div>

                                <div class="team-q__item">
                                    <h3 class="team-q__heading">―自身の受験はどのようにして乗り越えましたか？</h3>
                                    <p class="team-q__body"><?php echo post_custom('examination'); ?></p>    
                                </div>

                                <div class="team-q__item">
                                    <h3 class="team-q__heading">―趣味や休日の過ごし方を教えてください。</h3>
                                    <p class="team-q__body"><?php echo post_custom('hobby'); ?></p>
                                </div>

                                <div class="team-q__item">
                                    <h3 class="team-q__heading">―最近ハマっているものは何ですか？</h3>
                                    <p class="team-q__body"><?php echo post_custom('fashion'); ?></p>
                                </div>

                                <div class="team-q__item">
                                    <h3 class="team-q__heading">―あなたに影響を与えた人物がいたら教えてください。</h3>
                                    <p class="team-q__body"><?php echo post_custom('affected-person'); ?></p>
                                </div>
                            </div>
                            <div class="review">
                                <h2 class="heading team__heading">生徒・保護者の声</h2>
                                <div class="review__item">
                                    <p><?php echo post_custom('review_1'); ?></p>    
                                </div>
                                <div class="review__item">
                                    <p><?php echo post_custom('review_2'); ?></p>    
                                </div>
                            </div>
                            <div class="">
                                <h2 class="heading team__heading">おすすめの本</h2>
                                <ul>
                                    <li class="col3">
                                        <div style="padding: 0 60px;">
                                            <?php echo post_custom('book_1'); ?>
                                        </div>
                                    </li>
                                    <li class="col3">
                                        <div style="padding: 0 60px;">
                                            <?php echo post_custom('book_1'); ?>
                                        </div>
                                    </li>
                                    <li class="col3">
                                        <div style="padding: 0 60px;">
                                            <?php echo post_custom('book_1'); ?>
                                        </div>
                                    </li>
                                    <li class="col3 last">
                                        <div style="padding: 0 60px;">
                                            <?php echo post_custom('book_1'); ?>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="container">
                    <div class="onerow cf">
                        <h2 class="heading team__heading">最近書いた記事</h2>
                        <?php
                            $team = get_posts(array(
                                'numberposts' => '4',
                                'author' => post_custom('author_num')
                            ));
                        ?>
                        <ul class="post-list post-list--m post-list--hover" id="team-post">
                            <?php foreach($team as $post) : setup_postdata($post)?>
                            <li class="col3">
                                <?php
                                    $cats = get_the_category();
                                    $cat = $cats[0];
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
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <?php endwhile; ?>                            
                </div>
            </main>
	</div>
        <!-- Content -->
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/single.js"></script>
</body>
</html>
