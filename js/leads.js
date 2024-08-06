document.addEventListener("DOMContentLoaded", function () {
  const cold_leads = document.getElementById("cold-leads");
  new Chart(cold_leads, {
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
document.addEventListener("DOMContentLoaded", function () {
  const warm_leads = document.getElementById("warm-leads");
  new Chart(warm_leads, {
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
document.addEventListener("DOMContentLoaded", function () {
  const hot_leads = document.getElementById("hot-leads");
  new Chart(hot_leads, {
    type: "bar",
    data: {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [
        {
          label: "# of Votes",
          data: [1, 5, 12, 13, 9, 13],
          backgroundColor: ["rgba(255, 99, 132)"],
          borderColor: ["rgba(255, 99, 132)"],
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
document.addEventListener("DOMContentLoaded", function () {
  const hot_leads = document.getElementById("hot-leads");
  new Chart(hot_leads, {
    type: "line",
    data: {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [
        {
          label: "# of Votes",
          data: [1, 5, 12, 13, 9, 13],
          backgroundColor: ["rgba(255, 99, 132)"],
          borderColor: ["rgba(255, 99, 132)"],
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
document.addEventListener("DOMContentLoaded", function () {
  const conversion_leads = document.getElementById("conversion-leads");
  new Chart(conversion_leads, {
    type: "line",
    data: {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [
        {
          label: "# of Votes",
          data: [1, 5, 12, 13, 9, 13],
          backgroundColor: ["rgba(75, 192, 192, 1)"],
          borderColor: ["rgba(75, 192, 192, 1)"],
          borderWidth: 3,
          pointRadius: 0,
          borderRadius: 3,
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
          display: screenLeft,
          display: false,
        },
      },
    },
  });
});
document.addEventListener("DOMContentLoaded", function () {
  const performance_leads = document.getElementById("performance-leads");
  new Chart(performance_leads, {
    type: "line",
    data: {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [
        {
          label: "# of Votes",
          data: [1, 5, 12, 13, 9, 13],
          backgroundColor: ["rgba(75, 192, 192, 1)"],
          borderColor: ["rgba(75, 192, 192, 1)"],
          borderWidth: 1,
          pointRadius: 0,
          borderRadius: 3,
          fill: false,
          tension: 0.4,
        },
        {
          label: "# of Votes",
          data: [34, 10, 19, 13, 12, 17],
          backgroundColor: ["rgba(75, 192, 192, 1)"],
          borderColor: ["rgba(75, 192, 192, 1)"],
          borderWidth: 1,
          pointRadius: 0,
          borderRadius: 3,
          fill: false,
          tension: 0.4,
        },
        {
          label: "# of Votes",
          data: [21, 13, 12, 1, 9, 13],
          backgroundColor: ["rgba(56, 187, 65,1)"],
          borderColor: ["rgba(75, 192, 192, 1)"],
          borderWidth: 1,
          pointRadius: 0,
          borderRadius: 3,

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
        legend: {
          display: screenLeft,
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
