console.log("connected")
function collectdData(){
    const email=document.getElementById("email").value;
    const password=document.getElementById("password").value;
    console.log("collect data")
    console.log(email);
    console.log(password);
    if(!email){
        document.getElementById("emailErr").innerHTML="Email is required";
    }else{
        document.getElementById("emailErr").innerHTML="";
    }
     if(!email){
        document.getElementById("passErr").innerHTML="Email is required";
    }else{
        document.getElementById("passErr").innerHTML="";
    }
    return false;
}