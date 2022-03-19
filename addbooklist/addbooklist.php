<?php
	include '../blog/blog.php';
	$blog=new Blog();
	$result='';
	$loginresult='';
	
	$result=$_GET['id'];

	$id=$result;

	if(isset($_POST['btn'])){
		
		$res=$blog->add_booklist($result);
	}
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
							<a href="../seniorlist/seniorlist.php?id=<?php echo $result ?>" class=" nav-link " style="font-size: 20px;">CONTACT SENIORS</a>
						</li>
						<li><a href="../profile/profile.php?id=<?php echo $result ?>" class="nav-link" style="font-size: 20px;">My Profile</a></li>
						<li><a href="../home/home.php" class="nav-link" style="font-size: 20px;">Log Out</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header">
						<span class="h3">Add Book List</span>
						
					</div>
					<div class="card-body">
						<form class="" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Semester</label>
								<input type="text" name="sem" class="form-control">
							</div>
							<div class="form-group">
								<label>Course Title</label>
								<input type="text" name="title" class="form-control">
							</div>
							<div class="form-group">
								<label>Topics</label>
								<input type="text" name="topics" class="form-control">
							</div>
							<div class="form-group">
								<label>Date</label>
								<input type="text" name="date" class="form-control">
							</div>
							<div class="form-group">
								<label>File</label>
								<input type="file" name="file" class="form-control">
							</div>
							<button type="submit" class="btn btn-primary" name="btn">Add</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
		
		<div class="navbar navbar-expand-md navbar-dark bg-dark justify-center">
			<div class="mx-auto">
				<div class="ml-5">
					<a href="" class="text-white mr-6">About Us  </a>
				</div>
				<div>
					<h6 style="color: orange;">Copyright All right @ Le Cafe 2020</h6>
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
						<form>
							<div class="form-group">
								<label style="font-size: 20px;">User Name :</label>
								<input type="text" name="input" class="form-control">
							</div>
							<div class="form-group">
								<label style="font-size: 20px;">Password :</label>
								<input type="password" name="input" class="form-control">
							</div>

						</form>
					</div>
					<div class="modal-footer">
						<a class="btn btn-primary" href="user.html">Log in</a>
						<button type="button" class="btn btn-primary">Register</button>
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
						<form>
							<div class="container">
								<div class="row">
									<div class="col-lg-6 float-left">
										<div class="form-group">
											<label style="font-size: 20px;">First Name :</label>
											<input type="text" name="input" class="form-control">
										</div>
									</div>
									<div class="col-lg-6 float-right">
										<div class="form-group">
											<label style="font-size: 20px;">Second Name :</label>
											<input type="text" name="input" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-lg-6 float-left">
										<div class="form-group">
											<label style="font-size: 20px;">Email :</label>
											<input type="text" name="input" class="form-control">
										</div>
									</div>
									<div class="col-lg-6 float-right">
										<div class="form-group">
											<label style="font-size: 20px;">Contact :</label>
											<input type="text" name="input" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-lg-6 float-left">
										<div class="form-group">
											<label style="font-size: 20px;">Address :</label>
											<textarea type="text" class="form-control"></textarea>
										</div>
									</div>
									<div class="col-lg-6 float-right">
										<div class="form-group">
											<label style="font-size: 20px;">Image :</label>
											<input type="file" name="input" class="form-control-file">
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-lg-6 float-left">
										<div class="form-group">
											<label style="font-size: 20px;">User Name :</label>
											<input type="text" name="input" class="form-control">
										</div>
									</div>
									<div class="col-lg-6 float-right">
										<div class="form-group">
											<label style="font-size: 20px;">Password :</label>
											<input type="password" name="input" class="form-control">
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary">Sign Up</button>
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