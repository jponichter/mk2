$("#btn-right").click(animateCoaches);
$("#img-right").click(animateCoaches);
$("#btn-left").click(animateBuses);
$("#img-left").click(animateBuses);
function animateCoaches(){
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
    let fleetHeight = $("#fleet-page").outerHeight();
    $("#coaches").outerHeight(fleetHeight);
  }
  $("#coaches").show();
};

function animateBuses(){
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
    targets: "#buses",
    translateX: document.body.clientWidth
  });

  if (window.matchMedia("(min-width: 1025px)").matches) {
    let fleetHeight = $("#fleet-page").outerHeight();
    $("#buses").outerHeight(fleetHeight);
    console.log(fleetHeight, $("#buses").height());
  }
  $("#buses").show();
};

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

$("#btn-left-close").click(() => {
  let tl = anime.timeline({
    easing: "easeInExpo",
    duration: 750
  });

  tl.add({
    targets: "#buses",
    translateX: -document.body.clientWidth
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

//Modals
$("#coaches-1").click(() => {
  $("#coaches-modal-1").modal('show');
});

$("#coaches-2").click(() => {
  $("#coaches-modal-2").modal('show');
});

$("#coaches-3").click(() => {
  $("#coaches-modal-3").modal('show');
});

$("#coaches-4").click(() => {
  $("#coaches-modal-4").modal('show');
});

function validateForm() {
  var name =  document.getElementById('name').value;
  if (name == "") {
      document.getElementById('status').innerHTML = "Name cannot be empty!";
      return false;
  }
  var email =  document.getElementById('email').value;
  if (email == "") {
      document.getElementById('status').innerHTML = "Email cannot be empty!";
      return false;
  } else {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(!re.test(email)){
          document.getElementById('status').innerHTML = "Email format invalid!";
          return false;
      }
  }
  var subject =  document.getElementById('subject').value;
  if (subject == "") {
      document.getElementById('status').innerHTML = "Subject cannot be empty!";
      return false;
  }
  var message =  document.getElementById('message').value;
  if (message == "") {
      document.getElementById('status').innerHTML = "Message cannot be empty!";
      return false;
  }
  document.getElementById('status').innerHTML = "Sending...";
  document.getElementById('contact-form').submit();
  
  }