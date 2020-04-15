<?php
if(isset($_POST['submit']))
{ 
$conn=mysqli_connect("localhost","root","","project") or die("ERROR:Connection lost");
$year=$_POST['year'];
$sql="select * from workshop where year='$year';
$rdata=mysqli_query($conn,$sql);
while($res=mysqli_fetch_array($rdata))
{ 
<tr>
 
<td> <?php echo "<img src='$imgpath1' height='100px' width='100px'/>"; ?></td>
<td> <?php echo "<img src='$imgpath2' height='100px' width='100px'/>"; ?></td>
<td><?php echo $workshopname; ?></td>
<td><?php echo $year; ?></td>
<td><?php echo $start_date; ?></td>
<td><?php echo $end_date; ?></td>
<td><?php echo $guestname1; ?></td>
<td><?php echo $guestname2; ?></td>
<td><?php echo $fcod1; ?></td>
<td><?php echo $fcod2; ?></td>
<td><?php echo $target_audi; ?></td>	
</tr>																				

}
}
 
?>