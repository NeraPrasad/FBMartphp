<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Notification Page</title>

	

	 <!-- Start MainNav -->
   <?php include "./include/StyleCSS.php"?>
   
   <?php include "./style/orderPagestyle.php" ?>
	<!-- End MainNav -->
  
  <link rel="stylesheet" href="../css/notificationBar.css">
</head>
  </head>

  <body>

  
    <div class="container-scroller">

    <!-- Start MainNav -->
  <?php include "include/advertiserMainnav.php" ?>
	<!-- End MainNav -->

                <?php 
									$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

									if(strpos($fullUrl, "delete=success") == true)
									{
									echo "<div class='alert alert-success'>
                  <div class='container'>
                      <div class='alert-icon'>
                          <i class='material-icons'>check</i>
                      </div>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'><i class='material-icons'>clear</i></span>
                      </button>
                      <b>Page Delete Success:</b> You Can Add New Page <a href='viewPage.php' style='color:#fff;'>Click</a> 
                  </div>
                </div>";
                  }
                  elseif(strpos($fullUrl, "update=success") == true)
                  {
                    echo "<div class='alert alert-success'>
                  <div class='container'>
                      <div class='alert-icon'>
                          <i class='material-icons'>check</i>
                      </div>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'><i class='material-icons'>clear</i></span>
                      </button>
                      <b>Page Update Success:</b> You Can Add New Page <a href='viewPage.php' style='color:#fff;'>Click</a> 
                  </div>
                </div>";
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
                    
<div class="container mt-4">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-uppercase mb-0">Manage Pages</h5>
            </div>
            <div class="table-responsive">
                <?php 
                    require '../component/database.php';
                    $result = $conn-> query("SELECT * FROM fb_page") or die ($conn->error);
                 ?>

                <table class="table no-wrap user-table mb-0">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 text-uppercase font-medium pl-4">No</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Account type</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Political Category</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Page Category</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">URL</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Rate Post</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Insert Date</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Manage</th>
                    </tr>
                  </thead>
                  <tbody>

                 <?php 
                    while($row = $result->fetch_assoc()):
                 ?>

                    <tr>
                      <td class="pl-4">1</td>
                      <td>
                          <h5 class="font-medium mb-0"><?php echo $row['acc_type'];?></h5>
                          <!-- <span class="text-muted">Texas, Unitedd states</span> -->
                      </td>
                      <td>
                          <span class="text-muted"><?php echo $row['poli_cat'];?></span><br>
                         
                      </td>
                      <td>
                          <span class="text-muted"><?php echo $row['acc_cat'];?></span><br>
                          
                      </td>
                      <td>
                          <span class="text-muted">  <a href="<?php echo $row['url']; ?>" target="_blank"  class="fa fa-facebook"></a> </span><br>
                          
                      </td>
                       <td>
                          <span class="text-muted">Rs. <?php echo $row['rate_post'];?></span><br>
                        
                      </td>
                      <td>
                          <span class="text-muted"><?php echo $row['insert_date'];?></span><br>
            
                      </td>
                      <td>
                        <a href="viewPageEdit?editid=<?php echo $row['id']; ?>" name="edit" id="btn" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"  onclick="return validate();"><i class="fa fa-edit"></i></a>
                        <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2 btn-del" ><i class="fa fa-trash"></i></button>
                      </td>
                    </tr>

                    <div id="id01" class="modal">
                   
                    <form class="modal-content" action="/action_page.php">
                      <div class="container" style="text-align: center;">
                        <h1>Delete Account</h1>
                        <p>Are you sure you want to delete your account?</p>
                        <div class="clearfix">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <a href="component/viewPageAction.php?delete=<?php echo $row['id']; ?>" name="delete" id="btn" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Delete</a> 
                        </div>
                      </div>
                    </form>
                  </div>

              <?php endwhile; ?>


                  </tbody>
                </table>
            </div>
        </div>
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
	
	
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- Start MainNav -->
	<?php include "./include/StyleJS.php" ?>
	<!-- End MainNav -->

<script>
$(document).ready(function() {
    $('body').bootstrapMaterialDesign();
});
</script>

<script>

var modal = document.getElementById('id01');

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
  </body>
</html>