
$("#btn-right").click(() => {
  // anime({
  //     targets: '#coaches',
  //     translateX: -screen.width
  // });

  
  let fleetHeight = $('#fleet-page').height();
  console.log(fleetHeight);
  $('#coaches').height(fleetHeight);

  let tl = anime.timeline({
    easing: "easeOutExpo",
    duration: 750
  });

  tl
  .add({
    targets: ".photo",
    opacity: 0
  })
  .add({
    targets: "#coaches",
    translateX: -document.body.clientWidth
  });

});

$("#btn-right-close").click(() => {

    let tl = anime.timeline({
        easing: "easeInExpo",
        duration: 750
      });
    
      tl
      .add({
        targets: "#coaches",
        translateX: document.body.clientWidth
      })
      .add({
        targets: ".photo",
        opacity: 1
      });
});
