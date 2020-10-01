<?php 
    session_start();
    require_once("../../component/database.php");
  

    
                            
    else
    {
        echo    "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);
    }
    mysqli_stmt_close($stmt);        
    

    
?>