// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

// ?Analytics用

// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

jQuery(document)
  //aタグをクリックしたときに発火
  .on('click', 'a', function (event) {
    var label = 'a[' + jQuery('a:visible').index(event.currentTarget) + '] ' + jQuery(event.currentTarget).text() + ' ' + jQuery(event.currentTarget).attr('href') + '(' + Math.floor(jQuery(window).scrollTop() / jQuery(window).height()) + '画面)';
    console.log(label);
    gtag('event', 'click', {
      'event_category': location.pathname,
      'event_label': label, //リンクのテキストを取得
      'value': 1
    });
    return true;
  })
  //buttonタグをクリックしたときに発火
  .on('click', 'button', function (event) {
    var label = 'button[' + jQuery('a:visible').index(event.currentTarget) + '] ' + jQuery(event.currentTarget).text() + ' ' + jQuery(event.currentTarget).attr('href') + '(' + Math.floor(jQuery(window).scrollTop() / jQuery(window).height()) + '画面)';
    console.log(label);
    gtag('event', 'click', {
      'event_category': location.pathname,
      'event_label': label, //ボタンのテキストを取得
      'value': 1
    });
    return true;
  });

//?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

//?ページがその位置まできた時に発火(inview)

//?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

!(function (e) {
  'function' == typeof define && define.amd ?
    define(['jquery'], e) :
    'object' == typeof exports ?
    (module.exports = e(require('jquery'))) :
    e(jQuery);
})(function (e) {
  function l() {
    var t,
      i,
      s = {
        height: r.innerHeight,
        width: r.innerWidth,
      };
    return (
      s.height ||
      ((t = a.compatMode),
        (t || !e.support.boxModel) &&
        ((i = 'CSS1Compat' === t ? n : a.body),
          (s = {
            height: i.clientHeight,
            width: i.clientWidth,
          }))),
      s
    );
  }

  function d() {
    return {
      top: r.pageYOffset || n.scrollTop || a.body.scrollTop,
      left: r.pageXOffset || n.scrollLeft || a.body.scrollLeft,
    };
  }

  function h() {
    if (t.length) {
      var a = 0,
        r = e.map(t, function (e) {
          var t = e.data.selector,
            i = e.$element;
          return t ? i.find(t) : i;
        });
      for (i = i || l(), s = s || d(); a < t.length; a++)
        if (e.contains(n, r[a][0])) {
          var o = e(r[a]),
            h = {
              height: o[0].offsetHeight,
              width: o[0].offsetWidth,
            },
            p = o.offset(),
            c = o.data('inview');
          if (!s || !i) return;
          p.top + h.height > s.top &&
            p.top < s.top + i.height &&
            p.left + h.width > s.left &&
            p.left < s.left + i.width ?
            c || o.data('inview', !0).trigger('inview', [!0]) :
            c && o.data('inview', !1).trigger('inview', [!1]);
        }
    }
  }
  var i,
    s,
    o,
    t = [],
    a = document,
    r = window,
    n = a.documentElement;
  (e.event.special.inview = {
    add: function (i) {
      t.push({
          data: i,
          $element: e(this),
          element: this,
        }),
        !o && t.length && (o = setInterval(h, 250));
    },
    remove: function (e) {
      for (var i = 0; i < t.length; i++) {
        var s = t[i];
        if (s.element === this && s.data.guid === e.guid) {
          t.splice(i, 1);
          break;
        }
      }
      t.length || (clearInterval(o), (o = null));
    },
  }),
  e(r).on('scroll resize scrollstop', function () {
      i = s = null;
    }),
    !n.addEventListener &&
    n.attachEvent &&
    n.attachEvent('onfocusin', function () {
      s = null;
    });
});

// *===========================================
// *inview起動用（スクロールしたらmoveクラスにmove-onを付ける）
// *===========================================
jQuery(function () {
  jQuery('.move').on('inview', function (event, isInView) {
    if (isInView) {
      jQuery(this).stop().addClass('move-on');
    }
  });
});


