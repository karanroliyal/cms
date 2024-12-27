//.................................Validation............................................

// validation.............................................................

$("#update-btn").hide();

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

//  getting data from database ...............................

function loaddata(page, search) {
  $.ajax({
    url: "paggination.php",
    data: {
      page_no: page,
      search: search,
    },
    type: "post",
    datatype: "html",

    success: function (data) {
      $(".getlist").html(data);
    },
  });
}

loaddata();

//paggination code

$(document).ready(function () {
  $(document).on("click", ".page li", function () {
    var page_id = $(this).attr("id");

    loaddata(page_id);
  });
});

// live search.......................

$(document).ready(function () {
  $(document).on("keyup", ".search", function () {
    var search = $(this).val();

    loaddata(1, search);
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
    $("#log_er1").val() == "" &&
    $("#log_er2").val() == "" &&
    $("#log_er").val() == "" &&
    $("#log_er3").val() == ""
  ) {
    $.ajax({
      url: "user_backend.php",

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
          getlist();
        } else if (data != "") {
          alert(data);
        }

        $.ajax({
          url: "paggination.php",
          data: {
            page_no: page,
            search: search,
          },
          type: "post",
          datatype: "html",

          success: function (data) {
            $(".getlist").html(data);
          },
        });
      },
    });
  }
});

// delete data from database........................................

$(document).on("click", ".delete-btn", function () {
  if (confirm("are u sure")) {
    var id = $(this).data("id");
    $.ajax({
      url: "user_backend.php",
      data: {
        id: id,
        action:'delete',
      },
      type: "post",
      success: function (data) {
        if (data == "success") {
          // $.ajax({
          //   url: "paggination.php",
          //   data: {
          //     page_no: page,
          //     search: search,
          //   },
          //   type: "post",
          //   datatype: "html",
  
          //   success: function (data) {
          //     $(".getlist").html(data);
          //   },
          // });
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
      $("#inputPassword").val(data.PASSWORD);
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
  validate();
  var password = document.getElementById("inputPassword").value;
  var Name = document.getElementById("Name").value;
  var email = document.getElementById("inputemail").value;
  var phone = document.getElementById("Phone").value;
  var id = document.getElementById("id").value;
  console.log(id);
  $.ajax({
    url: "user_backend.php",
    type: "post",
    data: {
      password: password,
      Name: Name,
      email: email,
      phone: phone,
      id: id,
       action:'update'
    },

    success: function (data) {
      if (data == 1) {
        alert("data is updated");
        $("#update-btn").hide();
        $("#insert-btn").show();
        $("input").val("");
        $.ajax({
          url:"paggination.php",
          data: {
            page_no: page,
            search: search,
          },
          type: "post",
          datatype: "html",

          success: function (data) {
            $(".getlist").html(data);
          },
        });
      }
    },
  });
});
