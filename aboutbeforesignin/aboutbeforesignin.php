<?php
	include '../blog/blog.php';
	$blog=new Blog();
	$result='';
	$loginresult='';
	$id=7;
	
	
	if(isset($_POST['btn'])){
		
		$result=$blog->addBlog();
	}
	
	if(isset($_POST['btnlogin'])){
		$loginresult=$blog->login();
		if($loginresult){
			
			header("Location: ../homeaftersignin/homeaftersignin.php?id=$loginresult");
		}
		else{
			?>
			<!DOCTYPE html>
			<html lang="en">
			<head>
			<meta charset="utf-8">
			<title>Open Bootstrap Modal on Page Load</title>
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<script src="js/jquery-3.5.1.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script>
			    $(document).ready(function(){
			        $("#mymodal").modal('show');
			    });
			</script>
			</head>
			<body>
				<div class="modal" id="mymodal" >
					<div class="modal-dialog">
						<div class="modal-content" style="background-color: indigo;">
							<div class="modal-header">
								<h1 style="color: white;">Log In your account</h1>
								<button class="close" data-dismiss="modal" type="button" style="color: white;">&times;</button>
							</div>
							<div class="modal-body">
								<form method="post">
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
								<h6 class="text-danger mx-auto">Wrong username or wrong password...please try again...</h6>
							</div>
						</div>
					</div>
				</div>
			</body>
			</html>
	<?php
		}
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
						<li class="active"><a href="../home/home.php?id=<?php echo $id ?>" class="nav-link" style="font-size: 20px;">HOME</a></li>
						
						<li class="dropdown">
							<a href="../aboutbeforesignin/aboutbeforesignin.php" class=" nav-link" data-toggle=""  style="font-size: 20px;">ABOUT</a>
							
							
						</li>
						
						

						<li><a href="#signupmodal" class="nav-link" data-toggle="modal" style="font-size: 20px;" data-target="#mymodalsignup">Sign Up</a></li>
						<li><a href="" class="nav-link" data-toggle="modal" style="font-size: 20px;" data-target="#mymodal">Sign In</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container mt-4 mb-5">
			<div class="row">
				<div class="col-lg-12">
					<div class="card float-left m-3" style="width: 1000px;height: 400px;">
						<div class="card-header">
							<h4 style="text-align: center;">About the project</h4>
						</div>
						<div class="card-body">
							<div >
								<h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h5>
							</div>
							
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
								<label style="font-size: 20px;color: yellow;">User Name :</label>
								<input type="text" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label style="font-size: 20px;color: yellow;">Password :</label>
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
								<label style="font-size: 20px;color: yellow;">First Name :</label>
								<input type="text" name="firstname" class="form-control">
							</div>
							<div class="form-group">
								<label style="font-size: 20px;color: yellow;">Last Name :</label>
								<input type="text" name="lastname" class="form-control">
							</div>
							<div class="form-group">
								<label style="font-size: 20px;color: yellow;">Email :</label>
								<input type="text" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label style="font-size: 20px;color: yellow;">Contact No:</label>
								<input type="text" name="contact" class="form-control">
							</div>
							<div class="form-group">
								<label style="font-size: 20px;color: yellow;">Facebook ID :</label>
								<input type="text" name="facebookid" class="form-control">
							</div>
							<div class="form-group">
								<label style="font-size: 20px;color: yellow;">Linkdin ID :</label>
								<input type="text" name="linkdinid" class="form-control">
							</div>
							<div class="form-group">
								<label style="font-size: 20px;color: yellow;">Session :</label>
								<input type="text" name="session" class="form-control">
							</div>
							<div class="form-group">
								<label style="font-size: 20px;color: yellow;">User Name :</label>
								<input type="text" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label style="font-size: 20px;color: yellow;">Password :</label>
								<input type="text" name="password" class="form-control">
							</div>
							<div class="form-group">
								<label style="font-size: 20px;color: yellow;">Student ID :</label>
								<input type="text" name="sid" class="form-control">
							</div>
							<div class="form-group">
								<label style="font-size: 20px;color: yellow;">Secret Code :</label>
								<input type="text" name="scode" class="form-control">
							</div>
							<button type="submit" class="btn btn-primary" name="btn">Resgister</button>
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