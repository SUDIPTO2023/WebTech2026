console.log("Connected")
var cnt = 0;
function collectData() {
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  console.log("Collect data from form")
  console.log(email);
  console.log(password);
  let isEmailValid = false;
  let isPasswordValid = false;
  if (!email) {
    document.getElementById("erroremail").innerHTML = "input valid email";
   
  }
  else if (!email.includes("@gmail.com")) {
    document.getElementById("erroremail").innerHTML = "input valid email";
    alert("give valid email");
  } else {
    document.getElementById("erroremail").innerHTML = "";
    isEmailValid = true;
  }


  if (!password) {
    document.getElementById("eroorpassword").innerHTML = "input valid password";
    
  } else if (!password.includes("#")) {
    document.getElementById("eroorpassword").innerHTML = "input valid password";
    alert("please give # character variation")
    if (password.length < 6) {
      alert("please give atleaset 6 character");
     
    }
  } else {
    document.getElementById("eroorpassword").innerHTML = "";
    isPasswordValid = true;
  }

  if (!isEmailValid || !isPasswordValid) {
     cnt++;
    document.getElementById("cnt").innerHTML = "Wrong Submit:" + cnt;
  }










  return false;
}