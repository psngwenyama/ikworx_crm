
document.addEventListener("DOMContentLoaded", function () {
    axios.get('./lead/leads.php')
        .then(response => {
            const leadsData = response.data;
            const cardsContainer = document.getElementById("cards-container");

            leadsData.forEach(person => {
                const colDiv = document.createElement("div");
                colDiv.className = "col-md-12";

                const cardDiv = document.createElement("div");
                cardDiv.className = "card";

                const cardHeaderDiv = document.createElement("div");
                cardHeaderDiv.className = "card-header mb-3";

                const rowDiv = document.createElement("div");
                rowDiv.className = "row";

                const colHeaderDiv = document.createElement("div");
                colHeaderDiv.className = "col-md-12";
                colHeaderDiv.innerHTML = `<h6>${person.assigned}</h6>`;

                const colIconsDiv = document.createElement("div");
                colIconsDiv.className = "col-md-4";
                colIconsDiv.innerHTML = '<i class="bx bx-layer"></i><i class="bx bx-download"></i>';

                rowDiv.appendChild(colHeaderDiv);
                rowDiv.appendChild(colIconsDiv);
                cardHeaderDiv.appendChild(rowDiv);

                const table = document.createElement("table");
                table.className = "table bg-light";

                const tbody = document.createElement("tbody");

                const tr = document.createElement("tr");
                const tdIcon = document.createElement("td");
                const tdName = document.createElement("td");
                const tdCount = document.createElement("td");

                tdIcon.innerHTML = '<div class="tender-table-icons"><i class="bx bx-briefcase"></i></div>';
                tdName.innerHTML = `<span class="number-of-files">Total leads</span>`;
                tdCount.innerHTML = `<span class="storage-size">${person.total_leads}</span>`;

                tr.appendChild(tdIcon);
                tr.appendChild(tdName);
                tr.appendChild(tdCount);
                tbody.appendChild(tr);

                const trProgress = document.createElement("tr");
                const tdProgress = document.createElement("td");
                tdProgress.colSpan = 3;

                const progressDiv = document.createElement("div");
                progressDiv.className = "progress";
                progressDiv.setAttribute("role", "progressbar");
                progressDiv.setAttribute("aria-label", "Success example");
                progressDiv.setAttribute("aria-valuenow", "25");
                progressDiv.setAttribute("aria-valuemin", "0");
                progressDiv.setAttribute("aria-valuemax", "100");

                const progressBarDiv = document.createElement("div");
                progressBarDiv.className = "progress-bar bg-success";
                progressBarDiv.style.width = "100%";

                progressDiv.appendChild(progressBarDiv);
                tdProgress.appendChild(progressDiv);
                trProgress.appendChild(tdProgress);
                tbody.appendChild(trProgress);

                table.appendChild(tbody);

                cardDiv.appendChild(cardHeaderDiv);
                cardDiv.appendChild(table);
                colDiv.appendChild(cardDiv);

                cardsContainer.appendChild(colDiv);
            });
        })
        .catch(error => {
            console.error("There was an error fetching the leads data:", error);
        });
});
