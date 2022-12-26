<!--
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

これはWordPressテーマ作成の為のテンプレートメモです。

■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
-->

事前準備
Local by Flywheelを起動、WordPressテスト用を作成
テスト用フォルダのthemes内にhtml/css類をまとめていれる

/Local Sites/test/app/public/wp-content/themes/



ホストを設定
ターミナルを起動

sudo vi /private/etc/hosts

pw入力

i を入力・・・一番下に『– INSERT –』と表示

IPアドレス＋半角スペース＋ホスト名（ドメイン名）を入力

入力が終わったら『 esc 』キーを押す。
その後に『:wq 』と入力すれば設定が保存。


<!--
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
手順①
テーマフォルダーの作成
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
-->

index.php(index.htmlをリネーム)
style.css(テーマ定義の為フォルダ直下に入れる)
imgフォルダ
cssフォルダ
jsフォルダ

以下２ファイルはテンプレートをそのまま使用
404.php
functions.php


header.php
footer.php
sidebar.php
page.php（固定ページ用）
home.php（固定ページをホームページにしている場合の投稿一覧ページ）
single.php（個別固定ページ）


<!--
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
手順②
style.cssを編集
@charset "utf-8";直下に以下を入れる（テーマ認識の為の記述）
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
-->
style.css

/*
Theme Name: テーマネーム
Author: 作者
Description: テーマ説明
Versio: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/qp1-2.0.html
*/



screenshot.jpg
テーマのスクショ

<!--
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
手順③
index.phpを編集
パスがすべて切れるので更新する
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
-->

◆◆ point.1 ◆◆
<html lang="ja">↓差し替え
<html <?php language_attributes(); ?>>


◆◆ point.2 ◆◆
<meta charset="UTF-8">↓差し替え
<meta charset="<?php bloginfo( 'charset'); ?>">


◆◆ point.3 ◆◆
<title></title>タグを消す(タイトルはWordPressで登録)
<link>タグを消すスタイルシートはfunctions.phpで読み込み

functions.phpを開く
my_scripts部分のcss読み込み部分を変更する(パスとファイル名を変更)

◆◆ point.4 ◆◆
</head>の上に↓を追記
<?php wp_head(); ?>


◆◆ point.5 ◆◆

