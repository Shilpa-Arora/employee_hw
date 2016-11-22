
<div id="content">
<?php
echo '<div id="show">';

while($emp = mysqli_fetch_array($employees)) {
	echo '<section><a href="index.php?id='.$emp['emp_id'].'">'.'<img src="images/'.$emp['emp_thumb'].'"/><br><h2>'.$emp['emp_fname'].' '.$emp['emp_lname'].'</h2><br></a></section>';
	

}
echo '</div>';
?>
<!-- if(array_key_exists('emp_thumb', $emp)){
	echo '<a href="index.php?id='.$emp['emp_id'].'">'.$emp['emp_fname'].' '.$emp['emp_lname'].'<br>'.'<img src="images/'.$emp['emp_thumb'].'"/>'.'</a><br>';
}
else
{
	echo '<a href="index.php?id='.$emp['emp_id'].'">'.$emp['emp_fname'].' '.$emp['emp_lname'].'</a><br>';
} -->
</div>