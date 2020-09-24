<?php
$educationArr=array('10th','12th','BSc','B.Tech','M.Tech');
$arr=array();


if(isset($_POST['submit'])){
	$arr=$_POST['education'];
	echo implode(", ",$arr);
	echo "<br/><br/>";
}
?>
<form method="post">
	<?php foreach($educationArr as $list){?>
		<?php if(in_array($list,$arr)){
			?><?php echo $list?> <input checked="checked" type="checkbox" name="education[]" value="<?php echo $list?>"/><br/><?php
		}else{
			?><?php echo $list?> <input type="checkbox" name="education[]" value="<?php echo $list?>"/><br/><?php
		}
		?>
	<?php } ?>
	<br/><br/>
	<input type="submit" name="submit"/>
</form>

