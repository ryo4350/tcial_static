<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cunningham
 */

get_template_part('content', 'primary_header'); 
?>
	<!-- Content -->
        <div id="content-blog">
            <section id="team">
                <div class="container">
                    <h2>Team Member</h2>
                    <div class="onerow">
                        <div class="col3">
                            <div class="member-wrap">
                                <img src="<?php bloginfo('template_directory');?>/img/team/ryosakamoto.jpg" class="img-rounded" />
                            </div>
                            <p class="name">Ryo Sakamoto</p>
                            <p class="subject-info">数学/国語/理科/社会</p>
                            <p class="work-info">広報/web/</p>
                        </div>
                        <div class="col3">
                            <div class="member-wrap">
                                <img src="<?php bloginfo('template_directory');?>/img/team/keitasakurai.jpg" class="img-rounded" />
                            </div>
                            <p class="name">Keita Sakurai</p>
                            <p class="subject-info">英語</p>
                            <p class="work-info">代表/経理</p>
                        </div>
                        <div class="col3">
                            <div class="member-wrap">
                                <img src="<?php bloginfo('template_directory');?>/img/team/keisukesuzuki.jpg" class="img-rounded" />
                            </div>
                            <p class="name">Keisuke Suzuki</p>
                            <p class="subject-info">国語/英語/社会</p>
                            <p class="work-info">教室代表</p>
                        </div>
                        <div class="col3 last">
                            <div class="member-wrap">
                                <img src="<?php bloginfo('template_directory');?>/img/team/michiharufukagawa.jpg" class="img-rounded" />
                            </div>
                            <p class="name">Michiharu Fukagawa</p>
                            <p class="subject-info">数学/理科</p>
                            <p class="work-info">ITソリューション</p>
                        </div>
                    </div>
                    <div class="onerow">
                        <div class="col3">
                            <div class="member-wrap">
                                <img src="<?php bloginfo('template_directory');?>/img/icon/teacher.png" class="img-rounded" />
                                <p class="name">H.A.</p>
                                <p class="subject-info">国語</p>
                                <p class="work-info">extraエキスパート講師</p>
                           </div>
                        </div>
                        <div class="col3">
                            <div class="member-wrap">
                                <img src="<?php bloginfo('template_directory');?>/img/team/arinayamazaki.jpg" class="img-rounded" />
                           </div>
                            <p class="name">Arina Yamzaki</p>
                            <p class="subject-info">数学</p>
                            <p class="work-info">スタンダード講師</p>
                        </div>
                        <div class="col3">
                            <div class="member-wrap">
                                <img src="<?php bloginfo('template_directory');?>/img/icon/teacher.png" class="img-rounded" />
                           </div>
                            <p class="name">Masayosi Kataoka</p>
                            <p class="subject-info">国語/英語</p>
                            <p class="work-info">プロフェッショナル講師</p>
                        </div>
                        <div class="col3 last">
                            <div class="member-wrap">
                                <img src="<?php bloginfo('template_directory');?>/img/team/join.png" class="img-rounded" />
                            </div>
                            <p class="name">YOU</p>
                            <p class="subject-info">どの科目でも！</p>
                            <p class="work-info">JOIN US!</p>
                        </div>
                    </div>
               </div>
            </section>
	</div>
        <!-- /Content -->
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/script.js"></script>
</body>
</html>