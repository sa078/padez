<?php 

include('includes/connection.php');

session_start();

if(isset($_POST['submit']))
{
	$usrname=$_POST['usrname'];
	$password=$_POST['pswd'];
	
	$sql="select * from gard_login where username='".$usrname."' AND passwd='".$password."'";
	
	$result=mysqli_query($conn,$sql);
	$data=mysqli_fetch_array($result);
	
	if(count($data)>0)
	{
		$_SESSION['username']=$usrname;
		
		header('location:dashboard.php');
	}
	
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LogIn</title>
     <?php include_once('includes/css.php'); ?>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
               
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <form method="post" class="pt-3">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="usrname">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="pswd" placeholder="Password">
                  </div>
                  <div class="mt-3">
                    <button type="submit" name="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="">SIGN IN</button>
                  </div>
                 
                 
               
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
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>