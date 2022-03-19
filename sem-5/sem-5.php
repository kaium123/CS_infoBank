<?php
	include '../blog/blog.php';
	$blog=new Blog();
	$result='';
	$loginresult='';
	
	$id=$_GET['id'];
	$result=$id;
	$sem=5;
	$Syllabus=$blog->viewsyllabus($sem);
	$booklist=$blog->viewbooklist($sem);
	$notes=$blog->viewnotes($sem);
	$tips=$blog->viewtips($sem);
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
							<a href="../seniorlist/seniorlist.php?id=<?php echo $id ?>" class=" nav-link " style="font-size: 20px;">CONTACT SENIORS</a>
						</li>
						<li><a href="../profile/profile.php?id=<?php echo $result ?>" class="nav-link" style="font-size: 20px;">My Profile</a></li>
						<li><a href="../home/home.php" class="nav-link" style="font-size: 20px;">Log Out</a></li>
					</ul>
				</div>
			</div>
		</div>
	<div class="container mt-7 mb-7">
		<div class="row justify-content-center mt-7" style="width: 1000px;">
			<div class="col-lg-12" style="width: 1000px;">
				<div class="card float-left m-3 " style="width: 1000px;">
					<div class="card-header">
						<span class="h5">Add Syllabus</span>
						<a href="../addsyllabus/addsyllabus.php?id=<?php echo $result ?>" class="btn btn-outline-primary float-right">+</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-7 mb-7">
		<div class="row justify-content-center mt-7" style="width: 1000px;">
			<div class="col-lg-12" style="width: 1000px;">
				<div class="card float-left m-3 " style="width: 1000px;">
					<div class="card-header">
						<span class="h5">Add Book list</span>
						<a href="../addbooklist/addbooklist.php?id=<?php echo $result ?>" class="btn btn-outline-primary float-right">+</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-7 mb-7">
		<div class="row justify-content-center mt-7" style="width: 1000px;">
			<div class="col-lg-12" style="width: 1000px;">
				<div class="card float-left m-3 " style="width: 1000px;">
					<div class="card-header">
						<span class="h5">Add Notes</span>
						<a href="../addnotes/addnotes.php?id=<?php echo $result ?>" class="btn btn-outline-primary float-right">+</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-7 mb-7">
		<div class="row justify-content-center mt-7" style="width: 1000px;">
			<div class="col-lg-12" style="width: 1000px;">
				<div class="card float-left m-3 " style="width: 1000px;">
					<div class="card-header">
						<span class="h5">Add Tips</span>
						<a href="../addtips/addtips.php?id=<?php echo $result ?>" class="btn btn-outline-primary float-right">+</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
		<div class="container mt-4 mb-5">
			<div class="row">
				<div class="col-lg-12">
					<div class="card float-left m-3" style="width: 1000px;height: 400px;">
						<div class="card-header">
							<h4 style="text-align: center;">Syllabus</h4>
						</div>
						<div class="card-body">
							<table class="table">
								<tr>
									<th>S.I</th>
									<th>Course Title</th>
									<th>Year</th>
									<th>Date of last modification</th>
									<th>Author</th>
									<th>Resource</th>
								</tr>
								<?php while($blogs=mysqli_fetch_assoc($Syllabus)) { ?>
								<tr>
									<td>1</td>
									<td><?php echo $blogs['title'] ?></td>
									<td><?php echo $blogs['year'] ?></td>
									<td><?php echo $blogs['modification_date'] ?></td>
									<td><?php echo $blogs['author'] ?></td>
									<td><a href="<?php echo $blogs['pdf'] ?>">Click Here To Download Pdf</a></td>
								</tr>
								<?php } ?>
							</table>
						</div>
						<div class="card-footer">
							<label></label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container mt-4 mb-5">
			<div class="row">
				<div class="col-lg-12">
					<div class="card float-left m-3" style="width: 1000px;height: 400px;">
						<div class="card-header">
							<h4 style="text-align: center;">Book list</h4>
						</div>
						<div class="card-body">
							<table class="table">
								<tr>
									<th>S.I</th>
									<th>Course Title</th>
									<th>Topics</th>
									<th>Date of last modification</th>
									<th>Author</th>
									<th>Click here to download pdf</th>
								</tr>
								<?php while($blogs=mysqli_fetch_assoc($booklist)) { ?>
								<tr>
									<td>1</td>
									<td><?php echo $blogs['title'] ?></td>
									<td><?php echo $blogs['topics'] ?></td>
									<td><?php echo $blogs['m_date'] ?></td>
									<td><?php echo $blogs['author'] ?></td>
									<td><a href="<?php echo $blogs['pdf'] ?>">Click Here To Download Pdf</a></td>
								</tr>
								<?php } ?>
							</table>
							
						</div>
						<div class="card-footer">
							<label></label>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="container mt-4 mb-5">
			<div class="row">
				<div class="col-lg-12">
					<div class="card float-left m-3" style="width: 1000px;height: 400px;">
						<div class="card-header">
							<h4 style="text-align: center;">Best Notes</h4>
						</div>
						<div class="card-body">
							<table class="table">
								<tr>
									<th>S.I</th>
									<th>Course Title</th>
									<th>Topics</th>
									<th>Date of last modification</th>
									<th>Author</th>
									<th>Click here to download pdf</th>

								</tr>
								<?php while($blogs=mysqli_fetch_assoc($notes)) { ?>
								<tr>
									<td>1</td>
									<td><?php echo $blogs['title'] ?></td>
									<td><?php echo $blogs['topics'] ?></td>
									<td><?php echo $blogs['m_date'] ?></td>
									<td><?php echo $blogs['author'] ?></td>
									<td><a href="<?php echo $blogs['pdf'] ?>">Click Here To Download Pdf</a></td>
								</tr>
								<?php } ?>
							</table>
							
						</div>
						<div class="card-footer">
							<label></label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container mt-4 mb-5">
			<div class="row">
				<div class="col-lg-12">
					<div class="card float-left m-3" style="width: 1000px;height: 400px;">
						<div class="card-header">
							<h4 style="text-align: center;">Tips</h4>
						</div>
						<div class="card-body">
							<table class="table">
								<tr>
									<th>S.I</th>
									<th>Course Title</th>
									<th>Topics</th>
									<th>Date of last modification</th>
									<th>Author</th>
									<th>Tips</th>
								</tr>
								<?php while($blogs=mysqli_fetch_assoc($tips)) { ?>
								<tr>
									<td>1</td>
									<td><?php echo $blogs['title'] ?></td>
									<td><?php echo $blogs['topics'] ?></td>
									<td><?php echo $blogs['m_date'] ?></td>
									<td><?php echo $blogs['author'] ?></td>
									<td><?php echo $blogs['tips'] ?></td>
								</tr>
								<?php } ?>
							</table>
							
						</div>
						<div class="card-footer">
							<label></label>
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