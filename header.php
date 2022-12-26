<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset'); ?>">

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="email=no,telephone=no,address=no">
    <meta name="robots" content="index,follow">
    <?php if( is_home() || is_front_page() ): ?>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php elseif( is_category() ): ?>
    <meta name="description" content="<?php echo category_description(); ?>">
    <?php elseif( is_tag() ): ?>
    <meta name="description" content="<?php echo tag_description(); ?>">
    <?php elseif( is_singular() ): ?>
    <meta name="description" content="<?php echo get_the_excerpt(); ?>">
    <?php endif; ?>
    <meta name="apple-mobile-web-app-title" content="サイトタイトル">
    <!-- !ファビコン画像読み込み(サイズは32px×32px)-->
    <link rel="icon" href="<?php echo esc_url( get_theme_file_uri( 'img/favicon.png' ) ); ?>">

    <!-- !iphone用ブクマ画像(サイズは180px×180px)-->
    <!--  <link rel="apple-touch-icon" href="img/appleicon.png">-->

    <!-- ソーシャル関連-->
    <!-- !facebook Cards Meta(絶対パス) -->
    <!--
<meta property="og:type" content="website">
<meta property="og:site_name" content="サイト名">
<meta property="og:url" content="http:">
<meta property="og:title" content="サイトタイトル">
<meta property="og:description" content="サイト説明部">
<meta property="og:image" content="http://www./common/images/ogp_img.jpg">
-->
    <!-- !Twitter Cards Meta(絶対パス)-->
    <!--
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="http://">
<meta name="twitter:title" content="サイトタイトル">
<meta name="twitter:description" content="サイト説明部">
<meta name="twitter:image" content="http://www./common/images/ogp_img.jpg">
-->

    <!-- !Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-xxxxxxx"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-xxxxxxxx');
  gtag('config', 'UA-xxxxxxx-1');
</script> -->
    <?php wp_head(); ?>
</head>

<body class="<?php body_class(); ?>">
    <!-- ローディング画面 -->
    <!--
    <div id="splash">
    <div id="splash__logo"><img src="img/loading.gif" alt="" class="fadeUp"></div>
  </div>
  -->
    <div class="wrapper">
        <!-- ?  ▼ header ======================================================================================== ▼ -->
        <header class="header">
            <h1 class="header__title"><a href="<?php echo esc_url( home_url( '/')); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'img/logo.png' ) ); ?>" alt="サイトタイトル"></a></h1>
            <div class="openbtn"><span></span><span></span><span></span></div>
            <nav id="g-nav" class="gnavi">
                <div id="g-nav-list">
                    <ul class="gnavi__list">
                        <li class="gnavi__item"><a class="gnavi__link link" href="<?php echo esc_url( home_url( '/')); ?>">Home</a></li>
                        <li class="gnavi__item"><a class="gnavi__link" href="<?php echo esc_url( home_url( '/about/')); ?>">about</a></li>
                        <li class="gnavi__item"><a class="gnavi__link" href="<?php echo esc_url( home_url( '/news/')); ?>">news</a></li>
                        <li class="gnavi__item"><a class="gnavi__link" href="<?php echo esc_url( home_url( '/contact/')); ?>">contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ?  ▲ header ======================================================================================== ▲ -->