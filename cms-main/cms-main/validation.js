function validEmail() {
    var Validemail = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z]{2,3}$/;
    var email = document.getElementById("inputemail").value;
  
    if (Validemail.test(email)) {
     document.getElementById("log_er1").innerText="";
  }
     else if(email==""){
        document.getElementById("log_er1").innerText="";
    } else {
      document.getElementById("log_er1").innerText="invalid email";
    }
  }
  
  function validPassword() {
    var validPassword =
      /^(?=.*[A-Z])(?=.*[^%!@#$&*])(?=.*[0-9])(?=.*[a-z]).{8,20}$/;
    var password = document.getElementById("inputPassword").value;
    if (validPassword.test(password)) {
      document.getElementById("log_er").innerText="";
      
    }
    else if(password==""){
      document.getElementById("log_er").innerText="";
    }
    else{
      document.getElementById("log_er").innerText="not valid";
    }
  }
  
  
  function namevalidate() {
    // alert();
    var Validname = /^[a-zA-Z\s.]+$/;
    var Name = document.getElementById("Name").value;
  
    if (Validname.test(Name)) {
      document.getElementById("log_er2").innerText="";
     } 
  
     else if(Name==""){
       document.getElementById("log_er2").innerText="";
     }
     else {document.getElementById("log_er2").innerText="only charecter are allowed";
    }
  }
  
  function validate(e){
  
    var password = document.getElementById("inputPassword").value;
    var Name = document.getElementById("Name").value;
    var email = document.getElementById("inputemail").value;
    var phone = document.getElementById("Phone").value;
    
    if (Name == "") {
      $("#log_er2").html("all field are required");
      return false;
    } 
    else if (phone==""){
        $("#log_er3").html("all field are required");
        return false;
       
      }
      else if(email == "") {
        $("#log_er1").html("all field are required");
        return false;
        
      }
    else if(password == "") {
      $("#log_er").html("all field are required");
      return false;
     
    } 
     
  }
  
  // only numeric
  $(document).on("input", ".numeric", function () {
    this.value = this.value.replace(/\D/g, "");
  });