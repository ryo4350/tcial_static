<?php get_template_part('content', 'primary_header'); ?>

	<!-- Content -->
	<div id="content">
            <section id="value">
                <div class="container-narrow">
                    <h2>よくあるご質問</h2>
                    <div class="values" id="children">
                        <ul>
                            <li>
                                <h4>Q. 授業料はどれくらいですか？</h4>
                                <p>A. 講師のランクによって異なりますが、平均すると月3万円前後になることが多いです。詳しくは→料金のご案内へ。</p>
                            </li>
                            <li>
                                <h4>Q. 授業料以外に費用はかかりますか？</h4>
                                <p>A. 入会金が\10,000・設備費が\2,000/月になります。教材費は実費で頂いております。詳しくは→料金のご案内へ。</p>
                            </li>
                            <li>
                                <h4>Q. 5教科対応はできますか？</h4>
                                <p>A. もちろんできます。科目にこだわらずわからないところを質問したい、テスト前だけ理科社会の授業を受けたい等ご要望に合わせて柔軟に対応いたします。また、中学3年生向けの理科社会の少集団指導も実施しております。</p>
                            </li>
                            <li>
                                <h4>Q. 体験授業は受けられますか？</h4>
                                <p>無料体験授業を受けることができます。ティーシャルではお子様、保護者様に本当にご納得いただいてから入塾していただくために、無料で体験授業を受けることができます。体験授業の結果入塾されなくてもペナルティ等は一切ございません。</p>
                            </li>
                            <li>
                                <h4>Q. 講習費はいくらくらいが普通ですか？</h4>
                                <p>生徒にもよりますが、通常授業料の1～2倍程度です。教科1つにつき4〜6回程度の授業が復習には必要です。そのため、8回〜12回コースが一番受講生が多くなっています。目標達成プランについては、ご希望科目1つにつき1〜2回のご受講がオススメです。</p>
                            </li>
                            <li>
                                <h4>Q. 難関学校への合格実績が豊富な、ベテランの先生はいますか？</h4>
                                <p>Tcialでは代表の桜井が予備校で教鞭をとっており、その人脈から大手予備校で指導している”エキスパート講師”を招へいしています。授業料が高額になることと、多忙な講師のスケジュールを押さえるためにお早めのお申し込みが必要という点にご注意ください。</p>
                            </li>
                            <li>
                                <h4>Q. 先生を選ぶことはできますか？</h4>
                                <p>もちろんできます。ティーシャルの講師には3つのランクがあります。また講師の指導実績やプロフィールを最大限公開しております。お子様の目標や正確にピッタリの先生をお選びください。</p>
                            </li>
                            <li>
                                <h4>Q. 体験授業は受けられますか？</h4>
                                <p>無料体験授業を受けることができます。ティーシャルではお子様、保護者様に本当にご納得いただいてから入塾していただくために、無料で体験授業を受けることができます。体験授業の結果入塾されなくてもペナルティ等は一切ございません。</p>
                            </li>
                        </ul>
                    </div>
                    <p class="center">もっとたくさんの質問に答えられるよう質問の追加を予定しています。<br />何か聞きたいことがありましたらお気軽にお問い合わせください。</p>
                </div>
            </section>                
	</div>

<?php get_footer(); ?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.gmap3.js"></script>
<script type="text/javascript">
$(function() {
	var nav = $('#nav');
	var home = $('#home');
	var contact = $('.contact');
	var secondary = $('#secondary-nav');
    offset = nav.offset();
    $(window).scroll(function () {
    	if($(window).scrollTop() > offset.top - 78) {
    		nav.addClass('fixed');
    		home.stop().animate({'marginLeft' : '0px'}, 200);
    		contact.stop().animate({'top' : '6px'}, 200);
    		contact.addClass('fixed');
    		secondary.addClass('fixed-secondary');
    	} else {
    		nav.removeClass('fixed');
    		home.stop().animate({'marginLeft' : '-60px'}, 200);
    		contact.removeClass('fixed');
    		contact.stop().animate({'top' : '24px'}, 200);
    		secondary.removeClass('fixed-secondary');
		}
    });
});
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
                        "http://gmap3.net/skin/gmap/magicshow.png",
                        new google.maps.Size(32, 37, "px", "px")
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
	var $btn = $('#toPageTop a');
	var isHidden = true;

	// デフォルトは非表示
	$btn.hide();

	$(window).scroll(function () {
		if( $(this).scrollTop() > 300 ) {
			if( isHidden ) {
				$btn.stop(true,true).fadeIn();
				isHidden = false;
			}
		} else {
			if( !isHidden ) {
				$btn.stop(true,true).fadeOut();
				isHidden = true;
			}
		}
	});

	// クリックイベントの登録
	$btn.click(function(){
		// ページトップへスクロール
		$('html, body').animate({
				'scrollTop': 0
			}, 900);
		// デフォルトイベントのキャンセル
		return false;
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
});

</script>

</body>
</html>