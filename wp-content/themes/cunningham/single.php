<?php get_header(); ?>
        <!-- Content -->
	<div id="content">
            <div class="container">
                <div class="onerow">
                    <?php while(have_posts()) : the_post(); ?>
                    <div class="col2">
                        <div class="onerow">
                            <div class="col12 blog-grid">
                                <div class="widget-header">
                                    <h3>記事を書いた人</h3>
                                    <a href="team">他のライター</a>
                                </div>
                                <div id="writer-profile">
                                    <?php echo get_avatar($post->post_author); ?>
                                    <p id="writer-name"><?php the_author(); ?></p>
                                    <p id="writer-disc"><?php the_author_description(); ?></p>
                                </div>
                                <ul class="blog-keywords">
                                    <li><p>カテゴリ</p><a><?php the_category(); ?></a></li>
                                    <li><p>タグ</p><a><?php the_tags(); ?></a></li>
                                </ul>
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
                                        <a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name;?></a>
                                    </li>
                                <ul>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    </div>
                    <div class="col7">
                        <div class="blog-grid onerow" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="blog-header">
                                <h1><?php the_title(); ?></h1>
                                <div class="blog-header-info">
                                    <p><?php echo get_the_date(); ?></p>
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
                                <p><?php echo get_the_date(); ?></p>
                                <?php if(function_exists("wp_social_bookmarking_light_output_e")){wp_social_bookmarking_light_output_e();}?>
                            </div>
<!--                            <div class="blog-header-info">
                                <span class="comment-num"><?php comments_popup_link('Comment : 0', 'Comment : 1', 'Comments : %'); ?></span>
                            </div>-->
                        </div>
                        <?php endwhile; ?>
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
