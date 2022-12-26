<?php get_header(); ?>

<div id="path">
    <ol>
        <li><a href="<?php echo esc_url( home_url( '/')); ?>">ホーム</a></li>
        <li><?php single_post_title(); ?></li>
    </ol>
</div>
<div id="contents">
    <div id="main">

        <?php if( have_posts() )://もし投稿が１件以上あったら?>
        <?php while ( have_posts() )://投稿の表示条件を満たす間は繰り返す ?>
        <?php the_post();//データ1件を取り出して渡す ?>

        <article <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
        </article>

        <?php endwhile; //投稿ループ終了?>

        <!--▼ ページネーション : 開始-->
        <?php the_posts_pagination(); ?>
        <!--▲ ページネーション : 終了-->

        <?php else://もし表示すべき投稿がなかったら ?>
        <p>あてはまる情報はまだありません。</p>
        <?php endif;//条件分岐終了?>

    </div>
    <?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>