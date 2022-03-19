<?php
	
	include '../blog/blog.php';
	$blog=new Blog();
	$result='';
	$loginresult='';
	$id=$_GET['id'];
	
	$result=$blog->editprofile($_GET['id']);
	$info="";
	$info=mysqli_fetch_assoc($result);
	
	if(isset($_POST['btn'])){
		
		$message=$blog->updateprofile($_GET['id']);
	}

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

						<li><a href="../profile/profile.php?id=<?php echo $id ?>" class="nav-link" style="font-size: 20px;" >PROFILE</a></li>
						<li><a href="../home/home.php" class="nav-link" style="font-size: 20px;" >LOG OUT</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container mb-5 mt-5">
			
			<form method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-lg-2">
						<label>First Name :</label>
					</div>
					<div class="col-lg-6">
						<input type="text" name="firstname" class="form-control" value="<?php echo $info['firstname'] ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<label>Last Name :</label>
					</div>
					<div class="col-lg-6">
						<input type="text" name="lastname" class="form-control" value="<?php echo $info['lastname'] ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<label>Email :</label>
					</div>
					<div class="col-lg-6">
						<input type="text" name="email" class="form-control" value="<?php echo $info['email'] ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<label>Contact :</label>
					</div>
					<div class="col-lg-6">
						<input type="text" name="contact" class="form-control" value="<?php echo $info['contact'] ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<label>Address :</label>
					</div>
					<div class="col-lg-6">
						<input type="text" name="address" class="form-control" value="<?php echo $info['address'] ?>">
					</div>
				</div>
				
				<div class="row">
					<div class="col-lg-2">
						<label>User Name :</label>
					</div>
					<div class="col-lg-6">
						<input type="text" name="username" class="form-control" value="<?php echo $info['username'] ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<label>Password :</label>
					</div>
					<div class="col-lg-6">
						<input type="text" name="password" class="form-control" value="<?php echo $info['password'] ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<label>Facebook ID :</label>
					</div>
					<div class="col-lg-6">
						<input type="text" name="facebookid" class="form-control" value="<?php echo $info['facebookid'] ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<label>Linkdin ID :</label>
					</div>
					<div class="col-lg-6">
						<input type="text" name="linkdinid" class="form-control" value="<?php echo $info['linkdinid'] ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<label>Session :</label>
					</div>
					<div class="col-lg-6">
						<input type="text" name="session" class="form-control" value="<?php echo $info['session'] ?>">
					</div>
				</div>

							
				<button type="submit" class="btn btn-primary" name="btn">Update  profile</button>
			</form>
		</div>
		
		
		
		<div class="navbar navbar-expand-md navbar-dark bg-dark justify-center fixed-bottom">
			<div class="mx-auto">
				<div class="ml-5">
					<a href="" class="text-white mr-6">About Us  </a>
				</div>
				<div>
					<h6 style="color: orange;">Copyright All right @ Le Cafe 2020</h6>
				</div>
				
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>