//?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

//?ヘッダー用

//?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

// *===========================================
// *ローディング画面
// *===========================================
// jQuery(window).on('load', function () {
//   jQuery("#splash").delay(1500).fadeOut('slow'); //ローディング画面を1.5秒（1500ms）待機してからフェードアウト
//   jQuery("#splash__logo").delay(1200).fadeOut('slow'); //ロゴを1.2秒（1200ms）待機してからフェードアウト
// });

// *===========================================
// *スクロールすると上部に固定
// *===========================================
jQuery(function () {
  var headNav = jQuery(".header");
  jQuery(window).on('load scroll', function () {
    if (jQuery(this).scrollTop() > 100 && headNav.hasClass('fixed') == false) {
      headNav.css({
        "top": '-100px' //200pxスクロールしたら固定
      });
      headNav.addClass('fixed');
      headNav.animate({
        "top": 0
      }, 600);
    } else if (jQuery(this).scrollTop() < 100 && headNav.hasClass('fixed') == true) {
      headNav.removeClass('fixed');
    }
  });
});

// *===========================================
// *ドロップダウンの設定を関数でまとめる
// *===========================================
function mediaQueriesWin() {
  var width = jQuery(window).width();
  if (width <= 768) {
    jQuery(".has-child>a").on('click', function () {
      var parentElem = jQuery(this).parent();
      jQuery(parentElem).toggleClass('active');
      jQuery(parentElem).children('ul').stop().slideToggle(500);
      return false;
    });
  } else {
    jQuery(".has-child>a").off('click');
    jQuery(".has-child>a").removeClass('active');
    jQuery('.has-child').children('ul').css("display", "");
  }
}

jQuery(window).resize(function () {
  mediaQueriesWin();
});

jQuery(window).on('load', function () {
  mediaQueriesWin();
});

// *===========================================
// *スマホ用メニュー表示
// *===========================================
jQuery(".openbtn").click(function () {
  jQuery(this).toggleClass('active');
  jQuery("#g-nav").toggleClass('panelactive');
});

jQuery("#g-nav a").click(function () {
  jQuery(".openbtn").removeClass('active');
  jQuery("#g-nav").removeClass('panelactive');
});

jQuery("#g-nav .has-child>a").click(function () {
  jQuery(this).toggleClass('active');
  jQuery("#g-nav").toggleClass('panelactive');
});

// *===========================================
// *現在地のナビにcurrentクラス付与
// *===========================================

jQuery(document).ready(function () {
  var activeUrl = location.pathname.split("/")[1];
  var navList = jQuery(".gnavi").find("a");
  navList.each(function () {
    if (jQuery(this).attr("href") == activeUrl) {
      jQuery(this).parent().addClass("current");
    };
  });
});


// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

// ?ブラウザサイズを自動で取得してiOS対策

// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■


//.slider-item
jQuery(document).ready(function () {
  var hSize = jQuery(window).height();
  var hHeader = jQuery('header').height();
  var hHero = hSize - hHeader;
  jQuery('.slider-item').height(hHero);
});
jQuery(window).resize(function () {
  var hSize = jQuery(window).height();
  var hHeader = jQuery('header').height();
  var hHero = hSize - hHeader;
  jQuery('.slider-item').height(hHero);
});

//.hero
jQuery(document).ready(function () {
  var hSize = jQuery(window).height();
  var hHeader = jQuery('header').height();
  var hHero = hSize - hHeader;
  jQuery('.hero').height(hHero);
});
jQuery(window).resize(function () {
  var hSize = jQuery(window).height();
  var hHeader = jQuery('header').height();
  var hHero = hSize - hHeader;
  jQuery('.hero').height(hHero);
});

// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

// ?スライドショー（

// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■


