
<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Home Page</title>

	 <!-- Start MainNav -->
	 <?php include "include/StyleCSS.php" ?>
	<!-- End MainNav -->

  </head>

  <body>


  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth lock-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-transparent text-left p-5 text-center">
              <img src="images/faces/face13.jpg" class="lock-profile-img" alt="img">
              <form class="pt-5">
                <div class="form-group">
                  <!-- <label for="examplePassword1">Password to unlock</label>
                  <input type="password" class="form-control text-center" id="examplePassword1" placeholder="Password"> -->
				  <a class="btn btn-block btn-success btn-lg font-weight-medium" href="register.php">Join Us</a>
                </div>
                <div class="mt-5">
                  <a class="btn btn-block btn-success btn-lg font-weight-medium" href="login.php">Sign Up</a>
                </div>
                <!-- <div class="mt-3 text-center">
                  <a href="#" class="auth-link text-white">Sign in using a different account</a>
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

	<!-- Start MainNav -->
	<?php include "include/StyleJS.php" ?>
	<!-- End MainNav -->

    
  </body>
</html>