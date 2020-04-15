<?php 

    $conn= mysqli_connect("localhost","root","","project")or die("ERROR:Connection lost");
 
    if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
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
  
 
        $query = "UPDATE workshop SET events='$events',name='$name',year='$year', start_date='$start_date', end_date='$end_date', guestname1='$guestname1',guestname2='$guestname2',fcod1='$fcod1',fcod2='$fcod2', target_audi='$target_audi' WHERE id='$id'";
        $result = mysqli_query($conn,$query);
 
        if($result)
        {
             header("Location: view.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    
    }
?>
    
 