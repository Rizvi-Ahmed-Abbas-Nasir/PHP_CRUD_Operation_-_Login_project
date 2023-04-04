let create = document.querySelector("#create");
let update = document.querySelector("#update");
let update_student = document.querySelector("#update-student");
let close = document.querySelector("#update_close");
let success = document.querySelector(".alert-success")
let error = document.querySelector(".alert-danger")

console.log("Working");


create.addEventListener("click", async () => {
    try {
        let name = document.querySelector("#name").value;
        let enroll = document.querySelector("#enroll").value;
        let stclass = document.querySelector("#stclass").value;
       
        


        const res = await fetch("php/insert-data.php", {
            method: "POST",
            body: JSON.stringify({ "name": name, "enroll": enroll, "stclass": stclass}),
            headers: {
                "Content-Type": "application/json"
            }
        });
        const output = await res.json();

        if (output.success) {
            // success.style.display = "flex";
            // success.innerText = output.message;
            name = "";
            enroll = "";
            stclass = "";
            // modal.style.display = "none";
            getStudents();
            setTimeout(() => {
                success.style.display = "none";
                success.innerText = "";

            }, 1000)

        } else {
            // error.style.display = "flex";
            // error.innerText = output.message;
            setTimeout(() => {
                error.style.display = "none";
                error.innerText = "";

            }, 1000)
        }
    } catch (error) {
        error.style.display = "flex";
        error.innerText = error.message;
        setTimeout(() => {
            error.style.display = "none";
            error.innerText = "";

        }, 1000)
    }
});

// select Student
const getStudents = async () => {
    try {
        const tbody = document.querySelector("#Tbody");
        let tr = "";
        const res = await fetch("php/select-data.php", {
            method: "GET",
            headers: {
                "Content-Type": "application/json"
            }
        });

        const output = await res.json();
        if (output.empty === "empty") {
            tr = "<tr>Record Not Found</td>"
        } else {
            for (var i in output) {
                tr += `
            <tr>
            <td>${parseInt(i) + 1}</td>
            <td>${output[i].std_name}</td>
            <td>${output[i].std_enroll}</td>
            <td>${output[i].std_stclass}</td>
            <td><button onclick="editStudent(${output[i].id})" class="btn btn-success">Edit</button></td>
            <td><button onclick="deleteStudent(${output[i].id})"  class="btn btn-danger">Delete</button></td>
            </tr>`
            }
        }
        tbody.innerHTML = tr;
    } catch (error) {
        console.log("error"+error)
    }
}

getStudents();