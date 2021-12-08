<?php

    $email = $_POST['email'];
    $password = $_POST['password'];

    // // Database connection
    // $connection = new mysqli('localhost','root','','test_login');
    // if($connection->connect_error)
    // {
    //     die('Connection Failed: ' .$connection->connect_error);
    // }
    // else{
    //     $stament = $connection->prepare("insert into login(Email, Password) values(?,?)");
    //     $stament->bind_param("ss",$email,$password);
    //     $stament->execute();
    //     echo "Login successfully...";
    //     $stament.close();
    //     $connection.close();
    // }

?>