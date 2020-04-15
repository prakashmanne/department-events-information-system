<?php
if(isset($_POST['submit']))
{ 
  $conn= mysqli_connect("localhost","root","","project")or die("ERROR:Connection lost");
  $year=$_POST['year'];
  $events=$_POST['events'];
  $sql = "DELETE FROM workshop WHERE year='$year'and events='events ";
  if($result=mysqli_query($conn,$sql))
{
	include("details.php");
}
else{
	 echo '<script> alert("Data Not Deleted"); </script>';
}
}
mysqli_close($conn);
}
?>