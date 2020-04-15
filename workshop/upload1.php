<?php
if(isset($_POST['submit']))
{ 
  $conn= mysqli_connect("localhost","root","","project")or die("ERROR:Connection lost");
   
   $events=$_POST['events'];
  $name=$_POST['name'];
   $year=$_POST['year'];
   $start_date=$_POST['start_date'];
   $end_date=$_POST['end_date'];
   $guestname1=$_POST['guestname1'];
   $guestname2=$_POST['guestname2'];
   $fcod1=$_POST['fcod1'];
   $fcod2=$_POST['fcod2'];
   $target_audi=$_POST['target_audi'];
   


$sql="insert into workshop values('NULL','$events','$name','$year','$start_date','$end_date','$guestname1','$guestname2','$fcod1','$fcod2','$target_audi')";
if($result=mysqli_query($conn,$sql))
{
	 header("Location: view.php");
}
else{
	echo "not sent";
}

mysqli_close($conn);
}
?>