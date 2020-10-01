



<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Request Page</title>
	 <!-- Start MainNav -->
	 <?php include "./include/StyleCSS.php" ?>
	<!-- End MainNav -->

  </head>

  <body>
    <div class="container-scroller">

    <!-- Start MainNav -->
  <?php include "include/advertiserMainnav.php" ?>
  <?php include "./style/accountpagestyle.php" ?>
	<!-- End MainNav -->
	
<?php
  require '../component/database.php';
  $email = $_SESSION['email'];
  $query = mysqli_query($conn,"SELECT * from fb_user where email='$email'");
  $row = mysqli_fetch_array($query);
?>


    <!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
                        
                        <!-- Right Button -->
						<div class="col-sm-12">
							<div class="d-flex align-items-center justify-content-md-end">
								<div class="pr-1 mb-3 mb-xl-0">
										<button type="button" class="btn btn-outline-inverse-info btn-icon-text">
											Feedback
											<i class="mdi mdi-message-outline btn-icon-append"></i>                          
										</button>
								</div>
								<div class="pr-1 mb-3 mb-xl-0">
										<button type="button" class="btn btn-outline-inverse-info btn-icon-text">
											Help
											<i class="mdi mdi-help-circle-outline btn-icon-append"></i>                          
									</button>
								</div>
								<div class="pr-1 mb-3 mb-xl-0">
										<button type="button" class="btn btn-outline-inverse-info btn-icon-text">
											Print
											<i class="mdi mdi-printer btn-icon-append"></i>                          
										</button>
								</div>
							</div>
                        </div>
                    </div>
                    
					
    <!-- Start Account -->
		<?php include "../adminPage/includeAccount.php" ?>
	<!-- End Account -->   

</div>



	<!-- Start MainNav -->
		<?php include "./include/advertiserMainfooter.php" ?>
	<!-- End MainNav -->


			</div>
		</div>
    </div>


	<!-- Start MainNav -->
	<?php include "./include/StyleJS.php" ?>
	<!-- End MainNav -->

    
  </body>
</html>