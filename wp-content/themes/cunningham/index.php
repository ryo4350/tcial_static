<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Lily+Script+One' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>

</head>

<body>
    <!-- Header -->
    <header>
        <div id="header">
            <div class="container">
                <h1><a href="/">個別指導塾ティーシャル</a></h1>
            </div>
        </div>
        <nav id="nav">
            <ul class="container menu" id="menu-category" >
                <li><a href="lesson/">個別指導</a></li>
                <li><a href="case/">ケース</a></li>
                <!--<li><a  href="/event/">イベント</a></li>-->
                <!--<li><a href="/circle/">サークル</a></li>-->
                <li><a href="about/" >私たちについて</a></li>
                <li><a target="_blank" href="/blog/">ブログ</a></li>
            </ul>
        </nav>
    </header>

    <nav class="contact" id="contact">
        <ul>
            <li><a class="btn-flat-icon" id="fb-icon" href="https://www.facebook.com/tcialcom" target="_blank">f</a></li>
            <li><a class="btn-flat-icon" id="tw-icon" href="/twitter" target="_blank">t</a></li>
            <li><a class="btn-flat" href="/trial/">無料体験</a></li>
            <li><a class="btn-flat" href="/twitter">お問い合わせ</a></li>
        </ul>
    </nav>

    <nav id="home">
            <a href="/" class="btn-flat-icon">T</a>
    </nav>

    <!-- Content -->
    <div id="top-content">
    <!--                <video id="mv" autoplay loop muted>
                    <source src="/video/vdo.mov">
            </video>-->
            <div id="mv-text">
                    <h2><span class="font-red">Education</span> <span class="font-orange">for</span> <span class="font-green">Good</span></h2>
                    <p>塾</p>
                    <a href="" class="mv-btn">もっと詳しく！</a>
            </div>
            <div>
                <a href=""><img src="/img/spring.png" class="top-ad" alt="春期講習が始まります" /></a>
                <a href=""><img src="/img/circle.png" class="top-ad" alt="サークル、始動" /></a>
            </div>
            <section id="class">
                <div class="container">
                    <h2 class="center">おすすめ記事</h2>
                    <div class="">
                        <ul class="onerow features">
                        <?php query_posts('posts_per_page=4'); ?>
                        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                            <li class="col3 article">
                                <div class="sidebar-article-img">
                                    <?php the_post_thumbnail(); ?>
                                    <div class="category-label"><?php the_category(); ?></div>
                                </div>
                                <div class="recomended-article-info">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <p class="post-date"><a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a></p>
                                </div>
                            </li>
                            <?php endwhile;
                        else :?>
                            <?php get_template_part( 'content', 'none' ); ?>
                        <?php endif; ?>
                        </ul>
                    </div>
                    <a href="magazine/" class="center font-green">もっと記事をみる</a>
                </div>
            </section>
            <section id="reputation">
                <div class="container">
                    <h2 class="center">通っている生徒の声をお聞きください</h2>
                    <div class="">
                        <ul class="onerow features">
                            <li class="col3 article">
                                <img src="/img/gallary/15.jpg" alt="１人ひとりの第１志望に合格する" />
                                <div class="article-info">
                                    <h4>佐藤竣亮くん</h4>
                                    <p>ホームページを作成</p>
                                </div>
                            </li>
                            <li class="col3 article">
                                <img src="/img/gallary/7.jpg" alt="ホワイトボードを使った参加型授業" />
                                <div class="article-info">
                                    <h4>山本真由さん</h4>
                                    <p>iPad5を開発</p>
                                </div>
                            </li>
                            <li class="col3 article">
                                <img src="/img/gallary/47.jpg" alt="5教科カバーしています！" />
                                <div class="article-info">
                                    <h4>石川主浩くん</h4>
                                    <p>苦手な数学で88点!</p>
                                </div>
                            </li>
                            <li class="col3 article last">
                                <img src="/img/gallary/51.jpg" alt="質問できる自習室" />
                                <div class="article-info">
                                    <h4>岩本大輝くん</h4>
                                    <p>センター撃沈</p>
                                </div>
                            </li>
                        </ul>
