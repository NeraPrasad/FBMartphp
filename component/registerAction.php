<?php 

    require_once("database.php");
    $msg = "";
    $msg_success = "";

    if(isset($_REQUEST['submitreg']))
    {
        
        $email_c = $_REQUEST['email'];
        $email_query = "SELECT * FROM fb_user WHERE email='$email_c'";
        $email_result = mysqli_query($conn,$email_query);
        if(mysqli_num_rows($email_result) > 0)
        {
            header("location: ../register.php?email=alreadexit");
        }
        else
        {
            $sql = "INSERT INTO fb_user(username,email,phone,reg_date,pass) VALUES (?, ?, ?, ?,?)";
                
            if($stmt = mysqli_prepare($conn, $sql)){
                mysqli_stmt_bind_param($stmt, "sssss", $username, $email, $phone ,$reg_date,$pass);
                            

                $pass_def = $_REQUEST['pass'];
                $pass = password_hash($pass_def, PASSWORD_DEFAULT); 
                $email = $_REQUEST['email'];
                $username = $_REQUEST['username'];
                $reg_date = date('m/d/Y', time());
                $phone = $_REQUEST['phone'];
                mysqli_stmt_execute($stmt);

                header("location: ../login.php?signup=success");
        } 
                            
          else
          {
              echo  "Error in the system, Please Contact Admin: $sql. " . mysqli_error($conn);
          }
          mysqli_stmt_close($stmt);
        }
    }                

?>