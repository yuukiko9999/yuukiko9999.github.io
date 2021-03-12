$(function() {

  /* ▼▼▼ トップのスライドショー ▼▼▼ */
  $(".slide-img .dummy-slide:not(:first-child)").hide();
  setInterval(function() {
    $(".slide-img .dummy-slide:first-child").fadeOut("slow").next(".dummy-slide").fadeIn("slow").end().appendTo(".slide-img");
    /* ▼▼▼ h1要素を常時一番下に配置 ▼▼▼ */
    $(".slide-img h1").appendTo(".slide-img");
    /* ▲▲▲ h1要素を常時一番下に配置 ▲▲▲ */
  }, 5000);
  /* ▲▲▲ トップのスライドショー ▲▲▲ */

  /* ▼▼▼ サイドメニュー ▼▼▼ */
  /* ▼▼▼ メニュー表示 ▼▼▼ */
  var cnt=0;
  $('.menu-btn').click(function() {
    if (cnt === 0) {
      $('.menu-btn').css('transform','translateX(0px)');
      $('.menu-list').css('transform','translateX(0px)');
      cnt = 1;
    } else {
      $('.menu-btn').css('transform','translateX(220px)');
      $('.menu-list').css( 'transform','translateX(220px)' );
      cnt = 0;
    }
    // console.log(cnt); /* デバッグ用 */
  });
  /* ▲▲▲ メニュー表示 ▲▲▲ */

  /* ▼▼▼ 下線アニメーション ▼▼▼ */
  $('.menu-list').hover(
    function() { //マウスを乗せたときの処理
      
    },
    function() { //マウスを外したときの処理

    }
  )
  /* ▲▲▲ 下線アニメーション ▲▲▲ */
  /* ▲▲▲ メニュー表示 ▲▲▲ */

});
