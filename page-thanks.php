<?php get_header(); ?>

<!-- ▼ コンテンツ : 開始-->
<div class="l-wrapper">
    <div class="l-main">
        <div class="l-container is-sm inner tac">
            <h1 class="c-post__title">
                お問い合わせありがとうございました
            </h1>
            <p class="c-post__text">
                ご入力頂いた情報は無事送信されました。<br>
                この度はお問い合わせ頂きありがとうございました。<br>
                担当者よりご連絡致しますので、今しばらくお待ちくださいませ。
            </p>
            <p class="c-post__btn">
                <a href="<?php echo esc_url( home_url('/') ); ?>">トップページへ戻る</a>
            </p>
        </div>
    </div>
</div>
<!-- ▲ コンテンツ : 終了-->

<?php get_footer(); ?>