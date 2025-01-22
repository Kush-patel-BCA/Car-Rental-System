$(document).ready(function () {
  let DetailData = null;
  let PaymentData = null;
  $("#formbook").submit(function (e) {
    e.preventDefault();
    DetailData = $(this).serializeArray();
    $.ajax({
      type: "POST",
      url: "controller/BookCar.php",
      data: DetailData,
      success: function (res) {
        let [f_data, l_data] = res.split(",");
        window.location = `CheckOut.php?id=${f_data}&total=${l_data}`;
      },
    });
  });

  // $("#payment-form").submit(function (e) {
  //   e.preventDefault();
  //   $("#payment-card").hide();
  //   $("#loader-form").removeClass("d-none");
  //   PaymentData = $(this).serializeArray();
  //   let MainData = DetailData.concat(PaymentData);

  //   $.ajax({
  //     type: "POST",
  //     url: "controller/BookCar.php",
  //     data: MainData,
  //     success: function (re) {
  //       console.log(re);
  //     },
  //   });
  //   setTimeout(function () {
  //     $("#loader-form").addClass("d-none");
  //     $(".car-d").hide();
  //     $("#successPage").removeClass("d-none");
  //   }, 800);
  // });
});
