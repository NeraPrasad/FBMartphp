<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Activity Page</title>

	

	 <!-- Start MainNav -->
	 <?php include "./include/StyleCSS.php" ?>
	<!-- End MainNav -->
	
  </head>

  <body>
    <div class="container-scroller">

    <!-- Start MainNav -->
  <?php include "include/advertiserMainnav.php" ?>
  <?php include "./style/activityPagestyle.php" ?>
	<!-- End MainNav -->
	

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
					
					
                    
					<div class="container mt-3" >
					<div class="row">
						<div class="col-md-12">
							<!-- Success -->
							<div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md g-mb-30" style="margin-top:5px;">
								<div class="noty_bar noty_type__success noty_theme__unify--v1--light g-mb-25">
								<div class="noty_body">
									<div class="g-mr-20">
										<div class="noty_body__icon">
											<i class="hs-admin-check"></i>
										</div>
									</div>
									<div>Hi, welcome to Unify. This is example of Toastr notification box.</div>
								</div>
								</div>
							</div>
							<!-- End Success -->
						</div>
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