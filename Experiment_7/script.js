let users = JSON.parse(localStorage.getItem("users")) || [];

// FORM SUBMIT
document.getElementById("userForm")?.addEventListener("submit", function(e) {
    e.preventDefault();

    let user = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        age: document.getElementById("age").value
    };

    users.push(user);
    localStorage.setItem("users", JSON.stringify(users));

    this.reset();
    alert("Data Saved!");
});

// GO TO TABLE PAGE
function goToTable() {
    window.location.href = "table.html";
}

// PRINT TABLE USING FOR LOOP
if (document.querySelector("#dataTable")) {
    let tbody = document.querySelector("#dataTable tbody");

    for (let i = 0; i < users.length; i++) {
        let row = `
            <tr>
                <td>${users[i].name}</td>
                <td>${users[i].email}</td>
                <td>${users[i].age}</td>
            </tr>
        `;
        tbody.innerHTML += row;
    }
}

// DOWNLOAD CSV
function downloadCSV() {
    let csv = "Name,Email,Age\n";

    users.forEach(user => {
        csv += `${user.name},${user.email},${user.age}\n`;
    });

    let blob = new Blob([csv], { type: "text/csv" });
    let url = URL.createObjectURL(blob);

    let a = document.createElement("a");
    a.href = url;
    a.download = "users.csv";
    a.click();
}

// COPY TABLE USING NAVIGATOR.CLIPBOARD
function copyTable() {
    let tableText = "Name\tEmail\tAge\n";

    users.forEach(user => {
        tableText += `${user.name}\t${user.email}\t${user.age}\n`;
    });

    navigator.clipboard.writeText(tableText)
        .then(() => alert("Copied to Clipboard!"))
        .catch(err => alert("Error copying"));
}