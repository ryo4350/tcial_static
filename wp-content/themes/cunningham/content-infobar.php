<?php
/**
 * @package cunningham
 */
?>

                        <div class="onerow">
                            <div class="col12 blog-grid">
                                <div class="widget-header">
                                    <h3>Team</h3>
                                    <a href="<?php echo home_url('team/'); ?>">もっと見る</a>
                                </div>
                                <?php $users = get_users();
                                foreach($users as $user) :?>
                                <ul class="writers">
                                    <li class="onerow">
                                        <a href="<?php echo home_url('author/').$user->user_login; ?>">
                                            <div class="col4">
                                                <?php echo get_avatar($user->ID); ?>
                                            </div>
                                            <div class="col8 last">
                                                <h4><?php echo $user->display_name; ?></h4>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <?php endforeach; ?>
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
                                        <a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a>
                                    </li>
                                <ul>
                                <?php endforeach; ?>
                            </div>
                        </div>