<?php

if(isset($_POST['submit'])){
	$selectacc_arr = $_POST['selectacc'];
    $selectarr =  implode(", ", $selectacc_arr);
    echo $selectarr;

}
?>
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
                      <b>New Page Register Success:</b> Now you can see your register page <a href='viewPage.php' style='color:#fff;'>Click</a>
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
                                <h4 class="card-title">Request Order</h4>
									<div class="row">
                                    <div class="col-12 ">
                                       
											<form method="POST" class="forms-sample"  id="register-form" name="insertPageForm" action="component\rquestPageAction.php" onsubmit="return validate()">

												<div class="form-group row">
												<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Select Account Type</label>
												<div class="col-sm-9">
												<input type="text" class="form-control form-control-sm formstyle" id="postrate" onkeypress="isInputNumber(event)" placeholder="Enter Expected Rate Per Post"  autocomplete="off" name="postrate">
												</div>
												</div>

                                                <div class="form-group">
                                                <label for="exampleInputEmail3">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                <label for="exampleInputPassword4">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                <label for="exampleSelectGender">Gender</label>
                                                    <select class="form-control" id="exampleSelectGender">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                <label>File upload</label>
                                                <input type="file" name="img[]" class="file-upload-default">
                                                <div class="input-group col-xs-12">
                                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                                    <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                    </span>
                                                </div>
                                                </div>
                                                <div class="form-group">
                                                <label for="exampleInputCity1">City</label>
                                                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                                                </div>
                                                <div class="form-group">
                                                <label for="exampleTextarea1">Textarea</label>
                                                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                                </div>

												
												<input type="submit" name="submitreg" id="btn" class="btn btn-info mr-2" class="form-submit" value="Submit"/>
                                            </form>
                                           
                                        </div>
									</div>
								</div>
							</div>
                        </div>
                        
						<div class="col-lg-1 mb-3 mb-lg-0">
							
                        </div>
                    </div>
				</div>
				<!-- content-wrapper ends -->
				<!-- partial:partials/_footer.html -->
		



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