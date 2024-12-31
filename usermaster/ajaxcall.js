

$("#update-btn").hide();

// login//---------------



//  getting data from database ...............................

function loaddata(page, search,order,colname,row) {
  $.ajax({
    url: "http://localhost/First_Project/usermaster/paggination.php",
    data: {
      page_no: page,
      search: search,
      colname:colname,
      order:order,
      row:row
    },
    type: "post",
    datatype: "html",

    success: function (data) {
      $(".list").html(data);
    },
  });
}

loaddata();

//paggination code

$(document).ready(function () {
  $(document).on("click", ".page li", function () {
    page_id = $(this).attr("id");
    $("#page_no").val(page_id);
        
 var row= $("#row").val();
  
    loaddata(page_id,'','','',row);
  });

});


$(document).ready(function(){
  $(document).on("click","#row",function(){
    var row =$(this).val();
   
   
    loaddata(1,'','','',row);
  })
});



// live search.......................

$(document).ready(function () {
  $(document).on("keyup", ".search", function () {
    var search = $(this).val();
    
    loaddata(1, search);
  });
});


let order="ASC";
$(document).ready(function(){
$(document).on("click",".short",function(){

  if(order=="ASC"){
    order="DESC";
  }
  else{
    order="ASC";
  }
  var colname=$(this).attr("id");
   var page_no=$("#page_no").val();
   var row= $("#row").val();
  loaddata(page_no,'',order,colname,row);
  
  });
});

// reset data from live search.....................

$("#reset").on("click", function () {
  $("input").val("");
  loaddata();
});



// insert data in databse........................

$("#insert-btn").on("click", function () {
  validate();
  var password = document.getElementById("inputPassword").value;
  var Name = document.getElementById("Name").value;
  var email = document.getElementById("inputemail").value;
  var phone = document.getElementById("Phone").value;

  if (
    $("#log_er1").text()=="" &&
    $("#log_er2").text()=="" &&
    $("#log_er").text()=="" &&
    $("#log_er3").text()==""
  ) 
  {
    
    $.ajax({
      url: "http://localhost/First_Project/usermaster/user_backend.php",

      data: {
        password: password,
        Name: Name,
        email: email,
        phone: phone,
        action:'add'
      },
      type: "post",
      success: function (data) {
        if (data == 1) {
          alert("successfully inserted");
          $("input").val("");
          loaddata();
        } else if (data != "") {
          alert(data);
        }
      }

   
    });
  }

});

// delete data from database........................................

$(document).on("click", ".delete-btn", function () {
  if (confirm("are u sure")) {
    var id = $(this).data("id");
    $.ajax({
      url: "http://localhost/First_Project/usermaster/user_backend.php",
      data: {
        id: id,
        action:'delete',
      },
      type: "post",
      success: function (data) {
        if (data == "success") {
          loaddata();
        } else {
          alert(data);
        }

        
      },
    });
    
  }
});

// edit data.............................

$(document).on("click", ".edit-btn", function () {
  let id = $(this).data("id");

  $.ajax({
    url: "user_backend.php",
    type: "post",
    dataType: "json",
    data: {
      id: id,
      action:'getdata'
    },
    success: function (data) {
      $("#Name").val(data.create_by);
      $("#Phone").val(data.phone);
      $("#inputemail").val(data.email);
      
      $("#pass").val(data.PASSWORD);
      console.log($("#pass"));
      $("#id").val(data.id);
      $("#update-btn").show();
      $("#insert-btn").hide();
      var editBtn = document.querySelector("#profile-tab");
      var tab = new bootstrap.Tab(editBtn);
      tab.show();
    },
  });
});

// update data..............................

$("#update-btn").on("click", function () {
  var password = document.getElementById("inputPassword").value;

  if(password==''){
  password=$("#pass").val();
   
  }
  updatevalidation();
  var Name = document.getElementById("Name").value;
  var email = document.getElementById("inputemail").value;
  var phone = document.getElementById("Phone").value;
  var id = document.getElementById("id").value;
  
  $.ajax({
    url: "http://localhost/First_Project/usermaster/user_backend.php",
    type: "post",
    data: {
      password: password,
      Name: Name,
      email: email,
      phone: phone,
      id: id,
       action:'add'
    },

    success: function (data) {
      if (data == 1) {
        alert("data is updated");
        $("#update-btn").hide();
        $("#insert-btn").show();
        $("input").val("");
        loaddata();
      }
    },
  });
});
