document.getElementById("myForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let fullname = document.getElementById("fullname").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let age = document.getElementById("age").value;
    let dob = document.getElementById("dob").value;
    let country = document.getElementById("country").value;
    let about = document.getElementById("about").value;

    // Get selected radio
    let gender = document.querySelector('input[name="gender"]:checked');
    gender = gender ? gender.value : "Not Selected";

    // Get selected checkboxes
    let skills = [];
    document.querySelectorAll('input[name="skills"]:checked')
        .forEach((skill) => {
            skills.push(skill.value);
        });

    // Get file name
    let resume = document.getElementById("resume").files[0];
    resume = resume ? resume.name : "No file uploaded";

    // Print data
    let outputDiv = document.getElementById("output");
    outputDiv.style.display = "block";
    outputDiv.innerHTML = `
        <h3>Submitted Data:</h3>
        <p><b>Name:</b> ${fullname}</p>
        <p><b>Email:</b> ${email}</p>
        <p><b>Password:</b> ${password}</p>
        <p><b>Age:</b> ${age}</p>
        <p><b>DOB:</b> ${dob}</p>
        <p><b>Gender:</b> ${gender}</p>
        <p><b>Skills:</b> ${skills.join(", ")}</p>
        <p><b>Country:</b> ${country}</p>
        <p><b>About:</b> ${about}</p>
        <p><b>Resume:</b> ${resume}</p>
    `;
});