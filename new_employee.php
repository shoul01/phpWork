<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>HR Management System</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="vendors/feather/feather.css">
	<link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="css/vertical-layout-light/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="images/favicon.png" /> </head>
<?php
 session_start();

  if(isset($_SESSION['admin_username'])){
    $GLOBALS['admin_username'] = $_SESSION['admin_username'];
    $GLOBALS['admin_country'] = $_SESSION['admin_country'];
    $GLOBALS['admin_city'] = $_SESSION['admin_city'];

  }
  else{
    header('location: pages/samples/login.php');    
  }
?>

	<body>
		<div class="container-scroller">
			<?php include 'navbar.php'; ?>
				<!-- partial -->
				<div class="container-fluid page-body-wrapper">
					<?php 
        include 'theme-setting.php'; 
        include 'right-sidebar.php'; 
        include 'sidebar.php'; 
      ?>
						<!-- partial -->
						<div class="main-panel">
							<div class="content-wrapper">
								<div class="row">
                                    <div class="col-12 grid-margin">
                                        <div class="card">
                                            <div class="card-body">
                                            <h4 class="card-title">New Employee</h4>
                                            <form class="form-sample">
                                                <p class="card-description">
                                                General info
                                                </p>
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Full Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Phone</label>
                                                    <div class="col-sm-9">
                                                        <input type="tel" class="form-control" />
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Emergency Contact</label>
                                                    <div class="col-sm-9">
                                                        <input type="tel" class="form-control" />
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">CNIC No.</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" />
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Gender</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Date of Birth</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" placeholder="dd/mm/yyyy"/>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Dept</label>
                                                    <div class="col-sm-9">
                                                        <?php
                                                            include 'connection.php';
                                                            $select_from_dept = "select * from dept";
                                                            $dept_data_result = mysqli_query($conn,$select_from_dept);
                                                            echo '<select class="form-control">';
                                                                while($dept_row = mysqli_fetch_array($dept_data_result)){
                                                                    echo '<option>';
                                                                        echo $dept_row['dept_name'];
                                                                    echo '</option>';
                                                                }
                                                            echo '</select>';
                                                        ?>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Position</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Salary</label>
                                                        <div class="col-sm-9">
                                                            <input type="number" class="form-control" />
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="card-description">
                                                Address
                                                </p>
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Address</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">City</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">                                                
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Country</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control">
                                                        <option>Pakistan</option>
                                                        <option>UK</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <p class="card-description">
                                                Account details
                                                </p>
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" class="form-control" />
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Password</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Is Employee Active</label>
                                                        <div class="col-sm-4">
                                                            <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked="">
                                                                Yes
                                                            <i class="input-helper"></i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
                                                                No
                                                            <i class="input-helper"></i></label>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
							<!-- content-wrapper ends -->
							<?php include 'footer.php'; ?>
							<!-- partial -->
						</div>
						<!-- main-panel ends -->
				</div>
				<!-- page-body-wrapper ends -->
		</div>
		<!-- container-scroller -->
		<!-- plugins:js -->
		<script src="vendors/js/vendor.bundle.base.js"></script>
		<!-- endinject -->
		<!-- Plugin js for this page -->
		<script src="vendors/chart.js/Chart.min.js"></script>
		<script src="vendors/datatables.net/jquery.dataTables.js"></script>
		<script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
		<script src="js/dataTables.select.min.js"></script>
		<!-- End plugin js for this page -->
		<!-- inject:js -->
		<script src="js/off-canvas.js"></script>
		<script src="js/hoverable-collapse.js"></script>
		<script src="js/template.js"></script>
		<script src="js/settings.js"></script>
		<script src="js/todolist.js"></script>
		<!-- endinject -->
		<!-- Custom js for this page-->
		<script src="js/dashboard.js"></script>
		<script src="js/Chart.roundedBarCharts.js"></script>
		<!-- End custom js for this page-->
	</body>

</html>