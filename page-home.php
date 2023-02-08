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
    <p class="hero__item1 move move-text">タイトル文字タイトル文字タイトル文字タイトル文字</p>
    <p class="hero__item1 move move-text">タイトル文字タイトル文字タイトル文字タイトル文字</p>
</div>
<!-- hero画像のみver -->
<div class="hero"><img class="hero-img" src="<?php echo esc_url( get_theme_file_uri( 'img/hero1.jpg' ) ); ?>" alt=""></div>


<a class="scroll" href="#button"><span></span>Scroll</a>
<!-- ?  ▲ hero ======================================================================================== ▲ -->

<!-- ?  ▼ メイン ======================================================================================== ▼ -->

<main class="main">



    <section id="news" class="news">
        <!-- お知らせサムネ画像無し -->
        <div class="inner">
          test2
            <?php
             $args = [
             'post_type' => 'news', // カスタム投稿名が「news」の場合
               'posts_per_page' => 3, // 表示する数
                 ];
            $my_query = new WP_Query($args); ?>

            <?php if ($my_query->have_posts()):?>
            <ul class="news__box">
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <!-- 記事部分 -->
                <li class="news__list">
                    <a href="<?php the_permalink(); ?>" class="flex-pc gap16 news__link">
                        <p class="news__date"><?php the_time(get_option('date_format')); ?></p>
                        <h3 class="news__title">
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

    <section id="funcion" class="section section__function">
        <div class="inner">
            <h2 class="section__title move move-left">機能</h2>
            <div class="div">gridシステム</div>
            <!--  gridシステム(PC時に縦12分割したうち何span分占有するかクラスを振る)  -->
            <!--  横１列に並べるクラスの数値の合計が12になるようにする  -->
            <div class="grid mb50">
                <!--  12分割のマス割例 スマホ時は4分割  -->
                <div class="col1-ex">1</div>
                <div class="col1-ex">2</div>
                <div class="col1-ex">3</div>
                <div class="col1-ex">4</div>
                <div class="col1-ex">5</div>
                <div class="col1-ex">6</div>
                <div class="col1-ex">7</div>
                <div class="col1-ex">8</div>
                <div class="col1-ex">9</div>
                <div class="col1-ex">10</div>
                <div class="col1-ex">11</div>
                <div class="col1-ex">12</div>
            </div>
            <!--  col〇（スマホ時全体表示） col〇-sp（スマホ時画面1/2表示）  -->
            <!--  row〇で高さ調整(クラス付与しなければauto)  -->
            <!--  top center bottom で位置調整  -->
            <div class="lazy-fadein">
                <img src="<?php echo esc_url( get_theme_file_uri( 'img/hero1.jpg' ) ); ?>" alt="" loading="lazy">col4
            </div>
        </div>
    </section>



    <section id="access" class="section access">
        <div class="inner">
            <h2 class="section__title move move-right">ACCESS</h2>
            <p class="contact__item">テキスト①</p>
            <table class="table2">
                <tr class="table2__tr">
                    <td class="table2__td">ADDRESS<br /><br /><br /></td>
                    <td class="table2__td">
                        〒730-0802<br />広島県広島市中区本川町2丁目6-3<br />
                        本川リバーサイドビル2F
                    </td>
                </tr>
                <tr class="table2__tr">
                    <td class="table2__td">TEL</td>
                    <td class="table2__td">
                        <a href="082-xxx-xxx" target="_blank" rel="noopner">082-xxx-xxx</a>
                    </td>
                </tr>
                <tr class="table2__tr">
                    <td class="table2__td buruburu">OPEN</td>
                    <td class="table2__td">11:00~19:00</td>
                </tr>
                <tr class="table2__tr">
                    <td class="table2__td">CLOSED</td>
                    <td class="table2__td">木曜定休</td>
                </tr>
            </table>
            <div class="iframe map">
                <iframe loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1329.3345139137507!2d132.45163557814718!3d34.397100567636116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355aa27341c59e73%3A0xc2e8995be005973e!2z44CSNzMwLTA4MDIg5bqD5bO255yM5bqD5bO25biC5Lit5Yy65pys5bed55S677yS5LiB55uu77yW4oiS77yT!5e0!3m2!1sja!2sjp!4v1588123551000!5m2!1sja!2sjp" width="400" height="400" style="border: 0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

        </div>
    </section>

</main>
<!-- ?  ▲ main ======================================================================================== ▲ -->
<?php get_footer(); ?>