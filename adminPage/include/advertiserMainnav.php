<?php 
session_start();
?>
<div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <ul class="navbar-nav navbar-nav-left">


              <!-- Notifications -->
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell mx-0"></i>
                  <span class="count bg-success">
                  <?php
                    require '../component/database.php';
                    $userId = $_SESSION['id'];
                    $query = "SELECT * FROM fb_request WHERE userId = '$userId' AND notify=0";
                    $query_run = mysqli_query($conn , $query);
                    $row2 = mysqli_num_rows($query_run);
                    echo $row2;
                  ?>
                  </span>
                </a>
                <div style="padding: 5px; border: 1px solid #DFD8D8; width:300px;" class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p> <br>
                  
                  

                  <?php
                    require '../component/database.php';
                    $userId = $_SESSION['id'];
                    $sql = "SELECT * FROM fb_request WHERE userId = '$userId' AND notify=0";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) 

                    { 
                  ?>

                  <a class="dropdown-item preview-item" href="notificationViewPage?id=<?php echo $row['id']; ?>">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-success">
                          <i class="mdi mdi-bell mx-0"></i>
                        </div>
                    </div>
                    <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-normal"><?php echo $row['title']; ?></h6>
                        <p class="font-weight-light small-text mb-0 text-muted">
                        <?php echo $row['insert_date']; ?>
                        </p>
                    </div>
                  </a>
           
                  <?php 
                    }
                      } 
                      else {
                      echo "
                      0 results";
                      }
                      $conn->close();
                  ?>

                  <a class="dropdown-item preview-item" href="notificationPage.php">
                        <h6 class="preview-subject font-weight-normal">View All</h6>
                  </a>

                </div>
              </li>



              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-email mx-0"></i>
                  <span class="count bg-primary">4</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="../../images/faces/face4.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow">
                        <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                        </h6>
                        <p class="font-weight-light small-text text-muted mb-0">
                          The meeting is cancelled
                        </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="../../images/faces/face2.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow">
                        <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                        </h6>
                        <p class="font-weight-light small-text text-muted mb-0">
                          New product launch
                        </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="../../images/faces/face3.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow">
                        <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                        </h6>
                        <p class="font-weight-light small-text text-muted mb-0">
                          Upcoming board meeting
                        </p>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link count-indicator "><i class="mdi mdi-message-reply-text"></i></a>
              </li>

              <!-- Search Bar -->
              <li class="nav-item nav-search d-none d-lg-block ml-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="search">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
                </div>
              </li>	
            </ul>

            <!-- Logo -->
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html"><h2 style="font-weight: bold;color: #51e1c3;">Facebook Page Admin</h2></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><h2 style="font-weight: bold;color: #51e1c3;">FB</h2></a>
            </div>


            <!-- Button -->
            <ul class="navbar-nav navbar-nav-right">


                <li class="nav-item dropdown  d-lg-flex d-none">
                  <button type="button" onclick="location.href='../advertiser/index.php'" class="btn btn-inverse-primary btn-sm">Switch To Advertiser </button>
                </li>



                <li class="nav-item dropdown d-lg-flex d-none">
                  <button type="button" class="btn btn-inverse-primary btn-sm">Settings</button>
                </li>

                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name"><?php echo $_SESSION['username'] ?></span>
                    <span class="online-notify"></span>
                    <img src="../images/faces/face27.jpg" alt="profile"/>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                      <a class="dropdown-item">
                        <i class="mdi mdi-settings text-primary"></i>
                        Settings
                      </a>
                      <a class="dropdown-item" href="../advertiser/index.php">
                        <i class="mdi mdi-settings text-primary"></i>
                        Switch To Selling
                      </a>
                      <a class="dropdown-item">
                        <i class="mdi mdi-logout text-primary"></i>
                        Logout
                      </a>
                  </div>
                </li>
            </ul>



            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>



      <!-- Second Navbar -->
      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">

          
            <li class="nav-item">
                  <a href="index.php" class="nav-link">
                    <i class="mdi mdi-home-map-marker menu-icon"></i>
                    <span class="menu-title">Home</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="registerPage.php">
                  <i class="mdi mdi-library-plus menu-icon"></i>
                  <span class="menu-title">Register Page</span>
                </a>
              </li>

    

              <li class="nav-item">
                  <a href="viewPage.php" class="nav-link">
                    <i class="mdi mdi-chart-areaspline menu-icon"></i>
                    <span class="menu-title">Page View</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li> 
 

              <li class="nav-item">
                  <a href="notificationPage.php" class="nav-link">
                    <i class="mdi mdi-bell menu-icon"></i>
                    <span class="menu-title">Notifications</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>

            

              
              <li class="nav-item">
                  <a href="orderPage.php" class="nav-link">
                    <i class="mdi mdi-flash menu-icon"></i>
                    <span class="menu-title">Order</span></a>
              </li>

              <li class="nav-item">
                  <a href="accountPage.php" class="nav-link">
                    <i class="mdi mdi-account-circle menu-icon"></i>
                    <span class="menu-title">Account</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              
            </ul>
        </div>
      </nav>
    </div>