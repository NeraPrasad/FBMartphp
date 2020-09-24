<?php 
require '../component/database.php';
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

<label>Accout Type</label>
<select  id="acc_type" name="acc_type">
<option value="group">Group</option>
<option value="page">Page</option>
</select>

<br>

<?php 
$query = "SELECT * FROM `fb_poli_cat`";
$result1 = mysqli_query($conn, $query);
?>

<label>Political Type</label>
<select>
<?php while($row1 = mysqli_fetch_array($result1)):;?>
<option name="poli_cat[]"  value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
<?php endwhile;?>
</select>


<?php 
$query = "SELECT * FROM `fb_acc_cat`";
$result2 = mysqli_query($conn, $query);
?>

<label>Category</label>
<select>
<?php while($row2 = mysqli_fetch_array($result2)):;?>
<option name="acc_cat[]"  value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>
<?php endwhile;?>
</select>


<input type="text" name="rate_post" id="rate_post">




<table border='2'>
<tr>
<th>Account Type</th>
<th>Political Type</th>
<th>Category</th>
<th>Price</th>
</tr>

<tbody>
    <?php
        if(isset($_POST['submit'])){
            $acc_type = $_POST['acc_type'];
            $poli_cat = $_POST['poli_cat'];
            $acc_cat = $_POST['acc_cat'];
            $rate_post = $_POST['rate_post'];
        }

        if($acc_type != "" || $poli_cat != "" || $acc_cat != "" || $rate_post != "" ) {

            $query = "SELECT * FROM fb_page WHERE acc_type = '$acc_type' OR poli_cat = '$poli_cat' OR acc_cat = '$acc_cat' OR 
            rate_post = '$rate_post' ";

            $data = mysqli_query($conn, $query) or die('error');

            if(mysqli_num_rows($data) > 0){
                while($row3 = mysqli_fetch_assoc($data)){
                    $acc_type = $row3['acc_type'];
                    $poli_cat = $row3['poli_cat'];
                    $acc_cat = $row3['acc_cat'];
                    $rate_post = $row3['rate_post'];
                ?>
                    <tr>
                        <td><?php echo $acc_type; ?></td>
                        <td><?php echo $poli_cat; ?></td>
                        <td><?php echo $acc_cat; ?></td>
                        <td><?php echo $rate_post; ?></td>
                    </tr>
                <?php
                }
            }
            else {
                ?>
                <tr>
                    <td>Records Not Found!</td>
                </tr>
                <?php
            }
        }
    ?>
</tbody>

</table>

</body>
</html>