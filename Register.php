<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="regStyle.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <?php 
        include 'connection.php';
        if(isset($_POST['register'])){
            // echo '<script type ="text/JavaScript"> alert("JavaScript Alert Box by PHP") </script>';  
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];

            $register_query = "insert into User values(null,'$fname','$lname','$password','$email','$gender')";

            $regResult = mysqli_query($conn,$register_query);

             if($regResult){
                 header("location:index.php");
             }
             else{
                 echo "<script type ='text/JavaScript'> alert('Error while creating new account!') </script>";
             }
        }
    ?>
    <h1>Php in htDocs</h1>
  <input type="checkbox" id="show" class="show" />
<!-- Title+Button -->
<label for="show" class="title">sign up<i class="flag left"></i><i class="flag right"></i></label>
<!-- Form -->
<form action="Register.php" method="post" class="form">
    <!-- First Name -->
    <div class="group">
        <div class="col-1">
            <label for="f-name">first name</label>
        </div>
        <div class="col-2">
            <input name="fname" type="text" id="f-name" placeholder="First Name" />
        </div>
    </div>
    <!-- Last Name -->
    <div class="group">
        <div class="col-1">
            <label for="l-name">last name</label>
        </div>
        <div class="col-2">
            <input name="lname" type="text" id="l-name" placeholder="Last Name" />
        </div>
    </div>
    <!-- Password -->
    <div class="group">
        <div class="col-1">
            <label for="password">your password</label>
        </div>
        <div class="col-2">
            <input name="password" type="password" id="password" placeholder="password" />
        </div>
    </div>
    <!-- Email -->
    <div class="group">
        <div class="col-1">
            <label for="email">your email</label>
        </div>
        <div class="col-2">
            <input name="email" type="email" id="email" placeholder="example@email.com" />
        </div>
    </div>
    <!-- Gender -->
    <div class="group">
        <div class="col-1">
            <label for="gender">Gender</label>
        </div>
            <span style="height: 42px;display: flex;align-items: center;">
            Male
            <input type="radio" id="gender" name="gender" value="male" style="margin-right:10px;"/>
            Female
            <input type="radio" id="gender" name="gender" value="female"/>
            </span>
    </div>
    <!-- Terms & Conditions -->
    <div class="group-2">
        <input type="checkbox" class="checkbox" id="terms" />
        <label for="terms"><span class="toogle"></span>I declare to have read and accepted the <a href="#">terms of service</a></label>
    </div>
    <!-- Notifications -->
    <div class="group-2">
        <input type="checkbox" class="checkbox" id="notifications" />
        <label for="notifications"><span class="toogle"></span>Show me popular news via email</label>
    </div>
    <!-- Submit button -->
    <input type="submit" name="register" class="submit" value="submit" />
</form>

<!-- I declare to have read and accepted the termas of service -->
<!-- Show me popular news via email -->v
  </body>
</html>
