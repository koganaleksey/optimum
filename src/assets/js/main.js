"use strict";

$(document).ready(function () {
  $("body").autoPadding({
    source: $(".js-header"),
  });

  // Burger Menu
  $("#myInput").change(function () {
    if (this.checked) {
      $('body').addClass("no-scroll");
    }
  });

  $("#myInput").change(function () {
    if (this.checked === false) {
      $('body').removeClass("no-scroll");
    }
  });

  $(".aside-anchor").click(function () {
    $('body').removeClass("no-scroll");
    $("#myInput").prop('checked', false)
  })

    // Form Validation
    (function () {
      window.addEventListener(
        "load",
        function () {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName("needs-validation");
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener(
              "submit",
              function (event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add("was-validated");
              },
              false
            );
          });
        },
        false
      );
    })();
  // End Form Validation

  //removeIf(production)
  console.log("document ready");
  //endRemoveIf(production)
});
