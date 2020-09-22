<?php 

    require_once("database.php");



    if(isset($_REQUEST['submitlog']))
    {
        
            $email = mysqli_real_escape_string($conn, $_POST["email"]);  
            $pass = mysqli_real_escape_string($conn, $_POST["pass"]);  
            $query = "SELECT * FROM fb_user WHERE email = '$email'";  
            $result = mysqli_query($conn, $query);  
            if(mysqli_num_rows($result) > 0)  
            {  
                while($row = mysqli_fetch_array($result))  
                {  
                    if(password_verify($pass, $row["pass"]))  
                    {     
                        $_SESSION["email"] = $row["email"];
                        $_SESSION["name"] = $row["name"];
                        $_SESSION["phone"] = $row["phone"];
                        $_SESSION["id"] = $row["id"];
                        $_SESSION["user_id"] = $row["user_id"];

                        
                        header("location: ../advertiser/index.php?signin=success");
                        
    
                    }  
                    else  
                    {  
                        header("location: ../login.php?password=wrong");
                    }  
                }  
            }  
            else  
            {  
                header("location: ../login.php?email=notavailable");
            }
        
    }
?>