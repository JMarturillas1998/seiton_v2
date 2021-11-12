<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdn.logwork.com/widget/digital.js"></script>




</head>
<body>

	<!--wrapper start-->
	<div class="wrapper">

		<!--header menu start -->

		<div class="header">
			<div class="header-menu">
				<div class="title"><img src="./resources/seiton.png"></div>
				<div class="sidebar-btn">		
					
				</div>
				<ul>
					
					<li><p class="clocked-intime">You clocked in at 12:06 am</p></li>
					<li><button class="btn_ntasks btn-clockin btn-hover"  data-bs-toggle="modal" data-bs-target="#myModal4"> Clock-In</button>
						<button class="btn_ntasks btn-clockout btn-hover"  data-bs-toggle="modal" data-bs-target="#myModal5"> Clock-Out</button></li>
					<li><a href="#" data-bs-toggle="modal" data-bs-target="#myModal6"><i class="fas fa-bell"></i></a></li>



				</ul>
			</div>

		</div>

		<!--header menu end -->

		<!--sidebar start -->

		<div class="sidebar">
			<div class="sidebar-menu">

				<center class="profile" alt="">

					<img src="./resources/barb.png">
					<p> Barbara  </p>
				</center>

				<hr>

				<li class="item">

					<a href="index.php" class="menu-btn"> <i class="fas fa-home"></i><span>Home</span></a>
				</li>

				<li class="item" id="t-management">
					<a href="#t-management" class="menu-btn"><i class="fas fa-tasks"></i><span>Task Management </span><i class="fas fa-caret-down drop-down"></i></a>

					<div class="sub-menu">
						<a href="tasks.php"><i class="fal fa-chevron-right"></i><span>Tasks </span></a>
						<a href="timesheet.php"><i class="fal fa-chevron-right"></i><span>Timesheet</span></a>
						<a href="EOD.php"><i class="fal fa-chevron-right"></i><span>EOD Report</span></a>
				</li>

				<li class="item" id="att-payroll">
					<a href="#att-payroll" class="menu-btn"><i class="fas fa-money-bill-wave-alt"></i></i><span>Attendance and Payroll </span><i class="fas fa-caret-down drop-down"></i></a>

					<div class="sub-menu">
						<a href="attendance.php"><i class="fal fa-chevron-right"></i><span>Attendance </span></a>
						<a href="#"><i class="fal fa-chevron-right"></i><span>Attendance Bonus</span></a>
						<a href="https://payroll.sprout.ph/Default.aspx" target="_blank"><i class="fal fa-chevron-right"></i><span>Payslip</span></a>
						<a href="#"><i class="fal fa-chevron-right"></i><span>Performance Rewards+</span></a>
						<a href="#"><i class="fal fa-chevron-right"></i><span style="font-size: 0.7rem;">Annual Salary Increase Calculator</span></a>

				</li>

				<li class="item">

					<a href="leaves.php" class="menu-btn"><i class="fas fa-leaf"></i><span>My Leaves</span></a>
				</li>

				<li class="item">

					<a href="#" class="menu-btn"><i class="fas fa-ticket-alt"></i><span>My Tickets</span></a>
				</li>

				<li class="item">

					<a href="#" class="menu-btn"><i class="fas fa-book-reader"></i><span>Policies and Procedures</span></a>
				</li>

				<li class="item">

					<a href="social_media_feed.php" class="menu-btn"><i class="fas fa-retweet"></i><span>News Feed</span></a>
				</li>

				<li class="item">

					<a href="#" class="menu-btn"><i class="fas fa-tv"></i><span>TVH TV</span></a>
				</li>

				<li class="item">

					<a href="#" class="menu-btn"><i class="fas fa-cog"></i><span>Account Settings</span></a>
				</li>

				<li class="item">

					<a href="#" class="menu-btn"><i class="fas fa-sign-out-alt"></i><span>Sign-out</span></a>
				</li>


			</div>
		</div>





		<!--sidebar end -->

		<!--main container start -->



		<div class="main-container">

			
			
		<!--main container end-->



	<!--wrapper end-->










	
