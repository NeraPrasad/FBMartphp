

<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Register Page</title>

	

	 <!-- Start MainNav -->
	 <?php include "./include/StyleCSS.php" ?>
	<!-- End MainNav -->


  </head>

  <body>
    <div class="container-scroller">

    <!-- Start MainNav -->
  <?php include "include/advertiserMainnav.php" ?>
	<!-- End MainNav -->
	

    <!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">

						<div class="col-sm-6 mb-4 mb-xl-0">
							<div class="d-lg-flex align-items-center">
								<div>
								<?php 
									$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

									if(strpos($fullUrl, "insert=success") == true)
									{
									echo "<h2 class='text-dark font-weight-bold mb-2'>Page Register Successfull</h2>";
									
									}
								?>
									<h6 class="font-weight-normal mb-2">View Your Register <a href="viewPage.php">Pages</a></h6>
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
								
                                <h4 class="card-title">Register Page</h4>
									<div class="row">
                                    <div class="col-12 ">
                                       
											<form method="POST" class="forms-sample"  id="register-form" name="insertPageForm" action="component\registerPageAction.php" onsubmit="return validate()">

											<div class="form-group row">
											<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Select Account Type</label>
											<div class="col-sm-9">
												<select class="form-control form-control-lg formstyle" style="border: 1px solid #aaaaaa; outline-style: solid; " id="acc_type" name="acc_type">
												<option value="Select Account Type" disabled selected>Select Account Type</option>
												<option value="page">Page</option>
												<option value="group">Group</option>
												</select>
												<span id="typeMsg"></span>
											</div>
											</div>


											<div class="form-group row">
												<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Political Preference (Select Multiple)</label>
												<div class="col-sm-4">
												<?php
													require '../component/database.php';
													$sql = "SELECT * FROM fb_poli_cat LIMIT 0, 6";
													$result = $conn->query($sql);

													if ($result->num_rows > 0) {
													while($row = $result->fetch_assoc()) 

													{ 
													?>

													<div class="form-check form-check-info">
														<div class="form-check-inline">
															<label class="form-check-label">
																<input type="checkbox" class="form-check-input" name="poli_cat[]"  value="<?php echo $row['catName']; ?>"><?php echo $row['catName']; ?>
																
															</label><span id="PoliCatMsg"></span>
														</div>
													</div>

													<?php 
													}
													} 
													else {
													echo "0 results";
													}
													$conn->close();
												?>
												</div>
											</div>

											<div class="form-group row">
											<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Account URL (Page or Group)</label>
											<div class="col-sm-9">
												<input type="text" class="form-control form-control-sm formstyle" id="url"  placeholder="Enter URL Your Account" autocomplete="off"  name="url">
												<span id="urlMsg"></span>
											</div>
											</div>

											<div class="form-group row">
												<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Account Category (Select Multiple)</label>

												<div class="col-sm-4">
												<?php
													require '../component/database.php';
													$sql = "SELECT * FROM fb_acc_cat LIMIT 0, 6";
													$result = $conn->query($sql);

													if ($result->num_rows > 0) {
													while($row = $result->fetch_assoc()) 

													{ 
													?>

													<div class="form-check form-check-info">
														<div class="form-check-inline">
															<label class="form-check-label">
																<input type="checkbox" class="form-check-input" name="acc_cat[]" value="<?php echo $row['catName']; ?>"><?php echo $row['catName']; ?>
															</label>
														</div>
													</div>

													<?php 
													}
													} 
													else {
													echo "0 results";
													}
													$conn->close();
												?>
												</div>


												<div class="col-sm-5">
												<?php
													require '../component/database.php';
													$sql = "SELECT * FROM fb_acc_cat LIMIT 7, 15";
													$result = $conn->query($sql);

													if ($result->num_rows > 0) {
													while($row = $result->fetch_assoc()) 

													{ 
													?>

													<div class="form-check form-check-info">
														<div class="form-check-inline">
															<label class="form-check-label">
																<input type="checkbox" class="form-check-input" name="acc_cat[]" value="<?php echo $row['catName']; ?>"><?php echo $row['catName']; ?>
															</label>
														</div>
													</div>

													

													<?php 
													}
													} 
													else {
													echo "0 results";
													}
													$conn->close();
												?>
												</div>
											</div>

											<div class="form-group row">
												<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Expected Rate Per Post (Rs.)</label>
													<div class="col-sm-9">
														<input type="text" class="form-control form-control-sm formstyle" id="postrate" onkeypress="isInputNumber(event)" placeholder="Enter Expected Rate Per Post"  autocomplete="off" name="postrate">
														<span id="postrateMsg"></span>
													</div>
											</div>



											<input type="submit" name="submitreg" id="btn" class="btn btn-primary mr-2" class="form-submit" value="Submit"/>


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

	<!-- Start MainNav -->
		<?php include "./include/advertiserMainfooter.php" ?>
	<!-- End MainNav -->


			</div>
		</div>
    </div>


	<!-- Start MainNav -->
	<?php include "./include/StyleJS.php" ?>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- End MainNav -->

    
  </body>
</html>

<script>

 function validate(){
  var postrate = document.insertPageForm.postrate;
  var url = document.insertPageForm.url;
  var acc_type = document.insertPageForm.acc_type;

  var acc_cat = document.getElementsByName("acc_cat[]");
  var poli_cat = document.getElementsByName("poli_cat[]");

  if(acc_type.value == "Select Account Type"){
  	swal("Account Type is Required");
    acc_type.focus();
    return false;
  }

  var check = false;
  for(var i = poli_cat.length - 1; i >= 0; i--) {
  	if(poli_cat[i].checked) {
    	check = true;
    }
  }
  if(check == false){
  	swal("Political Preference is required");
    return false;
  }

  if(url.value.length <= 0){
  	swal("Account URL is Required");
    url.focus();
    return false;
  }

  var check = false;
  for(var i = acc_cat.length - 1; i >= 0; i--) {
  	if(acc_cat[i].checked) {
    	check = true;
    }
  }
  if(check == false){
  	swal("Account Category  is required");
    return false;
  }

  if(postrate.value.length <= 0){
  	swal("Expected Rate Per Post is Required");
    postrate.focus();
    return false;
  }

  return true;
  
}

function isInputNumber(evt) {
        var ch = String.fromCharCode(evt.which);
        if(!(/[0-9]/.test(ch)))
        {
            evt.preventDefault();
        }     
    }


    
</script>