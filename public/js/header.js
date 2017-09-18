$(function() {
  $(".hamburger").click(function () {
    $(".hamburger").toggleClass("is-active");
    if ($(".hamburger").hasClass("is-active")) {
      $(".dropdown").css({right: 0})

    } else {
      $(".dropdown").css({right: '-30%'})

    }
  })

})
