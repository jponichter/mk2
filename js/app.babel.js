"use strict";

$ = jQuery.noConflict();
$("#btn-right").click(animateCoaches);
$("#img-right").click(animateCoaches);
$("#btn-left").click(animateBuses);
$("#img-left").click(animateBuses);

function animateCoaches() {
  var tl = anime.timeline({
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
    var fleetHeight = $("#fleet-page").outerHeight();
    $("#coaches").outerHeight(fleetHeight);
  }

  $("#coaches").show();

  if (window.matchMedia("(max-width: 1024px)").matches) {
    $("nav").hide("slow");
  }
}

function animateBuses() {
  var tl = anime.timeline({
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
    var fleetHeight = $("#fleet-page").outerHeight();
    $("#buses").outerHeight(fleetHeight);
  }

  $("#buses").show();

  if (window.matchMedia("(max-width: 1024px)").matches) {
    $("nav").hide("slow");
  }
}

$("#btn-right-close").click(function() {
  var tl = anime.timeline({
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

  if (window.matchMedia("(max-width: 1024px)").matches) {
    $("nav").show("slow");
  }
});
$("#btn-left-close").click(function() {
  var tl = anime.timeline({
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

  if (window.matchMedia("(max-width: 1024px)").matches) {
    $("nav").show("slow");
  }
}); //Smooth scrolling

$(document).ready(function() {
  $('a[href^="#"]').on("click", function(e) {
    e.preventDefault();
    var navHeight = $("nav").height();
    var target = this.hash,
      $target = $(target);
    $("html, body")
      .stop()
      .animate(
        {
          scrollTop: $target.offset().top - navHeight
        },
        900,
        "swing"
      );
  });
}); //Modals

$("#buses-1").click(function() {
  $("#buses-modal-1").modal("show");
});
$("#buses-2").click(function() {
  $("#buses-modal-2").modal("show");
});
$("#buses-3").click(function() {
  $("#buses-modal-3").modal("show");
});
$("#buses-4").click(function() {
  $("#buses-modal-4").modal("show");
});
$("#coaches-1").click(function() {
  $("#coaches-modal-1").modal("show");
});
$("#coaches-2").click(function() {
  $("#coaches-modal-2").modal("show");
});
$("#coaches-3").click(function() {
  $("#coaches-modal-3").modal("show");
});
$("#coaches-4").click(function() {
  $("#coaches-modal-4").modal("show");
});

window.verifyRecaptchaCallback = function(response) {
  $("input[data-recaptcha]")
    .val(response)
    .trigger("change");
};

window.expiredRecaptchaCallback = function() {
  $("input[data-recaptcha]")
    .val("")
    .trigger("change");
};

function validateForm() {
  var checkbox = document.getElementById("form");

  if (!checkbox.checked) {
    document.getElementById("status").innerHTML =
      "Checkbox musi być zaznaczony!";
    return false;
  }

  var name = document.getElementById("name").value;

  if (name == "") {
    document.getElementById("status").innerHTML =
      "Imię i nazwisko nie może być puste!";
    return false;
  }

  var email = document.getElementById("email").value;

  if (email == "") {
    document.getElementById("status").innerHTML = "Email nie może być pusty!";
    return false;
  } else {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (!re.test(email)) {
      document.getElementById("status").innerHTML = "Email nieprawidłowy!";
      return false;
    }
  }

  var subject = document.getElementById("subject").value;

  if (subject == "") {
    document.getElementById("status").innerHTML = "Temat nie może być pusty!";
    return false;
  }

  var message = document.getElementById("message").value;

  if (message == "") {
    document.getElementById("status").innerHTML =
      "Wiadomość nie może być pusta!";
    return false;
  }

  if (grecaptcha === undefined) {
    document.getElementById("status").innerHTML =
      "Captcha musi być zaznaczona!";
    return false;
  }

  var responseCaptcha = grecaptcha.getResponse();

  if (!responseCaptcha) {
    document.getElementById("status").innerHTML =
      "Captcha musi być zaznaczona!";
    return false;
  } // document.getElementById('status').innerHTML = "Sending...";
  // document.getElementById('contact-form').submit();

  document.getElementById("status").innerHTML = "Sending...";
  var formData = {
    name: $("input[name=name]").val(),
    email: $("input[name=email]").val(),
    subject: $("input[name=subject]").val(),
    message: $("textarea[name=message]").val(),
    form: $("input:checkbox[name=form]").is(":checked"),
    "g-recaptcha-response": grecaptcha.getResponse()
  };
  var directoryUrl = my_ajax_object.ajax_url;
  $.ajax({
    url: directoryUrl + "/mail.php",
    type: "POST",
    data: formData,
    success: function success(data, textStatus, jqXHR) {
      $("#status").text(data.message);

      if (data.code) {
        //If mail was sent successfully, reset the form.
        $("#contact-form")
          .closest("form")
          .find("input[type=text], textarea")
          .val("");
        $("#form").prop("checked", false);
        grecaptcha.reset();
      }
    },
    error: function error(jqXHR, textStatus, errorThrown) {
      $("#status").text(jqXHR);
    }
  });
}

function hideNavbar() {
  for (i = 0; i < $(".nav-item").length; i++) {
    console.log(i);
  }
}

$(".nav-item").click(function() {
  $("#navbar-menu").removeClass("show");
});
