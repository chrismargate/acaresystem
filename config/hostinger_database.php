<?php
    define("DB_HOST","localhost");
    define("DB_USER","u909074988_admin");
    define("DB_PASS","Admin12345");
    define("DB_NAME","u909074988_dbacare");

    $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    if($conn->connect_error){
        die("Connection failed $conn->connect_error");
    }

    echo "CONNECTED!";

    // function loginPatient($username,$password){
    //     $sqlQuery = "SELECT * FROM patients_T WHERE username = '$username';"'

    // }
?>