$(document).ready(function () {
  $(".toast").show();
  $("#main_success").hide();
  $("#main_fail").hide();
  //  Validation
  function Validation(demo) {
    let result = true;
    let valid = document.querySelectorAll("#valid");

    $.each(demo, (index, data) => {
      if (data.value == "") {
        valid[index].style.display = "block";
        result = false;
      } else {
        valid[index].style.display = "none";
      }
    });
    if (demo.length > 2) {
      if (demo[4].value && demo[4].value !== demo[5].value) {
        valid[valid.length - 1].style.display = "block";
        result = false;
      } else {
        valid[valid.length - 1].style.display = "none";
      }
    }
    return result;
  }
  // Register Checking
  function CheckCondition(response) {
    $("#sign_up").trigger("reset");
    if (response == 1) {
      $("#main_fail").hide();
      $("#main_success").show();
    } else {
      $("#main_fail").show();
      $("#main_success").hide();
      $("#main_fail").text("Sorry,Username or Email must unique");

      return;
    }
  }
  // Register
  $("#sign_up").submit(function (e) {
    e.preventDefault();
    const val = $(".form-control").serializeArray();
    if (Validation(val)) {
      $.ajax({
        type: "POST",
        url: "controller/register_data.php",
        data: $(this).serialize(),
        success: CheckCondition,
      });
    }
  });

  // Login
  $("#login").submit(function (e) {
    e.preventDefault();
    const val = $(".form-control").serializeArray();
    if (Validation(val)) {
      $.ajax({
        type: "POST",
        url: "controller/login_data.php",
        data: $(this).serialize(),
        success: function (res) {
          console.log(res);
          if (res == 1) {
            $("#error_mess").removeClass("d-none");
          } else if (res == "Driver") {
            window.location.href = "DriverPanel.php";
          } else {
            window.location.href = "index.php";
          }
          $("#login").trigger("reset");
        },
      });
    }
  });
});
