<?php 

    $conn= mysqli_connect("localhost","root","","project")or die("ERROR:Connection lost");
    $query = " select * from workshop ";
    $result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>VIEW DETAILS</title>
</head>
<title>INFORMATION TECHNOLOGY</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Plants Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
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
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Niconne&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>

	<div id="home">
		<!-- header -->
		<header class="header-style fixed-top">
			<div class="container">
			<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WELCOME TO ADMIN<h1>
				<div class="header d-lg-flex justify-content-between align-items-center">
					<!-- logo -->
					<h1 class="logo text-left">
						<a href="index.php">
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
		
		<div class="w3layouts-banner-info text-center">
		 <h2> EVENTS  DETAILS   <a href="details.php" class="btn btn-primary"> ADD </a> </h2>
		 
            <div class="row">
			
                <div class="col m-auto">
                    <div class="card mt-0.4">
                       
                        
                        <table class="table table-bordered">
                            <tr>
							    <td> id </td>
                                <td> NAME OF EVENT </td>
                                <td> NAME </td>
                                <td> YEAR </td>
                                <td> DATE OF STARTING </td>
								<td> DATE OF ENDING </td>
								<td> GUESTNAME 1 </td>
								<td> GUESTNAME 2 </td>
								<td> FACULTY COORDINATORS 1 </td>
								<td> FACULTY COORDINATORS 2 </td>
								<td> TARGET AUDIENCE </td>
                                <td> EDIT  </td>
                                <td> DELETE </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {   
                            ?>
                                    <tr>
									    <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['events']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['year']; ?></td>
                                        <td><?php echo $row['start_date']; ?></td>
										 <td><?php echo $row['end_date'] ?></td>
										  <td><?php echo $row['guestname1']; ?></td>
										  <td><?php echo $row['guestname2']; ?></td>
										  <td><?php echo $row['fcod1']; ?></td>
										  <td><?php echo $row['fcod2']; ?></td>
										  <td><?php echo $row['target_audi']; ?></td>
										  <form action="edit.php" method="POST">
                                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                    <td> <input type="submit" name="submit" class="btn-success" value="EDIT"> </td>
                                                </form>

                                                <form action="delete2.php" method="POST">
                                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                    <td> <input type="submit" name="delete" class="btn-danger" value="DELETE"> </td>
                                                </form></tr>
                                       
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>