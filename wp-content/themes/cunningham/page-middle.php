<?php get_template_part('content', 'primary_header'); ?>
	<!-- Content -->
	<div id="content">
            <nav class="breadcrumb">
                <div class="container">
                    <?php if(class_exists('WP_SiteManager_bread_crumb')){WP_SiteManager_bread_crumb::bread_crumb('home_label=top&type=string');} ?>
                </div>
            </nav>
            <section id="junior">
                <div class="container-narrow">
                    <h1 class="lesson__header thin">中高一貫生</h1>
                    <h2 class="junior__header heading junior__catch center">基礎力、足りてますか？</h2>
                    <ul class="needs-list check">
                        <li>英語/数学が苦手！</li>
                        <li>学校の授業がだんだんわからなくなってきた</li>
                        <li>勉強しても点に結びつかない</li>
                        <li>数学が面白くなくなってきた...</li>
                    </ul>
                    <h2 class="junior__header heading center">その問題、すべて基礎力をつけることで解決できます。</h2>
                </div>
            </section>
            <section class="lesson__body">
                <div class="container-table">
                    <h3 class="junior__header--s heading">数学と英語は積み上げ型科目</h3>
                    <p class="lesson__text">
                        英語と数学は積み上げ型科目です。
                        どこかで理解の漏れがあると、のちの単元の理解に大きな影響を及ぼすことになります。
                        例えば、中１数学の「移項」という計算は簡単ですが、なぜ「移項」できるのか？ということをしっかり考えずに先に進んでしまうと文字式の計算で必ず躓きます。
                        「単にできる」ではなく「なぜそうなるか」を考えることを大切にしています。
                    </p>
                    <h3 class="junior__header--s heading">学校の授業がわかるようになる</h3>
                    <p class="lesson__text">
                        中高一貫校の授業は高校１～２年生までに高校までの内容を終わらせることが多く、どうしても授業のペースが速くなってしまいます。
                        そのため、これまでに習ったことは理解できていることが前提で授業が進められます。
                        過去の関連単元まで含んだ適切な予習復習をすることで、学校の授業を毎回しっかり理解することができるようになります。
                    </p>
                    <h3 class="junior__header--s heading">勉強した分点に結びつくようになる</h2>
                    <p class="lesson__text">
                        学校の授業で一度理解できたかどうかで、テスト前の勉強効率が上がります。
                        理解することに時間をかけないので、十分な演習量を確保できるからです。
                        だから、テスト前に勉強した分だけ点を取ることが可能になります。
                    </p>
                    <h3 class="junior__header--s heading">数学の面白さを思い出す</h3>
                    <p class="lesson__text">
                        小学校の頃の算数や、中一の頃の数学は楽しかったのに...最近の数学はつまらない。<br>
                        もしかすると、公式の意味が解らずにただ数字を当てはめるための作業になっていませんか？
                        あるいは、正しい解放で解いているのに計算ミスをしてしまうせいで間違えてしまい自信を無くしていませんか？
                        基礎を固めることで、公式の意味を理解し計算ミスも減って数学の面白さにもう一度気づくことができます。
                    </p>
                </div>
            </section>
            <section class="result--middle">
                <div class="container-narrow">
                    <h2 class="heading center thin">指導実績</h2>
                    <p class="center">基礎力をしっかりつけて日々の勉強に取り組むことができるようになれば、定期テストの結果も付いてきます。</p>
                    <ul class="results-list--middle cf">
                        <li>
                            <div class="result__wrapper">
                                <h3 class="result__title">幾何で96点、代数で90点を達成</h3>
                                <h4 class="result__title--s">担当講師のコメント</h4>
                                <p class="result__comment">やったぜ</p>
                                <h4 class="result__title--s">生徒のコメント</h4>
                                <p class="result__comment">やったぜ</p>
                            </div>
                        </li>
                        <li>
                            <div class="result__wrapper">
                                <h3 class="result__title">幾何で96点、代数で90点を達成</h3>
                                <h4 class="result__title--s">担当講師のコメント</h4>
                                <p class="result__comment">やったぜ</p>
                                <h4 class="result__title--s">生徒のコメント</h4>
                                <p class="result__comment">やったぜ</p>
                            </div>
                        </li>
                        <li>
                            <div class="result__wrapper">
                                <h3 class="result__title">幾何で96点、代数で90点を達成</h3>
                                <h4 class="result__title--s">担当講師のコメント</h4>
                                <p class="result__comment">やったぜ</p>
                                <h4 class="result__title--s">生徒のコメント</h4>
                                <p class="result__comment">やったぜ</p>
                            </div>
                        </li>
                        <li>
                            <div class="result__wrapper">
                                <h3 class="result__title">幾何で96点、代数で90点を達成</h3>
                                <h4 class="result__title--s">担当講師のコメント</h4>
                                <p class="result__comment">やったぜ</p>
                                <h4 class="result__title--s">生徒のコメント</h4>
                                <p class="result__comment">やったぜ</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>           
            
            <?php get_template_part('content', 'system_summary'); ?>
            <section>
                <div class="container-narrow">
                    <h3 class="heading thin center">授業料の目安</h3>
                    <div class="onerow cf">
                        <div class="col6">
                            <div href="/lesson/junior" class="system__wrapper">
                                <!--<img alt="アイキャッチ">-->
                                <h2 class="system__header center">￥1,9958<span class="prefix">から</span></h2>
                                <h3 class="system__copy center">苦手科目を克服するスタンダードプラン</h3>
                                <h4>受講例</h4>
                                <p>苦手にしている科目を個別授業で、</p>
                                <dl>
                                    <dt>数学</dt>
                                    <dd>個別トレーニング</dd>
                                    <dt>英語</dt>
                                    <dd>個別授業</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="col6 last">
                            <div href="/lesson/junior" class="system__wrapper">
                                <!--<img alt="アイキャッチ">-->
                                <h2 class="system__header center">￥36,974<span class="prefix">から</span></h2>
                                <h3 class="system__copy center">英語と数学を重点的に強化する</h3>
                                <p></p>
                                <h4>受講例</h4>
                                <dl>
                                    <dt>数学</dt>
                                    <dd>個別授業</dd>
                                    <dt>英語</dt>
                                    <dd>個別授業</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <a class="link--lesson" href="/lesson/system#fee">>>詳しく見る>></a>
                </div>
            </section>
	</div>
        <nav>
            <ul class="header--lsn cf">
                <li><a href="/lesson">個別指導top</a></li>
                <li><a href="/lesson/junior">小学生</a></li>
                <li><a href="/lesson/junior-high">中学生</a></li>
                <li><a href="/lesson/middle">中高一貫生</a></li>
                <li><a href="/lesson/high">高校生</a></li>
                <li><a href="/lesson/adult">高卒生/社会人</a></li>
                <li><a href="/lesson/system">総合案内</a></li>
            </ul>
        </nav>
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/script.js"></script>
<script>
$(function() {
    var lsn = $('.header--lsn--mini');
    $(window).scroll(function () {
        if($(window).scrollTop() > 640){
            lsn.stop().animate({'top' : '58px'}, 300);            
        }  else {
            lsn.stop().animate({'top' : '-100px'}, 200);
        }
    });
});</script>
</body>
</html>