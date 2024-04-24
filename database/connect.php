<?php
    $url="localhost";
    $username="root";
    $password="";
    $database="barangay_eservices_db";

        $conn = mysqli_connect($url, $username, $password, $database);

            if (!$conn){
                echo "<script>alert('Connection failed.');</script>";

                
            } 
?>