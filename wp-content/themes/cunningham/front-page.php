<?php get_template_part('content', 'primary_header'); ?>
    <!-- Content -->
    <div id="key-visual">
        <div id="mv-wrap">
            <video autoplay loop poster="<?php bloginfo('template_directory');?>/img/key-visual.png" muted>
                <source src="<?php bloginfo('template_directory');?>/video/key-visual.mp4">
            </video>
            <div class="filter"></div>
        </div>
        <div id="main-text">
            <div id="catch">
                <h1>冬期受講生募集中！</h1>
<!--                <div class="container-narrow">
                    <ul id="catch-menu">
                        <li class="col4"><a href="/lesson/">個別指導で学ぶ</a></li>
                        <li class="col4"><a href="/magazine/category/information/event/">イベントで学ぶ</a></li>
                        <li class="col4 last"><a>オンラインで学ぶ</a><span class="parepareing">coming soon...</span></li>
                    </ul>
                </div>-->
            </div>
        </div>
    </div>
    <div id="top-content">
        <section id="information-list">
            <div class="container-narrow">
                <h2 class="center">news</h2>
                <?php
                    $event = get_posts(array(
                        'category_name' => 'information',
                        'post_per_page' => '6'
                    ));                   
                ?>
                <ul class="onerow cf post-list" id="information-list">
                    <?php foreach($event as $post) : setup_postdata($post)?>
                    <li class="col4">
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
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </a>
                        <span class="category-label <?php echo $cat->category_nicename; ?>"><?php the_category($separator); ?></span>
                    </li>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
            </div>
        </section>
        <section id="what">
            <div class="container">
                <h2 class="center">私たちがやっていること</h2>
                <ul class="onerow">
                    <li class="col3-gl">
                        <a href="/lesson/" id="ie-panel">
                            <div class="disc-wrapper">
                                <h3>個別指導</h3>
                                <p>あなたのための授業</p>
                            </div>
                            <div id="what-ie-img" class="panel-img"></div>
                        </a>
                    </li>
                    <li class="col3-gl">
                        <a href="/lesson/" id="training-panel">
                            <img src="<?php bloginfo('template_directory');?>/img/group.jpg" alt="個別指導" />
                            <div class="disc-wrapper">
                                <h3>個別トレーニング</h3>
                                <p>演習と反復をゲーム感覚で進めることができます。</p>
                            </div>
                        </a>
                    </li>
                    <li class="col3-gl">
                        <a href="/lesson/" id="group-panel">
                            <div class="disc-wrapper">
                                <h3>小集団指導</h3>
                                <p>一人ひとりを見る集団</p>
                            </div>
                            <div id="what-group-img" class="panel-img"></div>
                        </a>
                    </li>
                    <li class="col3-gl last">
                        <a href="/circle/" id="circle-panel">
                            <img src="<?php bloginfo('template_directory');?>/img/circle.jpg" alt="サークル（脳力開発塾）" />
                            <div class="disc-wrapper">
                                <h3>サークル</h3>
                                <p>タイピング、プログラミング、ゲーム作り、英検、漢検、カードゲーム、将棋等の16のサークル。脳を刺激しコミュニケーション力を鍛える。</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <section id="reputation">
            <div class="container">
                <h2 class="center">通っている子供たちが書いてくれました。</h2>
                <div class="onerow">
                    <div class="col4">
                        <div class="onerow">
                            <div class="bubble">
                                <img src="<?php bloginfo('template_directory');?>/img/msg/msg_1.png" alt="先生が身近に感じる塾です！"/>
                            </div>
                        </div>
                        <div class="onerow">
                            <div class="bubble">
                                <img src="<?php bloginfo('template_directory');?>/img/msg/msg_3.png" alt="夢と希望にあふれた塾です！" />
                            </div>
                        </div>
                    </div>
                    <div class="col4">
                        <div class="onerow">
                            <div class="bubble">
                                <img src="<?php bloginfo('template_directory');?>/img/msg/msg_4.png" alt="自然と勉強したくなる、そんな塾です!!" />
                            </div>
                        </div>
                        <div class="onerow">
                            <div class="bubble">
                                <img src="<?php bloginfo('template_directory');?>/img/msg/msg_2.png" alr="楽しくて、自然とやる気の出る塾です！" />
                            </div>
                        </div>
                    </div>
                    <div class="col4 last">
                        <div class="onerow">
                            <div class="bubble">
                                <img src="<?php bloginfo('template_directory');?>/img/msg/msg_5.png" alt="教えるよりも、一緒に考えてくれる。Tcialはそんなところです。" />
                            </div>
                        </div>
                        <div class="onerow">
                            <div class="bubble">
                                <img src="<?php bloginfo('template_directory');?>/img/msg/msg_6.png" alt="絆がある塾です。" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="gallary">
            <div class="container-narrow">
                <h2 class="center">Gallary</h2>
                <div class="onerow">
                    <div class="col3-gl">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/1.jpg" alt="" />
                    </div>
                    <div class="col3-gl">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/2.jpg" alt="" />
                    </div>
                    <div class="col3-gl">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/3.jpg" alt="" />
                    </div>
                    <div class="col3-gl last">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/4.jpg" alt="" />
                    </div>
                </div>
                <div class="onerow">
                    <div class="col2-gl">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/5.jpg" alt="" />
                    </div>
                    <div class="col2-gl">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/6.jpg" alt="" />
                    </div>
                    <div class="col2-gl">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/7.jpg" alt="" />
                    </div>
                    <div class="col2-gl">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/8.jpg" alt="" />
                    </div>
                    <div class="col2-gl">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/9.jpg" alt="" />
                    </div>
                    <div class="col2-gl last">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/10.jpg" alt="" />
                    </div>
                </div>
                <div class="onerow">
                    <div class="col2-gl">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/11.jpg" alt="" />
                    </div>
                    <div class="col2-gl">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/12.jpg" alt="" />
                    </div>
                    <div class="col2-gl">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/13.jpg" alt="" />
                    </div>
                    <div class="col2-gl">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/14.jpg" alt="" />
                    </div>
                    <div class="col2-gl">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/15.jpg" alt="" />
                     </div>
                    <div class="col2-gl last">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/16.jpg" alt="" />
                    </div>
                </div>
                <div class="onerow">
                    <div class="col2-gl">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/17.jpg" alt="" />
                    </div>
                    <div class="col2-gl">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/18.jpg" alt="" />
                    </div>
                    <div class="col2-gl">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/19.jpg" alt="" />
                    </div>
                    <div class="col2-gl">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/20.jpg" alt="" />
                    </div>
                    <div class="col2-gl">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/21.jpg" alt="" />
                    </div>
                    <div class="col2-gl last">
                        <img src="<?php bloginfo('template_directory');?>/img/gallary/22.jpg" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <section id="new-post">
            <div class="container">
                <h2 class="center">スタッフブログ</h2>
                <ul class="articles">
                <?php query_posts('posts_per_page=4'); ?>
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <?php
                            $cat = get_the_category();
                            $cat = $cat[0];
                        ?><li class="col3 onerow">
                        <a href="<?php the_permalink(); ?>">
                            <div class="front-article-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="recomended-article-info">
                                <h4><?php the_title(); ?></h4>
                                <p class="post-date"><?php echo get_the_date(); ?></p>
                            </div>
                        </a>
                        <span class="category-label <?php echo $cat->category_nicename; ?>"><?php the_category($separator); ?></span>                        
                    </li>
                    <?php endwhile;
                else :?>
                    <?php get_template_part( 'content', 'none' ); ?>
                <?php endif; ?>
                </ul>
                <div class="center">
                    <a href="magazine/" target="_blank">≫もっと記事をみる</a>
                </div>
           </div>
        </section>
    </div>
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
$(function() {
        var header = $('#header');
	var nav = $('#nav.primary-nav');
	var home = $('#home');
        nav.removeClass('nav-scroll');
        header.removeClass('nav-scroll');
    $(window).scroll(function () {
        if($(window).scrollTop() > 420){
            nav.addClass('fixed');
            nav.addClass('nav-scroll');
        } else if($(window).scrollTop() > 4) {
            nav.addClass('fixed');
            nav.removeClass('nav-scroll');
            home.stop().animate({'marginLeft' : '0px'}, 200);
        }  else {
            nav.removeClass('fixed');
            home.stop().animate({'marginLeft' : '-60px'}, 200);
        }
    });

    $(function(){
            $("a[href^=#]").click(function(){
                    var Hash = $(this.hash);
                    var HashOffset = $(Hash).offset().top - 100;
                    $("html,body").animate({
                            scrollTop: HashOffset
                    }, 1000);
                    return false;
            });
    });

    $(function(){
        $cat = $("#menu-category .sub-menu");
        $cat.hide();
        $("#menu-category").mouseover(function(){
            $cat.show();
        }).mouseout(function(){
            $cat.hide();
        });
    });
    
    $(function() {
        $("#toggle").on("click", function() {
            $("#menu-primary").slideToggle();
        });
    });
});</script>
</body>
</html>