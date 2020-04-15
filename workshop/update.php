<!DOCTYPE html>
<html lang="zxx">

<head>
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
	<link rel="stylesheet" href="css1/bootstrap.css">
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
				<div class="banner_w3lspvt">
			    <div class="csslider infinity" id="slider1">
				<input type="radio" name="slides" checked="checked" id="slides_1" />
				<input type="radio" name="slides" id="slides_2" />
				<input type="radio" name="slides" id="slides_3" />
				<input type="radio" name="slides" id="slides_4" />
				<ul>
					<li>
						
							
									<center><h2> UPDATE EVENT DETAILS</h2></center><P>
<form action="update1.php" method="POST" >
<table border="1", width="40%"  align="center"> 

 
<tr>
<td>NAME OF THE EVENT</td>

<td><select name="events" >
<option value="select">select</option>
<option value="workshop">workshop</option>
<option value="guestlectures">guestlectures</option>
<option value="seminars">seminars</option>
<option value="conferences">conferences</option>
<option value="Fdp">Fdp</option></td>
</tr>
<tr>
<td>NAME</td>
<td><input type="text" name="name" class="form-control mb-4" value="<?php echo $row['name']; ?>"></td>
</tr>
<tr>
<td>YEAR</td>
<td><input type="text" name="year" /></td>
</tr>
<tr>
<td>DATE OF STARTING</td>
<td><input type="date" name="start_date" /></td>
</tr>
<tr>
<td>DATE OF ENDING</td>
<td><input type="date" name="end_date"  /></td>
</tr>
<tr>
<td>GUEST PERSON1</td>
<td><input type="text" name="guestperson1"/></td>
</tr>
<tr>
<td>GUEST PERSON2</td>
<td><input type="text" name="guestperson2" /></td>
</tr>
<tr>
<td>FACULTY COORDINATORS  1</td>
<td><input type="text" name="fcod1" /></td>
</tr>
<tr>
<td>FACULTY COORDINATORS  2</td>
<td><input type="text" name="fcod2" /></td>
</tr>

<tr>
<td>TARGET AUDIENCE </td>
<td><input type="text" name="target_audi"/></td>
</tr>
 


<tr>
<td></td>
<td><button type="submit" name="submit" class="btn btn-primary"> Update Data </button></td>
</tr>
</table>
</form></P>

                                                                                                                                               
								</div>
							</div>
						</div>
					</li>
					
					
				</ul>
				
				
			
		</div>
		<!-- //banner -->
	</div>
	 <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <a href="details.php" class="btn btn-danger"> CANCEL </a>
                </div>
            </div>
        </div>
			</div>
	<!-- //main -->
</body>
</html>