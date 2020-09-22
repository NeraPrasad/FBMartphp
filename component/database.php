<?php 
    
    $conn = mysqli_connect("localhost", "root", "", "fb_marketing");
 
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $host = 'http://127.0.0.1/FbMartfile/FBMartphp/';


?>
