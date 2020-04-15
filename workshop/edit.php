 <?php 

    $conn= mysqli_connect("localhost","root","","project")or die("ERROR:Connection lost");
    
    $id = $_POST['id'];
    $query = " select * from workshop where id='".$id."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
                                        $id= $row['id'];
                                         $events= $row['events'];
                                         $name= $row['name'];
                                         $year= $row['year'];
                                         $start_date= $row['start_date'];
                                         $end_date= $row['end_date'];
                                         $guestname1= $row['guestname1'];
                                         $guestname2= $row['guestname2'];
                                         $fcod1= $row['fcod1'];
                                         $fcod2= $row['fcod2'];
                                         $target_audi= $row['target_audi'];                             
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Plants Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
<title>INFORMATION TECHNOLOGY</title>
	<!-- Meta tag Keywords -->
	
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- banner slider -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Niconne&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
	 rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	
</head>

<body>

	<div id="home">
		<!-- header -->
		<header class="header-style fixed-top">
			<div class="container">
			<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WELECOME TO ADMIN<h1>
				<div class="header d-lg-flex justify-content-between align-items-center">
					<!-- logo -->
					<h1 class="logo text-left">
						<a href="index1.php">
						</a>
					</h1>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
                        
                        <?php
						
							include("menu1.php");
					    ?>	
                        	
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
	
            
                        <div class="container">
								<div class="w3layouts-banner-info text-center">

        
                            <form action="update2.php" method="POST" enctype="multipart/form-data">
							<table border="1", width="40%"  align="center">
<tr>
<td><input type="hidden" name="id" value="<?php echo $row['id'] ?>"></td>
</tr>				
<tr>
<td>NAME OF THE EVENT</td>

<td><select name="events" value="<?php echo $events ?>">
<option value="select">select</option>
<option value="workshop">workshop</option>
<option value="guestlectures">guestlectures</option>
<option value="seminars">seminars</option>
<option value="conferences">conferences</option>
<option value="Fdp">Fdp</option></td>
</tr>
                                  
   <tr>
<td>NAME</td>
<td><input type="text" name="name" value="<?php echo $name ?>"></td></tr>
 <tr>
<td>YEAR</td>
<td><input type="text" name="year" value="<?php echo $year ?>"></td>
</tr>
<tr>
<td>DATE OF STARTING</td>
<td><input type="date" name="start_date" value="<?php echo $start_date ?>"></td>
</tr>
<tr>
<td>DATE OF ENDING</td>
<td><input type="date" name="end_date" value="<?php echo $end_date ?>"></td>
</tr>
<tr>
<td>GUEST PERSON1</td>
<td><input type="text" name="guestname1" value="<?php echo $guestname1 ?>"></td>
</tr>
<tr>
<td>GUEST PERSON2</td>
<td><input type="text" name="guestname2" value="<?php echo $guestname2 ?>"></td>
</tr>
<tr>
<td>FACULTY COORDINATORS  1</td>
<td><input type="text" name="fcod1" value="<?php echo $fcod1 ?>"></td>
</tr>
<tr>
<td>FACULTY COORDINATORS  2</td>
<td><input type="text" name="fcod2" value="<?php echo $fcod2 ?>"></td>
</tr>

<tr>
<td>TARGET AUDIENCE </td>
<td><input type="text" name="target_audi" value="<?php echo $target_audi ?>"></td>
</tr>
<tr>
<td></td>
<td><button type="submit" name="submit" class="btn btn-primary"> Update Data </button></td>
</tr>
</table>
 
                               
          
                            </form>

                        </div>
                    </div>
                </div>
               <div class="col-md-10">
            
                <div class="card-body">
                    <a href="details.php" class="btn btn-danger"> CANCEL </a>
                </div>
            </div>
        </div> 
            </div>
        </div>
    
</body>
</html>