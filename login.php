<?php
    session_start();

    if(isset($_POST["submit"])){
        echo "<h1>Logged in successfully!</h1>";
    }else{
        echo "<h1>Incorrect login!</h1>";
    }

    

    
?>


<!DOCTYPE html>
<html>
    <head>
        <title>ACare - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/82fa732971.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <img class="wave" src="img/wave.png">
        <div class="container">
            <div class="img">
                <img src="img/bg.svg">
            </div>
            <div class="login-content">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <img src="img/avatar.svg">
                    <h2 class="title">Welcome</h2>
                       <div class="input-div one">
                          <div class="i">
                                  <i class="fas fa-user"></i>
                          </div>
                          <div class="div">
                                  <h5>Username</h5>
                                  <input type="text" class="input" name="username">
                          </div>
                       </div>
                       <div class="input-div pass">
                          <div class="i"> 
                               <i class="fas fa-lock"></i>
                          </div>
                          <div class="div">
                               <h5>Password</h5>
                               <input type="password" class="input" name="password">
                       </div>
                    </div>
                    <a href="#">Forgot Password?</a>
                    <input type="submit" class="btn" value="Login" name="submit">
                </form>
            </div>
        </div>
        <script type="text/javascript" src="js/login.js"></script>
    </body>
</html>