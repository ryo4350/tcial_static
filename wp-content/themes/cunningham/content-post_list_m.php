<?php
/**
 * @package cunningham
 */
?>
                   <ul class="post-list post-list--m post-list--hover">
                        <?php foreach($posts as $post) : setup_postdata($post)?>
                        <li class="col4 post-list--m__item">
                            <?php
                                $cats = get_the_category();
                                $cat = $cats[0];
                            ?>
                            <a href="<?php the_permalink(); ?>">
                                <div class="post-list--m__img-wrap">
                                    <?php the_post_thumbnail("large"); ?>
                                </div>
                                <div class="post-list--m__header">
                                    <span class="post-list--m__date"><?php echo get_the_date(); ?></span>
                                    <h3 class="post-list--m__title"><?php the_title(); ?></h3>
                                </div>
                            </a>
                            <span class="category-label <?php echo $cat->category_nicename; ?>"><?php the_category($separator); ?></span>
                        </li>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
