<?php

if(isset($_POST['submit']))
{ 
  $conn= mysqli_connect("localhost","root","","project")or die("ERROR:Connection lost");
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
  
   
    $sql = "UPDATE workshop set events='$events',name='$name',year='$year', start_date='$start_date', end_date='$end_date', guestperson1='$guestperson1',guestperson2='$guestperson2',fcod1='$fcod1',fcod2='$fcod2', target_audi='$target_audi'  ";
   
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        include("details.php");
    }
    else
    {
       echo '<script> alert("Data Not Updated"); </script>';
    }
}
?>

