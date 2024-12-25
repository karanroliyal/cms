<?php

$email = $_POST["email"];
$password = $_POST["password"];
        if (!preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z]{2,3}$/", $email)) {

            die;
        } 
        
    else if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@.#$!%*?&])[A-Za-z\d@.#$!%*?&]{8,15}$/", $password)) {

            die;
        } 
       

        ?>