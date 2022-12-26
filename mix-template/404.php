<?php get_header(); ?>

<!-- ▼ コンテンツ : 開始-->
<div class="l-wrapper">
    <div class="l-main">
        <div class="l-container is-sm inner tac">
            <h1 class="c-post__title">
                404 Not found.
            </h1>
            <p class="c-post__text">
                大変申し訳ございません。<br>
                お探しのページは削除されたか、URLが間違っている可能性があります。<br>
                URLをご確認いただき、トップページまたは上部ナビゲーションメニューからお探しのページへアクセスしてください。
            </p>
            <p class="c-post__btn">
                <a href="<?php echo esc_url( home_url('/') ); ?>">トップページへ戻る</a>
            </p>
        </div>
    </div>
</div>
<!-- ▲ コンテンツ : 終了-->

<?php get_footer(); ?>