<?php get_header(); ?>

<!-- ?  ▼ hero ======================================================================================== ▼ -->
<!--ヒーローテキスト(hero__boxに重ねて表示)-->
<!-- <div class="hero__list">
    <p class="hero__item1 move move-text">タイトル文字タイトル文字タイトル文字タイトル文字</p>
    <p class="hero__item2 move move-bottom">サンプル②</p>
    <p class="hero__item3 move move-text">サンプル③</p>
</div> -->
<!-- hero画像のみver -->
<div class="hero2"><img class="hero-img2" src="<?php echo esc_url( get_theme_file_uri( 'img/hero2.jpg' ) ); ?>" alt=""></div>
<!-- ?  ▲ hero ======================================================================================== ▲ -->

<!-- ?  ▼ メイン ======================================================================================== ▼ -->

<main class="main">

    <section id="news-list" class="news-list">
        <!-- お知らせサムネ画像無し -->
        <div class="inner">
            <?php
             $args = [
             'post_type' => 'news', // カスタム投稿名が「news」の場合
               'posts_per_page' => 30, // 表示する数
                 ];
            $my_query = new WP_Query($args); ?>

            <?php if ($my_query->have_posts()):?>
            <ul class="news-list__box">
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <!-- 記事部分 -->
                <li class="news-list__list">
                    <a href="<?php the_permalink(); ?>" class="flex-pc gap16 news__link">
                        <p class="news-list__date"><?php the_time(get_option('date_format')); ?></p>
                        <h3 class="news-list__title">
                            <?php
                                if(mb_strlen($post->post_title)>25) {//20文字制限
                                 $title= mb_substr($post->post_title,0,25) ;
                                  echo $title . '...';
                                 } else {
                                 echo $post->post_title;
                                 }
                            ?>
                        </h3>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php else: // 投稿がない場合?>
            <p>まだお知らせがありません。</p>
            <?php endif; wp_reset_postdata(); ?>
        </div>
    </section>
</main>
<!-- ?  ▲ main ======================================================================================== ▲ -->
<?php get_footer(); ?>