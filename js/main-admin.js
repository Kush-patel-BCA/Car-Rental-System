$(document).ready(function () {
  $(".edit-status").on("change", function () {
    let val = this.value;
    let id = $(this).attr("data-id");
    $.ajax({
      type: "GET",
      url: `../controller/StatusChange.php?id=${id}&val=${val}`,
      success: function (e) {
        console.log(e);
      },
    });
  });

  // Booked Modal
  $(".book-info").click(function () {
    let id = $(this).attr("data-id");
    $.ajax({
      type: "GET",
      url: `../controller/GetBookingInfo.php?id=${id}`,
      success: function (e) {
        $("#booked_body").html(e);
      },
    });
    $("#booked").modal("show");
  });

  $("#booked_close").click(function () {
    $("#booked").modal("hide");
  });

  // Manage
  $("#warningbtn").click(function () {
    let id = $(this).attr("data-car");
    let btn = `<button id='btn_delete' data-id='${id}'>Delete</button>`;
    $("#warning_btn").append(btn);
    $("#Warning_Modal").modal("show");
  });
  $("#close_warning").click(function () {
    $("#Warning_Modal").modal("hide");
  });

  $("#warning_btn").click(function () {
    let mainId = $("#btn_delete").attr("data-id");
    $.ajax({
      type: "GET",
      url: `../controller/DeleteCar.php?id=${mainId}`,
      success: function (e) {
        window.location = "http://localhost/reant/admin/Manage-car.php";
      },
    });
  });

  // Show Image

  $(".licence").click(function () {
    let img = $(this).attr("data-img");
    let mainImg = `<img src='../${img}'/>`;
    $("#img_body").html(mainImg);
    $("#img_modal").modal("show");
  });

  // Edit Driver
  $(".edit-status-driver").on("change", function () {
    $(".loading").removeClass("d-none");
    let val = this.value;
    let id = $(this).attr("data-id");
    $.ajax({
      type: "GET",
      url: `../controller/ChangeDriver.php?id=${id}&val=${val}`,
      success: function (e) {
        $(".loading").addClass("d-none");
      },
    });
  });

  $(".editdriver").on("change", function () {
    $(".loading").removeClass("d-none");
    let val = this.value;
    let id = $(this).attr("data-id");
    $.ajax({
      type: "GET",
      url: `../controller/ChangeDriverFromBook.php?id=${id}&val=${val}`,
      success: function (e) {
        $.ajax({
          type: "GET",
          url: `../controller/SendMailToDriver.php?id=${id}`,
          success: function (e) {
            $(".loading").addClass("d-none");
          },
        });
      },
    });
  });
});
