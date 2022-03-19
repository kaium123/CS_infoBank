<?php
	include '../blog/blog.php';
	$blog=new Blog();
	$result='';
	$loginresult='';
	
	/*$_SESSION['username']=$_POST['username'];
	$name=$_SESSION['username'];
	$_SESSION['password']=$_POST['password'];
	$pass=$_SESSION['password'];*/
	$result=7;
	$id=$result;
	//echo $result['firstname'];
	

?>


<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
			<div class="container">
				<div>
					<a href="" class="navbar-brand text-warning">
						ANWARA UNION COUNCIL
					</a>
					
				</div>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#my-nav">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="my-nav">
					<ul class="navbar-nav ml-auto">
						<li class="active"><a href="../homeaftersignin/homeaftersignin.php?id=<?php echo $id ?>" class="nav-link" style="font-size: 20px;">HOME</a></li>
						<li class="dropdown">
							<a href="" class=" nav-link dropdown-toggle" data-toggle="dropdown"  style="font-size: 20px;">SERVICES</a>
							<div class="dropdown-menu bg-grey " style="background-color: grey;">
								<a href="../serviceeducation/serviceeducation.php?id=<?php echo $id ?>" class="dropdown-item text-warning">EDUCATION</a>
								<a href="../service.healthcare/service.healthcare.php?id=<?php echo $id ?>" class="dropdown-item text-warning">HEALTH CARE</a>
								<a href="../service.streetlighting/service.streetlighting.php?id=<?php echo $id ?>" class="dropdown-item text-warning">STREET LIGHTING</a>
								<a href="../service.certificateissue/service.certificateissue.php?id=<?php echo $id ?>" class="dropdown-item text-warning">CERTIFICATE ISSUE</a>
								<a href="../service.tax/service.tax.php?id=<?php echo $id ?>" class="dropdown-item text-warning">TAX</a>
							</div>
							
						</li>
						<li class="dropdown">
							<a href="" class=" nav-link dropdown-toggle" data-toggle="dropdown"  style="font-size: 20px;">ABOUT</a>
							<div class="dropdown-menu bg-grey" style="background-color: grey;">
								<a href="../about.chairmenscorner/about.chairmenscorner.php?id=<?php echo $id ?>" class="dropdown-item text-warning">CHAIRMENS CORNER</a>
								<a href="../about.history/about.history.php?id=<?php echo $id ?>" class="dropdown-item text-warning">HISTORY</a>
								<a href="../about.unionrole/about.unionrole.php?id=<?php echo $id ?>" class="dropdown-item text-warning">UNION ROLE</a>
								<a href="../about.adminastrativerole/about.adminastrativerole.php?id=<?php echo $id ?>" class="dropdown-item text-warning">ADMINASTRATIVE SET UP</a>
								<a href="../about.wardreview/about.wardreview.php?id=<?php echo $id ?>" class="dropdown-item text-warning">WARD REVIEW</a>
								<a href="../about.activities/about.activities.php?id=<?php echo $id ?>" class="dropdown-item text-warning">ACTIVITIES</a>
							</div>
							
						</li>
						
						<li class="dropdown">
							<a href="" class=" nav-link dropdown-toggle" data-toggle="dropdown"  style="font-size: 20px;">PROJECTS</a>
							<div class="dropdown-menu" style="background-color: grey;">
								<a href="../projects.ongoing/projects.ongoing.php?id=<?php echo $id ?>" class="dropdown-item text-warning">ON GOING PROJECTS</a>
								<a href="../projects.upcoming/projects.upcoming.php?id=<?php echo $id ?>" class="dropdown-item text-warning">UP COMING PROJECTS</a>
							</div>
							
						</li>

						<li><a href="../profile/profile.php?id=<?php echo $result ?>" class="nav-link" style="font-size: 20px;" >PROFILE</a></li>
						<li><a href="../home/home.php" class="nav-link" style="font-size: 20px;" >LOG OUT</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="navbar navbar-expand-md navbar-dark bg-dark justify-center fixed-bottom">
			<div class="mx-auto">
				<div class="ml-5">
					<a href="" class="text-white mr-6">About Us  </a>
				</div>
				<div>
					<h6 style="color: orange;">All Copyrights @ Le Cafe 2020</h6>
				</div>
				
			</div>
		</div>
		<div class="modal" id="mymodal" >
			<div class="modal-dialog">
				<div class="modal-content" style="background-color: indigo;">
					<div class="modal-header">
						<h1 style="color: white;">Log In your account</h1>
						<button class="close" data-dismiss="modal" type="button" style="color: white;">&times;</button>
					</div>
					<div class="modal-body">
						<form method="post" >
							<div class="form-group">
								<label style="font-size: 20px;">User Name :</label>
								<input type="text" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label style="font-size: 20px;">Password :</label>
								<input type="password" name="password" class="form-control">
							</div>
							<button type="submit" name="btnlogin" class="btn btn-primary">Log in
								
							</button>
							<button type="submit" class="btn btn-primary">Register</button>
						</form>
					</div>
					<div class="modal-footer">
						
					</div>
				</div>
			</div>
		</div>

		<div class="modal " id="mymodalsignup" >
			<div class="modal-dialog " style="position: relative; right: 100px;">
				<div class="modal-content" style="background-color: indigo;width: 700px;">
					<div class="modal-header">
						<h1 style="color: white;">Create your account free and safe </h1>
						<button class="close" data-dismiss="modal" type="button" style="color: white;">&times;</button>
					</div>
					<div class="modal-body">
						<form class="" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>First Name :</label>
								<input type="text" name="firstname" class="form-control">
							</div>
							<div class="form-group">
								<label>Last Name :</label>
								<textarea type="text" name="lastname" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<label>Email :</label>
								<input type="text" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label>Contact :</label>
								<input type="text" name="contact" class="form-control">
							</div>
							<div class="form-group">
								<label>Address :</label>
								<textarea type="text" name="address" class="form-control"></textarea>
							</div>

							<div class="form-group">
								<label>Image</label>
								<input type="file" name="image" class="form-control">
							</div>
							<div class="form-group">
								<label>User Name :</label>
								<input type="text" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label>Password :</label>
								<input type="text" name="password" class="form-control">
							</div>
							<div class="form-group">
								<label>NID :</label>
								<input type="text" name="nid" class="form-control">
							</div>
							<button type="submit" class="btn btn-primary" name="btn">Add Blog</button>
						</form>
					</div>
					
				</div>
			</div>
		</div>
		<div class="modal" id="xy">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						wrong password or wrong username
					</div>
				</div>
			</div>
		</div>

		

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>