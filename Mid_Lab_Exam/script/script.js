console.log("connected")
let totalcnt = 0;
let vcnt = 0;
let pcnt = 0;
function collectData() {


    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const company = document.getElementById("Cname").value;
    const virtual = document.getElementById("virtual");
    const person = document.getElementById("person");


    let isNameValid = false;
    let isEmailValid = false;
    let isCompanyValid = false;
    let isAttendanceValid = false;

    //Name Validation
    if (!name) {
        document.getElementById("errorname").innerHTML = "Name must be between 6 and 100 characters."
    }
    else if (name.length < 6 || name.length > 100) {
        document.getElementById("errorname").innerHTML = "Name must be between 6 and 100 characters."
    }
    else {
        document.getElementById("errorname").innerHTML = "";
        isNameValid = true;
    }
    // Email validation
    if (!email) {
        document.getElementById("erroremail").innerHTML = "Please enter a valid professional email address."
    } else if (!email.includes("@") || !email.includes(".")) {
        document.getElementById("erroremail").innerHTML = "Please enter a valid professional email address."
    }
    else {
        document.getElementById("erroremail").innerHTML = "";
        isEmailValid = true;
    }
    //company validation
    if (!company) {
        document.getElementById("errorCname").innerHTML = "";
        isCompanyValid = true;
    } else if (company.length > 100) {
        document.getElementById("errorCname").innerHTML = "Maximum Character Length 100";
        isCompanyValid = true;
    }
    else {
        document.getElementById("errorCname").innerHTML = "";
        isCompanyValid = true;
    }
    if (!virtual.checked && !person.checked) {
        document.getElementById("errorattend").innerHTML = "Please select your attendance type.";
    }
    else {
        document.getElementById("errorattend").innerHTML = "";


        if (virtual.checked) {
            console.log("Virtual");

        }
        else if (person.checked) {
            console.log("In-Person");

        }
        isAttendanceValid = true;
    }

    if (isNameValid && isEmailValid && isCompanyValid && isAttendanceValid) {
        totalcnt++
        if (virtual.checked) {
            vcnt++;
        } else if (person.checked) {
            pcnt++
        }
        alert("Form submitted successfully");

    }

    



    return false;
}
function staticdisplay() {
        const panel = document.getElementById("analysis")
        const btn = document.getElementById("btn")

        document.getElementById("totalcnt").innerHTML=totalcnt;
        document.getElementById("vcnt").innerHTML=vcnt;
        document.getElementById("pcnt").innerHTML=pcnt;
        if (panel.hidden) {
            panel.hidden = false;
            btn.innerHTML = "Hide Event Analytics";
        }

        else {
            panel.hidden = true;
            btn.innerHTML = "Show Event Analytics";
        }

    }