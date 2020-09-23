


<?php
require_once("../../component/database.php");
if (isset($_POST['submitedit'])) {

  $poli_cat_array = $_REQUEST['poli_cat'];
	$poli_cat_data = implode(',',$poli_cat_array);

	$acc_cat_array = $_REQUEST['acc_cat'];
	$acc_cat_data = implode(',',$acc_cat_array);

	$url = $_REQUEST['url'];  
	$userId = '1';  
	$rate_post = $_REQUEST['postrate'];
	$acc_type = $_REQUEST['acc_type'];
	$insert_date = date('m/d/Y H:i:s', time());


    $query=mysqli_query($conn, "UPDATE fb_page SET acc_type='$acc_type',  poli_cat='$poli_cat_data' , 
     url='$url',  acc_cat='$acc_cat_data',  rate_post='$rate_post' ,  insert_date='$insert_date' where userId='$userId'");
    
    if ($query) {
      header("location: ../viewPage?update=success");
    }
    else
        {
          header("location: ../viewPageEdit?update=fail");
        }
}

?>