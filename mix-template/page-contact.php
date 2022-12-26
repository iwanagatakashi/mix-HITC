<?php get_header(); ?>

<!-- ?  ▼ hero ======================================================================================== ▼ -->
<!--スライドショー中央配置-->
<!-- <ul class="slider1">
    <li class="slider-item slider-item01"></li>
    <li class="slider-item slider-item02"></li>
    <li class="slider-item slider-item03"></li>
</ul> -->
<!--ヒーローテキスト(hero__boxに重ねて表示)-->
<div class="hero__list">
    <!--  <p class="hero__item1">ここにキャッチコピーが入ります</p>-->
    <!-- <p class="hero__item2 move move-bottom">サンプル②</p>
    <p class="hero__item3 move move-text">サンプル③</p> -->
</div>
<!-- hero画像のみver -->

<!-- ?  ▲ hero ======================================================================================== ▲ -->

<!-- ?  ▼ メイン ======================================================================================== ▼ -->

<main class="main">
    <section class="contact inner tac" id="contact">

        <h1 class="tac contact__title">お問い合わせ</h1>

        <p>事業に関するお問い合わせ、ご不明な点やご相談がございましたら、お気軽にお問い合わせください。</p>
        <p><small>下記フォームに<span class="contact__span">すべての項目</span>をご入力の上、「送信する」ボタンを押してください。</small></p>

        <?php echo do_shortcode('[contact-form-7 id="6" title="コンタクトフォーム 1"]'); ?>

    </section>









</main>
<!-- ?  ▲ main ======================================================================================== ▲ -->

<!-- チェックが入ったらボタンを押せるように -->
<script>
document.addEventListener('DOMContentLoaded', function(event) {
    const targetButton = document.getElementById('formbtn');
    const triggerCheckbox = document.querySelector('input[name="acceptance-442"]');


    targetButton.disabled = true;
    targetButton.classList.add('is-inactive');

    triggerCheckbox.addEventListener('change', function() {
        if (this.checked) {
            targetButton.disabled = false;
            targetButton.classList.remove('is-inactive');
            targetButton.classList.add('is-active');
        } else {
            targetButton.disabled = true;
            targetButton.classList.remove('is-active');
            targetButton.classList.add('is-inactive');
        }
    }, false);
}, false);
</script>
<?php get_footer(); ?>