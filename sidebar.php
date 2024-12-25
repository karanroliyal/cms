<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assetes/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class=" container-fluid nav-div">
        <div class="nav">
        <div class=""><img src="./images/sansoftwares_logo.png" alt=""></div>
        <div class="profile"><span><?php echo isset($_SESSION['username'])?$_SESSION['username'] :""; ?></span><img src="./images/icon2.png" alt=""></div>
        </div>
        <div class="content-div">
        <div class="sidebar-div">
            <div class="btn  btn-sm">
                <div><img src="./images/dash2.png" alt=""></div>
                <div>Dashboard</div>
            </div>
            <div class="btn btn-sm">
                <div><a href="http://localhost/First_Project/usermaster.php"><img src="./images/client.png" alt=""></a></div>
                <div><a href="http://localhost/First_Project/usermaster.php">User Master</a></div>
            </div>

            <div class="btn  btn-sm">
                <div><img src="./images/item1.png" alt=""></div>
                <div>Item Master</div>
            </div>
            <div class="btn  btn-sm">
                <div><img src="./images/invoice2.png" alt=""></div>
                <div>Invoice</div>
            </div>
            <div> <button class="btn  btn-sm"><img src="./images/log2.png" alt=""><a href="logout.php">log out</a>
        </button></div>
        </div>

       
        
     <div class="content">
     <?php  include("usermaster.php")?>
    </div> 
    </div>
    </div>
    <script src="assetes/js/bootstrap.min.js"></script>
    <script src="assetes/jquery/jquery-3.7.1.min.js"></script>
    <script src="index.js"></script>

</body>

</html>