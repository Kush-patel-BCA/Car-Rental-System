$(document).ready(function () {
  if (localStorage.getItem("body")) {
    let newArr = localStorage.getItem("body")?.split(",");
    newArr.forEach((element) => {
      document.getElementById(element).checked = true;
    });
  }
  if (localStorage.getItem("seat")) {
    let newArr = localStorage.getItem("seat")?.split(",");
    newArr.forEach((element) => {
      document.getElementById(element).checked = true;
    });
  }
  $("#returndate").datepicker({
    dateFormat: "dd-M-yy",
    changeMonth: true,
    changeYear: true,
    minDate: new Date(),
    maxDate: "+1m",
  });
  $("#pickup").datepicker({
    dateFormat: "dd-M-yy",
    changeMonth: true,
    changeYear: true,
    minDate: new Date(),
    maxDate: "+1m",
  });

  function CheckVal(val) {
    let check = true;
    let valid = document.getElementsByName("valid");

    val.map((result, index) => {
      if (!result.value) {
        valid[index].style.display = "block";
        check = false;
      } else {
        valid[index].style.display = "none";
      }
    });
    if (check) {
      let PickDate = new Date(val[2]?.value);
      let DropDate = new Date(val[3]?.value);
      if (DropDate < PickDate) {
        check = false;
        $("#invalid-date").removeClass("d-none");
      } else {
        check = true;
        $("#invalid-date").addClass("d-none");
      }
    }
    return check;
  }
  $("#find").submit(function (e) {
    e.preventDefault();
    let data = $("#find").serializeArray();
    if (CheckVal(data)) {
      $("#section-cars").removeClass("d-none");
      console.log($(this).serialize());
      $.ajax({
        type: "POST",
        url: "controller/FindCar.php",
        data: $(this).serialize(),
        success: function (res) {
          $("#filter").removeClass("d-none");
          $("#addcars").html(res);
        },
      });
    }
  });

  $(".carBody").click(function () {
    let data = document.querySelectorAll(".carBody");
    let newArr = [];
    let ids = [];
    for (const item of data) {
      if (item.checked) {
        ids.push(item.id);
        newArr.push(item);
      }
    }
    localStorage.setItem("body", ids);
    $.ajax({
      type: "POST",
      url: "controller/Filter.php",
      data: {
        body: $(newArr).serializeArray(),
      },
      success: function (res) {
        $("#addcars").html(res);
      },
    });
  });
  $(".carSeat").click(function () {
    let data = document.querySelectorAll(".carSeat");
    let newArr = [];
    let ids = [];
    for (const item of data) {
      if (item.checked) {
        newArr.push(item);
        ids.push(item.id);
      }
    }
    localStorage.setItem("seat", ids);
    $.ajax({
      type: "POST",
      url: "controller/FilterSeat.php",
      data: {
        seat: $(newArr).serializeArray(),
      },
      success: function (res) {
        $("#addcars").html(res);
      },
    });
  });
});
