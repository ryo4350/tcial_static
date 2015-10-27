<?php get_template_part('content', 'primary_header'); ?>
	<!-- Content -->
	<div id="content">
            <nav class="breadcrumb">
                <div class="container">
                    <?php if(class_exists('WP_SiteManager_bread_crumb')){WP_SiteManager_bread_crumb::bread_crumb('home_label=top&type=string');} ?>
                </div>
            </nav>
            <section id="junior" class="section lesson__content">
                <div class="container-table">
                    <h1 class="lesson__header thin center">基礎力、足りてますか？</h1>
                    <ul class="needs-list check">
                        <li>英語/数学が苦手！</li>
                        <li>学校の授業がだんだんわからなくなってきた</li>
                        <li>勉強しても点に結びつかない</li>
                        <li>数学が面白くなくなってきた...</li>
                    </ul>
                    <div class="lesson__body">
                        <h2 class="junior__header--s heading">数学と英語は積み上げ型科目</h2>
                        <p class="lesson__text">
                            英語と数学は積み上げ型科目です。
                            どこかで理解の漏れがあると、のちの単元の理解に大きな影響を及ぼすことになります。
                            例えば、中１数学の「移項」という計算は簡単ですが、なぜ「移項」できるのか？ということをしっかり考えずに先に進んでしまうと文字式の計算で必ず躓きます。
                            「単にできる」ではなく「なぜそうなるか」を考えることを大切にしています。
                        </p>
                        <h2 class="junior__header--s heading">学校の授業がわかるようになる</h2>
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
                        <h2 class="junior__header--s heading">数学の面白さを思い出す</h2>
                        <p class="lesson__text">
                            小学校の頃の算数や、中一の頃の数学は楽しかったのに...最近の数学はつまらない。<br>
                            もしかすると、公式の意味が解らずにただ数字を当てはめるための作業になっていませんか？
                            あるいは、正しい解放で解いているのに計算ミスをしてしまうせいで間違えてしまい自信を無くしていませんか？
                            基礎を固めることで、公式の意味を理解し計算ミスも減って数学の面白さにもう一度気づくことができます。
                        </p>
                    </div>
                </div>
            </section>
            <section class="block block--formality">
                <header class="system__header center">
                    <h2 class="heading thin">指導実績（高校受験）</h2>
                    <p>基礎力がつけば、定期テストの結果もついてきます。</p>                    
                </header>
                <div class="system__wrapper">
                    <div class="container-narrow table-cell">
                        <div class="system__inner system__item system__inner--left">
                            <h3 class="">幾何で96点、代数で90点を達成</h3>
                        </div>
                        <div class="system__inner system__item system__inner--right">                            
                            <h3 class="">幾何で96点、代数で90点を達成</h3>
                        </div>
                    </div>
                </div>
            </section>           

            <?php get_template_part('content', 'system_summary'); ?>
            <section class="block block--formality">
                <header class="system__header center">
                    <h2 class="heading thin">受講例と授業料</h2>
                    <p>よくある授業プランと授業料をご紹介します。</p>                    
                </header>
                <div class="system__wrapper">
                    <div class="container-narrow table-cell">
                        <div class="system__item system__inner system__inner--left">
                            <h3 class="heading thin center">苦手な１科目に特化したプラン</h3>
                            <p>
                                英数の一方を個別授業と個別トレーニングで学習します。 特定の科目を集中的に学習したい人にお薦めです。
                            </p>
                            <div class="system-fig">
                                <h4 class="system-fig__title thin">受講例</h4>
                                <dl class="timetable">
                                    <dt>数学</dt>
                                    <dd>個別トレーニング</dd>
                                    <dt>数学</dt>
                                    <dd>個別授業</dd>
                                </dl>
                            </div>
                            <p class="thin center">中学生で上記の場合の授業料</p>
                            <p class="heading thin center">￥19,958<span class="prefix">（税込）</span></p>
                        </div>
                        <div class="system__item system__inner system__inner--right">
                            <h3 class="heading thin center">英語と数学の基礎を固める</h3>
                            <p>
                                英語と数学の両方を個別授業で学習します。 積み重ね型の科目の基礎を固め、高校の内容に備えます。
                            </p>
                            <div class="system-fig">
                                <h4 class="system-fig__title thin">受講例</h4>
                                <dl class="timetable">
                                    <dt>数学</dt>
                                    <dd>個別授業</dd>
                                    <dt>英語</dt>
                                    <dd>個別授業</dd>
                                </dl>
                                <p class="thin center">中学生で上記の場合の授業料</p>
                                <p class="heading thin center">￥36,974<span class="prefix">（税込）</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="system__wrapper">
                    <div class="container-narrow">
                        <div class="system__inner">
                            <a class="link--lesson center" href="/lesson/system#fee">>>詳しく見る>></a>
                        </div>
                    </div>
                </div>
            </section>
	</div>
        <?php get_template_part('content', 'system_menu'); ?>
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/script.js"></script>
</body>
</html>