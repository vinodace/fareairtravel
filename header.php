<?php 
	$phone = "+1-800-123-4567";
	$email = "support@domainname.com";
	$domainname_url ="domainname.com";
	$domainname = "domainname";
?>



<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- <meta name="robots" content="noindex, nofollow"> -->
	<!-- Favicon icon -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"> 
    <!-- Custom css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap v5.0 -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Owl Carousel v2.3.4 -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <!-- Font Awesome Free 6.7.2 -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- Datepicker Jquery UI -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<!-- Animation -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	
</head>
<body>
<header>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light navlr-pad">
		  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button> -->
		  <!-- <button class="navbar-toggler mobile_menu_icon" type="button">
		    <span class="navbar-toggler-icon"></span>
		  </button> -->
		  <div class="mobile_menu_icon">
	    	<span></span>
	    	<span></span>
	    	<span></span>
	    </div>
		  <a class="navbar-brand" href="./">
		  	<img src="images/logo.png" alt="" class="logo">
		  </a>
		  

		  <div class="navbar-collapse deskmobmenu">
		  	<span class="close-mobmenu"><i class="fas fa-times"></i></span>
		  	<?php
                    $nav1=$nav2=$nav3=$nav4=$nav5="";
                    $tt=explode("/",$_SERVER['PHP_SELF']);
                    $len=count($tt)-1;
                    $cur_page=$tt[$len];
                    switch($cur_page)
                    {
                    case "flights.php":
                    $nav1='active';
                    break;
                    case "hotels.php":
                    $nav2='active';
                    break;
                    case "cars.php":
                    $nav3='active';
                    break;
                    case "cruise.php":
                    $nav4='active';
                    break;
                    case "packages.php":
                    $nav5='active';
                    break;
                    case "offers.php":
                    $nav6='active';
                    break;
                    }
                ?>
		    <ul class="navbar-nav ms-auto">
		      <li class="nav-item active">
		        <a class="nav-link <?php echo $nav1; ?>" href="flights.php">
		        	<i class="fa-solid fa-plane-departure"></i>
		        	Flights
		        </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link <?php echo $nav2; ?>" href="hotels.php">
		        	<i class="fa-solid fa-hotel"></i>
		        	Hotels 
		        </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link <?php echo $nav3; ?>" href="cars.php">
		        	<i class="fa-solid fa-car"></i>
		        	Car Rental 
		        </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link <?php echo $nav4; ?>" href="cruise.php">
		        	<i class="fa-solid fa-ship"></i>
		        	Cruises 
		        </a>
		      </li>
		      <li class="nav-item ">
		        <a class="nav-link <?php echo $nav5; ?>" href="packages.php">
		        	<i class="fa-solid fa-gift"></i>
		        	Package 
		        </a>
		      </li>
		      
		      <li class="nav-item">
		        <a class="nav-link <?php echo $nav6; ?>" href="offers.php">
		        	<i class="fa-solid fa-certificate"></i>
		        	Offers
		        </a>
		      </li>
			  <li class="nav-item">
			  	<a class="nav-link header-btn" href="tel:<?php echo $phone; ?>">
			  		<i class="fa-solid fa-phone-volume"></i>
			  		<span class="d-none d-lg-inline-block">Call Us :</span> <?php echo $phone; ?>
			  	</a>
			  </li>


		    </ul>
		  </div>
		</nav>
	</div>	
</header>
<!-- Header -->

<?php include("breadcrumb.php") ?>