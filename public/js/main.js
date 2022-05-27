function stickyHeader() {
  $(".marketplace__filter").stick_in_parent({ bottoming: false });
}

function stickySidebar() {
  var scroll = $(window).scrollTop();
  if (scroll >= 230.5) {
    $(".filter__sidebar").addClass("sticky");
    $(".marketplace .card__listing").addClass("sticky");
  } else {
    $(".filter__sidebar").removeClass("sticky");
    $(".marketplace .card__listing").removeClass("sticky");
  }
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    console.log(scroll);
    if (scroll >= 230.5) {
      $(".filter__sidebar").addClass("sticky");
      $(".marketplace .card__listing").addClass("sticky");
    } else {
      $(".filter__sidebar").removeClass("sticky");
      $(".marketplace .card__listing").removeClass("sticky");
    }
  });
}

function filterSidebar() {
  $(".beefup").beefup({
    animation: "slide",
    openSpeed: 400,
    closeSpeed: 400,
  });
}

$(document).ready(function () {
  stickyHeader();
  stickySidebar();
  filterSidebar();
});
