<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Notification Page</title>


	 <!-- Start MainNav -->
   <?php include "./include/StyleCSS.php" ?>
   <?php include "./style/notificationstyle.php" ?>
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
                    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />

                        <section class="container py-4">
                        <div class="row">
                            <div class="col-md-12">
                            <h2>Manage Order</h2>
                            <ul id="tabs" class="nav nav-tabs">

                                <li class="nav-item"><a class="nav-link small text-uppercase active" data-target="#tab1" data-toggle="tab">Accept Order<span style="margin-top:4px" class="ml-2 float-right badge badge-pill badge-success"><?php
                                    require '../component/database.php';
                                    $userId = $_SESSION['id'];
                                    $query = "SELECT * FROM fb_request WHERE userId = '$userId' AND order_status=1";
                                    $query_run = mysqli_query($conn , $query);
                                    $row5 = mysqli_num_rows($query_run);
                                    echo $row5;
                                ?></span></a></li>

                                <li class="nav-item"><a class="nav-link small text-uppercase" data-target="#tab2" data-toggle="tab">Reject Order<span style="margin-top:4px" class="ml-2 float-right badge badge-pill badge-warning"><?php
                                    require '../component/database.php';
                                    $userId = $_SESSION['id'];
                                    $query = "SELECT * FROM fb_request WHERE userId = '$userId' AND order_status=2";
                                    $query_run = mysqli_query($conn , $query);
                                    $row3 = mysqli_num_rows($query_run);
                                    echo $row3;
                                ?></span></a></li>
                                
                                <li class="nav-item"><a class="nav-link small text-uppercase" data-target="#tab3" data-toggle="tab">Completed Order<span style="margin-top: 4px" class="ml-2 float-right badge badge-pill badge-danger"><?php
                                    require '../component/database.php';
                                    $userId = $_SESSION['id'];
                                    $query = "SELECT * FROM fb_request WHERE userId = '$userId' AND order_status=3";
                                    $query_run = mysqli_query($conn , $query);
                                    $row4 = mysqli_num_rows($query_run);
                                    echo $row4;
                                ?></span></a></li>
                            </ul>

                            <br>
                        <div id="tabsContent" class="tab-content">
                            <div id="tab1" class="tab-pane fade active show">
                                <div class="row container d-flex justify-content-center">
                                    <div class="col-md-12">
                                    <td class="box">
                                        
                                    <!-- Accept Order Start -->
                                     <div class="box mt-2">
                                        <div class="container mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 mx-auto">
                                                    <div class="career-search mb-60">
                                                        <div class="filter-result">
                                                            <form method="post" action="notificationPage.php">

                                                                <?php
                                                                require '../component/database.php';
                                                                $userId = $_SESSION['id'];
                                                                $sql = "SELECT * FROM fb_request WHERE userId = '$userId' AND order_status=1";
                                                                $result = $conn->query($sql);

                                                                if ($result->num_rows > 0) {
                                                                while($row = $result->fetch_assoc()) 

                                                                { 
                                                                ?>
                                                                <div class="job-box d-md-flex align-items-center justify-content-between mb-30" style="background-color:#fff;">
                                                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                                                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                                                        FD
                                                                    </div>
                                                                    <div class="job-content">
                                                                        <h5 class="text-center text-md-left"><?php echo $row['title']; ?></h5>
                                                                        <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                                                            <li class="mr-md-4">
                                                                                <i class="zmdi zmdi-pin mr-2"></i> <?php echo $row['userId']; ?>
                                                                            </li>
                                                                            <li class="mr-md-4">
                                                                                <i class="zmdi zmdi-money mr-2"></i> <?php echo $row['pageId']; ?>
                                                                            </li>
                                                                            <li class="mr-md-4">
                                                                                <i class="zmdi zmdi-time mr-2"></i> <?php echo $row['insert_date']; ?>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="job-right my-4 flex-shrink-0">
                                                                <a href="notificationViewPage?id=<?php echo $row['id']; ?>" name="submit" class="btn d-block w-100 d-sm-inline-block btn-custom bg-info text-white">View</a>
                                                                </div>
                                                            </div>
                                                            <?php 
                                                                }
                                                                } 
                                                                else {
                                                                echo "<br>0 results";
                                                                }
                                                                $conn->close();
                                                            ?>
                                                            </form>
                                                            <br/><br/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             <!-- Accept Order End -->

                                </div>
                            </div>
                        </div>



                        <div id="tab2" class="tab-pane fade">
                                <div class="row container d-flex justify-content-center">
                                    <div class="col-md-12">
                                    <td class="box">
                                        
                                    <!-- Accept Order Start -->
                                     <div class="box mt-2">
                                        <div class="container mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 mx-auto">
                                                    <div class="career-search mb-60">
                                                        <div class="filter-result">
                                                            <form method="post" action="notificationPage.php">

                                                                <?php
                                                                require '../component/database.php';
                                                                $userId = $_SESSION['id'];
                                                                $sql = "SELECT * FROM fb_request WHERE userId = '$userId' AND order_status=2";
                                                                $result = $conn->query($sql);

                                                                if ($result->num_rows > 0) {
                                                                while($row = $result->fetch_assoc()) 

                                                                { 
                                                                ?>
                                                                <div class="job-box d-md-flex align-items-center justify-content-between mb-30" style="background-color:#fff;">
                                                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                                                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                                                        FD
                                                                    </div>
                                                                    <div class="job-content">
                                                                        <h5 class="text-center text-md-left"><?php echo $row['title']; ?></h5>
                                                                        <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                                                            <li class="mr-md-4">
                                                                                <i class="zmdi zmdi-pin mr-2"></i> <?php echo $row['userId']; ?>
                                                                            </li>
                                                                            <li class="mr-md-4">
                                                                                <i class="zmdi zmdi-money mr-2"></i> <?php echo $row['pageId']; ?>
                                                                            </li>
                                                                            <li class="mr-md-4">
                                                                                <i class="zmdi zmdi-time mr-2"></i> <?php echo $row['insert_date']; ?>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="job-right my-4 flex-shrink-0">
                                                                <a href="notificationViewPage?id=<?php echo $row['id']; ?>" name="submit" class="btn d-block w-100 d-sm-inline-block btn-custom bg-info text-white">View</a>
                                                                </div>
                                                            </div>
                                                            <?php 
                                                                }
                                                                } 
                                                                else {
                                                                echo "<br>0 results";
                                                                }
                                                                $conn->close();
                                                            ?>
                                                            </form>
                                                            <br/><br/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             <!-- Accept Order End -->

                                </div>
                            </div>
                        </div>



                        <div id="tab3" class="tab-pane fade">
                                <div class="row container d-flex justify-content-center">
                                    <div class="col-md-12">
                                    <td class="box">
                                        
                                    <!-- Accept Order Start -->
                                     <div class="box mt-2">
                                        <div class="container mt-2">
                                            <div class="row">
                                                <div class="col-lg-12 mx-auto">
                                                    <div class="career-search mb-60">
                                                        <div class="filter-result">
                                                            <form method="post" action="notificationPage.php">

                                                                <?php
                                                                require '../component/database.php';
                                                                $userId = $_SESSION['id'];
                                                                $sql = "SELECT * FROM fb_request WHERE userId = '$userId' AND order_status=0";
                                                                $result = $conn->query($sql);

                                                                if ($result->num_rows > 0) {
                                                                while($row = $result->fetch_assoc()) 

                                                                { 
                                                                ?>
                                                                <div class="job-box d-md-flex align-items-center justify-content-between mb-30" style="background-color:#fff;">
                                                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                                                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                                                        FD
                                                                    </div>
                                                                    <div class="job-content">
                                                                        <h5 class="text-center text-md-left"><?php echo $row['title']; ?></h5>
                                                                        <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                                                            <li class="mr-md-4">
                                                                                <i class="zmdi zmdi-pin mr-2"></i> <?php echo $row['userId']; ?>
                                                                            </li>
                                                                            <li class="mr-md-4">
                                                                                <i class="zmdi zmdi-money mr-2"></i> <?php echo $row['pageId']; ?>
                                                                            </li>
                                                                            <li class="mr-md-4">
                                                                                <i class="zmdi zmdi-time mr-2"></i> <?php echo $row['insert_date']; ?>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="job-right my-4 flex-shrink-0">
                                                                <a href="notificationViewPage?id=<?php echo $row['id']; ?>" name="submit" class="btn d-block w-100 d-sm-inline-block btn-custom bg-info text-white">View</a>
                                                                </div>
                                                            </div>
                                                            <?php 
                                                                }
                                                                } 
                                                                else {
                                                                echo "<br>0 results";
                                                                }
                                                                $conn->close();
                                                            ?>
                                                            </form>
                                                            <br/><br/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             <!-- Accept Order End -->

                                </div>
                            </div>
                        </div>



                            </div>
                            </div>
                        </div>
                        </section>



        
	</div>
			

	<!-- Start MainNav -->
		<?php include "./include/advertiserMainfooter.php" ?>
	<!-- End MainNav -->


			</div>
		</div>
	</div>
	
	
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		
	</script>

	<!-- Start MainNav -->
	<?php include "./include/StyleJS.php" ?>
	<!-- End MainNav -->

    
  </body>
</html>