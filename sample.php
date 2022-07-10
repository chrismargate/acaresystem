<?php

    include "classes/patient.php";

    $samplePatient = new Patient();

    $samplePatient->setFname("Chris Samuel");
    $samplePatient->setMname("Alba");
    $samplePatient->setLname("Margate");

    echo $samplePatient->getFullName();

?>