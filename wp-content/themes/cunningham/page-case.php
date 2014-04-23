<?php get_template_part('content', 'primary_header'); ?>
    <!-- Content -->
    <div id="content">
        <section>
            <div class="container">
                <h2 class="center"></h2>
            </div>
        </section>
<!--		<section>
            <div class="container">
                <div class="onerow">
                    <a href="#shun">
                        <div class="col4 article">
                            <img src="/img/case/shun.jpg" />
                            <h2>勉強もしながらホームページを制作もする中学２年生</h2>
                        </div>
                    </a>
                    <a href="#toru">
                        <div class="col4 article">
                            <img src="/img/case/toru.jpg" />
                            <h2>大手塾よりも早いスピードで予習！難関高校を目指す中学１年生</h2>
                        </div>
                    </a>
                    <a href="#yuta">
                        <div class="col4 article last">
                            <img src="/img/case/yuta.jpg" />
                            <h2>留学から一転！大学受験に取り組み早稲田に合格</h2>
                        </div>
                    </a>
                </div>
        </section>-->
        <section>
            <div class="onerow" id="case-1">
                <div class="col9 article">
                    <div class="col2 case-info">
                        <p>中学二年</p>
                    </div>
                    <div class="col10 last case">
                        <h2>勉強もしながらホームページを制作する中学２年生</h2>
                        <p>日本のインフラが優れているのは皆さんもご存知のことでしょう。電車が時刻通りに来るのは当たり前、ラッシュ時には5分以内に電車は来るし、新幹線は他のどこの国にも負けないくらい快適で早�しとても便利です。そんな環境で育った日本人が海外へ旅行へ行った際、日本のインフラの良さを再確認する人も少なくないでしょう。日本と同率にそれともそれ以上に電車のクオリティーが高いのが韓国です。韓国人の “せっかちな国民性” ということもあって時刻通りに来るのは当たり前、外国人観光客でも比較的利用しやすいと評判です。そんな中、新幹線を通り越してここサンフランシスコではロサンゼルスまでの約600キロという長距離をなんと約30分で結ぶ「ハイパーループ」という高速移動手段の計画が進められており、世間を賑わせています。</p>
                    </div>
                </div>
                <div class="col3 article last">
                    <img src="/img/case/shun.jpg" /> 
                </div>
            </div>
            <div class="onerow" id="case-2">
                <div class="col9 article">
                    <div class="col2 case-info">
                        <p>中学二年</p>
                    </div>
                    <div class="col10 last case">
                        <h2>勉強もしながらホームページを制作する中学２年生</h2>
                        <p>日本のインフラが優れているのは皆さんもご存知のことでしょう。電車が時刻通りに来るのは当たり前、ラッシュ時には5分以内に電車は来るし、新幹線は他のどこの国にも負けないくらい快適で早�しとても便利です。そんな環境で育った日本人が海外へ旅行へ行った際、日本のインフラの良さを再確認する人も少なくないでしょう。日本と同率にそれともそれ以上に電車のクオリティーが高いのが韓国です。韓国人の “せっかちな国民性” ということもあって時刻通りに来るのは当たり前、外国人観光客でも比較的利用しやすいと評判です。そんな中、新幹線を通り越してここサンフランシスコではロサンゼルスまでの約600キロという長距離をなんと約30分で結ぶ「ハイパーループ」という高速移動手段の計画が進められており、世間を賑わせています。</p>
                    </div>
                </div>
                <div class="col3 article last">
                    <img src="/img/case/toru.jpg" /> 
                </div>
            </div>
            <div class="onerow" id="case-3">
                <div class="col9 article">
                    <div class="col2 case-info">
                        <p>中学二年</p>
                    </div>
                    <div class="col10 last case">
                        <h2>勉強もしながらホームページを制作する中学２年生</h2>
                        <p>日本のインフラが優れているのは皆さんもご存知のことでしょう。電車が時刻通りに来るのは当たり前、ラッシュ時には5分以内に電車は来るし、新幹線は他のどこの国にも負けないくらい快適で早�しとても便利です。そんな環境で育った日本人が海外へ旅行へ行った際、日本のインフラの良さを再確認する人も少なくないでしょう。日本と同率にそれともそれ以上に電車のクオリティーが高いのが韓国です。韓国人の “せっかちな国民性” ということもあって時刻通りに来るのは当たり前、外国人観光客でも比較的利用しやすいと評判です。そんな中、新幹線を通り越してここサンフランシスコではロサンゼルスまでの約600キロという長距離をなんと約30分で結ぶ「ハイパーループ」という高速移動手段の計画が進められており、世間を賑わせています。</p>
                    </div>
                </div>
                <div class="col3 article last">
                    <img src="/img/case/yuta.jpg" /> 
                </div>
            </div>
        </section>
    </div>
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
	var nav = $('#nav');
	var home = $('#home');
	var contact = $('.contact');
	var secondary = $('#secondary-case-nav');
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

    $(function(){
        $("a[href^=#]").click(function(){
                var Hash = $(this.hash);
                var HashOffset = $(Hash).offset().top - 180;
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