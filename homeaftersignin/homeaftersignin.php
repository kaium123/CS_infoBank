<?php
	include '../blog/blog.php';
	$blog=new Blog();
	$result='';
	$loginresult='';
	
	/*$_SESSION['username']=$_POST['username'];
	$name=$_SESSION['username'];
	$_SESSION['password']=$_POST['password'];
	$pass=$_SESSION['password'];*/
	$result=$_GET['id'];
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
					<a href="" class="navbar-brand">
						<p class="head">ANWARA UNION COUNCIL</p>
					</a>
					<a href="" class="navbar-brand ml-0">
						<img src="image/boot.png" width="100" height="50">
					</a>
				</div>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#my-nav">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="my-nav">
					<ul class="navbar-nav ml-auto">
						<li class=""><a href="../homeaftersignincontinue/homeaftersignincontinue.php?id=<?php echo $result ?>" class="nav-link" style="font-size: 20px;">HOME</a></li>
						<li><a href="../about/aboutpage.php?id=<?php echo $result ?>" class="nav-link active" style="font-size: 20px;">ABOUT</a></li>
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
						<li><a href="../profile/profile.php?id=<?php echo $result ?>" class="nav-link" style="font-size: 20px;">My Profile</a></li>
						<li><a href="../home/home.php" class="nav-link" style="font-size: 20px;">Log Out</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="">
			
				<div style="width: 100%;">
					<div class="carousel slide carousel-fade" data-ride="carousel" id="my-carousel" data-interval="4000">
						<ol class="carousel-indicators">
							<li data-target="#my-carousel" data-slide-to="0"></li>
							<li data-target="#my-carousel" data-slide-to="1"></li>
							<li data-target="#my-carousel" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner ">
							<div class="carousel-item active">
								<img src="images/slide1.jpg" height="583px" class="w-100 d-block ">
								<div class="carousel-caption">
									<h1>hello first slide</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/slide2.jpg" height="583px" class="w-100 d-block ">
								<div class="carousel-caption">
									<h1>hello first slide</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/slide3.jpg" height="583px" class="w-100 d-block ">
								<div class="carousel-caption">
									<h1>hello first slide</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									</p>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#my-carousel" role="button" data-slide="prev">
				    		<span class="carousel-control-prev-icon"></span>
					    </a>
					    <a class="carousel-control-next" href="#my-carousel" role="button" data-slide="next">
					    	<span class="carousel-control-next-icon" ></span>
					    </a>
					</div>
				</div>
			
		</div>
		<div class="navbar navbar-expand-md navbar-dark bg-dark justify-center">
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