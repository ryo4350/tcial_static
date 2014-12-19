<?php get_template_part('content', 'primary_header'); ?>
	<!-- Content -->
<!--<div class="l-banner">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 blog-header 
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-3257663944757805"
     data-ad-slot="2251011573"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
        </div>-->
        <div id="content-blog">
            <div class="container">
                <h2>
                <?php
                    if ( is_category() ) :
                            single_cat_title();

                    elseif ( is_tag() ) :
                            single_tag_title();

                    elseif ( is_author() ) :
                            printf( __( 'Author: %s', 'cunningham' ), '<span class="vcard">' . get_the_author() . '</span>' );

                    elseif ( is_day() ) :
                            printf( __( 'Day: %s', 'cunningham' ), '<span>' . get_the_date() . '</span>' );

                    elseif ( is_month() ) :
                            printf( __( 'Month: %s', 'cunningham' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'cunningham' ) ) . '</span>' );

                    elseif ( is_year() ) :
                            printf( __( 'Year: %s', 'cunningham' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'cunningham' ) ) . '</span>' );

                    elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
                            _e( 'Asides', 'cunningham' );

                    elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
                            _e( 'Galleries', 'cunningham');

                    elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
                            _e( 'Images', 'cunningham');

                    elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
                            _e( 'Videos', 'cunningham' );

                    elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
                            _e( 'Quotes', 'cunningham' );

                    elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
                            _e( 'Links', 'cunningham' );

                    elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
                            _e( 'Statuses', 'cunningham' );

                    elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
                            _e( 'Audios', 'cunningham' );

                    elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
                            _e( 'Chats', 'cunningham' );

                    else :
                            _e( 'Archives', 'cunningham' );

                    endif;
                ?>
                </h2>
        

            <div class="onerow cf">
                <div id="infobar" class="col2">
                    <?php get_template_part('content', 'infobar') ?>
                </div>
                <ul class="col7 articles"id="tl">
                    <?php $paged = get_query_var('paged'); ?>
                    <?php query_posts("posts_per_page=12&paged=$paged"); ?>
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <?php $user = get_the_author_login(); ?>
                    <?php
                            $cat = get_the_category();
                            $cat = $cat[0];
                        ?><li>
                        <div class="blog-header cf">
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
                            <span class="category-label <?php echo $cat->category_nicename; ?>"><?php the_category($separator); ?></span>
                        </div>
                        <div class="blog-body">
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="aricle-link btn btn-flat">続きを読む</a>
                            <!--<span class="comment-num"><?php comments_popup_link('Comment : 0', 'Comment : 1', 'Comments : %'); ?></span>-->
                        </div>
                    </li>
                    <?php endwhile; ?>
                    <?php cunningham_paging_nav(); ?>
                    <?php else :?>
                        <?php get_template_part( 'content', 'none' ); ?>
                    <?php endif; ?>
                </ul>           
                <?php query_posts('posts_per_page=4'); ?>
                <?php get_sidebar(); ?>
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