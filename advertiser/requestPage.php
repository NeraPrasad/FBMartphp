<?php

$id = "";

if(isset($_POST['submit'])){
	$selectacc_arr = $_POST['selectacc'];
    $id =  implode(", ", $selectacc_arr);
}

if(isset($_GET["id"]))
{
	  $id = $_GET["id"];
	  
}
?> 


<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Register Page</title>

	

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
								
                                <h4 class="card-title">Register Page</h4>
									<div class="row">
                                    <div class="col-12 ">
                                       
											<form method="POST" class="forms-sample"  id="register-form" name="insertPageForm" action="component\requestPageAction.php" onsubmit="return validate()">



											<div class="form-group row">
											<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Title</label>
											<div class="col-sm-9">
												<input type="text" class="form-control form-control-sm formstyle" id="title"  placeholder="Enter URL Your Account" autocomplete="off"  name="title">
												<span id="urlMsg"></span>
											</div>
											</div>


											<div class="form-group row">
											<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Description</label>
											<div class="col-sm-9">
												<textarea class="form-control" style="border: 1px solid #51E1C3;" id="description" name="description" rows="4"></textarea>
												<span id="urlMsg"></span>
											</div>
											</div>

											<div class="form-group row">
											<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Image</label>
											<div class="col-sm-9">
												<input type="text" class="form-control form-control-sm formstyle" id="image"  placeholder="Enter URL Your Account" autocomplete="off"  name="image">
												<span id="urlMsg"></span>
											</div>
											</div>

											<div class="form-group row">
											<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Special </label>
											<div class="col-sm-9">
												<textarea class="form-control" style="border: 1px solid #51E1C3;" id="special" name="special" rows="4"></textarea>
												<span id="urlMsg"></span>
											</div>
											</div>

											<div class="form-group row">
												<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Page ID</label>
													<div class="col-sm-9">
														<input type="text" class="form-control form-control-sm formstyle" id="pageId" value="<?php echo $id?>"  placeholder="Enter Expected Rate Per Post"  autocomplete="off" name="pageId">
														<span id="postrateMsg"></span>
													</div>
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