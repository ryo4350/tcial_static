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
                    <div class="col2">
                        <div class="onerow">
                            <div class="col12 blog-grid">
                                <div class="widget-header">
                                    <h3>Team</h3>
                                    <a href="<?php echo home_url('/').'team/'; ?>">もっと見る</a>
                                </div>
                                <?php $users = get_users();
                                foreach($users as $user) :?>
                                <ul class="writers">
                                    <li class="onerow">
                                        <div class="col4">
                                            <?php echo get_avatar($user->ID); ?>
                                        </div>
                                        <div class="col8 last">
                                            <h4><?php echo $user->display_name; ?></h4>
                                        </div>
                                    </li>
                                </ul>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="onerow">
                            <div class="col12 blog-grid">
                                <div class="widget-header">
                                    <h3>カテゴリー</h3>
                                </div>
                                <?php
                                $cats = get_terms( "category", "fields=all&get=all" );
                                foreach($cats as $cat):
                                ?>
                                <ul class="post-categories">
                                    <li>
                                        <a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a>
                                    </li>
                                <ul>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col7">
                        <div class="widget-header">
                            <h1><?php the_title(); ?></h1>
                        </div>                       
                        <div>
                            <h2>Tcialブログとは？</h2>
                            <p class="blog-body"><a href="/" target="_blank">個別指導塾Tcial</a>が運営するブログです</p>
                            <h2>個別指導塾Tcialとは？</h2>
                            <p class="blog-body">塾です</p>
                            <a>詳しく知る</a>
                            <h2>どんな記事があるのか？</h2>
                            <p class="blog-body">いろんな記事</p>
                            <h2>お問い合わせについて</h2>
                            <p>ご意見、ご要望等ございましたらお気軽にご相談ください。また、体験授業や講師を希望される方もお待ちしております。</p>
     
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