$(".counter-up").counterUp({
  delay: 10,
  time: 1000,
});
var labelArr = ["12 jul", "13 jul", "14 jul", "15 jul", "16 jul", "17 jul"];
const ctx = document.getElementById("myChart").getContext("2d");
const myChart = new Chart(ctx, {
  type: "line",
  data: {
    labels: labelArr,
    datasets: [
      {
        label: "Order",
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: ["#007bff30"],
        borderColor: ["#007bff"],
        borderWidth: 1,
        tension: 0.01,
      },
      {
        label: "Viewer",
        data: [14, 22, 8, 4, 5, 2],
        backgroundColor: ["#28a74530"],
        borderColor: ["#28a745"],
        borderWidth: 1,
        tension: 0.01,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
      xAxes: [
        {
          display: true,
          gridLines: [
            {
              display: false,
            },
          ],
        },
      ],
    },

    legend: {
      display: true,
      position: "top",
      labels: {
        fontColor: "#333",
        usePointStyle: true,
      },
    },
  },
});
let orderFromPlace = [5, 3, 6, 8, 12];
let places = ["YGN", "MDY", "MLM", "POL", "LK "];

const ctx1 = document.getElementById("placer");
const myChart1 = new Chart(ctx1, {
  type: "doughnut",
  data: {
    labels: places,
    datasets: [
      {
        label: "# of Votes",
        data: orderFromPlace,
        backgroundColor: [
          "rgba(255, 99, 132, 0.2)",
          "rgba(54, 162, 235, 0.2)",
          "rgba(255, 206, 86, 0.2)",
          "rgba(75, 192, 192, 0.2)",
          "rgba(153, 102, 255, 0.2)",
        ],
        borderColor: [
          "rgba(255, 99, 132, 1)",
          "rgba(54, 162, 235, 1)",
          "rgba(255, 206, 86, 1)",
          "rgba(75, 192, 192, 1)",
          "rgba(153, 102, 255, 1)",
        ],
        borderWidth: 1,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
    legend: {
      display: true,
      position: "bottom",
      labels: {
        fontColor: "#333",
        usePointStyle: true,
      },
    },
  },
});
