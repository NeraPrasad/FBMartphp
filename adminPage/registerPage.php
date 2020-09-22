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
									<h3 class="text-dark font-weight-bold mb-2">Hi, welcome back!</h3>
									<h6 class="font-weight-normal mb-2">Last login was 23 hours ago. View details</h6>
								</div>
								<div class="ml-lg-5 d-lg-flex d-none">
										<button type="button" class="btn bg-white btn-icon">
											<i class="mdi mdi-view-grid text-success"></i>
									</button>
										<button type="button" class="btn bg-white btn-icon ml-2">
											<i class="mdi mdi-format-list-bulleted font-weight-bold text-primary"></i>
										</button>
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
                                <h4 class="card-title">Request Order</h4>
									<div class="row">
                                    <div class="col-12 ">
                                       
                                            <form class="forms-sample">
                                                <div class="form-group">
                                                <label for="exampleInputName1">Name</label>
                                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
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
                                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                <button class="btn btn-light">Cancel</button>
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