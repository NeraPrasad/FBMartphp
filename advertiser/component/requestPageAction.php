<?php 
    session_start();
    require_once("../../component/database.php");
  

    if(isset($_REQUEST['submitreg']))
    {
        
        $sql = "INSERT INTO fb_request(userId,pageId,title,description,image,special,insert_date) VALUES (?, ?, ?, ?, ?, ?, ?)";
                
            if($stmt = mysqli_prepare($conn, $sql))
            {
                mysqli_stmt_bind_param($stmt, "sssssss", $userId, $pageId, $title ,$description,$image,$special,$insert_date);
                            
                $userId = $_SESSION['id'] ;
                $pageId = $_REQUEST['pageId'];  
                $title = $_REQUEST['title'];
                $description = $_REQUEST['description'];  
                $image = $_REQUEST['image'];
                $special = $_REQUEST['special'];
                $insert_date = date('m/d/Y H:i:s', time());

                mysqli_stmt_execute($stmt);

                header("location: ../requestPage.php?insert=success");

            } 
                            
            else
            {
                echo    "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);
            }
            mysqli_stmt_close($stmt);        
    }

    
?>