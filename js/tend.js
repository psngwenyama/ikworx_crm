document.addEventListener("DOMContentLoaded", function () {
  const cold = document.getElementById("cold");
  new Chart(cold, {
    type: "line",
    data: {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [
        {
          label: "# of Votes",
          data: [12, 19, 37, 5, 10, 3],
          backgroundColor: ["rgba(75, 192, 192, 0.2)"],
          borderColor: ["rgba(75, 192, 192, 1)"],
          borderWidth: 3,
          pointRadius: 0,

          fill: false,
          tension: 0.4,
        },
      ],
    },
    options: {
      scales: {
        x: {
          // ticks:{
          //     display: false
          // }
        },
        y: {
          beginAtZero: true,
        },
      },
      plugins: {
        legend: {},
      },
    },
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const tendering_leads = document.getElementById("tendering");
  new Chart(tendering_leads, {
    type: "line",
    data: {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [
        {
          label: "# of Votes",
          data: [4, 7, 13, 5, 14, 17],
          backgroundColor: ["rgba(153, 102, 255, 0.2)"],
          borderColor: ["rgba(153, 102, 255, 1)"],
          borderWidth: 3,
          pointRadius: 0,

          fill: false,
          tension: 0.4,
        },
      ],
    },
    options: {
      scales: {
        x: {
          // ticks:{
          //     display: false
          // }
          display: false,
        },
        y: {
          beginAtZero: true,
          display: false,
        },
      },
      plugins: {
        legend: {
          display: false,
        },
      },
    },
  });
});

$(".progress").each(function () {
  var $bar = $(this).find(".bar");
  var $val = $(this).find("pro-span");
  var perc = parseInt($val.text(), 10);

  $({ p: 0 }).animate(
    { p: perc },
    {
      duration: 3000,
      easing: "swing",
      step: function (p) {
        $bar.css({
          transform: "rotate(" + (45 + p * 1.8) + "deg)", // 100%=180° so: ° = % * 1.8
          // 45 is to add the needed rotation to have the green borders at the bottom
        });
        $val.text(p | 0);
      },
    }
  );
});
