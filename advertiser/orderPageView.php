<?php
require '../component/database.php';

if(isset($_GET["id"]))
{
	  $id = $_GET["id"];
	  $query = mysqli_query($conn,"SELECT * from fb_request where id='$id'");
	  $row = mysqli_fetch_array($query);

	  
	  $query2 = mysqli_query($conn,"SELECT * from fb_page where id='$pageId'");
	  $row2 = mysqli_fetch_array($query2);

	//   $poli = $row2["poli_cat"];
	//   $poli_arry = explode(",", $poli); 

	//   $acc = $row2["acc_cat"];
	//   $acc_arry = explode(",", $acc);
}

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
										<small>Secondary Text</small>
										</h1>

										<!-- Portfolio Item Row -->
										<div class="row">

										<div class="col-md-8">
											<img class="img-fluid" src="http://placehold.it/750x500" alt="">
										</div>

										<div class="col-md-4">
											<h3 class="my-3">Project Description</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
											<h3 class="my-3">Project Details</h3>
											<ul>
											<li>Lorem Ipsum</li>
											<li>Dolor Sit Amet</li>
											<li>Consectetur</li>
											<li>Adipiscing Elit</li>
											</ul>
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

