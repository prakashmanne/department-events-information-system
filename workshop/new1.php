<html>
<?php require 'dbconfig.php'; ?>
<title></title>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div>
<table class="table table-bordered" border="2">
<tr> <td colspan="5"><center><h3>Previously Uploaded | <a href="https://technopoints.co.in/">Technopoints</a></h3></center></td></tr>
  <tr> 
    
      <tr><center><th>Description</th><th>Banner Thumbnail</th><th>Action</th></center></tr>
	<?php $fetchqry = "SELECT * FROM `workshop` ORDER BY time DESC"; 
	$result=mysqli_query($con,$fetchqry);
	$num=mysqli_num_rows($result);
	if($num > 0){
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){ ?>
		

      <tr><td><p><?php echo $row['title'];?></p></td><td><img src="upload/<?php echo $row['imagename']?>" width="450" height="200" /> </td>
	  <td width="10%"><input type="button" class="btn" value="Delete" id="button" onclick="deleteme(<?php echo $row['id']; ?>)"></td></tr>  
				
				<script language="javascript">
				function deleteme(delid) 
				{
						window.location.href='deleteimage.php?del_id='+delid+'';
						return true;
				}
				</script>
								<?php
	}
	}
	?>
  </tr>
</table>
</div>
</body>
</html>