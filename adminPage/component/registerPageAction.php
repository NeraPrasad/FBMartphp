<?php 

    require_once("../../component/database.php");
    $msg = "";
    $msg_success = "";

    if(isset($_REQUEST['submitreg']))
    {
        
            $sql = "INSERT INTO fb_page (userId,acc_type,poli_cat,url,acc_cat,rate_post,insert_date) VALUES (?, ?, ?, ?, ?, ?, ?)";
                
            if($stmt = mysqli_prepare($conn, $sql))
            {
                mysqli_stmt_bind_param($stmt, "sssssss", $userId, $acc_type, $poli_cat_data ,$url,$acc_cat_data,$rate_post,$insert_date);
                            
                $poli_cat_array = $_REQUEST['poli_cat'];
                $poli_cat_data = implode(',',$poli_cat_array);

                $acc_cat_array = $_REQUEST['acc_cat'];
                $acc_cat_data = implode(',',$acc_cat_array);

                $url = $_REQUEST['url'];  
                $rate_post = $_REQUEST['postrate'];
                $acc_type = $_REQUEST['acc_type'];
                $insert_date = date('m/d/Y H:i:s', time());

                $userId = '1';

                mysqli_stmt_execute($stmt);

                header("location: ../registerPage.php?insert=success");

            } 
                            
            else
            {
                echo    "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);
            }
            mysqli_stmt_close($stmt);
        
                  
    }
?>