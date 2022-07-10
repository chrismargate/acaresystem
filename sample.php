<?php

    // include "classes/patient.php";

    // $samplePatient = new Patient();

    // $samplePatient->setFname("Chris Samuel");
    // $samplePatient->setMname("Alba");
    // $samplePatient->setLname("Margate");

    // echo $samplePatient->getFullName();
    
    include "config/database.php";

    // $sqlQuery = "SELECT * FROM patients_T";
    $sqlQuery = "SELECT * FROM patients_T WHERE username = 'sampleUsername';";
    $sqlResult = mysqli_query($conn,$sqlQuery);
    $feedback = mysqli_fetch_all($sqlResult, MYSQLI_ASSOC);
    // $feedback = mysqli_fetch_row();
    // $resultCheck = mysqli_num_rows($sqlResult);

    // while($row = mysqli_fetch_assoc($sqlResult);){
    //     echo $row['patient_id'];
    // }

    echo "</br>";   
    foreach($feedback as $item){
        echo $item['patients_id'] . "</br>";
        echo $item['username'] . "</br>";
        echo $item['password'] . "</br>";
        echo $item['fname'] . "</br>";
        echo $item['mname'] . "</br>";
        echo $item['lname'] . "</br>";
        echo $item['address'] . "</br>";
        echo $item['contact_number'] . "</br>";
        echo $item['weight_kg'] . "</br>";
        echo $item['email_address'] . "</br>";
    }

    /*
      INSERT INTO `patients_T` (`patients_id`, `date_created`, `username`, `password`, `fname`, `mname`, `lname`, `gender`, `dob`, `address`, `contact_number`, `email_address`, `weight_kg`) VALUES (NULL, '2022-07-10 13:37:10.000000', 'sampleUsername', 'Password123', 'Chris Samuel', 'Alba ', 'Margate', '', '2022-07-10', 'Pasig', '09089232640', 'chrissamuel231@gmail.com', '60');  
    */
?>