<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Notification Page</title>

	

	 <!-- Start MainNav -->
   <?php include "./include/StyleCSS.php" ?>
   <?php include "./style/orderPagestyle.php" ?>
	<!-- End MainNav -->

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	

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
                    
					<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-uppercase mb-0">Manage Users</h5>
            </div>
            <div class="table-responsive">
                <table class="table no-wrap user-table mb-0">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Name</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Occupation</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Email</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Added</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Category</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="pl-4">1</td>
                      <td>
                          <h5 class="font-medium mb-0">Daniel Kristeen</h5>
                          <span class="text-muted">Texas, Unitedd states</span>
                      </td>
                      <td>
                          <span class="text-muted">Visual Designer</span><br>
                          <span class="text-muted">Past : teacher</span>
                      </td>
                      <td>
                          <span class="text-muted">daniel@website.com</span><br>
                          <span class="text-muted">999 - 444 - 555</span>
                      </td>
                      <td>
                          <span class="text-muted">15 Mar 1988</span><br>
                          <span class="text-muted">10: 55 AM</span>
                      </td>
                      <td>
                        <select class="form-control category-select" id="exampleFormControlSelect1">
                          <option>Modulator</option>
                          <option>Admin</option>
                          <option>User</option>
                          <option>Subscriber</option>
                        </select>
                      </td>
                      <td>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="fa fa-key"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-trash"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-edit"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-upload"></i> </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-4">2</td>
                      <td>
                          <h5 class="font-medium mb-0">Emma Smith</h5>
                          <span class="text-muted">Texas, Unitedd states</span>
                      </td>
                      <td>
                          <span class="text-muted">Visual Designer</span><br>
                          <span class="text-muted">Past : teacher</span>
                      </td>
                      <td>
                          <span class="text-muted">daniel@website.com</span><br>
                          <span class="text-muted">999 - 444 - 555</span>
                      </td>
                      <td>
                          <span class="text-muted">15 Mar 1855</span><br>
                          <span class="text-muted">10: 00 AM</span>
                      </td>
                      <td>
                        <select class="form-control category-select" id="exampleFormControlSelect1">
                          <option>Modulator</option>
                          <option>Admin</option>
                          <option>User</option>
                          <option>Subscriber</option>
                        </select>
                      </td>
                      <td>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="fa fa-key"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-trash"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-edit"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-upload"></i> </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-4">3</td>
                      <td>
                          <h5 class="font-medium mb-0">Olivia Johnson</h5>
                          <span class="text-muted">Texas, Unitedd states</span>
                      </td>
                      <td>
                          <span class="text-muted">Visual Designer</span><br>
                          <span class="text-muted">Past : teacher</span>
                      </td>
                      <td>
                          <span class="text-muted">daniel@website.com</span><br>
                          <span class="text-muted">999 - 444 - 555</span>
                      </td>
                      <td>
                          <span class="text-muted">17 Aug 1988</span><br>
                          <span class="text-muted">12: 55 AM</span>
                      </td>
                      <td>
                        <select class="form-control category-select" id="exampleFormControlSelect1">
                          <option>Modulator</option>
                          <option>Admin</option>
                          <option>User</option>
                          <option>Subscriber</option>
                        </select>
                      </td>
                      <td>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="fa fa-key"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-trash"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-edit"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-upload"></i> </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-4">4</td>
                      <td>
                          <h5 class="font-medium mb-0">Isabella Williams</h5>
                          <span class="text-muted">Texas, Unitedd states</span>
                      </td>
                      <td>
                          <span class="text-muted">Visual Designer</span><br>
                          <span class="text-muted">Past : teacher</span>
                      </td>
                      <td>
                          <span class="text-muted">daniel@website.com</span><br>
                          <span class="text-muted">999 - 444 - 555</span>
                      </td>
                      <td>
                          <span class="text-muted">26 Mar 1999</span><br>
                          <span class="text-muted">10: 55 AM</span>
                      </td>
                      <td>
                        <select class="form-control category-select" id="exampleFormControlSelect1">
                          <option>Modulator</option>
                          <option>Admin</option>
                          <option>User</option>
                          <option>Subscriber</option>
                        </select>
                      </td>
                      <td>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="fa fa-key"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-trash"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-edit"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-upload"></i> </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-4">5</td>
                      <td>
                          <h5 class="font-medium mb-0">Sophia Jones</h5>
                          <span class="text-muted">Texas, Unitedd states</span>
                      </td>
                      <td>
                          <span class="text-muted">Visual Designer</span><br>
                          <span class="text-muted">Past : teacher</span>
                      </td>
                      <td>
                          <span class="text-muted">daniel@website.com</span><br>
                          <span class="text-muted">999 - 444 - 555</span>
                      </td>
                      <td>
                          <span class="text-muted">16 Aug 2001</span><br>
                          <span class="text-muted">10: 55 AM</span>
                      </td>
                      <td>
                        <select class="form-control category-select" id="exampleFormControlSelect1">
                          <option>Modulator</option>
                          <option>Admin</option>
                          <option>User</option>
                          <option>Subscriber</option>
                        </select>
                      </td>
                      <td>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="fa fa-key"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-trash"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-edit"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-upload"></i> </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-4">6</td>
                      <td>
                          <h5 class="font-medium mb-0">Charlotte Brown</h5>
                          <span class="text-muted">Texas, Unitedd states</span>
                      </td>
                      <td>
                          <span class="text-muted">Visual Designer</span><br>
                          <span class="text-muted">Past : teacher</span>
                      </td>
                      <td>
                          <span class="text-muted">daniel@website.com</span><br>
                          <span class="text-muted">999 - 444 - 555</span>
                      </td>
                      <td>
                          <span class="text-muted">15 Mar 1988</span><br>
                          <span class="text-muted">10: 55 AM</span>
                      </td>
                      <td>
                        <select class="form-control category-select" id="exampleFormControlSelect1">
                          <option>Modulator</option>
                          <option>Admin</option>
                          <option>User</option>
                          <option>Subscriber</option>
                        </select>
                      </td>
                      <td>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="fa fa-key"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-trash"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-edit"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-upload"></i> </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
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
	
	
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- Start MainNav -->
	<?php include "./include/StyleJS.php" ?>
	<!-- End MainNav -->

    
  </body>
</html>