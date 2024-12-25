//.................................Validation............................................

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
  var Name = document.getElementById("name").value;

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
  var Name = document.getElementById("name").value;
  var email = document.getElementById("inputemail").value;
  var phone = document.getElementById("phone").value;
  
  if (Name == "") {
    $("#log_er2").html("all field are required");
    return false;
  } 
  else if(password == "") {
    $("#log_er").html("all field are required");
    return false;
  } else if(email == "") {
    $("#log_er1").html("all field are required");
    return false;
  }
  else if(phone==""){
    $("#log_er3").html("all field are required");
    return false;
  }
}

// only numeric
$(document).on("input", ".numeric", function () {
  this.value = this.value.replace(/\D/g, "");
});
// validation.............................................................


$("#login-btn").on("click",function(){
 let email= $("#inputemail").val();
 
 let password= $("#inputPassword").val();

   $.ajax({
    url:"log.php",
    type:"post",
    data:{
      email,password
    },
    success:function(data){
     
      if(data==0){
        $("input").addClass("border-danger");
        
        $("#log_er").text("password is required");
        $("#log_er1").text("email is required");
      }
      else if(data==1) {
       window.location.href="http://localhost/First_Project/sidebar.php";
      }
    }
   });
 });

  $.ajax({
       url:"log.php",
       type:"post",
       datatype:"html",
       processData: false,
    contentType: false,
       success:function(data){
        console.log(data);
        $("#tbody").html(data);
       }
  });


$("#insert-btn").on("click",function(){
  validate();
  var password = document.getElementById("inputPassword").value;
  var Name = document.getElementById("name").value;
  var email = document.getElementById("inputemail").value;
  var phone = document.getElementById("phone").value;

  $.ajax({
    url:"log.php",
  
    data:{
      password:password,Name:Name,email:email,phone:phone,
    },
    type:"post",
    // processData:false,
    // contentType:false,
    success:function(data){
      alert(data);
   
    }
  })
});