<body>↓

  <body class="<?php body_class(); ?>">


    ◆◆ point.6 ◆◆
    <!--  aタグのリンク記述-->
    <a href="index.html"></a>
    HOMEページの場合
    href="<?php echo esc_url( home_url( '/')); ?>"

    ABOUTのページの場合
    href="<?php echo esc_url( home_url( '/about/')); ?>"

    htmlページの場合（例 テーマの中のlognoteフォルダ）
    href="<?php echo esc_url( home_url( '/wp-content/themes/lognote/topics/detail-1.html')); ?>">


    html内のリンク修正
    href="..\digest\index.htm"
    href="/digest/index.html"

    topへもどる
    <a href="<?php echo esc_url( home_url( '#top')); ?>">このページの上へ</a>

    ◆◆ point.7 ◆◆
    <!--imgのパス-->
    <img src="images/logo.png" alt="">

    srcを以下に変更
    src="<?php echo esc_url( get_theme_file_uri( 'images/logo.png' ) ); ?>"

    src="<?php echo esc_url( get_theme_file_uri( '
    ' ) ); ?>"


    投稿記事に画像を入れるパス
    src="/wp-content/themes/mouse/uploads/top.jpg"


    ◆◆ point.8 ◆◆
  </body>の上に↓を入れる
  <?php wp_footer(); ?>

  ここまでで黒いメニューバーが表示されてCSSが反映されていればOK

  <!--
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
手順④
index.phpを分割
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
-->

  index.php内
  ヘッダー部分をheader.phpへ移植
  アサイド部分をsidebar.phpへ移植
  フッター部分をfooter.phpへ移植


  index.php内の移植したそれぞれの箇所に以下を記述
  <?php get_header(); ?>
  <?php get_sidebar(); ?>
  <?php get_footer(); ?>




  <!--
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
手順⑤
index.phpを編集（投稿一覧ページ仕様に変更）
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
-->

  <main>内の記事投稿部分に以下を記述

    <?php if( have_posts() )://もし投稿が１件以上あったら?>
    <?php while ( have_posts() )://投稿の表示条件を満たす間は繰り返す ?>
    <?php the_post();//データ1件を取り出して渡す ?>


    <!-- ▼ 投稿 : 開始-->
    <article <?php post_class(); ?>>

      <!--  サムネイル画像の設定  -->
      <div class="">
        <a href="<?php the_permalink(); ?>">
          <?php if( has_post_thumbnail() ): //もしアイキャッチ画像の設定があれば ?>
          <?php the_post_thumbnail(); ?>
          <?php else: //もしアイキャッチ画像の設定がなかったら ?>
          <img src="<?php echo esc_url( get_theme_file_uri('images/img-default.png')); ?>" alt="">
          <?php endif; //条件分岐終了 ?>
        </a>
      </div>

      <div class="hentry-content">
        <header class="entry-header">

          <!-- 投稿日時表示部分 -->
          <div class="entry-meta">
            <a href="<?php the_permalink(); ?>">
              <time class="entry-date published">
                <?php the_time( 'Y年n月j日' ); ?>
              </time>
            </a>
          </div>

          <!-- 記事のタイトル表示部分 -->
          <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>

        </header>

        <!-- 記事の中身抜粋部分 -->
        <div class="entry-content">
          <?php the_excerpt(); ?>
        </div>

        <!-- カテゴリー表示部分 -->
        <footer class="entry-footer">
          <span class="cat-tags-links">
            <span class="cat-links">
              <?php the_category( '&nbsp;' ); ?>
            </span>
            <?php the_tags( '<span class="tags-links">' , '&nbsp;', '</span>'); ?>
          </span>
        </footer>
      </div>
    </article>
    <!-- ▲ 投稿 : 終了-->

    <?php endwhile; //投稿ループ終了?>

    <!--▼ ページネーション : 開始-->
    <?php the_posts_pagination(); ?>
    <!--▲ ページネーション : 終了-->

    <?php else://もし表示すべき投稿がなかったら ?>
    <p>あてはまる情報はまだありません。</p>
    <?php endif;//条件分岐終了?>




    <!--
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
手順⑥
WordPressの設定（テーマの変更）
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
-->

    外観→テーマ 作成したテーマを選択




    <!--
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
手順⑦
WordPressの設定（プラグインのインストール）
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
-->
    Classic Editor
    WP Multibyte Patch
    All-in-One WP Migration
    all-in-one-wp-migration-file-extension.zip
    ↑zipファイルからインストール（インポート容量を増やす）



    <!--
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
手順⑧
WordPressの設定（投稿の設定）
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
-->
    →カテゴリー
    uncategorizedをリネーム
    スラッグは消す

    複数カテゴリーがある場合は新規追加する




    <!--
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
手順⑨
WordPressの設定（固定ページの設定）
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
-->
    新規追加








    <!--
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
手順⑩
WordPressの設定（設定の設定）
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
-->
    →一般
    サイトのタイトル･･･｢サイト名｣
    キャッチフレーズ･･･｢メタディスクリプション｣
    タイムゾーン･･･｢東京｣

    ホームページの表示

    →パーマリンク設定
    数字ベース




    <!--
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
手順13
single.phpの設定（投稿ページ）
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
-->

    パンくず

    <!--パンくず-->
    <ul class="breadcrumb" id="siteroot">
      <?php mytheme_breadcrumb(); ?>
    </ul>
    <!--/パンくず-->






    <!--cssに記述する（パンくず用css）-->


    /*■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

    WordPress化 追加分

    ■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■*/

    /*
    ========================================
    共通設定
    ========================================
    */
    .flex {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    }

    th {
    padding-top: 15px;
    text-align: left;
    }

    /*
    ========================================
    ナビ
    ========================================
    */
    #navi2 {
    display: flex;
    list-style-type: none;
    padding-left: 0;
    text-align: center;
    position: relative;
    }

    #navi2 li {
    color: #FFFFFF;
    text-decoration: none;
    padding-left: 8px;
    padding-right: 8px;
    }

    #navi2 li + li:after {
    position: absolute;
    display: block;
    content: "";
    top: 50%;
    height: 30px;
    margin-top: -14px;
    margin-left: -10px;
    border-right: 1px solid #333;
    }

    #navi2 li a {
    display: block;
    color: #333;
    height: 33px;
    /* font-size: 14px;*/
    font-size: 12px;
    font-weight: bolder;
    width: 140px;
    text-decoration: none;
    line-height: 2.5;
    }

    #navi2 li a:hover {
    background-image: url(../img/navi.jpg);
    background-repeat: no-repeat;
    background-position: -10px 0px;
    color: #FFFFFF;
    }

    /*該当ページ中ナビの色を変える*/
    .current-menu-item {
    background: url(../img/navi.jpg);
    background-position: 0px 0px;
    background-repeat: no-repeat;
    }

    .current-menu-item a {
    color: #FFFFFF !important;
    }


    /*
    ========================================
    パンくず
    ========================================
    */

    .breadcrumb {
    margin: 0;
    padding: 0;
    list-style: none;
    }

    .breadcrumb li {
    display: inline;
    /*横に並ぶように*/
    list-style: none;
    font-weight: bold;
    /*太字*/
    }

    .breadcrumb li:after {
    /* >を表示*/
    content: '>';
    padding: 0 0.5rem;
    }

    .breadcrumb li:last-child:after {
    content: '';
    }

    .breadcrumb li a {
    text-decoration: none;
    }

    .breadcrumb li a:hover {
    text-decoration: underline;
    }





    <!--
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
手順13
ナビの設定
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
-->

    外観→メニュー→メニューを作成
    メニュー名：global
    メニュー内容を変更
    メニュー設定のグローバルナビゲーションにチェックを入れる




    <!--
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
手順13
データの移行（All-in-One WP Migration）
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
-->
    testデータ
    エクスポート先 → ファイル → ダウンロード

    移行先
    インポート → エキスポートしたファイルをドラッグ