jQuery(function () {
  jQuery('.slider1').slick({
    fade: true,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 1000,
    infinite: true,
    slidesToShow: 1, //スライドを画面に3枚見せる
    slidesToScroll: 1, //1回のスクロールで3枚の写真を移動して見せる
    arrows: false, //左右の矢印あり
    prevArrow: '<div class="slick-prev"></div>', //矢印部分PreviewのHTMLを変更
    nextArrow: '<div class="slick-next"></div>', //矢印部分NextのHTMLを変更
    dots: false, //下部ドットナビゲーションの表示
    pauseOnFocus: false, //フォーカスで一時停止を無効
    pauseOnHover: false, //マウスホバーで一時停止を無効
    pauseOnDotsHover: false, //ドットナビゲーションをマウスホバーで一時停止を無効
  });

  //中央に1枚、左右にちょっとずつ見えるスライドショー、タブレットサイズでは1枚だけ
  jQuery('.slider2').slick({
    autoplay: true, //自動的に動き出すか。初期値はfalse。
    autoplaySpeed: 3000, //スライドの切り替わりスピード
    speed: 2000,
    infinite: true, //スライドをループさせるかどうか。初期値はtrue。
    slidesToShow: 3, //スライドを画面に3枚見せる
    slidesToScroll: 1, //1回のスクロールで1枚の写真を移動して見せる
    prevArrow: '<div class="slick-prev"></div>', //矢印部分PreviewのHTMLを変更
    nextArrow: '<div class="slick-next"></div>', //矢印部分NextのHTMLを変更
    dots: true, //下部ドットナビゲーションの表示
    responsive: [{
        breakpoint: 769, //モニターの横幅が769px以下の見せ方
        settings: {
          slidesToShow: 2, //スライドを画面に2枚見せる
          slidesToScroll: 2, //1回のスクロールで2枚の写真を移動して見せる
        }
      },
      {
        breakpoint: 426, //モニターの横幅が426px以下の見せ方
        settings: {
          slidesToShow: 1, //スライドを画面に1枚見せる
          slidesToScroll: 1, //1回のスクロールで1枚の写真を移動して見せる
        }
      }
    ]
  });

  //中央に1枚、左右にちょっとずつ見えるスライドショー、タブレットサイズでは1枚だけ
  jQuery('.slider3').slick({
    fade: false,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 1000,
    infinite: true,
    arrows: false, //左右の矢印あり
    slidesToShow: 1, //スライドを画面に3枚見せる
    slidesToScroll: 1, //1回のスクロールで3枚の写真を移動して見せる
    centerMode: true,
    centerPadding: "15%",
    dots: true, //下部ドットナビゲーションの表示
    responsive: [{
      breakpoint: 765, // 765px以下のサイズに適用
      settings: {
        centerMode: false,
      },
    }, ],
  });

  //無限ループスライダー
  jQuery('.slider4').slick({
    autoplay: true, //自動的に動き出すか。初期値はfalse。
    autoplaySpeed: 0, //スライドの切り替わりスピード
    speed: 5000,
    cssEase: "linear", //スライドの流れる速度を等速に
    infinite: true, //スライドをループさせるかどうか。初期値はtrue。
    slidesToShow: 3, //スライドを画面に3枚見せる
    slidesToScroll: 1, //1回のスクロールで1枚の写真を移動して見せる
    rtl: true, //逆向き
    prevArrow: '<div class="slick-prev"></div>', //矢印部分PreviewのHTMLを変更
    nextArrow: '<div class="slick-next"></div>', //矢印部分NextのHTMLを変更
    responsive: [{
        breakpoint: 769, //モニターの横幅が769px以下の見せ方
        settings: {
          slidesToShow: 2, //スライドを画面に2枚見せる
          slidesToScroll: 2, //1回のスクロールで2枚の写真を移動して見せる
        }
      },
      {
        breakpoint: 426, //モニターの横幅が426px以下の見せ方
        settings: {
          slidesToShow: 1, //スライドを画面に1枚見せる
          slidesToScroll: 1, //1回のスクロールで1枚の写真を移動して見せる
        }
      }
    ]
  });



});




//スマホ用：スライダーをタッチしても止めずにスライドをさせたい場合
jQuery('.slider').on('touchmove', function (event, slick, currentSlide, nextSlide) {
  jQuery('.slider').slick('slickPlay');
});







// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

// ?1文字ずつ表示するアニメーション

// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

// *===========================================
// *0.1秒ごとに1文字出現
// *===========================================

jQuery('.move-text').each(function () {
  jQuery(this)
    .children()
    .addBack()
    .contents()
    .each(function () {
      if (this.nodeType == 3) {
        jQuery(this).replaceWith(jQuery(this).text().replace(/(\S)/g, '<span>$1</span>'));
      }
    });

  jQuery(this).on('inview', function () {
    jQuery(this).css({
      opacity: 1,
    });
    for (var i = 0; i <= jQuery(this).children('span').length; i++) {
      jQuery(this)
        .children('span')
        .eq(i)
        .delay(100 * i) //100＝0.1秒ごとに1文字出現、800=0.8秒かけて不透明になる
        .animate({
            opacity: 1,
          },
          800,
        );
    }
  });
});

// *===========================================
// *0.5秒ごとに1文字出現
// *===========================================

jQuery('.move-text2').each(function () {
  jQuery(this)
    .children()
    .addBack()
    .contents()
    .each(function () {
      if (this.nodeType == 3) {
        jQuery(this).replaceWith(jQuery(this).text().replace(/(\S)/g, '<span>$1</span>'));
      }
    });

  jQuery(this).on('inview', function () {
    jQuery(this).css({
      opacity: 1,
    });
    for (var i = 0; i <= jQuery(this).children('span').length; i++) {
      jQuery(this)
        .children('span')
        .eq(i)
        .delay(500 * i) //100＝0.1秒ごとに1文字出現、500=0.5秒かけて不透明になる
        .animate({
            opacity: 1,
          },
          800,
        );
    }
  });
});



// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

// ?トップに戻るボタン

// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■
jQuery(function () {
  var topBtn = jQuery('#pagetop');
  topBtn.hide();
  //◇ボタンの表示設定
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 80) { //---- 画面を80pxスクロールしたら、ボタンを表示する
      topBtn.fadeIn();
    } else { //---- 画面が80pxより上なら、ボタンを表示しない
      topBtn.fadeOut();
    }
  }); // ◇ボタンをクリックしたら、スクロールして上に戻る
  topBtn.click(function () {
    jQuery('body,html').animate({
        scrollTop: 0,
      },
      500,
    );
    return false;
  });
});



// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

// ?スムーズスクロール機能（id属性へのリンクに動作）

// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■
//WordPress対応（絶対パス）
jQuery(function () {
  jQuery('a[href*="#"]').click(function () {
    var adjust = -100; // 移動先を0px調整する。0を30にすると30px下にずらすことができる。
    const speed = 400;
    const target = jQuery(this.hash === '#' || '' ? 'html' : this.hash)

    if (!target.length) return;
    const targetPos = target.offset().top + adjust;
    jQuery('html, body').animate({
      scrollTop: targetPos
    }, speed, 'swing');
    return false;
  });
});






// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

// ?画像拡大表示機能(pタグの中のimgをクリックすると拡大表示される)

// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■
function pixelViewer(element) {
  const img = document.querySelectorAll(element);

  for (let i = 0; i < img.length; i++) {
    img[i].addEventListener('click', open);
  }

  function open() {
    const filter = document.createElement('div');
    filter.id = 'pixel-viewer';

    const div_alt = document.createElement('div');
    div_alt.id = 'pixel-viewer__alt';
    div_alt.textContent = this.alt;

    const div_img = document.createElement('img');
    div_img.id = 'pixel-viewer__img';
    div_img.src = this.src;

    document.body.appendChild(filter);
    filter.appendChild(div_alt);
    filter.appendChild(div_img);

    filter.addEventListener('click', close, {
      once: true,
    });
    window.addEventListener('scroll', close, {
      once: true,
    }); // スクロールで閉じたくない場合はこの行を削除

    function close() {
      filter.className = 'fadeout';
      filter.addEventListener('animationend', function () {
        filter.remove();
      });
    }
  }
}

