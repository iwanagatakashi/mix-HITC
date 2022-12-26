<?php get_header(); ?>

<!-- ?  ▼ hero ======================================================================================== ▼ -->
<!--ヒーローテキスト(hero__boxに重ねて表示)-->
<!-- <div class="hero__list">
    <p class="hero__item1 move move-text">タイトル文字タイトル文字タイトル文字タイトル文字</p>
    <p class="hero__item2 move move-bottom">サンプル②</p>
    <p class="hero__item3 move move-text">サンプル③</p>
</div> -->
<!-- hero画像のみver -->
<!-- <div class="hero"><img class="hero-img" src="<?php echo esc_url( get_theme_file_uri( 'img/hero1.jpg' ) ); ?>" alt=""></div> -->
<!-- ?  ▲ hero ======================================================================================== ▲ -->

<!-- ?  ▼ メイン ======================================================================================== ▼ -->

<main class="main">

    <section class="news-blog">
        <div class="inner">
            <div class="news-blog__box">
                <?php // アイキャッチ画像を表示する start ?>
                <?php if(has_post_thumbnail()): ?>
                <div class="news-blog__img">
                    <img src="<?php the_post_thumbnail_url('large'); ?>">
                </div>
                <?php endif; ?>
                <?php // アイキャッチ画像を表示する end ?>

                <?php // ブログ記事を表示する start ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php // タイトルを表示する start ?>
                <h1 class="news-blog__title"><?php the_title(); ?></h1>
                <?php // タイトルを表示する end ?>

                <?php // 日付を表示する start ?>
                <p class="news-blog__date"><?php the_date(); ?></p>
                <?php // 日付を表示する end ?>

                <?php // 本文を表示する start ?>
                <div class="news-blog__content"><?php echo the_content(); ?></div>
                <?php // 本文を表示する end ?>

                <?php endwhile; endif; ?>
                <?php // ブログ記事を表示する end ?>
            </div>
        </div><!-- /.inner -->
    </section>

    <section class="news-link">
        <div class="inner">
            <div class="news-link__box flex-between">
                <div class="news-link__pre">
                    <?php previous_post_link('%link', '前のお知らせへ'); ?></div>
                <div class="news-link__next"><?php next_post_link('%link', '次のお知らせへ'); ?></div>
            </div>
        </div>
    </section>
</main>
<!-- ?  ▲ main ======================================================================================== ▲ -->
<?php get_footer(); ?>