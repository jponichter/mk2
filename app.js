$("#btn-right").click(() => {
  // anime({
  //     targets: '#coaches',
  //     translateX: -screen.width
  // });

  let tl = anime.timeline({
    easing: "easeOutExpo",
    duration: 750
  });

  tl.add({
    targets: [".photo", "#btn-right", "#btn-left"],
    opacity: 0
  }).add({
    targets: "#coaches",
    translateX: -document.body.clientWidth
  });

  if (window.matchMedia("(min-width: 1025px)").matches) {
    let fleetHeight = $("#fleet-page").height();
    $("#coaches").height(fleetHeight);
  }
  $("#coaches").show();
});

$("#btn-right-close").click(() => {
  let tl = anime.timeline({
    easing: "easeInExpo",
    duration: 750
  });

  tl.add({
    targets: "#coaches",
    translateX: document.body.clientWidth
  }).add({
    targets: [".photo", "#btn-right", "#btn-left"],
    opacity: 1
  });
});

//Smooth scrolling
$(document).ready(function () {
  $('a[href^="#"]').on('click', function (e) {
      e.preventDefault();

      let navHeight = $("nav").height();

      var target = this.hash,
          $target = $(target);

      $('html, body').stop().animate({
          'scrollTop': $target.offset().top - navHeight
      }, 900, 'swing');
  });
});

$("#coaches-1").click(() => {
  $("#coaches-modal-1").modal('show');
});