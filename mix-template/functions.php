<?php
//コンテンツ幅をセット（アサイド含まない幅、コンテンツの幅を定義するだけ）
if ( ! isset( $content_width)) {
  $content_width = 1366;
}

function custom_theme_setup() {
  //head内にフィードリンクを出力
  add_theme_support( 'automatic_feed_links');

  //タイトルタグを動的に出力
  add_theme_support( 'title-tag' );

  //ブロックエディター用のCSSを有効化
  add_theme_support('wp-block-styles');

  //埋め込みコンテンツ（youtube等）をレスポンシブ対応に
  add_theme_support( 'responsive-embeds');

  //アイキャッチ画像を有効化
  add_theme_support( 'post-thumbnails' );
  //アイキャッチ画像のサイズ指定
  set_post_thumbnail_size(100, 83, false);

  // 固定ページで「抜粋」を有効化
  add_post_type_support('page', 'excerpt');

  // カテゴリーとタグのmeta descriptionからpタグを除去
  remove_filter('term_description','wpautop');

  //カスタムメニュー有効化、メニューの位置を設定
  register_nav_menus(
    array(
      'globalnav' => 'グローバルナビゲーション',
    )
  );
}
add_action('after_setup_theme','custom_theme_setup');



//タイトル＋キャッチフレーズにならないように
function remove_tagline($title) {
  if ( isset($title['tagline']) ) {
    unset( $title['tagline'] );
  }
  return $title;
}
add_filter( 'document_title_parts', 'remove_tagline' );


// JS・CSSファイルを読み込む
function enqueue_scripts()
{
    // CSS
    wp_enqueue_style('style-css', get_stylesheet_directory_uri() . '/css/style.css', array(), '', 'all');
    // JS
    wp_enqueue_script('slick-js', get_stylesheet_directory_uri() . '/js/slick.min.js', array( ), '', true);
    wp_enqueue_script('common-js', get_stylesheet_directory_uri() . '/js/common.js', array( ), '', true);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

//ウィジェットエリアの登録
function custom_widget_register() {
  register_sidebar( array(
    'name'             => 'サイドバーウィジェットエリア',
    'id'               => 'sidebar-widget',
    'description'      => 'ブログページのサイドバーに表示されます',
    'before_widget'    => '<div id="%1$s" class="c-widget %2$s">',
    'after_widget'     => '</div>',
    'before_title'     => '<h2 class="c-widget_title">',
    'after_title'      =>'</h2>',
  ));
}
add_action( 'widgets_init','custom_widget_register');


//パンくずリストの設置
function mytheme_breadcrumb() {
  echo '<li><a href="'.get_bloginfo('url').'" >ホーム</a></li>';

  //投稿記事ページとカテゴリーページでの、カテゴリーの階層を表示
  $cats = '';
  $cat_id = '';
  if ( is_single() ) {
    $cats = get_the_category();
    if( isset($cats[0]->term_id) ) $cat_id = $cats[0]->term_id;
  }
  else if ( is_category() ) {
    $cats = get_queried_object();
    $cat_id = $cats->parent;
  }
  $cat_list = array();
  while ($cat_id != 0){
    $cat = get_category( $cat_id );
    $cat_link = get_category_link( $cat_id );
    array_unshift( $cat_list, '<a href="'.$cat_link.'">'.$cat->name.'</a>' );
    $cat_id = $cat->parent;
  }
  foreach($cat_list as $value){
    echo '<li>'.$value.'</li>';
  }

  //現在のページ名を表示
  if ( is_singular() ) {
    if ( is_attachment() ) {
      previous_post_link( '<li>%link</li>' );
      echo $sep;
    }
    the_title( '<li>', '</li>' );
  }
  else if( is_archive() ) the_archive_title( '<li>', '</li>' );
  else if( is_search() ) echo '<li>検索 : '.get_search_query().'</li>';
  else if( is_404() ) echo '<li>ページが見つかりません</li>';
}


//保護中表示の削除
add_filter('protected_title_format', 'remove_protected');
function remove_protected($title) {
return '%s';
}

//保護ページの文章を変える
function my_password_form() {
return
'<p>パスワードを入力してください<p>
<form class="post_password" action="' . site_url() . '/wp-login.php?action=postpass" method="post">
<input name="post_password" type="password" size="24" />
<input type="submit" name="Submit" value="' . esc_attr__("パスワード送信") . '" />
</form>';
}
add_filter('the_password_form', 'my_password_form');