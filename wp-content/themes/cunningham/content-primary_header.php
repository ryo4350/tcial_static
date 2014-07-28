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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41472504-1', 'tcial.jp');
  ga('send', 'pageview');

</script>
</head>

<body>
    <!-- Header -->
    <header>
        <!--<div class="spectrum"></div>-->
        <div id="nav-logo" class="nav-scroll">
            <h1 id="logo"><a href="/" id="logo-tcial">個別指導塾ティーシャル横浜</a></h1>
        </div>
        <nav id="nav" class="primary-nav nav-scroll" role="navigation">
            <div class="container">
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </div>
        </nav>
        <nav class="contact contact-primary">
            <ul id="contact">
                <li class="topbar-info">
                    <p class="route">横浜市神奈川区沢渡2-2第二泉ビル3F</p>
                    <p class="phone-munber">☎ 045-620-0679</p>
                    <p class="office-hour">受付時間: 13:00 - 22:00</p>
                </li>
                <li><a class="btn-flat" href="/contact/">お問い合わせ</a></li>
            </ul>
        </nav>
        <?php $slug_name = $post->post_name; ?>
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
        
        <?php elseif($slug_name == 'summer2014') :?>
        <nav id="secondary-nav">
            <ul class="container">
                <li><a class="menu" href="#smr-point">個別指導の7つのポイント</a></li>
                <li><a class="menu" href="#smr-training">個別トレーニング</a></li>
                <li><a class="menu" href="#smr-plan">受講プラン例</a></li>
                <li><a class="menu" href="#smr-campaign">キャンペーン</a></li>
                <li><a class="menu" href="#smr-summary">概要</a></li>
            </ul>
        </nav>
        <?php endif; ?>
        
<?php // get_template_part('content', 'logo'); ?>
        
    </header>
    <!-- /Header -->


    <nav id="home">
        <a href="/" class="btn-flat-icon" title="ホームに戻る">T</a>
    </nav>
