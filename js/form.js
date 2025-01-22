$(document).ready(function () {
  $("#success_message").hide();
  $("#error_message").hide();
  function CheckStatus(res) {
    if (res) {
      $("#success_message").show();
    } else {
      $("#error_message").show();
    }
    $("#contact_form").trigger("reset");
  }
  $("#up_modal").click(function () {
    $("#update_modal").modal("show");
  });
  $("#chg_pwd").click(function () {
    $("#chanage_pwd").modal("show");
  });
  $("#contact_form").submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "controller/ContactUs.php",
      data: $(this).serializeArray(),
      success: CheckStatus,
    });
  });
  // Account
  $("#close").click(function () {
    $("#update_modal").modal("hide");
  });
  $("#close1").click(function () {
    $("#chanage_pwd").modal("hide");
  });
  $("#update_user").submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "controller/UpdateUser.php",
      data: $(this).serializeArray(),
    });
    window.location = "account.php";
  });
  // Check Password
  function CheckPassword(e) {
    // if (e) window.location = "account.php";
    console.log(e);
    if (e == 1) {
      window.location = "account.php";
    } else {
      $("#wrong-password").removeClass("d-none");
    }
    $("#chnage_password").trigger("reset");
  }
  // New Password
  $("#chnage_password").submit(function (e) {
    e.preventDefault();
    $("#error-password").addClass("d-none");
    $("#wrong-password").addClass("d-none");
    let MainData = $(this).serializeArray();
    if (MainData[1]?.value == MainData[2]?.value) {
      $.ajax({
        type: "POST",
        url: "controller/ChangePassword.php",
        data: MainData,
        success: CheckPassword,
      });
    } else {
      $("#error-password").removeClass("d-none");
    }
  });
  $("#exitbtn").click(function () {
    $("#exitModal").modal("show");
  });
  $("#close2").click(function () {
    $("#exitModal").modal("hide");
  });

  // Information Page
  $(".infopage").click(function () {
    let id = $(this).attr("data-info");
    $.ajax({
      type: "GET",
      url: `controller/Getinfo.php?id=${id}`,
      success: function (e) {
        $("#info_body").html(e);
      },
    });
    $("#info_modal").modal("show");
  });

  $("#info_close").click(function () {
    $("#info_modal").modal("hide");
  });
  // Review
  $("#reviewClose").click(function () {
    $("#review").modal("hide");
  });
  $("#reviewBox").click(function () {
    let id = $(this).attr("data-id");
    $("#review_body").attr("data-upid", id);

    $("#review").modal("show");
  });
  $("#sendReview").click(function () {
    let star = document.getElementsByName("star");
    let count = "";
    for (let index = 0; index < star.length; index++) {
      const element = star[index];
      if (element.checked) {
        count = element.id.split("-")[1];
      }
    }
    let mess = document.getElementById("reviewtext").value;
    let updateId = $("#review_body").attr("data-upid");
    // Create a dummy form element
    let form = document.createElement("form");

    let input1 = document.createElement("input");
    input1.type = "hidden"; // Hidden input
    input1.name = "review"; // Name of the variable
    input1.value = count;
    form.appendChild(input1);

    // Variable 2

    let input2 = document.createElement("input");
    input2.type = "hidden"; // Hidden input
    input2.name = "message"; // Name of the variable
    input2.value = mess;
    form.appendChild(input2);

    let input3 = document.createElement("input");
    input3.type = "hidden"; // Hidden input
    input3.name = "bookid"; // Name of the variable
    input3.value = updateId;
    form.appendChild(input3);

    // Now, serialize the form elements
    let serializedArray = $(form).serializeArray();
    $.ajax({
      type: "POST",
      url: "controller/ReviewPost.php",
      data: serializedArray,
      success: function (e) {
        window.location = "http://localhost/reant/myorders.php";
      },
    });
  });
});
