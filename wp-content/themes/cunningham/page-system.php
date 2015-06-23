<?php get_template_part('content', 'primary_header'); ?>
	<!-- Content -->
	<div id="content">
            <nav class="breadcrumb">
                <div class="container">
                    <?php if(class_exists('WP_SiteManager_bread_crumb')){WP_SiteManager_bread_crumb::bread_crumb('home_label=top&type=string');} ?>
                </div>
            </nav>
            <header>
            <section class="block block--formality">
                <header class="system__header center">
                    <h1>指導形式</h1>
                    <p class="heading thin">ティーシャルの個別指導には２つの指導タイプがあります。</p>
                </header>
                <div class="system__wrapper">
                    <div class="container-narrow table-cell">
                        <div class="system__item system__inner system__inner--left">
                            <h2 class="heading thin individual">個別授業</h2>
                            <p class="system__text">
                                講師１人につき生徒２人までの個別指導です。 <br>
                                指導経験豊富な特別招聘講師や社員を中心とする指導で、
                                苦手科目の克服や日々の授業の予復習から難関校受験対策まで幅広く対応し、きめ細やかな指導が可能です。
                            </p>
                        </div>
                        <div class="system__item system__inner system__inner--right">
                            <h2 class="heading thin training">個別トレーニング</h2>
                            <p class="system__text">
                                講師１人につき生徒６人までの個別指導です。 <br>
                                小１から高３までのあらゆる分野の問題データベースから必要な問題を選んで演習し、わからないところは講師が解説を行います。 
                                教科書にも対応しているため定期テスト対策にもぴったりです。
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block block--formality">
                <header class="system__header center">
                    <h2>両形式の特徴</h2>
                    <p class="heading thin">それぞれに特徴があります。</p>
                </header>
                <div class="system__wrapper">
                    <div class="container-narrow table-cell">
                        <div class="system__item system__inner system__inner--left">
                            <h3 class="heading thin"><span class="individual">個別授業</span>の特徴</h3>
                            <dl class="timetable">
                                <dt>講師生徒比</dt><dd>講師１：～生徒２</dd>
                                <dt>授業時間</dt><dd>80分</dd>
                                <dt>回数</dt><dd>週一回から</dd>
                                <dt>使用教材</dt><dd>生徒に合わせて多種多様</dd>
                                <dt>講師</dt><dd>担任制で科目ごとに固定</dd>
                            </dl>
                        </div>
                        <div class="system__item system__inner system__inner--right">
                            <h3 class="heading thin"><span class="training">個別トレーニング</span>の特徴</h3>
                            <dl class="timetable">
                                <dt>講師生徒比</dt><dd>講師１：～生徒１０</dd>
                                <dt>授業時間</dt><dd>80分</dd>
                                <dt>回数</dt><dd>週一回から</dd>
                                <dt>使用教材</dt><dd>教育開発出版『eトレ』</dd>
                                <dt>講師</dt><dd>曜日によって異なる</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block block--formality">
                <header class="system__header center">
                    <h2>お薦め</h2>
                    <p class="heading thin">こんな人におススメです。</p>
                </header>
                <div class="system__wrapper">
                    <div class="container-narrow table-cell">
                        <div class="system__item system__inner system__inner--left">
                            <h3 class="heading thin"><span class="individual">個別授業</span>の薦め</h3>
                            <ul class="checkbox">
                                <li>基礎の理解がまだまだ浅い</li>
                                <li>解説を読んでもわからないことが多い</li>
                                <li>わからない問題があれば、すぐに質問したい</li>
                                <li>丸つけ後の見直しや解き直しのやり方がわからない</li>
                                <li>新出単元はじっくり内容を理解してから問題を解きたい</li>
                                <li>自分に必要な勉強法や問題が何なのかよくわからない</li>
                            </ul>
                        </div>
                        <div class="system__item system__inner system__inner--right">
                            <h3 class="heading thin"><span class="training">個別トレーニング</span>の薦め</h3>
                            <ul class="checkbox">
                                <li>学習習慣をつけたい</li>
                                <li>基礎練習が足りない</li>
                                <li>解説を受けるより、まずは自分で考えたい</li>
                                <li>丸つけの習慣をつけたい</li>
                                <li>新出単元は概要がわかればまず問題を解いてみたい</li>
                                <li>自分に必要な勉強法や問題がある程度わかっている</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
