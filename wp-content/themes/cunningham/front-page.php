<?php get_template_part('content', 'primary_header'); ?>
    <!-- Content -->
    <div id="key-visual">
<!--        <div id="mv-wrap">
            <video autoplay loop muted>
                <source src="/video/vdo.mov">
            </video>
        </div>-->
        <div id="main-text">
            <div id="catch">
                <h1>未来をデザインする人を育てる塾</h1>
                <h2>Design our Future!!</h2>
                <p>Tcialは、個別指導/サークル/セミナー/その他様々な活動を通じて、<br />
                    未来をデザインする人を育てます。</p>
                <a href="#what" class="mv-btn">もっと詳しく！</a>
            </div>
        </div>
    </div>
    <div id="top-content">
        <section id="new-post">
            <div class="container">
                <h2 class="center">ブログはじめました。</h2>
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
        <section id="what">
            <div class="container-narrow">
                <h2 class="center">私たちがやっていること。</h2>
                <div class="onerow vertical">
                    <div class="col6">
                        <div class="disc-wrapper">
                            <h3>個別指導</h3>
                            <p>あなたの第一志望へむけて、講師陣が全力サポートしたします。一人ひとりに最適なカリキュラムを作成し効率的な学習をします。</p>
                            <a href="/lesson/" class="btn-flat">詳しく見る≫</a>
                        </div>
                    </div>
                    <div class="col6 last">
                        <img src="<?php bloginfo('template_directory');?>/img/group.jpg" alt="個別指導" />
                    </div>
                </div>
                <div class="onerow vertical">
                    <div class="col6">
                        <img src="<?php bloginfo('template_directory');?>/img/circle.jpg" alt="サークル（脳力開発塾）" />
                    </div>
                    <div class="col6 last">
                        <div class="disc-wrapper">
                            <h3>サークル（脳力開発塾）</h3>
                            <p>さまざまなサークル活動を通じて脳を刺激し地頭とコミュニケーションスキルを鍛えます。</p>
                            <a href="/circle/" class="btn-flat">詳しく見る≫</a>
                        </div>
                    </div>
                </div>
                <!--<div class="onerow vertical">
                    <div class="col6">
                        <div class="disc-wrapper">
                        </div>
                    </div>
                    <div class="col6 last">                       
                    </div>
                    <div class="preparing">
                        <div class="coming">Coming Soon!</div>
                    </div>
                </div>-->
            </div>
        </section>
        <section id="reputation">
            <div class="container">
                <h2 class="center">通っている子供たちが書いてくれました。</h2>
                <div class="onerow">
                    <div class="col4">
                        <div class="onerow">
                            <div id="bubble">
                                <img src="<?php bloginfo('template_directory');?>/img/msg/msg_1.png" />
                            </div>
                        </div>
                        <div class="onerow">
                            <div id="bubble">
                                <img src="<?php bloginfo('template_directory');?>/img/msg/msg_3.png" />
                            </div>
                        </div>
                    </div>
                    <div class="col4">
                        <div class="onerow">
                            <div id="bubble">
                                <img src="<?php bloginfo('template_directory');?>/img/msg/msg_4.png" />
                            </div>
                        </div>
                        <div class="onerow">
                            <div id="bubble">
                                <img src="<?php bloginfo('template_directory');?>/img/msg/msg_2.png" />
                            </div>
                        </div>
                    </div>
                    <div class="col4 last">
                        <div class="onerow">
                            <div id="bubble">
                                <img src="<?php bloginfo('template_directory');?>/img/msg/msg_5.png" />
                            </div>
                        </div>
                        <div class="onerow">
                            <div id="bubble">
                                <img src="<?php bloginfo('template_directory');?>/img/msg/msg_6.png" />
                            </div>
                        </div>
                    </div>
                </div>
<!--                <div class="center">
                    <a href="/about/" class="font-blue">指導実績を見る≫</a>
                </div>-->
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
    </div>
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
	var nav = $('#nav');
	var home = $('#home');
	var contact = $('.contact');
    offset = nav.offset();
    $(window).scroll(function () {
    	if($(window).scrollTop() > offset.top - 78) {
    		nav.addClass('fixed');
    		home.stop().animate({'marginLeft' : '0px'}, 200);
    		contact.stop().animate({'top' : '6px'}, 200);
    		contact.addClass('fixed');
    	} else {
    		nav.removeClass('fixed');
    		home.stop().animate({'marginLeft' : '-60px'}, 200);
    		contact.removeClass('fixed');
    		contact.stop().animate({'top' : '24px'}, 200);
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
});
</script>
</body>
</html>