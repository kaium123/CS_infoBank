<?php

	include '../blog/blog.php';
	$blog=new Blog();
	$result='';
	$loginresult='';
	$id=$_GET['id'];
	
	$result=$blog->viewprofile1($id);
	$blogs=mysqli_fetch_assoc($result);

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
							<a href="" class=" nav-link" data-toggle=""  style="font-size: 20px;">ABOUT</a>
						</li>
						<li class="dropdown">
							<a href="" class=" nav-link dropdown-toggle" data-toggle="dropdown"  style="font-size: 20px;">SEMESTER</a>
							<div class="dropdown-menu bg-grey " style="background-color: grey;">
								<a href="../sem-1/sem-1.php?id=<?php echo $id ?>" class="dropdown-item text-warning">SEMESTER-1</a>
								<a href="../sem-2/sem-2.php?id=<?php echo $id ?>" class="dropdown-item text-warning">SEMESTER-2</a>
								<a href="../sem-3/sem-3.php?id=<?php echo $id ?>" class="dropdown-item text-warning">SEMESTER-3</a>
								<a href="../sem-4/sem-4.php?id=<?php echo $id ?>" class="dropdown-item text-warning">SEMESTER-4</a>
								<a href="../sem-5/sem-5.php?id=<?php echo $id ?>" class="dropdown-item text-warning">SEMESTER-5</a>
								<a href="../sem-6/sem-6.php?id=<?php echo $id ?>" class="dropdown-item text-warning">SEMESTER-6</a>
								<a href="../sem-7/sem-7.php?id=<?php echo $id ?>" class="dropdown-item text-warning">SEMESTER-7</a>
								<a href="../sem-8/sem-8.php?id=<?php echo $id ?>" class="dropdown-item text-warning">SEMESTER-8</a>
							</div>
							
						</li>
						<li >
							<a href="../seniorlist/seniorlist.php?id=<?php echo $id ?>" class=" nav-link " style="font-size: 20px;">CONTACT SENIORS</a>
						</li>
						<li><a href="../profile/profile.php?id=<?php echo $id ?>" class="nav-link" style="font-size: 20px;" >PROFILE</a></li>
						<li><a href="../home/home.php" class="nav-link" style="font-size: 20px;" >LOG OUT</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="">
					<li><a href="../myresource/myresource.php?id=<?php echo $id ?>" class="nav-link" style="font-size: 20px;position: absolute; right: 1104px;">Resource added by me</a></li>
					<br>
				</div>
		
		<div class="container">
			<div class="row">
				
				<table class="mt-4 mb-4 ml-3">
					<tr>
						<th width="200">First Name :</th>
						<td width="400"><?php echo $blogs['firstname'] ?></td>
					</tr>
					<tr>
						<th width="200">Last Name :</th>
						<td width="400"><?php echo $blogs['lastname'] ?></td>
					</tr>
					<tr>
						<th width="200">Email :</th>
						<td width="400"><?php echo $blogs['email'] ?></td>
					</tr>
					<tr>
						<th width="200">Contact :</th>
						<td width="400"><?php echo $blogs['contact'] ?></td>
					</tr>
					<tr>
						<th width="200">Facebook ID :</th>
						<td width="400"><?php echo $blogs['contact'] ?></td>
					</tr>
					<tr>
						<th width="200">Linkdin ID :</th>
						<td width="400"><?php echo $blogs['contact'] ?></td>
					</tr>
					<tr>
						<th width="200">Session :</th>
						<td width="400"><?php echo $blogs['contact'] ?></td>
					</tr>
					<tr>
						<th width="200">Userame :</th>
						<td width="400"><?php echo $blogs['username'] ?></td>
					</tr>
					<tr>
						<th width="200">Password :</th>
						<td width="400"><?php echo $blogs['password'] ?></td>
					</tr>
					<tr>
						<th width="200">Student ID :</th>
						<td width="400"><?php echo $blogs['studentid'] ?></td>
					</tr>
				</table>
				
			</div>
		</div>
		<div class="container">
			<a href="../editprofile/editprofile.php?id=<?php echo $blogs['id'] ?>" class="btn btn-primary">Edit Profile</a>
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