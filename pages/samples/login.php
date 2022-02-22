<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>HR Management System</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>

  <?php
    include '../../connection.php';
    session_start();

    if(isset($_SESSION['admin_username'])){
      header('location: ../../index.php'); 
    }

    if(isset($_POST['signin']))
    {
      $admin_email = $_POST['admin_email'];
      $admin_pass = $_POST['admin_pass'];
      $loginQuery = "select * from Admin where admin_email='$admin_email' and admin_password='$admin_pass'";
      $loginResult = mysqli_query($conn,$loginQuery);
      $loginrow = mysqli_fetch_array($loginResult);
      $countloginresult = mysqli_num_rows($loginResult);

      if($countloginresult>0){
        $_SESSION['admin_username'] = $loginrow['admin_name'];
        $_SESSION['admin_country'] = $loginrow['admin_country'];
        $_SESSION['admin_city'] = $loginrow['admin_city'];
        header('location:../../index.php');
      }
      else{
         echo "<script>alert('Chal abeey haat galat password ya email laga rha hai!')</script>";
      }
    }
  ?>



  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../../images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
                <form class="pt-3" method="POST" action="login.php">
                    <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="admin_email" placeholder="Email">
                    </div>
                    <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="admin_pass" placeholder="Password">
                    </div>
                    <div class="mt-3">
                    <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="signin"  value="SIGN IN">
                    </div>
                    <!-- <div class="my-2 d-flex justify-content-between align-items-center">
                    <a href="#" class="auth-link text-black pull-right">Forgot password?</a>
                    </div>
                    <div class="mb-2">
                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                        <i class="ti-facebook mr-2"></i>Connect using facebook
                    </button>
                    </div> -->
                    <!-- <div class="text-center mt-4 font-weight-light">
                    Don't have an account? <a href="register.html" class="text-primary">Create</a>
                    </div> -->
                </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
