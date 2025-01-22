$(document).ready(function () {
  // Data for the chart

  $.ajax({
    url: "../controller/GetChartDetail.php",
    success: function (e) {
      let ChartDetail = e;
      var data = {
        labels: ["Complete", "Pending", "Cancel"],
        datasets: [
          {
            label: "Status",
            data: [
              ChartDetail?.complete,
              ChartDetail?.pending,
              ChartDetail?.cancel,
            ],
            backgroundColor: [
              "rgba(64, 255, 26, 0.2)",
              "rgba(252,180, 28, 0.2)",
              "rgba(252, 4, 4, 0.2)",
            ],
            borderColor: ["#5CFC3C", "#fcb41c", "rgba(252, 4, 4, 0.6)"],
            borderWidth: 1,
          },
        ],
      };

      // Configuration for the chart
      var options = {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          position: "right",
        },
        plugins: {
          title: {
            display: true,
            text: "Payment Status",
            position: "top",
            font: {
              size: 20, // Increase title size
            },
          },
        },
      };

      // Get the div element
      var ctx = $("#myPieChart");

      // Create the chart
      var myPieChart = new Chart(ctx, {
        type: "pie",
        data: data,
        options: options,
      });
    },
  });
});
