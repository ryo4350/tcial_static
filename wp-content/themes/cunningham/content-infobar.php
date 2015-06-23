<?php
/**
 * @package cunningham
 */
?>

                        <div class="onerow cf">
                            <div class="blog-grid">
                                <div class="widget-header">
                                    <h3>カテゴリー</h3>
                                </div>
                                <div class="categories cf">
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
                        
                        <div class="onerow">
                            <div class="blog-grid">
                                <div class="widget-header">
                                    <h3>ブログチーム</h3>
                                    <a href="<?php echo home_url('team/'); ?>">もっと見る</a>
                                </div>
                                <ul class="writers">
                                    <?php $users = get_users();
                                    foreach($users as $user) :?>
                                    <li class="onerow">
                                        <a href="<?php echo home_url('magazine/author/').$user->user_login; ?>">
                                            <div class="col4">
                                                <?php echo get_simple_local_avatar($user->ID); ?>
                                            </div>
                                            <div class="col8 last">
                                                <span><?php echo $user->display_name; ?></span>
                                            </div>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>