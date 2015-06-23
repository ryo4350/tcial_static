<?php get_template_part('content', 'primary_header_v'); ?>
        <div class="key-visual">
            <div id="key-visual__img--lsn" class="crousel key-visual__img"></div>
            <div id="catch">
                <h1 class="catch-msg-l">
                    <span class="">個性と能力を引き出し、自信を育てる。</span>
                </h1>
                <div class="container-table">
                    <p>
                        Tcial に入会する生徒のほとんどは受験合格や成績向上といった目的を持っています。<br>
                        しかし勉強と向き合う姿勢は十人十色、難関志望校合格に向けて日々努力してきた生徒もいれば、興味が持てず勉強を避けてきた生徒もいます。
                        私たちは生徒ひとり一人に向き合い、まずはじっくり話を聞きます。生徒とのコミュニケーションの中で、ときには合格へのカリキュラムをつくることを選びますし、またあるときには立体図形の工作を通じて生徒に算数の楽しさを体験してもらうことを選択します。
                        生徒の気持ちを無視して何かを押し付けることありません。<br>
                        それは子供の大切な時間を奪うだけの行為だと知っているからです。<br>
                        押し付ける教育ではなく引き出す教育を Tcial は大切にしています。<br>
                    </p>
                </div>
            </div>
        </div>

	<!-- Content -->
	<div id="content--kv">
            <nav class="breadcrumb">
                <div class="container">
                <?php if(class_exists('WP_SiteManager_bread_crumb')){WP_SiteManager_bread_crumb::bread_crumb('home_label=top&type=string');} ?>
                </div>
            </nav>
<!--             <section id="policy">
                <div class="container-narrow">
                    <h1 class="policy__header center heading thin">指導の際に大切にしていること</h1>
                    <div>
                        <h2></h2>
                    </div>
                </div>
                <figure class="cf policy-gallary">
                    <div class="container-narrow">
                        <div class="policy-gallary__item">
                            <img src="<?php bloginfo('template_directory');?>/img/gallary/5.jpg" alt="" />
                        </div>
                        <div class="policy-gallary__item">
                            <img src="<?php bloginfo('template_directory');?>/img/gallary/11.jpg" alt="" />
                        </div>
                        <div class="policy-gallary__item">
                            <img src="<?php bloginfo('template_directory');?>/img/gallary/7.jpg" alt="" />
                        </div>
                        <div class="policy-gallary__item">
                            <img src="<?php bloginfo('template_directory');?>/img/gallary/1.jpg" alt="" />
                        </div>
                        <div class="policy-gallary__item">
                            <img src="<?php bloginfo('template_directory');?>/img/gallary/12.jpg" alt="" />
                        </div>
                        <div class="policy-gallary__item last">
                            <img src="<?php bloginfo('template_directory');?>/img/gallary/15.jpg" alt="" />
                        </div>
                    </div>
                </figure>
            </section>           -->
            <?php get_template_part('content', 'system_menu'); ?>
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
	</div>
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/script.js"></script>
</body>
</html>