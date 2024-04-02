<?php
   if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);

    if(!$con){
        die("lost".mysqli_connect_error());
    }
    else{
        echo"connect";
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO user.registration ( name,email,password) VALUES ('$name', '$email', '$password')";
    // echo $sql;
    if($con->query($sql)==true){
        //echo"sucess";
        $insert=true;
    }
    else{
        echo"error:$sql <br> $con->error";

    }
      
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="SELECT email, password FROM `user`.`registration` WHERE email = '$email'";
        $result=mysqli_query($con,$sql);
        if($num=mysqli_num_rows($result)>0){
          $login=true;
        }
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION["location:index.php"];
        header("location:index.php");
        
        $con->close();
      }

  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="registration.php" method="post">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="text" id="name" name="name" placeholder="Name">
                <input type="email" id="email" name="email" placeholder="Email">
                <input type="password" id="password"  name="password"  placeholder="Password" minlength="6">
                <input type="password" id="confirmpassword" name="repeat_password" placeholder="confirm Password" onkeyup="validate_password()">
                <span id="wrong_pass_alert"></span>
                <button id="create" onclick="wrong_pass_alert()">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="registration.php" method="post">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="email" id="login_email" name="email" placeholder="Email">
                <input type="password" id="login_password" name="password" placeholder="Password" minlength="6">
                <button id="create"><a href="index.php" class="icon">Sign In</a></button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>