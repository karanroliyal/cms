//.................................Validation............................................


// validation.............................................................


$("#login-btn").on("click",function(){
 let email= $("#inputemail").val();
 
 let password= $("#inputPassword").val();

   $.ajax({
    url:"user_backend.php",
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

function loaddata(page){
  // var row= $("#row").val();
  $.ajax({
    url:"paggination.php",
    data:{
      page_no:page,
      
    },
    type:"post",
    datatype:"html",
    processData: false,
 contentType: false,
    success:function(data){
     
     $("#tbody").html(data);
    }
    
});
}

loaddata();

//paggination code

$(" a").on("click",function(e){
 e.preventDefault();
 var page_id=$(this).attr("id");
 
 loaddata(page_id);
});


$("#insert-btn").on("click",function(){
  validate();
  var password = document.getElementById("inputPassword").value;
  var Name = document.getElementById("Name").value;
  var email = document.getElementById("inputemail").value;
  var phone = document.getElementById("Phone").value;

  $.ajax({
    url:"user_backend.php",
  
    data:{
      password:password,Name:Name,email:email,phone:phone,
    },
    type:"post",
    processData:false,
    contentType:false,
    success:function(data){
      alert(data);
      
    }
  }) 
});



$(document).on("click",".delete-btn",function(){
  if(confirm("are u sure")){
    var id= $(this).data("id");
    $.ajax({
      url:"delete.php",
      data:{
        id:id
      },
      type:"post",
      success:function(data){
        if(data=='success'){
          getlist();
        }
        else{
        alert(data);
         
        }
      }
    })
  }
});



