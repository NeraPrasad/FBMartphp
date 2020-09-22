
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Register Page</title>

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
              <h4>New here?</h4>
              <h6 class="font-weight-light">Join us today! It takes only few steps</h6>

              <?php 
                $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                if(strpos($fullUrl, "email=alreadexit") == true)
                {
                  echo "<h1>Email Address Alreddy Exit</h1>";
                  
                }
              ?>

              

              <form class="pt-3"  method="POST" action="component/registerAction.php" id="register-form" name="registerPageForm" onsubmit="return validate()">

                <div class="form-group">
                  <label>Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="username" id="username" class="form-control form-control-lg border-left-0" placeholder="Username">
                  </div>
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-email-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="email"  name="email" id="email" class="form-control form-control-lg border-left-0" placeholder="Email">
                  </div>
                </div>

                <div class="form-group">
                  <label>Mobile Number</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="phone" onkeypress="isInputNumber(event)"  id="phone" class="form-control form-control-lg border-left-0" placeholder="Mobile Number">
                  </div>
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" id="pass" name="pass" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password">                        
                  </div>
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" id="re_pass" name="re_pass"  class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Re-Password">                        
                  </div>
                </div>



                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" name="agreeterm" id="agreeterm" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <input type="submit" name="submitreg" id="btn" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"  value="Register"/>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.html" class="text-primary">Login</a>
                </div>
              </form>

              
            </div>
          </div>
          <div class="col-lg-6 register-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>


  <script src="vendors/base/vendor.bundle.base.js"></script>
  <script src="js/template.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>

<script>
 function validate(){
	var username = document.registerPageForm.username;
  var email = document.registerPageForm.email;
  var phone = document.registerPageForm.phone;
  var pass = document.registerPageForm.pass;
  var re_pass = document.registerPageForm.re_pass;

  var agreeterm = document.getElementsByName("agreeterm");

  if(username.value.length <= 0){
  	swal("User Name is Required");
    username.focus();
    return false;
  }

  if(email.value.length <= 0){
  	swal("Email is Required");
    email.focus();
    return false;
  }

 

  if(phone.value.length != 10){
  	swal("Mobile Number is Invalid. Enter Valid Number");
    return false;
  }

  if(pass.value.length <= 0 ){
  	swal("Password is Required");
    pass.focus();
    return false;
  }

  if(re_pass.value.length <= 0){
  	swal("Re-Password is Required");
    re_pass.focus();
    return false;
  }


  var pass= $("#pass").val();
  var re_pass= $("#re_pass").val();

  if(re_pass != pass ){
      swal("Password is Not Match");
      return false;
			
		}


  
    var check = false;
    for(var i = agreeterm.length - 1; i >= 0; i--) {
      if(agreeterm[i].checked) {
        check = true;
      }
    }
    if(check == false){
      swal("Terms & Conditions is required");
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