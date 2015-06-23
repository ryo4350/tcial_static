<?php get_template_part('content', 'primary_header_v'); ?>
    <!-- Content -->
    <div class="key-visual">
        <div id="key-visual__img--top" class="key-visual__img crousel"></div>
        <div id="catch">
            <h1 class="catch-msg-l">
                <span class="">体験受講生募集中!</span>
            </h1>
            <h2 class="catch-msg-s">学ぶこと、つくることが大好きな人が集まる学習塾</h2>
        </div>
    </div>
    <div id="content--kv">
        <section id="blog-list" class="section">
            <div class="container cf">
                <div class="pick__header">
                    <h2 class="heading thin center">
                        <p class="en">Pick Up!</p>
                        <p class="jp">おすすめピックアップ記事</p>
                    </h2>
                </div>
                <?php
                    $pu = get_posts(array(
                        'tag' => 'pick',
                        'posts_per_page' => '6'
                    ));
                ?>
                <ul class="cf post-list--s">
                    <?php foreach($pu as $post) : setup_postdata($post)?>
                    <li class="col2 post-list--s__item">
                        <?php
                            $cats = get_the_category();
                            $cat = $cats[0];
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="post-list--s__img-wrap">
                                <?php the_post_thumbnail("medium"); ?>
                            </div>
                            <div class="post-list--s__header">
                                <h3 class="post-list--s__title"><?php the_title(); ?></h3>
                            </div>
                        </a>
                        <span class="category-label <?php echo $cat->category_nicename; ?>"><?php the_category($separator); ?></span>
                    </li>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
            </div>
        </section> 
        
        <section id="about" class="section">
            <div class="container">
                <h2 class="heading center what__heading">
                    <p class="en">Hello, we're tcial !</p>
                    <p class="jp">ようこそ！私たちがティーシャルです。</p>
                </h2>
                <p class="front-content__text">
                    ティーシャルは<!--『学ぶはもっと、おもしろい！』をキーワードに-->受験指導/定期テスト指導/学校の予復習/学びなおし/ものづくり/ワークショップ/セミナー/読書会等を行う塾であり、学びのコミュニティです。
                    小学生/中学生/高校生/社会人等様々な人が集まり、スタッフの支援の下それぞれの学びを実践しています。
                </p>
            </div>
        </section>

        <section id="what" class="section">
            <div class="container">
                <div class="front-content cf">
                    <h2 class="heading center what__heading">
                        <p class="en">We can teach it.</p>
                        <p class="jp">私達が教えていること</p>
                    </h2>
                    <p class="front-content__text">
                        あなたに必要なものは何ですか？<br>
                        目的に応じて必要な指導を選んでください。
                    </p>
                    <ul class="menu-list">
                        <li class="col4">
                            <div  class="menu-list__item">
                                <a href="/lesson/#system">
                                    <img class="front-content__img" src="<?php bloginfo('template_directory');?>/img/gallary/3.jpg">
                                    <h3 class="menu-list__title thin">受験指導</h3>
                                    <p>
                                        第一志望校に合格するための受験指導です。
                                        長期的な視点に立ち、持続可能なやり方を提案します。
                                    </p>
                                </a>
                            </div>
                        </li>
                        <li class="col4">
                            <div  class="menu-list__item">
                                <a href="/lesson/#system">
                                    <img class="front-content__img" src="<?php bloginfo('template_directory');?>/img/gallary/report.jpg" alt="成績管理表">
                                    <h3 class="menu-list__title thin">公立中定期テスト/内申</h3>
                                    <p>
                                        定期テストは各校の傾向と対策がカギ。
                                        栗田谷中・松本中・軽井沢中を中心とした定期テストの対策が準備されています。
                                    </p>
                                </a>
                            </div>
                        </li>
                        <li class="col4">
                            <div  class="menu-list__item">
                            <a href="/lesson/#system">
                                <img class="front-content__img" src="<?php bloginfo('template_directory');?>/img/gallary/19.jpg">
                                <h3 class="menu-list__title thin">中高一貫校/高校定期テスト</h3>
                                <p>
                                    中高一貫校や高校の授業はハイペースです。
                                    何となくの理解ではない『考える力』を身につけましょう。                                    
                                </p>
                            </a>
                        </li>
                        <li class="col4">
                            <div  class="menu-list__item">
                                <a href="/lesson/#system">
                                    <img class="front-content__img" src="<?php bloginfo('template_directory');?>/img/gallary/sanction.jpg" alt="検定指導">
                                    <h3 class="menu-list__title thin">検定指導</h3>
                                    <p>
                                        検定試験は自分の実力を手軽に知るための試金石。
                                        受験では英語検定や漢字検定をとっておくとに有利に働くこともあります。
                                    </p>
                                </a>
                            </div>
                        </li>
                        <li class="col4">
                            <div  class="menu-list__item">
                                <a href="/lesson/#system">
                                    <img class="front-content__img" src="<?php bloginfo('template_directory');?>/img/gallary/5.jpg">
                                    <h3 class="menu-list__title thin">学びなおし</h3>
                                    <p>
                                        不登校や卒業してから時間が経っていても、適切なステップを踏めば学び直しをすることができます。
                                    </p>
                                </a>
                            </div>
                        </li>
                        <li class="col4">
                            <div  class="menu-list__item">
                                <a href="/circle/">
                                    <img class="front-content__img" src="<?php bloginfo('template_directory');?>/img/gallary/13.jpg">
                                    <h3 class="menu-list__title thin">日曜教室/特別科目</h3>
                                    <p>
                                        知的好奇心を拡げる特別教室。
                                        プログラミングやものづくり、心理学や政治までバラエティ豊かに学びます。
                                    </p>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="how" class="section">
            <div class="container">
                <div class="front-content cf">
                    <h2 class="heading center how__heading">
                        <p class="en">How to do it.</p>
                        <p class="jp">私達の教えかた</p>
                    </h2>
                    <ul class="menu-list">
                        <li class="col4">
                            <a>
                                <img class="front-content__img" src="<?php bloginfo('template_directory');?>/img/gallary/8.jpg">
                                <h3 class="menu-list__title thin">１人ひとりのために</h3>
                                <p>
                                    何のために学ぶのか？
                                    目的や人が異なれば、やり方も異なります。
                                    １人ひとりの目的、性格、適性を考えた指導をします。
                                </p>
                            </a>
                        </li>
                        <li class="col4">
                            <a>
                                <img class="front-content__img" src="<?php bloginfo('template_directory');?>/img/gallary/plan.jpg" alt="今日の計画">
                                <h3 class="menu-list__title thin">自立した学習者</h3>
                                <p>
                                    指導者の役割は学習者が自ら考えることができるようサポートすることです。
                                    わかりやすく教えることは大切ですが、教えすぎないことも同様に大切だと考えています。
                                </p>
                            </a>
                        </li>
                        <li class="col4 last">
                            <a>
                                <img class="front-content__img" src="<?php bloginfo('template_directory');?>/img/gallary/17.jpg">
                                <h3 class="menu-list__title thin">楽しくやる</h3>
                                <p>
                                    新しいことを理解する、困難な目標を達成する、仲間との共有する、生活とのつながりを知る、etc…。学ぶことの楽しさを最大限感じましょう。
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="reputation" class="cf section">
            <div class="container">
                <ul class="onerow">
                    <li class="col2">
                        <img src="<?php bloginfo('template_directory');?>/img/msg/msg_1.png" alt="先生が身近に感じる塾です！"/>
                    </li>
                    <li class="col2">
                        <img src="<?php bloginfo('template_directory');?>/img/msg/msg_3.png" alt="夢と希望にあふれた塾です！" />
                    </li>
                    <li class="col2">
                        <img src="<?php bloginfo('template_directory');?>/img/msg/msg_4.png" alt="自然と勉強したくなる、そんな塾です!!" />
                    </li>
                    <li class="col2">
                        <img src="<?php bloginfo('template_directory');?>/img/msg/msg_2.png" alr="楽しくて、自然とやる気の出る塾です！" />
                    </li>
                    <li class="col2">
                        <img src="<?php bloginfo('template_directory');?>/img/msg/msg_5.png" alt="教えるよりも、一緒に考えてくれる。Tcialはそんなところです。" />
                    </li>
                    <li class="col2 last">
                        <img src="<?php bloginfo('template_directory');?>/img/msg/msg_6.png" alt="絆がある塾です。" />
                    </li>
                </ul>
            </div>
        </section>
        <section id="why" class="section">
            <div class="container-narrow">
                <div class="front-content cf">
                    <h2 class="heading why__heading">
                        <p class="en">Why we think so.</p>
                        <p class="jp">なぜそう教えるのか</p>
                    </h2>
                    <div class="why__body">
                        <h3>学び続ける力が必要</h3>
                        <p>
                            人は一生のうちにどれだけ学ぶのでしょう？
                            明治時代に近代教育が始まって以来、人が学ぶ期間と内容は増え続けてきました。
                            変化の激しい現代では学ぶ内容は高度化・細分化し、一度学んだことでもどんどんアップデートをしなければ通用しない世の中になってきました。
                            必要とされる力は、学び続ける力なのです。
                        </p>

                        <h3>学ぶことは本来、おもしろい。</h3>
                        <p>
                            一生勉強が続く世の中と聞くと嫌なイメージを持つかもしれません。
                            しかし、勉強とは本来的に苦しみながらやるものなのでしょうか？
                            生まれて初めて立ったとき、初めて他人と言葉を交わすことができたとき、初めて着替えをできるようになったとき、初めて字を書いた時、それらはすべて感動的な瞬間だったことを思い出してください。
                            学ぶことは本来、楽しいものであるはずです。学びを楽しみ、好きなことをたくさん作りましょう。
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="blog-list" class="section">
            <div class="container-narrow cf">
                <div class="front-content">
                    <h2 class="heading center blog-list__heading">
                        <p class="en">What we think.</p>
                        <p class="jp">私達が書いた記事</p>
                    </h2>
                    <?php
                        $posts = get_posts(array(
                            'posts_per_page' => '6'
                        ));
                    ?>
<?php get_template_part('content', 'post_list_m'); ?>
                </div>
            </div>
            <a href="<?php echo home_url()."/magazine" ?>" class="center">>>もっと記事をみる</a>
        </section>
     </div>
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
$(function() {
    var mini = $('.header--mini');
    $(window).scroll(function () {
        if($(window).scrollTop() > 420){
            mini.stop().animate({'top' : '0px'}, 300);
        }  else {
            mini.stop().animate({'top' : '-100px'}, 200);
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

    $(function() {
        $("#toggle").on("click", function() {
            $("#menu-primary").slideToggle();
        });
    });
});</script>
</body>
</html>
