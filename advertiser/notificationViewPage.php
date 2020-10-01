<?php
require '../component/database.php';
$id = "";
$orderAccept = "";
$orderReject = "";

if(isset($_GET["id"]))
{
	  $id = $_GET["id"];
	
	  $query2 = mysqli_query($conn,"UPDATE fb_request SET notify_advertiser=1 where id='$id'");
	 
	  $query = mysqli_query($conn,"SELECT * from fb_request where id='$id'");
	  $row = mysqli_fetch_array($query);

	  

}
// elseif (isset($_GET["orderAccept"])) {

// 	$orderAccept = $_GET["orderAccept"];
// 	$orderstatus = mysqli_query($conn,"UPDATE fb_request SET order_status=1 where id='$orderAccept'");
// 	header("location: notificationViewPage.php?id=$orderAccept");

// }

// elseif (isset($_GET["orderReject"])) {

// 	$orderReject = $_GET["orderReject"];
// 	$orderstatus = mysqli_query($conn,"UPDATE fb_request SET order_status=2 where id='$orderReject'");
// 	header("location: notificationViewPage.php?id=$orderReject");

// }



?>

<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Update Register Page</title>
	
	 <!-- Start MainNav -->
	 <?php include "./include/StyleCSS.php" ?>
	 <?php include "./style/orderPagestyle.php" ?>
	<!-- End MainNav -->

  </head>

  <body>
  
    <div class="container-scroller">

    <!-- Start MainNav -->
  <?php include "include/advertiserMainnav.php" ?>
	<!-- End MainNav -->
	
	<?php 
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

				if(strpos($fullUrl, "insert=success") == true)
					{
					echo "<div class='alert alert-success' >
                  <div class='container'>
                      <div class='alert-icon'>
                          <i class='material-icons'>check</i>
                      </div>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'><i class='material-icons'>clear</i></span>
                      </button>
                      <b> Update Page Success:</b> Now you can see your update page <a href='viewPage.php' style='color:#fff;'>Click</a>
                  </div>
              	</div>";
                  }
                  elseif(strpos($fullUrl, "insert=successs") == true)
                  {
                    echo "<h2 class='text-dark font-weight-bold mb-2'>Page Register Successfull</h2>";
                  }
		?>
	  

    <!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
						<div class="col-sm-6 mb-4 mb-xl-0">
							<div class="d-lg-flex align-items-center">
								<div>
                
									
								</div>
							</div>
            			</div>
                        
                        <!-- Right Button -->
						<div class="col-sm-6">
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
                    
					<div class="row mt-4">
                    <div class="col-lg-1 mb-3 mb-lg-0">
                    </div>
						<div class="col-lg-10 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
                                <h4 class="card-title">Order View</h4>
									<div class="row">
                                    <div class="col-12 ">
                                       

										<!-- Portfolio Item Heading -->
										<h1 class="my-4">
										<small><?php echo $row["title"] ?></small>
										</h1>

										<!-- Portfolio Item Row -->
										<div class="row">
										<div class="col-md-8">
											<img class="img-fluid" src="http://placehold.it/750x500" alt="">
										</div>

										<div class="col-md-4">
											<h3 class="my-3">Order Description</h3>
											<p><?php echo $row["description"] ?></p>

											<h3 class="my-3">Special Description</h3>
											<p><?php echo $row["special"] ?></p>

											<h3 class="my-3">Project Details</h3>
											<ul>
											<li>Lorem Ipsum</li>
											<li>Dolor Sit Amet</li>
											<li>Consectetur</li>
											<li>Adipiscing Elit</li>
											</ul>

											  <?php 
											  $order_status = $row["order_status"];
											  
												if($order_status == "1")
												{
													echo "<a href='#' disabled class='btn d-block w-100 d-sm-inline-block btn-custom bg-success text-white'>Order is Processing</a>";
												}
												elseif($order_status == "2"){
													echo "<a href='#' disabled class='btn d-block w-100 d-sm-inline-block btn-custom bg-danger text-white'>Order Reject</a>";
												}
											?>
										
										</div>

										</div>
										<!-- /.row -->

										<!-- Related Projects Row -->
										<h3 class="my-4">Related Projects</h3>

										<div class="row">

										<div class="col-md-3 col-sm-6 mb-4">
											<a href="#">
												<img class="img-fluid" src="http://placehold.it/500x300" alt="">
												</a>
										</div>

										<div class="col-md-3 col-sm-6 mb-4">
											<a href="#">
												<img class="img-fluid" src="http://placehold.it/500x300" alt="">
												</a>
										</div>

										<div class="col-md-3 col-sm-6 mb-4">
											<a href="#">
												<img class="img-fluid" src="http://placehold.it/500x300" alt="">
												</a>
										</div>

										<div class="col-md-3 col-sm-6 mb-4">
											<a href="#">
												<img class="img-fluid" src="http://placehold.it/500x300" alt="">
												</a>
										</div>

										</div>
										<!-- /.row -->
                                    </div>
									</div>
								</div>
							</div>
                        </div>
                        
						<div class="col-lg-1 mb-3 mb-lg-0">
							
                        </div>
                    </div>
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
