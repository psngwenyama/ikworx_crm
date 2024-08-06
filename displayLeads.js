document.addEventListener("DOMContentLoaded", function () {
  fetchLeads();
});

function fetchLeads() {
  fetch("./lead/fetch_leads.php")
    .then((response) => response.json())
    .then((data) => displayLeads(data))
    .catch((error) => console.error("Error fetching leads:", error));
}

function displayLeads(leads) {
  const tableBody = document.querySelector("#active-deals tbody");
  tableBody.innerHTML = "";

  leads.forEach((lead) => {
    const row = document.createElement("tr");

    row.innerHTML = `
            <td>${lead.name}</td>
            <td>${lead.company}</td>
            <td>${lead.email}</td>
            <td>${lead.Phone}</td>
            <td>${lead.Value}</td>
            <td>${lead.Tags}</td>
            <td>${lead.Assigned}</td>
            <td>${lead.Status}</td>
            <td>${lead.Source}</td>
            <td>${lead.Last_contact}</td>
            <td>${lead.Created}</td>
            <td>${lead.Course_name}</td>
            <td>
                <button class="btn btn-primary edit-btn" data-lead='${JSON.stringify(
                  lead
                )}' data-toggle="modal" data-target="#editLeadModal">Edit</button>
            </td>
        `;

    tableBody.appendChild(row);
  });

  document.querySelectorAll(".edit-btn").forEach((button) => {
    button.addEventListener("click", function () {
      const lead = JSON.parse(this.getAttribute("data-lead"));
      populateEditForm(lead);
    });
  });
}

function populateEditForm(lead) {
  document.getElementById("editLeadId").value = lead.lead_id;
  document.getElementById("editName").value = lead.Name;
  document.getElementById("editCompany").value = lead.Company;
  document.getElementById("editEmail").value = lead.Email;
  document.getElementById("editPhone").value = lead.Phone;
  document.getElementById("editValue").value = lead.Value;
  document.getElementById("editTags").value = lead.Tags;
  document.getElementById("editAssigned").value = lead.Assigned;
  document.getElementById("editStatus").value = lead.Status;
  document.getElementById("editSource").value = lead.Source;
  document.getElementById("editLastContact").value = lead.Last_contact;
  document.getElementById("editCreated").value = lead.Created;
  document.getElementById("editCourseName").value = lead.Course_name;
}

document
  .getElementById("editLeadForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    const formData = new FormData(this);

    fetch("./lead/update_lead.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          $("#editLeadModal").modal("hide");
          fetchLeads(); // Refresh the leads list
        } else {
          alert("Failed to update lead");
        }
      })
      .catch((error) => console.error("Error updating lead:", error));
  });

// Live search functionality
$("#searchInput").on("keyup", function () {
  var value = $(this).val().toLowerCase();
  $("#active-deals tbody tr").filter(function () {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
  });
});

document
  .getElementById("addLeadForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    const formData = new FormData(this);

    fetch("./lead/add_lead.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          $("#addLeadModal").modal("hide");
          fetchLeads(); // Refresh the leads list
        } else {
          alert("Failed to add lead");
        }
      })
      .catch((error) => console.error("Error adding lead:", error));
  });
