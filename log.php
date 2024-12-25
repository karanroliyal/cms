<?php

session_start();


class User_master
{
    private $con;

    public function __construct()
    {
        include("dbcon.php");
        $this->con = $con;
        

    }

    function logIn()
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        // include("validation.php");
        $sql = "select * from user_master where email='$email' and password='$password'";

        $result = mysqli_query($this->con, $sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_SESSION['username'] = $row['create_by'];

                echo 1;
            }
        } else {

            echo 0;
        }
    }

    function getdata()
    {
        $sql = "select*from user_master";
        $result = mysqli_query($this->con, $sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['id']}</td><td>{$row['create_by']}</td><td>{$row['phone']}</td><td>{$row['email']}</td>
        <td><button  class=' m-2 btn btn-outline-primary' data-id={$row['id']} >Edit</button><button  class=' btn btn-outline-secondary' data-id={$row['id']} >delete</button></td></tr>";
            }
        }
    }




    function adduser(){

        $email = $_POST["email"];
        $password = $_POST["password"];
        $name=$_POST['Name'];
        $phone=$_POST['phone'];

        $sql="insert into user_master(create_by,email,phone,password)values('$name','$email','$phone','$password')";
        if(mysqli_query($this->con,$sql)==true)
        {
            echo "data is successfully inserted";
        }
        else{
            echo $this->con->error;
        }
    }
}



$user = new User_master();
$user->getdata();
