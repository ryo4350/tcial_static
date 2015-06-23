<?php get_template_part('content', 'primary_header'); ?>
    <div id="key-visual">
        <div id="mv-wrap">
            <div class="filter"></div>
        </div>
        <div id="main-text">
            <div id="catch">
                <h1 class="catch-msg-l"><span class="catch-en">Prnciple</span><br>
                    <span class="">教育理念</span>
                </h1>
            </div>
        </div>
    </div>
	
        <div id="top-content">
            <section id="principle">
                <div class="container-table">
                    <h2 class="heading thin center">prnciple</h2>
                    <h3 class="lead-principle">学ぶことは喜びである</h3>
                    <p>何かを知る・できるようになるということは本来、人にとって最も根源的な喜びの一つです。</p>
                    <p>OECDの調査によると日本の小学生は算数の学力は上であるにもかかわらず「算数が好きか？」という質問に対し「好き」と答える生徒の割合は最低クラスという結果が出ています。まわりを見渡してみても、勉強がおもしろいという子供はごく僅か。むしろ勉強が好きというとびっくりされてしまうのではないでしょうか。</p>
                    <h3 class="lead-principle">学び続ける時代</h3>
                    <p>
                        インターネットをはじめとする技術革新が進み、私たちの生活はここ20年で大きく変わり、今なお変わり続けています。
                        技術は日進月歩で
                    </p>
                    <h3 class="lead-principle">学ぶはもっとおもしろい！</h3>
                    <p>学ぶことのおもしろさを伝えることが私たちの使命です。</p>
                </div>
            </section>
	</div>

<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
$(function() {
        var header = $('#header');
	var nav = $('#nav.primary-nav');
	var home = $('#home');
        nav.removeClass('nav-scroll');
        header.removeClass('nav-scroll');
    $(window).scroll(function () {
        if($(window).scrollTop() > 360){
            nav.addClass('fixed');
            nav.addClass('nav-scroll');
        } else if($(window).scrollTop() > 4) {
            nav.addClass('fixed');
            nav.removeClass('nav-scroll');
            home.stop().animate({'marginLeft' : '0px'}, 200);
        }  else {
            nav.removeClass('fixed');
            home.stop().animate({'marginLeft' : '-60px'}, 200);
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

    $(function(){
        $cat = $("#menu-category .sub-menu");
        $cat.hide();
        $("#menu-category").mouseover(function(){
            $cat.show();
        }).mouseout(function(){
            $cat.hide();
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