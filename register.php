<?php
    //  include "config/hostinger_database.php";
     include "config/local_database.php";

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
        $gender = $_POST["gender"];
        $dob = $_POST["dob"];
        $address = $_POST["address"];
        $contactNumber = $_POST["contactNumber"];
        $email = $_POST["email"];
        $weight = $_POST["weight"];
        $height = $_POST["height"];

        $requiredFields = array($username,$password,$fname,$lname,$gender,$dob,$address,$email,$contactNumber);
        $optionalFields = array($mname,$weight,$height);

        if(emptyFields($requiredFields)){
            echo "<h1>There was a required field you left blank. Please check again before submitting.</h1>";
        }else{

            $weight = 60.25;
            $height = 164;

            $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
            $sqlQuery = "INSERT INTO patients_T (date_created, username, password, fname, mname, lname, gender, dob, address, contact_number, email_address, weight_kg) VALUES ('2022-07-10 13:37:10.000000', '$username', '$password', '$fname', '$mname', '$lname', '$gender', '$dob', '$address', '$contactNumber', '$email', '$weight','$height')";

            echo $sqlQuery;

            // if($conn->query($sqlQuery) === TRUE){
            //     echo "<h1>You have registered successfully!</h1>";
            // }else {
            //     echo "Error: " . $sqlQuery . "<br>" . $conn->error;
            //   }
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
       
    </head>
    <body>
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

                <label for="gender">Gender:</label>
                <select name="gender" id="gender">
                
                <option disabled selected value>Choose an option</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Non-binary">Non-binary</option>
                </select>

                </br>
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob">
                
                </br>

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
        <!-- <link rel="stylesheet" type="text/css" href="css/register.css"> -->
        <!-- <section class="vh-100 bg-image">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body p-5">
                                    <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                                    <form action="register.php" method="POST">
                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Username</label>
                                        <input type="text" id="form3Example4cdg" class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Password</label>
                                        <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1cg">First Name</label>
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1cg">Middle Name</label>
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3cg">Last Name</label>
                                        <input type="text" id="form3Example3cg" class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg">Email Address</label>
                                        <input type="text" id="form3Example4cg" class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Address</label>
                                        <input type="text" id="form3Example4cdg" class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Contact Number</label>
                                        <input type="text" id="form3Example4cdg" class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Weight (in kg) - OPTIONAL</label>
                                        <input type="text" id="form3Example4cdg" class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Height (in cm) - OPTIONAL</label>
                                        <input type="text" id="form3Example4cdg" class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                        </label>
                                        </div>

                                        <div class="d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>

                                        <input type="submit" value="Register" name="submit"/>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- <form>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                <label for="validationDefault01">First name</label>
                <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" required>
                </div>
                <div class="col-md-4 mb-3">
                <label for="validationDefault02">Last name</label>
                <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
                </div>
                <div class="col-md-4 mb-3">
                <label for="validationDefaultUsername">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    </div>
                    <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
                </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="validationDefault03">City</label>
                <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
                </div>
                <div class="col-md-3 mb-3">
                <label for="validationDefault04">State</label>
                <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
                </div>
                <div class="col-md-3 mb-3">
                <label for="validationDefault05">Zip</label>
                <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                    Agree to terms and conditions
                </label>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form> -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <!-- <script type="text/javascript" src="js/login.js"></script> -->
    </body>
</html>