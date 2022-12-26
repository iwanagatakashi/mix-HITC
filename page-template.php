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



<!-- ?  ▼ メイン ============================================================== ▼ -->

<main class="main">

    <!-- ?  ▼ template ============================================================= ▼ -->
    <section id="template" class="template">
        <div class="inner">
            <h2 class="h2 under-line tac mt100">デザインテンプレート</h2>

            <div class="acc-container">
                <!-- *見出し -->
                <h3 class="acc-title js-acc-title">見出し</h3>
                <div class="acc-content">
                    <h2 class="h2 mb20">H2見出し</h2>
                    <h3 class="h3 mb20">H3見出し</h3>
                    <h4 class="h4 mb20">H4見出し</h4>
                </div>

                <!-- *テキスト -->
                <h3 class="acc-title js-acc-title">テキスト</h3>
                <div class="acc-content">
                    <p class="p tac mb20">p文字中央</p>
                    <p class="fz-1 mb20">fz-1テキストテキストテキスト</p>
                    <p class="fz-2 mb20">fz-2テキストテキストテキスト</p>
                    <p class="fz-3 mb20">fz-3テキストテキストテキスト</p>
                    <p class="fz-4 mb20">fz-4テキストテキストテキスト</p>
                    <p class="fz-5 mb20">fz-5テキストテキストテキスト</p>
                    <p class="p ind1 mb20">■テキストインデント1文字　テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>

                <!-- *テーブル -->
                <h3 class="acc-title js-acc-title">テーブル</h3>
                <div class="acc-content">
                    <p class="p">テーブル1</p>
                    <!-- テーブルエリア -->
                    <table class="table1">
                        <tr class="table1__tr">
                            <th class="table1__th">体験レッスン</th>
                            <td class="table1__td">¥6,500</td>
                        </tr>
                        <tr class="table1__tr">
                            <th class="table1__th">単発レッスン</th>
                            <td class="table1__td">¥8,000</td>
                        </tr>
                        <tr class="table1__tr">
                            <th class="table1__th">通常レッスン</th>
                            <td class="table1__td">¥7,000</td>
                        </tr>
                        <tr class="table1__tr">
                            <th class="table1__th">入会金</th>
                            <td class="table1__td">¥10,000</td>
                        </tr>
                    </table>

                    <p class="p">テーブル2（線なし）</p>
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
                    <!-- /テーブルエリア -->
                </div>

                <!-- *ボタン -->
                <h3 class="acc-title js-acc-title">ボタン</h3>
                <div class="acc-content">
                    <a href="#" class="btn06 btnarrow1">矢印が右に移動</a>
                    <div class="mb30">
                    </div>
                    <a href="#" class="btntextchange"><span>About</span><span>私たちについて</span></a>
                </div>


                <!-- *タブ -->
                <h3 class="acc-title js-acc-title">タブ</h3>
                <div class="acc-content">

                    <!-- タブエリア -->
                    <div class="tab-area">
                        <div class="tab active">タブ１</div>
                        <div class="tab">タブ２</div>
                        <div class="tab">タブ３</div>
                        <div class="tab">タブ４</div>
                        <div class="tab">タブ５</div>
                    </div>
                    <div class="content-area">
                        <div class="content show">タブ１の中身です</div>
                        <div class="content">タブ２の中身です</div>
                        <div class="content">タブ３の中身です</div>
                        <div class="content">タブ４の中身です</div>
                        <div class="content">タブ５の中身です</div>
                    </div>
                    <!-- /タブエリア -->

                </div>

                <!-- *アコーディオン -->
                <h3 class="acc-title js-acc-title">アコーディオン</h3>
                <div class="acc-content">

                    <!-- アコーディオンエリア -->
                    <div class="acc-container">
                        <h3 class="acc-title js-acc-title">アコーディオン1</h3>
                        <div class="ac-content">
                            <p>アコーディオン1中身</p>
                        </div>
                        <h3 class="acc-title js-acc-title">アコーディオン2</h3>
                        <div class="acc-content">
                            <p>アコーディオン2中身</p>
                        </div>
                        <h3 class="acc-title js-acc-title">アコーディオン3</h3>
                        <div class="acc-content">
                            <p>アコーディオン3中身</p>
                        </div>
                    </div>
                    <!-- /アコーディオンエリア -->
                </div>

                <!-- *flex -->
                <h3 class="acc-title js-acc-title">flex</h3>
                <div class="acc-content">
                    <p class="p mb50">.flex-(justify-content)-(align-items)</p>
                    <p class="p">.flex-around-center（全幅）.gap16</p>
                    <div class="flex-around-center gap16">
                        <div class="w50 bgc-1">1</div>
                        <div class="w50 bgc-1">2 <br>2</div>
                    </div>
                    <p class="p mt50">.flex-pc-around-center(PC時のみ).gap16</p>
                    <div class="flex-pc-around-center gap16">
                        <div class="w50 bgc-1">1</div>
                        <div class="w50 bgc-1">2 <br>2</div>
                    </div>


                </div>

                <!-- *grid -->
                <h3 class="acc-title js-acc-title">grid</h3>
                <div class="acc-content">

                    <!-- グリッドエリア -->
                    <!--  領域を12等分 col〇（スマホ時全体表示） col-sp〇（スマホ時画面1/2表示）  -->
                    <!--  row〇で高さ調整(クラス付与しなければauto)  -->
                    <!--  top center bottom で位置調整  -->
                    <p class="p">SPの時全体表示</p>
                    <div class="grid">
                        <div class="col2 bgc-1">
                            col2
                        </div>
                        <div class="col6 bgc-1">
                            col6
                        </div>
                        <div class="col4 bgc-1">
                            col4
                        </div>

                        <div class="col1 bgc-1">
                            col1
                        </div>
                        <div class="col1 bgc-1">
                            col1
                        </div>
                        <div class="col1 bgc-1">
                            col1
                        </div>
                        <div class="col1 bgc-1">
                            col1
                        </div>
                        <div class="col1 bgc-1">
                            col1
                        </div>
                        <div class="col1 bgc-1">
                            col1
                        </div>
                        <div class="col1 bgc-1">
                            col1
                        </div>
                        <div class="col1 bgc-1">
                            col1
                        </div>
                        <div class="col1 bgc-1">
                            col1
                        </div>
                        <div class="col1 bgc-1">
                            col1
                        </div>
                        <div class="col1 bgc-1">
                            col1
                        </div>
                        <div class="col1 bgc-1">
                            col1
                        </div>
                    </div>

                    <p class="p mt100">SPの時半分表示</p>
                    <div class="grid">
                        <div class="col-sp2 bgc-1">
                            col-sp2
                        </div>
                        <div class="col-sp6 bgc-1">
                            col-sp6
                        </div>
                        <div class="col-sp4 bgc-1">
                            col-sp4
                        </div>
                    </div>
                    <!-- /グリッドエリア -->
                </div>

            </div><!-- /acc-container-->
        </div><!-- /.inner -->
    </section>
    <!-- ?  ▲ template ============================================================= ▼ -->

    <!-- ?  ▼ sample ============================================================= ▼ -->
    <section id="sample" class="sample">
        <div class="inner">
            <h2 class="h2 under-line tac mt100">デザインサンプル</h2>

            <div class="acc-container">
                <!-- *ボタン -->
                <h3 class="acc-title js-acc-title">ボタン</h3>
                <div class="acc-content">
                    <p class="p">ボタン(btn + 動き)</p>
                    <a href="#" class="btn bgleft"><span>背景が流れる（左から右）</span></a>
                    <a href="#" class="btn bgright"><span>背景が流れる（右から左）</span></a>
                    <a href="#" class="btn bgtop"><span>背景が流れる（上から下）</span></a>
                    <a href="#" class="btn bgbottom"><span>背景が流れる（下から上）</span></a>
                    <a href="#" class="btn bgcenterx"><span>背景が流れる（中央から横全体）</span></a>
                    <a href="#" class="btn bgcenterout"><span>背景が流れる（中央から外）</span></a>
                    <a href="#" class="btn bgcentery"><span>背景が流れる（中央から縦全体）</span></a>
                    <a href="#" class="btn bgskew"><span>背景が流れる（斜め）</span></a>

                    <p class="p mt100">ボタン(btn02 + 動き)</p>
                    <a href="#" class="btn02 rotatefront"><span>くるっと回転（手前に）</span><span>回転後（手前に）</span></a>
                    <a href="#" class="btn02 rotateback"><span>くるっと回転（奥に）</span><span>回転後（奥に）</span></a>

                    <p class="p mt100">ボタン(btnripple)</p>
                    <a href="" class="btnripple">クリックしたら波紋が広がる</a><br><br><br>
                    <a href="#" class="btnripple2"><span></span></a><br><br><br>
                    <a href="#" class="btnripple3">波紋がふわっと広がる</a><br><br><br>
                    <a href="#" class="pushcircle">押し込まれる</a>


                    <p class="p mt100">ボタン(btn03 + 動き)</p>
                    <a href="#" class="btn03 pushdown"><span>下に押し込まれる（立体が平面に）</span></a>
                    <a href="#" class="btn03 pushright"><span>右下に押し込まれる（立体が平面に）</span></a>
                    <a href="#" class="btn03 pushleft"><span>左下に押し込まれる（立体が平面に）</span></a>

                    <p class="p mt100">ボタン(float)</p>
                    <a href="#" class="float1">影がついて浮き上がる</a>
                    <a href="#" class="float2">影が拡がって浮き上がる</a>
                    <a href="#" class="float3">上に移動し影がついて浮き上がる</a>


                    <p class="p mt100">ボタン(btn04 + 動き)</p>
                    <a href="#" class="btn04 bordertop"><span>線から塗に変化（上から下）</span></a>
                    <a href="#" class="btn04 borderbottom"><span>線から塗に変化（下から上）</span></a>
                    <a href="#" class="btn04 borderleft"><span>線から塗に変化（左から右）</span></a>
                    <a href="#" class="btn04 borderright"><span>線から塗に変化（右から左）</span></a>
                    <a href="#" class="btn04 bordercenter"><span>線から塗に変化（中央から外）</span></a>
                    <br><br><br>

                    <p class="p mt100">ボタン(btn05 + 動き)</p>
                    <a href="#" class="btn05 bordercircle1"><span>左上と右下から枠線が伸びて塗に</span></a>
                    <a href="#" class="btn05 bordercircle2"><span>左下⇒右下⇒右上⇒左上⇒左下に枠線が伸びて塗りに</span></a>
                    <a href="#" class="btn05 bordercircle3"><span>左上と右下から枠線が伸びて塗りに</span></a>

                    <p class="p mt100">ボタン(グラデーション)</p>
                    <a href="#" class="gradient1">グラデーションが流れる</a>
                    <a href="#" class="gradient2">グラデーションが縮小する</a>
                    <a href="#" class="gradient3">グラデーションが拡大する</a>
                    <a href="#" class="gradient4">グラデーション線から塗に変化する</a>

                    <p class="p mt100">ボタン(外の線)</p>
                    <a href="#" class="btnlinestretches">外の線が伸びる</a>
                    <a href="#" class="btnlinestretches2">少し出ていた線が伸びる</a>
                    <a href="#" class="btnlinestretches3"><span>下線が伸びて背景に変わる</span></a>
                    <a href="#" class="btnlinestretches4"><span>線の上を別の線が伸びる</span></a>
                    <a href="#" class="btnlinestretches5"><span>矢印の線がループして伸縮</span></a>



                    <p class="p mt100">ボタン(変化)</p>
                    <a href="#" class="btnchangeline"><span>塗りから線に変わる</span></a>
                    <a href="#" class="btnchangeradius">角丸に変わる</a>
                    <br>
                    <a href="#" class="btnshine">きらっと光る</a>
                    <br>
                    <a href="#" class="btntransform">リンクテキストが入る</a>
                    <br>
                    <a href="#" class="btntextchange"><span>About</span><span>私たちについて</span></a>

                    <p class="p mt100">ボタン(btn06 + 動き)</p>
                    <a href="#" class="btn06 btnarrow1">矢印が右に移動</a>
                    <a href="#" class="btn06 btnarrow2">矢印が右に移動して現在地に戻る</a>
                    <a href="#" class="btn06 btnarrow3">矢印が回転</a>


                    <p class="p mt100">ボタン(矢印の移動)</p>
                    <a href="#" class="btnarrow4">矢印が右に移動する</a>
                    <br><br>
                    <a href="#" class="btnarrow5">矢印が右に移動して背景がつく</a>
                    <br><br>
                    <a href="#" class="btnarrow6">矢印が縮む</a>
                </div>

                <!-- *テキストアニメーション -->
                <h3 class="acc-title js-acc-title">テキストアニメーション</h3>
                <div class="acc-content">
                    <p class="move-text">
                        1文字ずつ表示します1文字ずつ表示します１文字ずつ表示します1文字ずつ表示します1文字ずつ表示します1文字ずつ表示します1文字ずつ表示します1文字ずつ表示します
                    </p>
                    <p class="tate-mixed">縦書き</p>
                    <p class="p mt100">ホバーアニメーション</p>
                    <p class="mt50"><a class="text-animation1" href="#">中心から外に線が伸びる（下部）</a></p>
                    <p class="mt50"><a class="text-animation2" href="#">中心から外に線が伸びる（中央）</a></p>
                    <p class="mt50"><a class="text-animation3" href="#">左から右に線が伸びる（下部）</a></p>
                    <p class="mt50"><a class="text-animation4" href="#">左から右に線が伸びる（上部）</a></p>
                    <p class="mt50"><a class="text-animation5" href="#">左から右に背景が伸びる</a></p>
                    <p class="mt50"><a class="text-animation6" href="#">左から右に線が伸びて背景になる</a></p>
                    <p class="mt50"><a class="text-animation7" href="#">上下に線が伸びて背景になる</a></p>
                    <p class="mt50"><a class="text-animation8" href="#">円が線に変化</a></p>
                    <p class="mt50"><a class="text-animation9" href="#"><span>テキストが入れ替わる</span><span>text change</span></a></p>
                    <p class="mt50"><a class="text-animation10" href="#"><span>線が伸びて枠線になる</span></a></p>
                    <p class="mt50"><a class="text-animation11" href="#"><span>左右から線が伸びて枠線になる</span></a></p>

                </div>

                <!-- *スクロールアニメーション -->
                <h3 class="acc-title js-acc-title">スクロールアニメーション</h3>
                <div class="acc-content">
                    <p class="p">上下左右から</p>
                    <div class="flex">
                        <div class="box tac move move-top">上から</div>
                        <div class="box tac move move-right">右から</div>
                        <div class="box tac move move-bottom">下から</div>
                        <div class="box tac move move-left">左から</div>
                    </div>
                    <p class="p mt50">ふわっと</p>
                    <div class="flex">
                        <div class="box tac move fade-in">上から</div>
                        <div class="box tac move fade-right">右から</div>
                        <div class="box tac move fade-bottom">下から</div>
                        <div class="box tac move fade-left">左から</div>
                    </div>
                    <p class="p mt50">動く</p>
                    <div class="flex">
                        <div class="box tac move move-bounce">バウンド</div>
                        <div class="box tac anime-h">上下にゆらゆら</div>
                        <div class="box tac anime-w">左右にゆらゆら</div>
                        <div class="box tac anime-swing">左右にふりふり</div>
                        <div class="box tac anime-spin">くるくる</div>
                        <div class="box tac anime-zoom">ズーム</div>
                    </div>



                </div>


                <!-- *スライドショー -->
                <h3 class="acc-title js-acc-title">スライドショー</h3>
                <div class="acc-content">
                    <p class="p">3枚表示1枚ずつスライド</p>
                    <ul class="slider2">
                        <li><img src=<?php echo esc_url(get_theme_file_uri('img/hero1.jpg')) ?>"" alt="" loading="lazy"></li>
                        <li><img src=<?php echo esc_url(get_theme_file_uri('img/hero2.jpg')) ?>"" alt="" loading="lazy"></li>
                        <li><img src=<?php echo esc_url(get_theme_file_uri('img/hero3.jpg')) ?>"" alt="" loading="lazy"></li>
                        <li><img src=<?php echo esc_url(get_theme_file_uri('img/hero1.jpg')) ?>"" alt="" loading="lazy"></li>
                        <li><img src=<?php echo esc_url(get_theme_file_uri('img/hero2.jpg')) ?>"" alt="" loading="lazy"></li>
                        <li><img src=<?php echo esc_url(get_theme_file_uri('img/hero3.jpg')) ?>"" alt="" loading="lazy"></li>
                        <!--/slider-->
                    </ul>
                    <p class="p mt100">央に1枚、左右にちょっとずつ見えるスライドショー、タブレットサイズでは1枚だけ</p>
                    <ul class="slider3">
                        <li><img src=<?php echo esc_url(get_theme_file_uri('img/hero1.jpg')) ?>"" alt="" loading="lazy"></li>
                        <li><img src=<?php echo esc_url(get_theme_file_uri('img/hero2.jpg')) ?>"" alt="" loading="lazy"></li>
                        <li><img src=<?php echo esc_url(get_theme_file_uri('img/hero3.jpg')) ?>"" alt="" loading="lazy"></li>
                        <li><img src=<?php echo esc_url(get_theme_file_uri('img/hero1.jpg')) ?>"" alt="" loading="lazy"></li>
                        <li><img src=<?php echo esc_url(get_theme_file_uri('img/hero2.jpg')) ?>"" alt="" loading="lazy"></li>
                        <li><img src=<?php echo esc_url(get_theme_file_uri('img/hero3.jpg')) ?>"" alt="" loading="lazy"></li>
                        <!--/slider-->
                    </ul>
                    <p class="p mt100">無限ループスライド・逆向きdir="rtl"</p>
                    <ul class="slider4" dir="rtl">
                        <li><img src=<?php echo esc_url(get_theme_file_uri('img/hero1.jpg')) ?>"" alt="" loading="lazy"></li>
                        <li><img src=<?php echo esc_url(get_theme_file_uri('img/hero2.jpg')) ?>"" alt="" loading="lazy"></li>
                        <li><img src=<?php echo esc_url(get_theme_file_uri('img/hero3.jpg')) ?>"" alt="" loading="lazy"></li>
                        <li><img src=<?php echo esc_url(get_theme_file_uri('img/hero1.jpg')) ?>"" alt="" loading="lazy"></li>
                        <li><img src=<?php echo esc_url(get_theme_file_uri('img/hero2.jpg')) ?>"" alt="" loading="lazy"></li>
                        <li><img src=<?php echo esc_url(get_theme_file_uri('img/hero3.jpg')) ?>"" alt="" loading="lazy"></li>
                        <!--/slider-->
                    </ul>
                </div>






            </div><!-- /acc-container-->
        </div><!-- /.inner -->
    </section>

</main>
<!-- ?  ▲ main =============================================================== ▲ -->
<?php get_footer(); ?>