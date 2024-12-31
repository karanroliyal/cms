

    //insert data in database
    $("#submit").on("click",function(){
     
        validateClient();
        var formdata= new FormData(form);
        
          if(formvalidate){

            $.ajax({
                url:"http://localhost/First_Project/clientmaster/clientmaster_backend.php",
                data:formdata,
                type:"POST",
                contentType:false,
                processData:false,
                success:function(data){
                    console.log(data);
                    if(data==1){
                        alert("successful");
                    }
                }

            });

            
         }

    })