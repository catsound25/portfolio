import './bootstrap';

$(function () {
  // お気に入りボタン押下時
  $(".js-fav").on("click", function () {
    // ベースとなる情報
    $.ajaxSetup({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      },
    });

    let songId = $(this).data("song-id");

    let data = {};
    if ($(this).hasClass('on')) {
      // お気に入り中だった場合、解除する
      data["_method"] = "DELETE";
    }

    $.ajax({
      url: "/pf/fav/" + songId,
      type: "POST",
      data
    })
      .done(function (res) {
        console.log(res);
        alert('ok');
      })

      .fail(function (err) {
        alert('エラー');
      });
  });

});
