<?php

session_start();

require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    $username = $_POST["username"];

    $password = $_POST["password"];

    if (empty($username)) {
      echo $errors . "Username is required";
    }
    if (empty($password)) {
      echo $errors . "Password is required";
    }
  
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
    $results = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($results) == 1) {
      $user = mysqli_fetch_assoc($results);
      if ($user['user_type'] == 'admin'){
        $_SESSION['user'] = $logged_user;
        $_SESSION['success']  = "You are now logged in";
        header('location: admin.php');	
      } else {
        $_SESSION['user'] = $logged_in_user;
        $_SESSION['success']  = "You are now logged in";

        header('location: employee.php');
      }
    } else {
      echo "Invalid login credentials";
    }

    mysqli_close($conn);
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="CSS/login.css"
    />
  </head>
  <body>
    <div class="main">
      <div class="card-main">
        <p style="font-size: 4vw; margin: 36px 0px -10px 30px">ANAK NG</p>
        <div class="card-secondary">
          <p style="font-size: 4vw; margin: 10px 0px 0px 30px;">FUCHSIA HR</p>
          
          <FORM action="<?php $_SERVER["PHP_SELF"] ?>" method="post">

            <!--username-->
            <p style="font-family: 'Glacial Indifference'; color: aliceblue !important; margin: 0px 0px 0px 30px;">Username</p>
            <center><input type="text" name="username" required/></center>

            <!--password-->
            <p style="font-family: 'Glacial Indifference'; color: aliceblue !important; margin: 16px 0px 0px 30px;">Password</p>
            <center><input type="password" name="password" required/></center>
            
            <!--submit button-->
            <center><input type="SUBMIT" name="#" value="LOGIN" /><center>
          </FORM>
        </div>
      </div>
    </div>
  </body>
</html>
