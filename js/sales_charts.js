document.querySelectorAll(".time-line-link").forEach(link => {
  link.addEventListener('click', function () {
      setTimeout(() => {
          const content = this.querySelector(".collapse");
          const line = this.querySelector(".line");
          if (content.classList.contains("show")) {
              line.style.height = (content.scrollHeight + 50) + 'px'; // Adjust based on your padding/margin
          } else {
              line.style.height = '70px';
          }
      }, 300); // Adjust timeout based on your collapse transition time
  });
});
const sales_chart = document.getElementById("sales-chart");

new Chart(sales_chart, {
  type: "line",
  data: {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    datasets: [
      {
        label: "Online Products",
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 3,
        pointRadius: 0, 
     
        fill: false,
        tension: 0.4
        

      },
      {
        label: "Course sales",
        data: [14, 19, 7, 5, 9, 3],
        borderWidth: 3,
        pointRadius: 0, // Set point radius to 0 to remove circular points
      
        fill: false,
        tension: 0.4

      },
      {
        label: "Services sales",
        data: [17, 34, 12, 34, 7, 13],
        borderWidth: 3,
        pointRadius: 0, // Set point radius to 0 to remove circular points
        borderWidth: 2,
        fill: false,
        tension: 0.4
      },
    ],
  },
});


const product_data = {
  labels: [
    "Eating",
    "Drinking",
    "Sleeping",
    "Designing",
    "Coding",
    "Cycling",
    "Running",
  ],
  datasets: [
    {
      label: "My First Dataset",
      data: [65, 59, 90, 81, 56, 55, 40],
      fill: true,
      backgroundColor: "rgba(255, 99, 132, 0.2)",
      borderColor: "rgb(255, 99, 132)",
      pointBackgroundColor: "rgb(255, 99, 132)",
      pointBorderColor: "#fff",
      pointHoverBackgroundColor: "#fff",
      pointHoverBorderColor: "rgb(255, 99, 132)",
    },
  ],
};
const Product_config = {
  type: "radar",
  data: product_data,
  options: {
    plugins: {
      legend: {
        display: false,
      },
    },
  },
};
const product = new Chart(document.getElementById("product"), Product_config);
const city_data = {
  labels: ["Red", "Blue", "Yellow"],
  datasets: [
    {
      label: "My First Dataset",
      data: [300, 50, 100],
      borderRadius: 10,

      backgroundColor: [
        "rgb(255, 99, 132)",
        "rgb(54, 162, 235)",
        "rgb(255, 205, 86)",
        
      ],
      hoverOffset: 4,
    },
  ],
};
const city_config = {
  type: "doughnut",
  data: city_data,
};
const product_city = new Chart(
  document.getElementById("product-by-city"),
  city_config
);
const region_data = {
  labels: ["Red", "Blue", "Yellow"],
  datasets: [
    {
      label: "My First Dataset",
      data: [30, 100, 100],
      backgroundColor: [
        "rgb(255, 99, 132)",
        "rgb(54, 162, 235)",
        "rgb(255, 205, 86)",
      ],
      hoverOffset: 4,
    },
  ],
};
const region_config = {
  type: "pie",
  data: region_data,
};
const product_region = new Chart(
  document.getElementById("product-by-region"),
  city_config
);
