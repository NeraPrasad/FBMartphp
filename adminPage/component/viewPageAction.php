<?php

    require_once("../../component/database.php");


    if(isset($_GET['delete'])){

      $ID = $_GET['delete'];

      $conn-> query("DELETE FROM fb_page WHERE id=$ID") or die($conn->error);


      header("location: ../viewPage.php?delete=success");

    }


    if(isset($_REQUEST['submitedit']))
    {


            mysqli_query("UPDATE fb_page SET acc_type='?', poli_cat='?', url='?', acc_cat='?', rate_post='?', insert_date='?', ");
                
            if($stmt = mysqli_prepare($conn, $sql))
            {
                mysqli_stmt_bind_param($stmt, "ssssss",  $acc_type, $poli_cat_data ,$url,$acc_cat_data,$rate_post,$insert_date);
                            
                $poli_cat_array = $_REQUEST['poli_cat'];
                $poli_cat_data = implode(',',$poli_cat_array);

                $acc_cat_array = $_REQUEST['acc_cat'];
                $acc_cat_data = implode(',',$acc_cat_array);

                $url = $_REQUEST['url'];  
                $rate_post = $_REQUEST['postrate'];
                $acc_type = $_REQUEST['acc_type'];
                $insert_date = date('m/d/Y H:i:s', time());

                mysqli_stmt_execute($stmt);

                header("location: ../viewPage.php?edit=success");

            } 
                            
            else
            {
                echo    "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);
            }
            mysqli_stmt_close($stmt);        
    }


?>