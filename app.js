$("#btn-right").click(() => {
  // anime({
  //     targets: '#coaches',
  //     translateX: -screen.width
  // });

  if (window.matchMedia("(min-width: 769px)").matches) {
    let fleetHeight = $("#fleet-page").height();
    console.log(fleetHeight);
    $("#coaches").height(fleetHeight);

    let tl = anime.timeline({
      easing: "easeOutExpo",
      duration: 750
    });

    tl.add({
      targets: ".photo",
      opacity: 0
    }).add({
      targets: "#coaches",
      translateX: -document.body.clientWidth
    });
  }else{

  }
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
    targets: ".photo",
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