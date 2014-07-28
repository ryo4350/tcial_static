<?php get_header(); ?>
        <!-- Content -->
	<div id="content">
            <div class="container">
                <div class="breadcrumb">
                    <?php if(class_exists('WP_SiteManager_bread_crumb')){WP_SiteManager_bread_crumb::bread_crumb('home_label=top&type=string');} ?>
                </div>
                <div class="onerow">
                    <div class="col9">
                        <div class="onerow">
                            <?php while(have_posts()) : the_post(); ?>
                            <div class="blog-grid" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div id="article-main">
                                    <div class="blog-header">
                                        <h1><?php the_title(); ?></h1>
                                        <div class="blog-header-info">
                                            <?php if(function_exists("wp_social_bookmarking_light_output_e")){wp_social_bookmarking_light_output_e();}?>
                                        </div>
                                    </div>
                                    <div class="article-img">
                                        <?php the_post_thumbnail(); ?>
                                        <div class="category-label"><?php the_category(); ?></div>
                                    </div>
                                    <div class="blog-body">
                                        <p><?php the_content(); ?></p>
                                    </div>
                                    <div class="blog-header-info">
                                        <?php if(function_exists("wp_social_bookmarking_light_output_e")){wp_social_bookmarking_light_output_e();}?>
                                    </div>
        <!--                            <div class="blog-header-info">
                                        <span class="comment-num"><?php comments_popup_link('Comment : 0', 'Comment : 1', 'Comments : %'); ?></span>
                                    </div>-->
                                </div>
                                <div id="article-side" class="article-side">
                                    <p class="single-post-date"><?php echo get_the_date(); ?></p>
                                    <ul id="single-post-info">
                                        <li><?php echo get_simple_local_avatar($post->post_author); ?></li>
                                        <li id="writer-name"><?php the_author(); ?></p></li>
                                        <li id="writer-desc"><?php the_author_description(); ?></p></li>
                                        <ul class="blog-keywords">
                                            <li><p>カテゴリ</p><a><?php the_category(); ?></a></li>
                                            <li><p>タグ</p><a><?php the_tags(); ?></a></li>
                                        </ul>
                                    </ul>
                                </div>
                                <?php cunningham_post_nav(); ?>
                            </div>
                            <?php endwhile; ?>
                            <div class="recommend-wrap cf">
                                <h3>新着記事</h3>
                                <ul>
                                <?php query_posts('posts_per_page=4'); ?>
                                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                                    <li class="col3 blog-grid">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="front-article-img">
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                            <div class="recomended-article-info">
                                                <h4><?php the_title(); ?></h4>
                                                <p class="post-date"><?php echo get_the_date(); ?></p>
                                            </div>
                                        </a>
                                        <div class="category-label"><?php the_category(); ?></div>
                                    </li>
                                    <?php endwhile;
                                 else :?>
                                    <p>記事はありません</p>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
	</div>
        <!-- Content -->
<?php get_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
	var nav = $('#nav');
	var home = $('#home-blog');
	var contact = $('.contact');
	var infobar = $('#infobar');
        var side = $('#article-side');
        var main = $('#article-main');
        var nav_offset = nav.offset();
        var main_offset = main.offset();
    $(window).scroll(function () {
    	if($(window).scrollTop() > nav_offset.top) {
    		nav.addClass('fixed');
                infobar.addClass('fixed');
    		home.stop().animate({'marginLeft' : '0px'}, 200);
    		contact.stop().animate({'top' : '6px'}, 200);
    		contact.addClass('fixed');
    	} else {
    		nav.removeClass('fixed');
    		home.stop().animate({'marginLeft' : '-60px'}, 200);
    		contact.removeClass('fixed');
    		contact.stop().animate({'top' : '24px'}, 200);
	}
   	if($(window).scrollTop() < main_offset.top - 50) {
                side.removeClass('fixed-article-side');
                side.removeClass('fixed-bottom-article-side');
        } else if($(window).scrollTop() > main_offset.top + main.height() - side.height()){ 
                side.removeClass('fixed-article-side');
                side.addClass('fixed-bottom-article-side');        
        } else {
                side.removeClass('fixed-bottom-article-side');
                side.addClass('fixed-article-side');        
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
