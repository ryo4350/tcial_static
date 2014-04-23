<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package cunningham
 */

get_header(); ?>
	<!-- Content -->
        <div id="content">
            <div class="container">
                <h1><?php printf( __( 'Search Results for: %s', 'cunningham' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                <div class="onerow">
                    <div class="col2">
                        <?php get_template_part('content', 'infobar') ?>
                    </div>
                    <div class="col7">
                        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                            <div class="blog-grid onerow">
                                <div class="blog-header">
                                    <h1><?php the_title(); ?></h1>
                                    <p class="blog-header-info"><?php echo get_the_date(); ?></p>
                                </div>
                                <div class="article-img-tl">
                                    <?php the_post_thumbnail(); ?>
                                    <div class="category-label"><?php the_category(); ?></div>
                                </div>
                                <div class="blog-body">
                                    <p class="first-section">ここ最近の市場動向を見てみると、ヒットしている商品やサービスに一貫した共通性が見られる。それは、どれもがユーザーや顧客に対して最もふさわしい利用体験を提供していると言う事だ。プロダクトをスペックや性能で選ぶ時代が終焉を迎え、利用した際に具体的な何を得られるかが、プロダクトの成功を左右する最も重要なファクターなってきている。それは言い換えると、商品自体にお金を払う時代が終わり、ユーザーは”経験”に価値を見いだすようになったとも言える。ハードウェアやソフトウェアも全てサービスへの変換され、全てのプロダクトがユーザーへの価値を提供するためのサービスに変わってきている。そして、優れたサービスを提供するには、おのずと優れた顧客体験を提供する必要が出てくる。言い換えるとそのプロダクトの種類や内容に関わらず、どんなものでも顧客に提供する利用体験=ユーザーエクスペリエンス (UX) こそが最重要課題になる。</p>
                                    <a href="<?php the_permalink(); ?>" class="aricle-link">続きを読む</a>
                                    <span class="comment-num"><?php comments_popup_link('Comment : 0', 'Comment : 1', 'Comments : %'); ?></span>
                                </div>
                            </div>
                            <?php endwhile;
                        else :?>
                            <?php get_template_part( 'content', 'none' ); ?>
                        <?php endif; ?>
                        <!-- pager -->
                        <?php if($wp_query -> max_num_pager > 1) : ?>
                        <div class="navigation">
                        <div class="alignleft"><?php next_posts_link('« PREV'); ?></div>
                        <div class="alignright"><?php previous_posts_link('NEXT »'); ?></div>
                        </div>
                        <?php endif; ?>
                        <!-- /pager	 -->
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