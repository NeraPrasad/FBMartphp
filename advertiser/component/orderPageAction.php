<?php

    require_once("../../component/database.php");


    if(isset($_GET['delete'])){

      $ID = $_GET['delete'];

      $conn-> query("DELETE FROM fb_request WHERE id=$ID") or die($conn->error);


      header("location: ../orderPage.php?delete=success");

    }


    


?>