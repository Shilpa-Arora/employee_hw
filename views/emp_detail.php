<div id="content">
<?php
while($emp = mysqli_fetch_array($employees)) {
	echo '<div id="showfull"><section id="fullimg">'.'<img src="images/'.$emp['emp_image'].'"/></section><section id="fullimgdetail"><h2>Employee ID: '.$emp['emp_id'].'<br>Name:'.$emp['emp_fname'].' '.$emp['emp_lname'].'<br>Job Level:'.$emp['emp_job'].'</h2></section></div>';
}
?>
</div>