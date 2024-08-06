const body = document.querySelector("body");
const darkLight = document.querySelector("#darkLight");
const sidebar = document.querySelector(".sidebar");
const submenuItems = document.querySelectorAll(".submenu_item");
const sidebarOpen = document.querySelector("#sidebarOpen");
const sidebarClose = document.querySelector(".collapse_sidebar");
const sidebarExpand = document.querySelector(".expand_sidebar");
sidebarOpen.addEventListener("click", () => sidebar.classList.toggle("close"));

sidebarClose.addEventListener("click", () => {
  sidebar.classList.add("close", "hoverable");
});
sidebarExpand.addEventListener("click", () => {
  sidebar.classList.remove("close", "hoverable");
});

sidebar.addEventListener("mouseenter", () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.remove("close");
  }
});
sidebar.addEventListener("mouseleave", () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.add("close");
  }
});

darkLight.addEventListener("click", () => {
  body.classList.toggle("dark");
  if (body.classList.contains("dark")) {
    document.setI;
    darkLight.classList.replace("bx-sun", "bx-moon");
  } else {
    darkLight.classList.replace("bx-moon", "bx-sun");
  }
});

submenuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    item.classList.toggle("show_submenu");
    submenuItems.forEach((item2, index2) => {
      if (index !== index2) {
        item2.classList.remove("show_submenu");
      }
    });
  });
});

if (window.innerWidth < 768) {
  sidebar.classList.add("close");
} else {
  sidebar.classList.remove("close");
}

// charts

const new_users_chart = document.getElementById("new-users");
new Chart(new_users_chart, {
  type: "line",
  data: {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    datasets: [
      {
        label: "# of Votes",
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1,
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
document.addEventListener("DOMContentLoaded", function () {
  const current_users_chart = document.getElementById("current-users");
  new Chart(current_users_chart, {
    type: "line",
    data: {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [
        {
          label: "# of Votes",
          data: [12, 19, 37, 5, 10, 3],
          backgroundColor: ["rgba(75, 192, 192, 0.2)"],
          borderColor: ["rgba(75, 192, 192, 1)"],
          borderWidth: 1,
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
  const web_vistors_chart = document.getElementById("web-visitors");
  new Chart(web_vistors_chart, {
    type: "line",
    data: {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [
        {
          label: "# of Votes",
          data: [54, 13, 3, 10, 2, 3],
          backgroundColor: ["rgba(153, 102, 255, 0.2)"],
          borderColor: ["rgba(153, 102, 255, 1)"],
          borderWidth: 1,
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
  const other_chart = document.getElementById("other");
  new Chart(other_chart, {
    type: "line",
    data: {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [
        {
          label: "",
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: ["rgba(255, 206, 86, 0.2)"],
          borderColor: ["rgba(255, 206, 86, 1)"],
          borderWidth: 1,
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

const globe_chart = document.getElementById("globe");
new Chart(globe_chart, {
  type: "bar",
  data: {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    datasets: [
      {
        label: "Website Traffic ",
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1,
        barThickness: 20,
        borderRadius: 10,
      },
      {
        label: "Website Traffic ",
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1,
        barThickness: 20,
        borderRadius: 10,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});

const data = {
  labels: ["Red", "Blue", "Yellow"],
  datasets: [
    {
      label: "My First Dataset",
      data: [300, 50, 100],
      backgroundColor: [
        "rgb(255, 99, 132)",
        "rgb(54, 162, 235)",
        "rgb(255, 205, 86)",
      ],
      hoverOffset: 4,
    },
  ],
};
const config = {
  type: "doughnut",
  data: data,
  options: {
    plugins: {
      legend: {
        display: false,
      },
    },
  },
};
const phone = new Chart(document.getElementById("phone-chart"), config);

const data1 = {
  labels: ["Red", "Blue", "Yellow"],
  datasets: [
    {
      label: "My First Dataset",
      data1: [100, 50, 100],
      backgroundColor: [
        "rgb(255, 99, 132)",
        "rgb(54, 162, 235)",
        "rgb(255, 205, 86)",
      ],
      hoverOffset: 4,
    },
  ],
};
const config1 = {
  type: "doughnut",
  data: data,
  options: {
    plugins: {
      legend: {
        display: false,
      },
    },
  },
};
const tablet = new Chart(document.getElementById("tablet-chart"), config1);

const data2 = {
  labels: ["Red", "Blue", "Yellow"],
  datasets: [
    {
      label: "My First Dataset",
      data: [100, 50, 100],
      backgroundColor: [
        "rgb(255, 99, 132)",
        "rgb(54, 162, 235)",
        "rgb(255, 205, 86)",
      ],
      hoverOffset: 4,
    },
  ],
};
const config2 = {
  type: "doughnut",
  data: data2,
  options: {
    plugins: {
      legend: {
        display: false,
      },
    },
  },
};
const laptop = new Chart(document.getElementById("Laptop-chart"), config2);
const data3 = {
  labels: ["Red", "Blue", "Yellow"],
  datasets: [
    {
      label: "My First Dataset",
      data: [10, 10, 100],
      backgroundColor: [
        "rgb(255, 99, 132)",
        "rgb(54, 162, 235)",
        "rgb(255, 205, 86)",
      ],
      hoverOffset: 4,
    },
  ],
};
const config3 = {
  type: "doughnut",
  data: data3,
  options: {
    plugins: {
      legend: {
        display: false,
      },
    },
  },
};
const other = new Chart(document.getElementById("other-devices"), config3);
