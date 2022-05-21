<?php
    //database connnection here;

    $conn = new mysqli("localhost", "root", "", "pet_smart");

    if($conn->connect_error){
        die("Failed to connect: ".$conn->connect_error);
    }
?>