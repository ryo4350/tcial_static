<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package cunningham
 */
?>
                    <div class="col3 last widgets">
                        <div class="onerow"> 
                            <div class="col12 blog-grid">
                                <div class="widget-header">
                                    <h3>Tcialとは</h3>
                                </div>
                                <div class="widget-about widget-content">
                                    <p>横浜に拠点を置く個別指導塾</p>
                                    <a href="/" target="_blank">もっと詳しく</a>
                                    <a href="/contact_from_blog/">お問い合わせ</a>
                                    <p>045-620-0679</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="onerow"> 
                            <div class="col12">
                                <div class="widget-header">
                                    <h3>新着記事</h3>
                                </div>
                                <ul>
                                    <?php query_posts('posts_per_page=4'); ?>
                                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                                    <li class="onerow blog-grid">
                                        <div class="sidebar-article-img">
                                            <?php the_post_thumbnail(); ?>
                                            <div class="category-label"><?php the_category(); ?></div>
                                        </div>
                                        <div class="recomended-article-info">
                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <p class="post-date"><a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a></p>
                                        </div>
                                    </li>
                                    <?php endwhile; ?> 
                                </ul>
                                <?php else :?>
                                <h5>記事はありません</h5>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="onerow"> 
                            <div class="col12">
                                <div class="widget-header">
                                    <h3>facebook</h3>
                                </div>
<div class="fb-like-box" data-href="https://www.facebook.com/tcialcom" data-height="580" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
                            </div>
                        </div>
                        <div class="onerow"> 
                            <div class="col12">
                                <div class="widget-header">
                                    <h3>twitter</h3>
                                </div>
<a class="twitter-timeline" href="https://twitter.com/Tcial315" data-widget-id="463296060354347008">@Tcial315 からのツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                            </div>
                        </div>
                    </div>