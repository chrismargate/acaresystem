<?php

    function emptyFields($inputArray){
        foreach($inputArray as $arrayElement){
            if(empty($arrayElement)){
                return true;
            }
        }
        return false;
    }


    if(isset($_POST["register"])){

        $username = $_POST["username"];
        $password = $_POST["password"];
        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        $lname = $_POST["lname"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $contactNumber = $_POST["contactNumber"];
        $weight = $_POST["weight"];
        $height = $_POST["height"];

        $requiredFields = array($username,$password,$fname,$lname,$address,$email,$contactNumber);
        $optionalFields = array($mname,$weight,$height);

        if(emptyFields($requiredFields)){
            echo "<h1>There was a required field you left blank. Please check again before submitting.</h1>";

        }else{
            // include "classes/patient.php";
            // include "config/database.php";
            echo "<h1>You have registered successfully!</h1>";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration page</title>
    </head>
    <body>
        <!-- <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST"> -->
        <form action="register.php" method="POST">
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username">
                </br>
                <label for="password">Password</label>
                <input type="password" name="password">
                </br>
                <label for="fname">First name:</label>
                <input type="text" name="fname">
                </br>
                <label for="mname">Middle name:</label>
                <input type="text" name="mname">
                </br>
                <label for="lname">Last name:</label>
                <input type="text" name="lname">
                </br>
                <!-- <label for="gender">Gender:</label>
                <input type="text" name="mname"> -->

                <label for="address">Address:</label>
                <input type="text" name="address">
                </br>
                <label for="contactNumber">Contact Number:</label>
                <input type="text" name="contactNumber">
                </br>
                <label for="email">Email address:</label>
                <input type="text" name="email">
                </br>
                <label for="weight">Weight (in kg):</label>
                <input type="text" name="weight">
                </br>
                <label for="height">Height (in cm):</label>
                <input type="text" name="height">
                </br>
                <input type="submit"  value="Sign-Up" name="register">

            </div>
        </form>
    </body>
</html>