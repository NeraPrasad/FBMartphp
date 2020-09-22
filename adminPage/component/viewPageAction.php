<?php

    require_once("../../component/database.php");


    if(isset($_GET['delete'])){

      $ID = $_GET['delete'];

      $conn-> query("DELETE FROM fb_page WHERE id=$ID") or die($conn->error);


      header("location: ../viewPage.php?delete=success");

    }


?>