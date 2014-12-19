<?php get_template_part('content', 'primary_header'); ?>
	<!-- Content -->
	<div id="content">
            <section id="activity">
                <div class="container-narrow">
                    <h2>私たちの活動</h2>
                    <div class="onerow">
                        <ul>
                            <li class="col6">
                                <a href="/lesson/">
                                    <img src="<?php bloginfo('template_directory');?>/img/group.jpg">
                                    <span>個別指導</span>
                                </a>
                            </li>
                            <li class="col6 last">
                                <a href="/circle/">
                                    <img src="<?php bloginfo('template_directory');?>/img/circle.jpg">
                                    <span>サークル</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="value">                    
                <div class="container-narrow">
                    <h2>私たちの考え</h2>
                    <div class="values" id="company">
                        <ul>
                            <li>
                                <h3><span>1.</span> １人ひとりの個性と能力を生かします</h3>
                            </li>
                            <li>
                                <h3><span>2.</span> クリエイティブな発想とユーモアを大切にします</h3>
                            </li>
                            <li>
                                <h3><span>3.</span> 私たち自身もともに学び続けます</h3>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
                
            <section id="team">
                <div class="container">
                    <h2>Team Member</h2>
                    <div class="onerow">
                        <div class="col3">
                            <div class="member-wrap">
                                <img src="<?php bloginfo('template_directory');?>/img/team/ryosakamoto.jpg" class="img-rounded" />
                                <p class="name">Ryo Sakamoto</p>
                                <h3>坂本 諒</h3>
                                <p class="subject-info">数学/国語/理科/社会</p>
                                <p class="work-info">広報/web/</p>
                            </div>                            
                        </div>
                        <div class="col3">
                            <div class="member-wrap">
                                <img src="<?php bloginfo('template_directory');?>/img/team/keitasakurai.jpg" class="img-rounded" />
                                <p class="name">Keita Sakurai</p>
                                <h3>櫻井 啓太</h3>
                                <p class="subject-info">英語</p>
                                <p class="work-info">代表/経理</p>
                            </div>
                        </div>
                        <div class="col3">
                            <div class="member-wrap">
                                <img src="<?php bloginfo('template_directory');?>/img/team/keisukesuzuki.jpg" class="img-rounded" />
                                <p class="name">Keisuke Suzuki</p>
                                <h3>鈴木 啓祐</h3>
                                <p class="subject-info">国語/英語/社会</p>
                                <p class="work-info">教室代表</p>
                            </div>
                        </div>
                        <div class="col3 last">
                            <div class="member-wrap">
                                <img src="<?php bloginfo('template_directory');?>/img/team/michiharufukagawa.jpg" class="img-rounded" />
                                <p class="name">Michiharu Fukagawa</p>
                                <h3>深川 道陽</h3>
                                <p class="subject-info">数学/理科</p>
                                <p class="work-info">ITソリューション</p>
                            </div>
                        </div>
                    </div>
                    <div class="onerow">
                        <div class="col3">
                            <div class="member-wrap">
                                <img src="<?php bloginfo('template_directory');?>/img/icon/teacher.png" class="img-rounded" />
                                <p class="name">H.A.</p>
                                <h3>A. O.</h3>
                                <p class="subject-info">国語</p>
                                <p class="work-info">講師</p>
                           </div>
                        </div>
                        <div class="col3">
                            <div class="member-wrap">
                                <img src="<?php bloginfo('template_directory');?>/img/team/arinayamazaki.jpg" class="img-rounded" />
                                <p class="name">Arina Yamzaki</p>
                                <h3>山崎 有菜</h3>
                                <p class="subject-info">数学</p>
                                <p class="work-info">講師</p>
                            </div>
                        </div>
                        <div class="col3">
                            <div class="member-wrap">
                                <img src="<?php bloginfo('template_directory');?>/img/team/masayoshikataoka.jpg" class="img-rounded" />
                                <p class="name">Masayosi Kataoka</p>
                                <h3>片岡 正義</h3>
                                <p class="subject-info">国語/英語</p>
                                <p class="work-info">講師</p>
                           </div>
                        </div>
                        <div class="col3 last">
                            <a href="/recruite" class="member-wrap">
                                <img src="<?php bloginfo('template_directory');?>/img/team/join.png" class="img-rounded" />
                                <p class="name">YOU</p>
                                <p class="subject-info">どの科目でも！</p>
                                <p class="work-info">JOIN US!</p>
                            </a>
                        </div>
                    </div>
               </div>
            </section>
            <div id="access">
                <div id="addrress">
                    <h2>ACCESS</h2>
                    <address>                        
                        <p>〒221-0844<br />神奈川県横浜市神奈川区沢渡2-2 第二泉ビル3F</p>
                    </address>
                    <ul>
                        <li>横浜駅から徒歩10分</li>
                        <li>東急東横線反町駅から徒歩10分</li>
                        <li>横浜市営地下鉄三ッ沢下町から徒歩15分</li>
                    </ul> 
                </div>
                <div id="gmap"></div>
            </div>
	</div>

<?php get_footer(); ?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/script.js"></script>
<script type="text/javascript" src="/js/jquery.gmap3.js"></script>
<script type="text/javascript">
$(function(){
	// Googleマップの埋め込み
	var gmap = $("#gmap").gmap3({
            map:{
                options:{
                    // 初期表示位置の指定
                    center: [35.471132, 139.618554],//緯度経度
                    zoom: 16,              // ズームレベル

                    // 各コントロールの表示／非表示
                    navigationControl: true,
                    scrollwheel: false,
                    mapTypeControlOptions: {
                        mapTypeIds: "style1"
                    }
                }
            },
            
            styledmaptype:{
                id: "style",
                styles: [
                    {
                        featureType: "all",
                        elementType: "all",
                        stylers: [
                            { hue: '#f39700' },
                            { lightness: 12 },
                            { saturation: -10 },
                            { gamma: .7 }			
                        ]
                    }
                ],
                callback: function(){
                    $(this).gmap3("get").setMapTypeId("style");
                }
            },

            // マーカーの設置
            marker: {
                address: '〒221-0844 神奈川県横浜市神奈川区沢渡2-2 第二泉ビル3F',
                options: {
                    icon: new google.maps.MarkerImage(
                        "<?php bloginfo('template_directory');?>/img/symbol_new_0.png",
                        new google.maps.Size(50, 54, "px", "px")
                    )
                }
            }
	}).data('gmap');

	// カスタムマップタイプを設定
	var myStyledMapType = new google.maps.StyledMapType(
		[
			{
				featureType: "all",
				elementType: "all",
				stylers: [
					{ hue: '#f39700' },
					{ lightness: 12 },
					{ saturation: -10 },
					{ gamma: .7 }
				]
			}
		]
	);
});

</script>

</body>
</html>