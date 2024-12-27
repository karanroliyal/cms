<?php
// function deletedata(){
     include("dbcon.php");
        $id=$_POST['id'];
        $sql="delete from user_master where id='$id'";
        if(mysqli_query($con,$sql)==false){
            echo $con->error;
        }
        else{
            echo "success";
        }
        
        
    // }

    ?>