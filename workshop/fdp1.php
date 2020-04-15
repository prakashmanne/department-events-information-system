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
			<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIR C R REDDY COLLEGE OF ENGINEERING<h1>
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
						
							include("menu.php");
					    ?>	
                        	
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		<div class="banner_w3lspvt">
			<div class="csslider infinity" id="slider1">
				<input type="radio" name="slides" checked="checked" id="slides_1" />
				<input type="radio" name="slides" id="slides_2" />
				<input type="radio" name="slides" id="slides_3" />
				<input type="radio" name="slides" id="slides_4" />
				<ul>
					<li>
						<div >
							<div class="container">
								<div class="w3layouts-banner-info text-center">
<?php
$link = mysqli_connect("localhost", "root", "", "project");
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$year=$_POST['year'];
$sql = "SELECT * FROM workshop where year='$year' and events='Fdp'";
$i=1;
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
       echo "<html><body bgcolor=white>"; 
	   echo "<center>"; 
	   echo "<table border='1'>";
            echo "<tr>";
				echo "<th>SNO</th>";
			    
			    echo "<th>name</th>";
                echo "<th>start_date</th>";
				echo "<th>end_date</th>";
				echo "<th>guestname1</th>";
				echo "<th>guestname2</th>";
                echo "<th>fcod1</th>";
				echo "<th>fcod2</th>";
				echo "<th>target_audi</th>";
				
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
			
            echo "<tr>";
				echo "<td>$i </td>";
				
				echo "<td>". $row['name'] . "</td>";
				echo "<td>" . $row['start_date'] . "</td>";
				echo "<td>" . $row['end_date'] . "</td>";
                echo "<td>" . $row['guestname1'] . "</td>";
                echo "<td>" . $row['guestname2'] . "</td>";
				echo "<td>" . $row['fcod1'] . "</td>";
				echo "<td>" . $row['fcod2'] . "</td>";
				echo "<td>" . $row['target_audi'] . "</td>";
                
            echo "</tr>";
			$i=$i+1;
        }
        echo "</table>";
		echo "</center>";
		echo"</body >";
		echo"</html>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>