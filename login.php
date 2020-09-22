<!DOCTYPE html>
<html lang="en">

<head>

  <title>Login Page</title>

  <!-- Start MainNav -->
  <?php include "include/StyleCSS.php" ?>
  <!-- End MainNav -->
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
            <a class="navbar-brand brand-logo" href="index.html"><h2 style="font-weight: bold;color: #51e1c3;">Facebook</h2></a>
              <?php 
                $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                if(strpos($fullUrl, "signup=success") == true)
                {
                  echo "<h1>Register Successfull</h1>";
                  echo "<h3>Now You Can Login</h3>";
                }
                elseif(strpos($fullUrl, "password=wrong") == true)
                {
                  echo "<h1>Wrong Password Details</h1>";
                }
                elseif(strpos($fullUrl, "email=notavailable") == true)
                {
                  echo "<h1>This Email Address Is Not Available</h1>";
                }
              ?>
              <h6 class="font-weight-light">Happy to see you!</h6>

              <form class="pt-3" method="POST" action="component/loginAction.php" id="register-form" name="loginPageForm" onsubmit="return validate()">
                <div class="form-group">
                  <label for="exampleInputEmail">Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" id="email" name="email" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" id="pass" name="pass" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password">                        
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="my-3">
                  <input type="submit" name="submitlog" id="btnl" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="Login"/>
                </div>
                <div class="mb-2 d-flex">
                  <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1">
                    <i class="mdi mdi-facebook mr-2"></i>Facebook
                  </button>
                  <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1">
                    <i class="mdi mdi-google mr-2"></i>Google
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="vendors/base/vendor.bundle.base.js"></script>
  <script src="js/template.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>
<script>
 function validate(){

  var email = document.loginPageForm.email;
  var pass = document.loginPageForm.pass;



  if(email.value.length <= 0){
  	swal("Email is Required");
    email.focus();
    return false;
  }


  if(pass.value.length <= 0 ){
  	swal("Password is Required");
    pass.focus();
    return false;
  }


  return true;
  
}


    
</script>