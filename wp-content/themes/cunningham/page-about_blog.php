<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package cunningham
 */

get_header(); ?>
	<!-- Content -->
        <div id="content">
            <div class="container">
                <div class="onerow">
                    <div id="infobar" class="col2">
                        <?php get_template_part('content', 'infobar') ?>
                    </div>
                    <div class="col7">
                        <div class="widget-header">
                            <h1><?php the_title(); ?></h1>
                        </div>                       
                        <div>
                            <h2>Tcialブログとは？</h2>
                            <p class="blog-body"><a href="/" target="_blank">個別指導塾Tcial</a>が運営するブログです</p>
<!--                            <h2>個別指導塾Tcialとは？</h2>
                            <p class="blog-body">塾です</p>
                            <a>詳しく知る</a>
                            <h2>どんな記事があるのか？</h2>
                            <p class="blog-body">いろんな記事</p>
                            <h2>お問い合わせについて</h2>
                            <p>ご意見、ご要望等ございましたらお気軽にご相談ください。また、体験授業や講師を希望される方もお待ちしております。</p>-->
                        </div>                          
                    </div>                    
                    <?php get_sidebar(); ?>
                </div>
            </div>
	</div>
        <!-- /Content -->
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
	var nav = $('#nav');
	var home = $('#home');
	var contact = $('.contact');
    offset = nav.offset();
    $(window).scroll(function () {
    	if($(window).scrollTop() > offset.top - 78) {
    		nav.addClass('fixed');
    		home.stop().animate({'marginLeft' : '0px'}, 200);
    		contact.stop().animate({'top' : '6px'}, 200);
    		contact.addClass('fixed');
    	} else {
    		nav.removeClass('fixed');
    		home.stop().animate({'marginLeft' : '-60px'}, 200);
    		contact.removeClass('fixed');
    		contact.stop().animate({'top' : '24px'}, 200);
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
        $(".sub-menu").hide();
        $(".menu").mouseover(function(){
            $(".sub-menu").show();
        }).mouseout(function(){
            $(".sub-menu").hide();
        });
    });
});
</script>
</body>
</html>