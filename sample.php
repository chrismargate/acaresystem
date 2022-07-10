<?php

    // include "classes/patient.php";

    // $samplePatient = new Patient();

    // $samplePatient->setFname("Chris Samuel");
    // $samplePatient->setMname("Alba");
    // $samplePatient->setLname("Margate");

    // echo $samplePatient->getFullName();
    
    

    // $sqlQuery = "SELECT * FROM patients_T";
    
    // $feedback = mysqli_fetch_row();
    // $resultCheck = mysqli_num_rows($sqlResult);

    // while($row = mysqli_fetch_assoc($sqlResult);){
    //     echo $row['patient_id'];
    // }
    /*
    include "config/database.php";
    $sqlQuery = "SELECT * FROM patients_T WHERE username = 'sampleUsername';";
    $sqlResult = mysqli_query($conn,$sqlQuery);
    $feedback = mysqli_fetch_all($sqlResult, MYSQLI_ASSOC);
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
    }*/

    /*
      INSERT INTO `patients_T` (`patients_id`, `date_created`, `username`, `password`, `fname`, `mname`, `lname`, `gender`, `dob`, `address`, `contact_number`, `email_address`, `weight_kg`) VALUES (NULL, '2022-07-10 13:37:10.000000', 'sampleUsername', 'Password123', 'Chris Samuel', 'Alba ', 'Margate', '', '2022-07-10', 'Pasig', '09089232640', 'chrissamuel231@gmail.com', '60');  
    */
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
        <!-- <link rel="stylesheet" type="text/css" href="css/register.css"> -->
        <!-- <section class="vh-100 bg-image">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body p-5">
                                    <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                                    <form>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Email</label>
                                          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">Password</label>
                                          <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                      </div>
                                      <div class="form-group">
                                        <label for="inputAddress2">Address 2</label>
                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputCity">City</label>
                                          <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputState">State</label>
                                          <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                          </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                          <label for="inputZip">Zip</label>
                                          <input type="text" class="form-control" id="inputZip">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="gridCheck">
                                          <label class="form-check-label" for="gridCheck">
                                            Check me out
                                          </label>
                                        </div>
                                      </div>
                                      <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="vh-100 bg-image">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body p-5">
                                    <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                                    <form>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="username">Username</label>
                                          <input type="text" class="form-control" id="inputEmail4" placeholder="Username">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="password">Password</label>
                                          <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="John">
                                      </div>
                                      <div class="form-group">
                                        <label for="mname">Middle Name</label>
                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Middle Name">
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputCity">City</label>
                                          <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputState">State</label>
                                          <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                          </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                          <label for="inputZip">Zip</label>
                                          <input type="text" class="form-control" id="inputZip">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="gridCheck">
                                          <label class="form-check-label" for="gridCheck">
                                            Check me out
                                          </label>
                                        </div>
                                      </div>
                                      <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <!-- <script type="text/javascript" src="js/login.js"></script> -->
    </body>
</html>