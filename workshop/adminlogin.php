

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
				<div class="banner_w3lspvt">
			    <div class="csslider infinity" id="slider1">
				<input type="radio" name="slides" checked="checked" id="slides_1" />
				<input type="radio" name="slides" id="slides_2" />
				<input type="radio" name="slides" id="slides_3" />
				<input type="radio" name="slides" id="slides_4" />
				<ul>
					<li>
						
							<div class="container">
								<div class="w3layouts-banner-info text-center">
									<center><h2>Admin Login</h2></center>
                                <!-- <p>Please enter your email and password</p> -->
                             <br>
                            </div>
                            <form action="admin.php" method="POST">
							<table border="1", height="30%" width="30%"   align="center">
							
                                 <tr>
                                <div class="form-group">
								<tr>
                                    <td><input type="username" name="username" class="form-control" placeholder="username"></td>
								   </tr>
                                </div>

                                <tr><div class="form-group">
                                   <td> <input type="password" name="password" class="form-control" placeholder="Password"></td>
								   </tr>
                                </div>
                                
                                <td><button type="submit" name="adminlogin" class="btn btn-primary">Login</button></td>
								

                            </form>
                        </div>
                    </div>
            </div>
        </div>
        </div>
   </div>
</div>
</body>
</html>