<!--                        <div id="bubble">
                            <p>苦手な数学で88点!</p>
                        </div>-->
                    </div>
                    <a href="/lesson/" class="center font-green">もっと生徒の声を聴く</a>
                </div>
            </section>
            <section id="gallary">
                <div class="container">
                    <h2 class="center">GALLARY</h2>
                    <div class="onerow">
                            <div class="col3 article">
                                    <img src="/img/gallary/1.jpg" alt="" />
                            </div>
                            <div class="col3 article">
                                    <img src="/img/gallary/2.jpg" alt="" />
                            </div>
                            <div class="col3 article">
                                    <img src="/img/gallary/3.jpg" alt="" />
                             </div>
                            <div class="col3 last article">
                                    <img src="/img/gallary/4.jpg" alt="" />
                            </div>
                    </div>
                    <div class="onerow">
                            <div class="col2 article">
                                    <img src="/img/gallary/5.jpg" alt="" />
                            </div>
                            <div class="col2 article">
                                    <img src="/img/gallary/6.jpg" alt="" />
                            </div>
                            <div class="col2 article">
                                    <img src="/img/gallary/7.jpg" alt="" />
                            </div>
                            <div class="col2 article">
                                    <img src="/img/gallary/8.jpg" alt="" />
                            </div>
                            <div class="col2 article">
                                    <img src="/img/gallary/22.jpg" alt="" />
                             </div>
                            <div class="col2 last article">
                                    <img src="/img/gallary/21.jpg" alt="" />
                            </div>
                    </div>
                    <div class="onerow">
                            <div class="col2 article">
                                    <img src="/img/gallary/20.jpg" alt="" />
                            </div>
                            <div class="col2 article">
                                    <img src="/img/gallary/12.jpg" alt="" />
                            </div>
                            <div class="col2 article">
                                    <img src="/img/gallary/13.jpg" alt="" />
                            </div>
                            <div class="col2 article">
                                    <img src="/img/gallary/14.jpg" alt="" />
                            </div>
                            <div class="col2 article">
                                    <img src="/img/gallary/15.jpg" alt="" />
                             </div>
                            <div class="col2 last article">
                                    <img src="/img/gallary/16.jpg" alt="" />
                            </div>
                    </div>
                    <div class="onerow">
                            <div class="col2 article">
                                    <img src="/img/gallary/23.jpg" alt="" />
                            </div>
                            <div class="col2 article">
                                    <img src="/img/gallary/24.jpg" alt="" />
                            </div>
                            <div class="col2 article">
                                    <img src="/img/gallary/25.jpg" alt="" />
                            </div>
                            <div class="col2 article">
                                    <img src="/img/gallary/26.jpg" alt="" />
                            </div>
                            <div class="col2 article">
                                    <img src="/img/gallary/27.jpg" alt="" />
                             </div>
                            <div class="col2 last article">
                                    <img src="/img/gallary/28.jpg" alt="" />
                            </div>
                    </div>
                </div>
            </section>
            <section id="about">
                <div class="container">
                    <h2 class="center">私たちについて</h2>
                    <div class="">
                        <ul class="onerow features">
                            <li class="col4">
                                <img src="/img/icon/new.png" alt="できて１年の新しい塾" />
                                <div class="features-info">
                                    <h4>できて１年の新しい塾</h4>
                                    <p>大手塾で働いていた４人の講師がより良い教育機関を作るべく2013年に開校しました。</p>
                                </div>
                            </li>
                            <li class="col4">
                                <img src="/img/icon/lecturer.png" alt="在籍講師" />
                                <div class="features-info">
                                    <h4>社員、プロ、学生がバランスよく在籍</h4>
                                    <p>社員、プロ、学生がバランスよく混在することで互いに切磋琢磨しながら指導にあたっています。</p>
                                </div>
                            </li>
                            <li class="col4 last">
                                <img src="/img/icon/good.png" alt="低退塾率" />
                                <div class="features-info">
                                    <h4>低退塾率</h4>
                                    <p>自然退塾者（志望校合格等）を除いてほとんどの生徒に継続的にお通いいただいています。</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="/about/" class="center font-green">わたしたちについてもっと知る</a>
                </div>
            </section>
        </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="footer-inner" id="footer-top">
            <div class="col6">
                <h4>お気軽にお問い合わせください。</h4>
            </div>
            <div class="col6 last">
                <a href="/trial/" class="footer-btn">体験授業の申し込みはこちら</a>
                <p class="tel">☎090-2713-2549</p>
                <p class="mail">Mail:yokohama@t-cial.com</p>
            </div>
        </div>
        <div class="" id="footer-bottom">
            <div class="footer-inner">
                <div class="col3">
                    <h4>個別指導塾Tcial</h4>
                    <address>
                        〒221-0844
                        神奈川県横浜市神奈川区沢渡2-2第二泉ビル3F
                    </address>
                </div>
                <div class="col3">
                    <nav class="copyright">
                        <ul>
                            <li><a href="/lesson/">個別指導</a></li>
                            <li><a href="case">ケース</a></li>
                            <li><a href="/about/">私たちについて</a></li>
                            <li><a href="">ブログ</a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                        </ul>
                        <span>&copy;Tcial</span>
                    </nav>
                </div>
                <div class="col6 last">
                    <h4>フェイスブック</h4>
                </div>
            </div>
        </div>
    </footer>
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
