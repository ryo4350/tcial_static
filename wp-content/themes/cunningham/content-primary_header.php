<?php
/**
 * @package cunningham
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Lily+Script+One' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<?php wp_head(); ?>

</head>

<body>
    <div class="spectrum"></div>
    <!-- Header -->
    <header>
        <div id="header">
            <div class="container">
                <h1><a href="/" id="logo-tcial">個別指導塾ティーシャル</a></h1>
                <h2 id="top-discription">ようこそ！横浜駅から徒歩10分にある個別指導塾ティーシャルのホームページです。</h2>
            </div>
        </div>
        
        <nav id="nav" role="navigation">
            <div class="container">
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>                    
            </div>
            <?php
            $slug_name = $post->post_name; ?>
                <?php if($slug_name == 'lesson') :?>
                <nav id="secondary-nav">
                    <ul class="container">
                        <li><a class="menu" href="#features-person">個別指導力 = ?</a></li>
                        <li><a class="menu" href="#features-psychology">９つのアプローチ</a></li>
                        <li><a class="menu" href="#features-wb">ホワイトボードを使った授業</a></li>
                        <li><a class="menu" href="#features-fee">授業料</a></li>
                        <!--<li><a class="menu" href="#features-entry">入会までの流れ</a></li>-->
                    </ul>
                </nav>
                <?php elseif($slug_name == 'about') :?>
                <nav id="secondary-nav">
                    <ul class="container">
                        <li><a class="menu" href="#activity">私たちの活動</a></li>
                        <li><a class="menu" href="#value">私たちの考え</a></li>
                        <li><a class="menu" href="#team">チームメンバー</a></li>
                        <li><a class="menu" href="#access">アクセス</a></li>
                    </ul>
                </nav>
                <?php elseif($slug_name == 'circle') :?>
                <nav id="secondary-nav">
                    <ul class="container">
                        <li><a class="menu" href="#circle-value">サークルとは？</a></li>
                        <li><a class="menu" href="#circle-content">サークルコンテンツ</a></li>
                        <li><a class="menu" href="#circle-fee">料金</a></li>
                    </ul>
                </nav>
                <?php endif; ?>
        </nav>
        
    </header>
    <!-- /Header -->

    <nav class="contact" id="contact">
        <ul>
            <li>
                <p class="phone-munber">☎045-620-0679</p>
                <p class="office-hour">営業時間 13:00-22:00(日曜定休日)</p>
            </li>
<!--            <li><a class="btn-flat-icon" id="fb-icon" href="https://www.facebook.com/tcialcom" target="_blank">f</a></li>
            <li><a class="btn-flat-icon" id="tw-icon" href="/twitter" target="_blank">t</a></li>-->
            <li><a class="btn-flat" href="/contact/">無料体験</a></li>
            <li><a class="btn-flat" href="/contact/">お問い合わせ</a></li>
        </ul>
    </nav>

    <nav id="home">
        <a href="/" class="btn-flat-icon">T</a>
    </nav>
