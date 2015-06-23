<?php
/**
 * @package cunningham
 */
?>

<?php $cats = get_the_category();
       $cat = $cats[0];
?>

<article class="blog-grid" id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="main">
    <div id="article__main">
        <header class="post__header">
            <h1 class="post__title"><?php the_title(); ?></h1>
            <div>
                <?php if(function_exists("wp_social_bookmarking_light_output_e")){wp_social_bookmarking_light_output_e();}?>
            </div>
        </header>
        <div class="post__img">
            <?php the_post_thumbnail(); ?>
            <span class="category-label <?php echo $cat->category_nicename; ?>"><?php the_category($separator); ?></span>
        </div>
        <div class="post__body">
            <?php the_content(); ?>
            <?php
                wp_link_pages( array(
                        'before' => '<div class="page-links">' . __( 'Pages:', 'cunningham' ),
                        'after'  => '</div>',
                ) );
            ?>
        </div>
        <div>
            <?php if(function_exists("wp_social_bookmarking_light_output_e")){wp_social_bookmarking_light_output_e();}?>
        </div>
        <aside class="post__ad--bottom">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- blog-single-bottom -->
<ins class="adsbygoogle"
 style="display:inline-block;width:336px;height:280px"
 data-ad-client="ca-pub-3257663944757805"
 data-ad-slot="8503877979"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
        </aside>

    </div>
    <div id="article__side" class="article__side">
        <p class="post__date"><?php echo get_the_date(); ?></p>
        <ul id="post__info">
            <li><?php echo get_simple_local_avatar($post->post_author, auto); ?></li>
            <li id="writer-name"><?php the_author(); ?></p></li>
            <li id="writer-desc"><?php the_author_description(); ?></p></li>
            <ul class="blog-keywords">
                <li><p>カテゴリ</p><a><?php the_category(); ?></a></li>
                <li><p>タグ</p><a><?php the_tags(); ?></a></li>
            </ul>
        </ul>
    </div>
    <?php cunningham_post_nav(); ?>
</article>