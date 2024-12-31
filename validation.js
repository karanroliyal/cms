$("#login-btn").on("click", function () {
  let email = $("#inputemail").val();

  let password = $("#inputPassword").val();

  $.ajax({
    url: "user_backend.php",
    type: "post",
    data: {
      email,
      password,
    },
    success: function (data) {
      if (data == 0) {
        $("input").addClass("border-danger");

        $("#log_er").text("password is required");
        $("#log_er1").text("email is required");
      } else if (data == 1) {
        window.location.href = "http://localhost/First_Project/sidebar.php";
      }
    },
  });
});
  
  
  $("input[type='email']").on("input",function(){

    var Validemail = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z]{2,3}$/;
//  ^ meaning
    var email =$(this).val();
    var error=  $(this).next();
        
    if (Validemail.test(email)) {
     error.text("");
   }
      else if(email==""){
       error.text("");
     } else {
      error.text("invalid email");
     }

    });


    $("input[type='password']").on("input",function(){

        var validPassword =
        /^(?=.*[A-Z])(?=.*[^%!@#$&*])(?=.*[0-9])(?=.*[a-z]).{8,20}$/;
      var password = $(this).val();
      var error= $(this).next();
      console.log(error);
      if (validPassword.test(password)) {
       error.text("");
        
      }
      else if(password==""){
        error.text("");
      }
      else{
        error.text("not valid password");
      }
        
      }
    );

  
  $("input[name='phone'").on("input",function(){
   
    let validPhone = /^[0-9]{10,12}$/
    let phone = $(this).val();
    
    let error=$(this).next();
    if(validPhone.test(phone)){
      error.text("");
    }
    else if(phone==""){
      error.text("");
    }
    else{
      error.text("atleast 10 digit");
    }
  }
  );
  
  
  
$("input[name='name']").on("input",function(){
 
   var Validname = /^[a-zA-Z\s.]+$/;
   var Name = $(this).val();
 var error= $(this).next();
   if (Validname.test(Name)) {
     error.text("");
    } 
 
    else if(Name==""){
      error.text("");
    }
    else {
      error.text("only charecter are allowed");
   }

});
   
  
  
function validate(e){
  
 $("input[type!='hidden']").each( function(){
  
  if($(this).val()==""){

    $(this).next().text("all field are required");
    
  }
})

}


// validate function when updating data

  
function updatevalidation(e){
  
  $("input:not([type='hidden']):not([type='password'])").each( function(){
   
   if($(this).val()==""){
 
     $(this).next().text("all field are required");
     
   }
 
 })
 
 }   
  
  
  // only numeric
  $(document).on("input", ".numeric", function () {
    this.value = this.value.replace(/\D/g, "");
  });

 
  var formvalidate=true;

function validateClient(){
  
  $("#formdata").each(function(){
 
    $(this).find("input , select").each(function(){
    if($(this).val()==""){
      $(this).next().text("all field are required");

      formvalidate = false;
    }
    
  
  });

});
}


