<?php get_header(); ?>
	<!-- Content -->
    <div id="content">
        <div class="l-banner">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- blog-header -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-3257663944757805"
     data-ad-slot="2251011573"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
        </div>
        <div class="container">
            <div class="onerow">
                <div id="infobar" class="col2">
                    <?php get_template_part('content', 'infobar') ?>
                </div>
                <div class="col7">
                    <?php $paged = get_query_var('paged'); ?>
                    <?php query_posts("posts_per_page=12&paged=$paged"); ?>
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <?php $user = get_the_author_login(); ?>
                    <div class="blog-grid onerow">
                        <div class="blog-header">
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <span class="author">
                                <a href="<?php echo home_url('magazine/author/').$user; ?>">
                                    <?php echo get_simple_local_avatar($post->post_author); ?>
                                    <span>
                                        <?php the_author(); ?>
                                    </span>
                                </a>
                            </span>
                            <ul>
                                <li><?php echo get_the_date(); ?></li>
                                <li>カテゴリ - <?php the_category(); ?></li>
                                <li>タグ - <?php the_tags(); ?></li>
                            </ul>
                        </div>
                        <div class="article-img-tl">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <div class="category-label"><?php the_category(); ?></div>
                        </div>
                        <div class="blog-body">
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="aricle-link">続きを読む</a>
                            <!--<span class="comment-num"><?php comments_popup_link('Comment : 0', 'Comment : 1', 'Comments : %'); ?></span>-->
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php cunningham_paging_nav(); ?>
                    <?php else :?>
                        <?php get_template_part( 'content', 'none' ); ?>
                    <?php endif; ?>
                </div>           
                <?php query_posts('posts_per_page=4'); ?>
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
	var home = $('#home-blog');
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
        $cat = $("#menu-category .sub-menu");
        $cat.hide();
        $("#menu-category").mouseover(function(){
            $cat.show();
        }).mouseout(function(){
            $cat.hide();
        });
    });
});
</script>
</body>
</html>