//pタグの中のimgをクリックすると拡大表示される
pixelViewer('p > img');





// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

// ?タブ切り替え

// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■
jQuery(function () {
  let tabs = jQuery('.tab'); // tabのクラスを全て取得し、変数tabsに配列で定義
  jQuery('.tab').on('click', function () {
    // tabをクリックしたらイベント発火
    jQuery('.active').removeClass('active'); // activeクラスを消す
    jQuery(this).addClass('active'); // クリックした箇所にactiveクラスを追加
    const index = tabs.index(this); // クリックした箇所がタブの何番目か判定し、定数indexとして定義
    jQuery('.content').removeClass('show').eq(index).addClass('show'); // showクラスを消して、contentクラスのindex番目にshowクラスを追加
  });
});


// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

// ?アコーディオンメニュー

// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■
jQuery(function ($) {
  jQuery('.js-acc-title').on('click', function () {
    jQuery(this).next().slideToggle(200);
    jQuery(this).toggleClass('open', 200);
  });
});



// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

// ?続きを読む

// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■
jQuery(function () {
  var textHeight = jQuery('.text').height();
  var lineHeight = parseFloat(jQuery('.text').css('line-height'));
  var lineNum = 3; //◯行目以降で続きを読む表示
  var textNewHeight = lineHeight * lineNum;

  if (textHeight > textNewHeight) {
    jQuery('.text').css({
      height: textNewHeight,
      overflow: 'hidden',
    });
    jQuery('.readmore-btn').show();
    jQuery('.readmore-btn').click(function () {
      jQuery(this).hide();
      jQuery('.text').css({
        height: textHeight,
        overflow: 'visible',
      });
      return false;
    });
  }
});

// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

// ?電話番号のリンクをスマホの時のみ

// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

let ua = navigator.userAgent;
if (ua.indexOf("iPhone") === -1 && ua.indexOf("Android") === -1) {
  jQuery('a[href^="tel:"]')
    .css("cursor", "default")
    .on("click", function (e) {
      e.preventDefault();
    });
}


// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

// ?footer最下部固定

// ?■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■━■

new function () {

  var footerId = "footer";
  //メイン
  function footerFixed() {
    //ドキュメントの高さ
    var dh = document.getElementsByTagName("body")[0].clientHeight;
    //フッターのtopからの位置
    document.getElementById(footerId).style.top = "0px";
    var ft = document.getElementById(footerId).offsetTop;
    //フッターの高さ
    var fh = document.getElementById(footerId).offsetHeight;
    //ウィンドウの高さ
    if (window.innerHeight) {
      var wh = window.innerHeight;
    } else if (document.documentElement && document.documentElement.clientHeight != 0) {
      var wh = document.documentElement.clientHeight;
    }
    if (ft + fh < wh) {
      document.getElementById(footerId).style.position = "relative";
      document.getElementById(footerId).style.top = (wh - fh - ft - 1) + "px";
    }
  }

  //文字サイズ
  function checkFontSize(func) {

    //判定要素の追加
    var e = document.createElement("div");
    var s = document.createTextNode("S");
    e.appendChild(s);
    e.style.visibility = "hidden"
    e.style.position = "absolute"
    e.style.top = "0"
    document.body.appendChild(e);
    var defHeight = e.offsetHeight;

    //判定関数
    function checkBoxSize() {
      if (defHeight != e.offsetHeight) {
        func();
        defHeight = e.offsetHeight;
      }
    }
    setInterval(checkBoxSize, 1000)
  }

  //イベントリスナー
  function addEvent(elm, listener, fn) {
    try {
      elm.addEventListener(listener, fn, false);
    } catch (e) {
      elm.attachEvent("on" + listener, fn);
    }
  }

  addEvent(window, "load", footerFixed);
  addEvent(window, "load", function () {
    checkFontSize(footerFixed);
  });
  addEvent(window, "resize", footerFixed);

}