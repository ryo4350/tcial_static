<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cunningham
 */

?>
<?php get_template_part('content', 'primary_header'); ?>
	<!-- Content -->
        <div id="content">
            <div class="container-narrow">
                <div class="section">
                    <h1 class="heading thin">なんとなく始めるのではなく、<br>
                        実際に体験し、これから勉強していくイメージを固める。</h1>
                    <p class="contact-form__text">
                        我々にご興味を持っていただいてありがとうございます。<br>
                        ティーシャルでは入塾前に必ず、学習カウンセリングと体験授業を行っています。<br>
                        なんとなく始めるのではなく、実際に体験してみてこれから勉強していくイメージを固めてから入塾してほしいからです。
                    </p>
                </div>
                <div class="section">
                    <h2 class="heading thin">体験授業を受ける意味</h2>
                    <ul>
                        <li class="trial__item">
                            <h3 class="thin">塾で勉強するとはどういうことなのかわかる</h3>
                        </li>
                        <li class="trial__item">
                            <h3 class="thin">教室の雰囲気を体験することができる</h3>                      
                        </li>
                        <li class="trial__item">
                            <h3 class="thin">講師との相性を見極められる</h3>
                        </li>
                    </ul>
                </div>
                <div class="section">
                    <h2 class="heading thin">体験授業の内容と流れ</h2>
                    <ul>
                        <li class="">
                            <div class="trial__item">
                                <h3 class="thin">1.お問い合わせ</h3>
                                <p><a href="tel:0456200679">お電話（045-620-0679）</a>、もしくは下記のお問い合わせフォーム</a>から、無料体験授業ご希望の旨をお伝え下さい。</p>
                            </div>
                        </li>
                        <li class="">
                            <div class="trial__item">
                                <h3 class="thin">2.学習カウンセリング</h3>
                                <p>ご面談でお子様の成績や学習状況を確認させていただき、無料回数をどのようにお使いいだくかをご提案いたします。</p>
                            </div>
                        </li>
                        <li class="">
                            <div class="trial__item">
                                <h3 class="thin">3.体験開始</h3>
                                <p>日程と内容が決まりましたら、体験開始です。筆記用具と必要に応じて学校等で使用しているテキストをお持ち下さい。</p>
                                <div class="cf">
                                    <h4>現在の体験内容</h4>
                                    <div class="col6">
                                        <p>個別授業</p><p>80分×4回</p>
                                    </div>
                                    <div class="col6 last">
                                        <p>個別トレーニング</p><p>80分×4回</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <div class="trial__item">
                                <h3 class="thin">4.体験ご報告</h3>
                                <p>体験授業が終わりましたら、授業の様子や明らかになった課題等をご報告いたします。</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="contact-form">
                    <h2 class="heading thin">お申込みはこちらから</h2>
                    <?php while ( have_posts() ) : the_post(); ?>                        
                    <div class="cf">
                        <?php the_content(); ?>
                    </div>
                    <?php endwhile; // end of the loop. ?>
                </div>
            </div>
	</div>
        <!-- /Content -->
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/script.js"></script>
</body>
</html>