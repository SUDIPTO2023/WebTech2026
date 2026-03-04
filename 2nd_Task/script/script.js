console.log("Connected")
var cnt=0;
function collectData(){
  const email=document.getElementById("email").value;
  const password=document.getElementById("password").value;
  console.log("Collect data from form")
  console.log(email);
  console.log(password);
  
  if(!email)
  {
    document.getElementById("erroremail").innerHTML="input valid email";
    cnt++;
    alert("Error Submit:"+cnt);
  }
 
  else if(!email.email)
 {
    document.getElementById("erroremail").innerHTML="input valid email";
 
 }
  
  else{
        document.getElementById("erroremail").innerHTML="";
  }
   if(!password )
  {
    document.getElementById("eroorpassword").innerHTML="input valid password";
     cnt++;
    alert("Error Submit:"+cnt);



  }

    else if(password.cnt!=6)
 {
    document.getElementById("eroorpassword").innerHTML="input valid password";
     
    alert("please give valid password");
    alert("Error Submit:"+cnt);
 }
  
else{
        document.getElementById("eroorpassword").innerHTML="";
  }










  return false;
}