<?php
/**
 * @package cunningham
 */
?>
<?php get_header(); ?>
<body <?php body_class(); ?>>
    <!-- Header -->
    <header>
        <div id="header" class="header header--v">
            <h1 class="header__logo header__logo--v"><a href="/">個別指導塾ティーシャル横浜</a></h1>
            <nav id="nav" class="header__nav" role="navigation">
                <div id="toggle">
                    <a href="#">
                        <p>menu</p>
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav>
            
            <nav class="header__contact">
                <ul class="header__link">
                    <li>
                        <ul class="header__tel">
                            <li class="topbar-info topbar-info--v">
                                <p class="phone-munber">☎ 045-620-0679</p>
                                <p class="office-hour">受付時間: 14:30 - 22:00</p>
                            </li>
                        </ul>
                    </li>
                    <li><a href="/about#access"><span class="header__linktext header__acccess">アクセス</span></a></li>
                    <li><a href="/contact"><span class="header__linktext header__phone">お問い合わせ</span></a></li>
                    <li><a href="/contact"><span class="header__linktext header__pencil">無料体験</span></a></li>
                </ul>
            </nav>
            <nav class="header--mobile">
                <ul>
                    <li><a href="/about#access"><span class="header__acccess--mobile">アクセス</span></a></li>
                    <li><a href="tel:0456200679"><span class="header__phone--mobile">電話をする</span></a></li>
                    <li><a href="/contact"><span class="header__pencil--mobile">無料体験</span></a></li>
                </ul>
            </nav>
        </div>
        
        <div id="header" class="header--mini" class="nav-scroll">
            <h1 class="logo--mini"><a href="/">個別指導塾ティーシャル横浜</a></h1>
            <nav id="nav" class="primary-nav" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'mini' ) ); ?>
            </nav>
            <nav class="header__contact--mini">
                <ul class="header__link--mini">
                    <li>
                        <ul class="header__tel--mini">
                            <li class="topbar-info topbar-info--v">
                                <p class="phone-munber">☎ 045-620-0679</p>
                                <p class="office-hour">受付時間: 14:30 - 22:00</p>
                            </li>
                        </ul>
                    </li>
                    <li><a href="/about#access"><span class="header__linktext--mini header__acccess--mini">アクセス</span></a></li>
                    <li><a href="/contact"><span class="header__linktext--mini header__phone--mini">お問い合わせ</span></a></li>
                    <li><a href="/contact"><span class="header__linktext--mini header__pencil--mini">無料体験</span></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- /Header -->

    <!--<a id="home" href="/" title="ホームに戻る">T</a>-->
