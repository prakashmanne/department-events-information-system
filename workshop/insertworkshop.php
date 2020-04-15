<?php
if(isset($_POST['submit']))
{ 
  $conn= mysqli_connect("localhost","root","","project")or die("ERROR:Connection lost");
  $invitationletter=$_FILES['image1']['name'];
   $filetype=$_FILES['image1']['type'];
   $broucher=$_FILES['image2']['name'];
   $filetype=$_FILES['image2']['type'];
   $events=$_POST['events'];
  $name=$_POST['name'];
   $year=$_POST['year'];
   $start_date=$_POST['start_date'];
   $end_date=$_POST['end_date'];
   $guestperson1=$_POST['guestperson1'];
   $guestperson2=$_POST['guestperson2'];
   $fcod1=$_POST['fcod1'];
   $fcod2=$_POST['fcod2'];
   $target_audi=$_POST['target_audi'];
   $invitationletter=$_FILES['image1']['name'];
   $filetype=$_FILES['image1']['type'];
   $broucher=$_FILES['image2']['name'];
   $filetype=$_FILES['image2']['type'];
   
   
if($filetype=='image/jpeg' or $filetype=='image/png' or $filetype=='image/gif')
{
move_uploaded_file($_FILES['image1']['tmp_name'],'upload/'.$invitationletter);
move_uploaded_file($_FILES['image2']['tmp_name'],'upload/'.$broucher);

$filepath1="upload/".$invitationletter;
$filepath2="upload/".$broucher;
$sql="insert into workshop values('NULL','$filepath1','$filepath2','$events','$name','$year','$start_date','$end_date','$guestperson1','$guestperson2','$fcod1','$fcod2','$target_audi')";
if($result=mysqli_query($conn,$sql))
{
	echo "sent successfully";
}
else{
	echo "not sent";
}
}
mysqli_close($conn);
}
?>