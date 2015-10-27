<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package cunningham
 */
?>
                    <div class="col3 last">
                        <div class="onerow cf">
                            <div class="blog-grid">
                                <div class="widget-about widget-content">
                                    <p class="powered">powered by</p>
                                    <a href="/" target="_blank">
                                        <img src="<?php bloginfo('template_directory');?>/img/logo.png" class="sidebar-logo" alt="個別指導塾ティーシャル">
                                    </a>
                                    <p>横浜にある<a href="/" target="_blank">個別指導塾ティーシャル</a>が運営しています。</p>
                                    <a href="/" target="_blank">もっと詳しく</a>
                                    <a href="/contact_from_blog/">お問い合わせ</a>
                                    <p>☎045-620-0679</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="onerow cf blog-grid">
                            <div class="sbr-banner">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- blog-sidebar-250 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:250px;height:250px"
     data-ad-client="ca-pub-3257663944757805"
     data-ad-slot="2440984776"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                            </div>
                        </div>
                        
                        <div class="onerow cf">
                            <div class="blog-grid">
                                <div class="widget-header">
                                    <h3>カテゴリー</h3>
                                </div>
                                <div class="categories">
                                <ul class="post-categories">
                                <?php
                                $cats = get_terms( "category", "fields=all&get=all" );
                                foreach($cats as $cat):
                                ?>
                                    <li>
                                        <a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a>
                                    </li>
                                <?php endforeach; ?>
                                <ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="onerow" id="sidebar-newpost"> 
                            <div class="widget-header">
                                <h3>新着記事</h3>
                            </div>
                            <ul class="articles">
                                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                                <?php
                                    $cats = get_the_category();
                                    $cat = $cats[0];
                                ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="sidebar-article-img">
                                            <?php the_post_thumbnail('large'); ?>
                                            <div class="category-label <?php echo $cat->category_nicename; ?>"><?php the_category(); ?></div>
                                        </div>
                                        <div class="recomended-article-info">
                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <p class="post-date"><?php echo get_the_date(); ?></p>
                                        </div>
                                    </a>
                                </li>
                                <?php endwhile; ?> 
                            </ul>
                            <?php else :?>
                            <h5>記事はありません</h5>
                            <?php endif; ?>
                        </div>

                        <div class="onerow cf"> 
                            <div class="col12 fb">
                                <div class="widget-header">
                                    <h3>facebook</h3>
                                </div>
<div class="fb-like-box" data-href="https://www.facebook.com/tcialcom" data-height="360" data-width="780" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
                            </div>
                        </div>
                        <div class="onerow cf"> 
                            <div class="col12 twtr">
                                <div class="widget-header">
                                    <h3>twitter</h3>
                                </div>
<a class="twitter-timeline" href="https://twitter.com/Tcial315" data-widget-id="463296060354347008">@Tcial315 からのツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                            </div>
                        </div>
                        <div class="onerow cf blog-grid">
                            <div class="sbr-banner">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- blog-sidebar-250-2 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:250px;height:250px"
     data-ad-client="ca-pub-3257663944757805"
     data-ad-slot="1133116773"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                            </div>
                        </div>
                    </div>