<!--            <section class="block block--formality">
                <header class="system__header center">
                    <h2></h2>
                    <p class="heading thin">受講している生徒の声</p>
                </header>
                <div class="system__wrapper">
                    <div class="container-narrow table-cell">
                        <div class="system__item system__inner individual">
                            <h3 class="heading thin">個別授業</h3>
                            <div class="bubble">
                                <p></p>
                            </div>
                        </div>
                        <div class="system__item system__inner training">
                            <h3 class="heading thin">個別トレーニング</h3>
                            <div class="bubble">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->
            <section class="block block--formality">
                <header class="system__header center">
                    <h2>指導科目</h2>
                    <p class="heading thin">必要な科目だけを必要なだけ受講することができます。</p>
                </header>
                <div class="system__wrapper">
                    <div class="container-narrow table-cell max">
                        <div class="system__item system__inner system__inner--left">
                            <h3 class="heading thin">小学生の指導科目</h3>
                            <ul class="subject-list">
                                <li class="math">数学</li>
                                <li class="jpn">国語</li>
                                <li class="sci">理科</li>
                                <li class="soci">社会</li>
                            </ul>
                        </div>
                        <div class="system__item system__inner system__inner--right">
                            <h3 class="heading thin">中学生の指導科目</h3>
                            <ul class="subject-list">
                                <li class="math">数学</li>
                                <li class="eng">英語</li>
                                <li class="jpn">国語</li>
                                <li class="sci">理科</li>
                                <li class="soci">社会</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="system__wrapper">
                    <div class="container-narrow table-cell">
                        <div class="system__item system__inner system__inner--left">
                            <h3 class="heading thin">高校生/高卒生/社会人の指導科目</h3>
                            <ul class="subject-list">
                                <li class="math">数学</li>
                                <li class="eng">英語</li>
                                <li class="jpn">国語</li>
                                <li class="sci">化学</li>
                                <li class="sci">物理</li>
                                <li class="sci">生物</li>
                                <li class="sci">地学</li>
                                <li class="soci">日本史</li>
                                <li class="soci">世界史</li>
                                <li class="soci">地理</li>
                                <li class="soci">現社</li>
                                <li class="soci">倫政</li>
                            </ul>
                        </div>
                        <div class="system__item system__inner system__inner--right">
                            <h3 class="heading thin">検定受験の指導科目</h3>
                            <ul class="subject-list">
                                <li class="math">数学検定</li>
                                <li class="eng">英語検定</li>
                                <li class="jpn">漢字検定</li>
                                <li class="soci">歴史検定</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block block--formality">
                <header class="system__header center">
                    <h2>時間割</h2>
                    <p class="heading thin">曜日、時間を自由に選ぶことができます。</p>
                </header>
                <div class="system__wrapper">
                    <div class="container-narrow table-cell">
                        <div class="system__item system__inner system__inner--left">
                            <h3 class="heading thin">月曜日～金曜日の時間割</h3>
                            <dl class="timetable">
                                <dt>開校時間</dt>
                                <dd>14:30-22:00</dd>
                                <dt>１限</dt>
                                <dd>15:40-17:00</dd>
                                <dt>２限</dt>
                                <dd>17:10-18:30</dd>
                                <dt>３限</dt>
                                <dd>18:40-20:00</dd>
                                <dt>４限</dt>
                                <dd>20:10-21:40</dd>
                            </dl>
                        </div>                          
                        <div class="system__item system__inner system__inner--right">
                            <h3 class="heading thin">土曜日/講習期間の時間割</h3>
                            <dl class="timetable">
                                <dt>開校時間</dt>
                                <dd>9:30-21:30</dd>
                                <dt>１限</dt>
                                <dd>9:30-10:50</dd>
                                <dt>２限</dt>
                                <dd>11:00-12:20</dd>
                                <dt>３限</dt>
                                <dd>12:20-14:40</dd>
                                <dt>４限</dt>
                                <dd>14:50-16:10</dd>
                                <dt>５限</dt>
                                <dd>16:20-17:40</dd>
                                <dt>６限</dt>
                                <dd>18:00-19:20</dd>
                                <dt>７限</dt>
                                <dd>19:30-20:50</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <header class="system__header center">
                    <h3 class="thin center">自習について</h3>
                    <p class="heading thin">
                        受講生は開校時間内で自由に自習スペースを利用することができます。<br>
                        わからないことがあったら近くにいる講師に質問することも可能です。
                    </p>
                </header>
            </section>
            <section class="block block--formality">
                <header class="system__header center">
                    <h2>授業料/その他経費</h2>
                    <p class="heading thin">質の高い指導を低価格で</p>
                </header>
                <div class="system__wrapper">
                    <div class="container-narrow table-cell">
                        <div class="system__item system__inner system__inner--left">
                            <h3 class="heading thin"><span class="individual">個別授業</span>の授業料</h3>
                            <div class="onerow cf">
                                <h4>個別授業（小学生）</h4>
                                <dl class="timetable">
                                    <dt>週１回</dt><dd>￥13,824<span class="prefix">（税込）</span>/月</dd>
                                    <dt>週２回</dt><dd>￥27,648<span class="prefix">（税込）</span>/月</dd>
                                    <dt>週３回</dt><dd>￥41,472<span class="prefix">（税込）</span>/月</dd>
                                    <dt>週４回</dt><dd>￥55,296<span class="prefix">（税込）</span>/月</dd>
                                </dl>
                             </div>
                             <div class="onerow cf">
                                <h4>個別授業（中学生/高校生）</h4>
                                <dl class="timetable">
                                    <dt>週１回</dt><dd>￥15,984<span class="prefix">（税込）</span>/月</dd>
                                    <dt>週２回</dt><dd>￥31,968<span class="prefix">（税込）</span>/月</dd>
                                    <dt>週３回</dt><dd>￥47,952<span class="prefix">（税込）</span>/月</dd>
                                    <dt>週４回</dt><dd>￥63,936<span class="prefix">（税込）</span>/月</dd>
                                </dl>
                             </div>
                        </div>
                        <div class="system__item system__inner system__inner--right">
                            <h3 class="heading thin"><span class="training">個別トレーニング</span>の授業料</h3>
                            <h4>個別トレーニング（全学年共通）</h4>
                            <dl class="timetable">
                                <dt>週１回</dt><dd>￥3,974<span class="prefix">（税込）</span>/月</dd>
                                <dt>週２回</dt><dd>￥7,948<span class="prefix">（税込）</span>/月</dd>
                                <dt>週３回</dt><dd>￥11,922<span class="prefix">（税込）</span>/月</dd>
                                <dt>週４回</dt><dd>￥15,896<span class="prefix">（税込）</span>/月</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="system__wrapper">
                    <div class="container-narrow table-cell">
                        <div class="system__item system__inner">
                            <div class="col4">
                                <h3 class="heading thin center">入会金</h3>
                                <p class="heading thin center">￥10,800<span class="prefix">（税込）</span></p>
                            </div>
                            <div class="col4">
                                <h3 class="heading thin center">教室利用料</h3>
                                <p class="heading thin center">￥2,160/月<span class="prefix">（税込）</span></p>
                            </div>
                            <div class="col4 last">
                                <h3 class="heading thin center">教材費</h3>
                                <p class="fee__text--material thin center">実費で請求しております</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block block--formality">
                <header class="system__header center">
                    <h2 class="heading thin">季節講習</h2>
                    <p>ティーシャルでは学校が長期休暇になり時期に合わせて春期講習、夏期講習、冬期講習期間を設定しています。</p>                    
                </header>
                <div class="system__wrapper">
                    <div class="container-narrow">
                        <div class="system__inner">
                            <h3 class="heading thin">各季節講習の実施時期</h3>
                            <dl class="timetable">
                                <dt>春期講習</dt>
                                <dd>2015年3月20日～4月8日</dd>
                                <dt>夏期講習</dt>
                                <dd>2015年7月20日～8月30日</dd>
                                <dt>冬期講習</dt>
                                <dd>2015年12月21日～1月10日</dd>
                            </dl>
                        </div>
                        <div class="system__inner">
                            <ul>
                                <li>講習期間中は通常授業がありません。</li>
                                <li>事前に面談を行い必要に応じて、授業内容・回数をご提案致します。</li>
                                <li>授業スケジュールはご予定をお伺いしたうえで、ご提案いたします。</li>
                                <li>講習期は通常期とスケジュールが異なります。</li>
                            </ul>
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