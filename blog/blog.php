<?php
	class Blog
	{
		
		function dbConnect(){
			$link=mysqli_connect("localhost","root","","cs_infobank");
			return $link;
		}
		function addBlog(){
			
			
			$x=23;
			$y=45;
			
			$sql="INSERT INTO user(firstname,lastname,username,password,secretcode,studentid) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[scode]','$_POST[sid]')";

			$result=mysqli_query($this->dbConnect(),$sql);

			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}
		function viewinfo()
		{
			$sq = "SELECT * FROM user ";
			$res=mysqli_query($this->dbConnect(),$sq);
			return $res;
		}
		function add_booklist($id){
			$sq = "SELECT * FROM user WHERE id='$id'";
			$res=mysqli_query($this->dbConnect(),$sq);
			$blogs=mysqli_fetch_assoc($res);
			$time=date("Y-m-d H:i:s");
			
			$filename=$_FILES['file']['name'];
			$directory='../images/';
			$imageUrl=$directory.$filename;
			$book="book";
			
			move_uploaded_file($_FILES['file']['tmp_name'], $imageUrl);
			$sql="INSERT INTO booklist(title,topics,m_date,author,pdf,studentid,sem) VALUES ('$_POST[title]','$_POST[topics]','$_POST[date]','$blogs[username]','$imageUrl','$blogs[studentid]','$_POST[sem]')";
			
			if(mysqli_query($this->dbConnect(),$sql)){
				return "../booklist/booklist.php?id=<?php echo $id ?>";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}
		function add_notes($id){
			$sq = "SELECT * FROM user WHERE id='$id'";
			$res=mysqli_query($this->dbConnect(),$sq);
			$blogs=mysqli_fetch_assoc($res);
			$time=date("Y-m-d H:i:s");
			
			$filename=$_FILES['file']['name'];
			$directory='../images/';
			$imageUrl=$directory.$filename;
			$book="notes";

			move_uploaded_file($_FILES['file']['tmp_name'], $imageUrl);
			$sql="INSERT INTO notes(title,topics,m_date,author,pdf,studentid,sem) VALUES ('$_POST[title]','$_POST[topics]','$_POST[date]','$blogs[username]','$imageUrl','$blogs[studentid]','$_POST[sem]')";
			
			if(mysqli_query($this->dbConnect(),$sql)){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}
		function add_syllabus($id){
			$sq = "SELECT * FROM user WHERE id='$id'";
			$res=mysqli_query($this->dbConnect(),$sq);
			$blogs=mysqli_fetch_assoc($res);
			$time=date("Y-m-d H:i:s");
			
			$filename=$_FILES['file']['name'];
			$directory='../images/';
			$imageUrl=$directory.$filename;
			$book="syllabus";

			move_uploaded_file($_FILES['file']['tmp_name'], $imageUrl);
			$sql="INSERT INTO syllabus(title,modification_date,author,pdf,studentid,sem,year) VALUES ('$_POST[title]','$_POST[date]','$blogs[username]','$imageUrl','$blogs[studentid]','$_POST[sem]','$_POST[year]')";
			
			if(mysqli_query($this->dbConnect(),$sql)){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}
		function add_tips($id){
			$sq = "SELECT * FROM user WHERE id='$id'";
			$res=mysqli_query($this->dbConnect(),$sq);
			$blogs=mysqli_fetch_assoc($res);
			
			$sql="INSERT INTO tips(title,topics,m_date,author,tips,studentid,sem) VALUES ('$_POST[title]','$_POST[topics]','$_POST[date]','$blogs[username]','$_POST[tips]','$blogs[studentid]','$_POST[sem]')";
			
			if(mysqli_query($this->dbConnect(),$sql)){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}
		function viewmysyllabus($id){
			$sq = "SELECT * FROM user WHERE id='$id'";
			$res=mysqli_query($this->dbConnect(),$sq);
			$blogs=mysqli_fetch_assoc($res);
			$myid=$blogs['studentid'];
			
			$sql = "SELECT * FROM syllabus WHERE studentid='$myid'";
			$result=mysqli_query($this->dbConnect(),$sql);
			return $result;
		}
		function viewmybooklist($id){
			$sq = "SELECT * FROM user WHERE id='$id'";
			$res=mysqli_query($this->dbConnect(),$sq);
			$blogs=mysqli_fetch_assoc($res);
			$myid=$blogs['studentid'];
			$sql = "SELECT * FROM booklist WHERE studentid='$myid'";
			$result=mysqli_query($this->dbConnect(),$sql);
			return $result;
		}
		function viewmynotes($id){
			$sq = "SELECT * FROM user WHERE id='$id'";
			$res=mysqli_query($this->dbConnect(),$sq);
			$blogs=mysqli_fetch_assoc($res);
			$myid=$blogs['studentid'];
			$sql = "SELECT * FROM notes WHERE studentid='$myid'";
			$result=mysqli_query($this->dbConnect(),$sql);
			return $result;
		}
		function viewmytips($id)
		{
			$sq = "SELECT * FROM user WHERE id='$id'";
			$res=mysqli_query($this->dbConnect(),$sq);
			$blogs=mysqli_fetch_assoc($res);
			$myid=$blogs['studentid'];
			
			$sql = "SELECT * FROM tips WHERE studentid='$myid'";
			$result=mysqli_query($this->dbConnect(),$sql);
			return $result;

			
		}
		function viewsyllabus($sem)
		{
			$sql = "SELECT * FROM syllabus WHERE sem='$sem'";
			$result=mysqli_query($this->dbConnect(),$sql);
			return $result;
		}
		function viewbooklist($sem)
		{
			$sql = "SELECT * FROM booklist WHERE sem='$sem'";
			$result=mysqli_query($this->dbConnect(),$sql);
			return $result;
		}
		function viewnotes($sem)
		{
			$sql = "SELECT * FROM notes WHERE sem='$sem'";
			$result=mysqli_query($this->dbConnect(),$sql);
			return $result;
		}
		function viewtips($sem)
		{
			$sql = "SELECT * FROM tips WHERE sem='$sem'";
			$result=mysqli_query($this->dbConnect(),$sql);
			return $result;
		}

		function login(){
			$username=$_POST['username'];
			$password=$_POST['password'];
			$sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
			$result=mysqli_query($this->dbConnect(),$sql);
			$info=mysqli_fetch_assoc($result);
			echo $info['id'];
			if($info){
				
				return $info['id'];
			}
			else{
				return 0;
			}
			
		}
		function viewprofile($name,$pass){
			
			$sql="SELECT * FROM user WHERE username='$name' AND password='$pass'";
			$result=mysqli_query($this->dbConnect(),$sql);
			$info=mysqli_fetch_assoc($result);
			return $info;
		}
		function viewprofile1($id)
		{
			$sql="SELECT * FROM user WHERE id='$id'";
			$result=mysqli_query($this->dbConnect(),$sql);
			return $result;

		}
		function editprofile($id){
			$sql="SELECT * FROM user WHERE id='$id'";
			$result=mysqli_query($this->dbConnect(),$sql);
			return $result;
		}
		function updateprofile($id)
		{
			
			
				$sql="UPDATE user SET firstname='$_POST[firstname]',lastname='$_POST[lastname]',email='$_POST[email]',contact='$_POST[contact]',address='$_POST[address]',username='$_POST[username]',password='$_POST[password]',facebookid='$_POST[facebookid]',linkdinid='$_POST[linkdinid]',session='$_POST[session]' WHERE id='$id'";
				$result=mysqli_query($this->dbConnect(),$sql);
				if($result){
					return "../editprofile/editprofile.php?id=<?php echo $id ?>";
				}
				else{
					die(mysqli_error($this->dbConnect()));
				}
			
		}
		function addfood(){
			$filename=$_FILES['image']['name'];
			$directory='../images/';
			$imageUrl=$directory.$filename;
			move_uploaded_file($_FILES['image']['tmp_name'], $imageUrl);
			$sql="INSERT INTO food(name,image,details,price) VALUES ('$_POST[name]','$imageUrl','$_POST[details]','$_POST[price]')";

			$result=mysqli_query($this->dbConnect(),$sql);


			
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}
		function viewaddfood()
		{
			$sql="SELECT * FROM food";
			
			$result=mysqli_query($this->dbConnect(),$sql);

			if($result){
				return $result;
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}
		function editfood($id){
			$sql="SELECT * FROM food WHERE id='$id'";
			$result=mysqli_query($this->dbConnect(),$sql);
			return $result;
		}
		function updatefood($id){
			$blogImage=$_FILES['image']['name'];
			
			if($blogImage){
				$filename=$_FILES['image']['name'];
				$directory='../images/';
				$imageUrl=$directory.$filename;
				move_uploaded_file($_FILES['image']['tmp_name'], $imageUrl);
				$sql="UPDATE food SET name='$_POST[name]',image='$imageUrl',details='$_POST[details]',price='$_POST[price]' WHERE id='$id'";
				$result=mysqli_query($this->dbConnect(),$sql);
				if($result){
					return "Blog Updated successfully";
				}
				else{
					die(mysqli_error($this->dbConnect()));
				}
			}
			else{
				$sql="UPDATE food SET name='$_POST[name]',details='$_POST[details]',price='$_POST[price]' WHERE id='$id'";
				$result=mysqli_query($this->dbConnect(),$sql);
				if($result){
					return "Blog Updated successfully";
				}
				else{
					die(mysqli_error($this->dbConnect()));
				}
			}
		}

		function deletefood($id){
			
			$sql="DELETE FROM food WHERE id='$id'";
			$result=mysqli_query($this->dbConnect(),$sql);
		}
		function service(){
			$sql="SELECT * FROM services WHERE 1";
			$result=mysqli_query($this->dbConnect(),$sql);
			
			return $result;
			
		}
		function updateservice()
		{

			$sql="UPDATE services SET education='$_POST[education]',health='$_POST[health]',light='$_POST[light]',certificate='$_POST[certificate]',tax='$_POST[tax]' WHERE 1";
				$result=mysqli_query($this->dbConnect(),$sql);
				if($result){
					return "Blog Updated successfully";
				}
				else{
					die(mysqli_error($this->dbConnect()));
				}
		}
		function about()
		{
			$sql="SELECT * FROM about WHERE 1";
			$result=mysqli_query($this->dbConnect(),$sql);
			
			return $result;
		}
		function updateabout()
		{
			$sql="UPDATE about SET chairmen='$_POST[chairmen]',history='$_POST[history]',unionrole='$_POST[unionrole]',administrative='$_POST[administrative]',ward='$_POST[ward]' ,activities='$_POST[activities]' WHERE 1";
				$result=mysqli_query($this->dbConnect(),$sql);
				if($result){
					return "Blog Updated successfully";
				}
				else{
					die(mysqli_error($this->dbConnect()));
				}
		}
		function projects()
		{
			$sql="SELECT * FROM projects WHERE 1";
			$result=mysqli_query($this->dbConnect(),$sql);
			
			return $result;
		}
		function updateprojects()
		{
			$sql="UPDATE projects SET ongo='$_POST[ongo]',upcome='$_POST[upcome]' WHERE 1";
				$result=mysqli_query($this->dbConnect(),$sql);
				if($result){
					return "Blog Updated successfully";
				}
				else{
					die(mysqli_error($this->dbConnect()));
				}
		}
		function citizens()
		{
			$filename=$_FILES['image']['name'];
			$directory='../images/';
			$imageUrl=$directory.$filename;
			move_uploaded_file($_FILES['image']['tmp_name'], $imageUrl);
			$sql="INSERT INTO citizen(name,fname,mname,address,image,nid,scode) VALUES ('$_POST[name]','$_POST[fname]','$_POST[mname]','$_POST[address]','$imageUrl','$_POST[nid]','$_POST[scode]')";
			$result=mysqli_query($this->dbConnect(),$sql);
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}
		function viewcitizens()
		{
			$sql="SELECT * FROM citizen WHERE 1";
			$result=mysqli_query($this->dbConnect(),$sql);

			return $result;
		}
		function editcitizen($id)
		{
			
			$sql="SELECT * FROM citizen WHERE id='$id'";
			$result=mysqli_query($this->dbConnect(),$sql);
			return $result;
		}
		function updatecitizen($id)
		{
			$blogImage=$_FILES['image']['name'];
			
			if($blogImage){
				$filename=$_FILES['image']['name'];
				$directory='../images/';
				$imageUrl=$directory.$filename;
				move_uploaded_file($_FILES['image']['tmp_name'], $imageUrl);
				$sql="UPDATE citizen SET name='$_POST[name]',fname='$_POST[fname]',mname='$_POST[mname]',address='$_POST[address]',image='$imageUrl',nid='$_POST[nid]',scode='$_POST[scode]' WHERE id='$id'";
				$result=mysqli_query($this->dbConnect(),$sql);
				if($result){
					return "Blog Updated successfully";
				}
				else{
					die(mysqli_error($this->dbConnect()));
				}
			}
			else{
				$time=date("Y-m-d H:i:s");
				$sql="UPDATE citizen SET name='$_POST[name]',fname='$_POST[fname]',mname='$_POST[mname]',address='$_POST[address]',nid='$_POST[nid]',scode='$_POST[scode]' WHERE id='$id'";
				$result=mysqli_query($this->dbConnect(),$sql);
				if($result){
					return "Blog Updated successfully";
				}
				else{
					die(mysqli_error($this->dbConnect()));
				}
			}
		}

		function viewAllBlog(){
			
			$sql="SELECT * FROM blogs";
			
			$result=mysqli_query($this->dbConnect(),$sql);
			//print_r($result);
			if($result){
				return $result;
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}

		function editBlog($id){
			$sql="SELECT * FROM blogs WHERE id='$id'";
			$result=mysqli_query($this->dbConnect(),$sql);
			
			if($result){
				return $result;
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}
		function updateBlog($id){
		
			$blogImage=$_FILES['image']['name'];
			if($blogImage){
				$filename=$_FILES['image']['name'];
				$directory='../images/';
				$imageUrl=$directory.$filename;
				move_uploaded_file($_FILES['image']['tmp_name'], $imageUrl);
				$time=date("Y-m-d H:i:s");
				$sql="UPDATE blogs SET title='$_POST[title]',description='$_POST[description]',author='$_POST[author]',image='$imageUrl',status='$_POST[status]',timestamp='$time' WHERE id='$id'";
				$result=mysqli_query($this->dbConnect(),$sql);
				
				if($result){
					return "Blog Updated successfully";
				}
				else{
					die(mysqli_error($this->dbConnect()));
				}
			}
			else{
				$time=date("Y-m-d H:i:s");
				$sql="UPDATE blogs SET title='$_POST[title]',description='$_POST[description]',author='$_POST[author]',status='$_POST[status]',timestamp='$time' WHERE id='$id'";
				$result=mysqli_query($this->dbConnect(),$sql);
				
				if($result){
					return "Blog Updated successfully";
				}
				else{
					die(mysqli_error($this->dbConnect()));
				}
			}
		}
		function viewPublishedBlog(){
			$sql="SELECT * FROM blogs WHERE status=1";
			$result=mysqli_query($this->dbConnect(),$sql);
	
			if($result){
				return $result;
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
			
		}

		function updateeducation()
		{
			
			$sql="INSERT INTO education1(iname,itype,address) VALUES ('$_POST[iname]','$_POST[itype]','$_POST[address]')";
			$result=mysqli_query($this->dbConnect(),$sql);
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}

		function vieweducation()
		{
			$sql="SELECT * FROM education1 WHERE 1";
			$result=mysqli_query($this->dbConnect(),$sql);

			return $result;
		}
		function updatehealthcare()
		{
			
			$sql="INSERT INTO healthcare(iname,itype,address) VALUES ('$_POST[iname]','$_POST[itype]','$_POST[address]')";
			$result=mysqli_query($this->dbConnect(),$sql);
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}

		function viewhealthcare()
		{
			$sql="SELECT * FROM healthcare WHERE 1";
			$result=mysqli_query($this->dbConnect(),$sql);

			return $result;
		}
		function updatestreet()
		{
			
			$sql="INSERT INTO street(rname,lnumber,color) VALUES ('$_POST[rname]','$_POST[lnumber]','$_POST[color]')";
			$result=mysqli_query($this->dbConnect(),$sql);
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}

		function viewstreet()
		{
			$sql="SELECT * FROM street WHERE 1";
			$result=mysqli_query($this->dbConnect(),$sql);

			return $result;
		}
		function updatecertificate()
		{
			
			$sql="INSERT INTO certificate(name) VALUES ('$_POST[name]')";
			$result=mysqli_query($this->dbConnect(),$sql);
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}

		function viewcertificate()
		{
			$sql="SELECT * FROM certificate WHERE 1";
			$result=mysqli_query($this->dbConnect(),$sql);

			return $result;
		}

		function updatetax()
		{
			
			$sql="INSERT INTO tax(name) VALUES ('$_POST[name]')";
			$result=mysqli_query($this->dbConnect(),$sql);
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}

		function viewtax()
		{
			$sql="SELECT * FROM tax WHERE 1";
			$result=mysqli_query($this->dbConnect(),$sql);

			return $result;
		}

		function updatechairman()
		{
			
			$sql="INSERT INTO chairman(name,eback,address,jdate,edate) VALUES ('$_POST[name]','$_POST[eback]','$_POST[address]','$_POST[jdate]','$_POST[edate]')";
			$result=mysqli_query($this->dbConnect(),$sql);
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}

		function viewchairman()
		{
			$sql="SELECT * FROM chairman WHERE 1";
			$result=mysqli_query($this->dbConnect(),$sql);

			return $result;
		}
		function updatehistory()
		{
			
			$sql="INSERT INTO history(description,rward) VALUES ('$_POST[description]','$_POST[rward]')";
			$result=mysqli_query($this->dbConnect(),$sql);
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}

		function viewhistory()
		{
			$sql="SELECT * FROM history WHERE 1";
			$result=mysqli_query($this->dbConnect(),$sql);

			return $result;
		}
		function updateunionrole()
		{
			
			$sql="INSERT INTO unionrole(trole,description) VALUES ('$_POST[trole]','$_POST[description]')";
			$result=mysqli_query($this->dbConnect(),$sql);
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}

		function viewunionrole()
		{
			$sql="SELECT * FROM unionrole WHERE 1";
			$result=mysqli_query($this->dbConnect(),$sql);

			return $result;
		}


		function updateaddsetup()
		{
			
			$sql="INSERT INTO addsetup(trole,description) VALUES ('$_POST[trole]','$_POST[description]')";
			$result=mysqli_query($this->dbConnect(),$sql);
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}

		function viewaddsetup()
		{
			$sql="SELECT * FROM addsetup WHERE 1";
			$result=mysqli_query($this->dbConnect(),$sql);

			return $result;
		}

		function updateward()
		{
			
			$sql="INSERT INTO ward(wardno,wname,school,college,madrasha,temple,mosjid,hospital,clinic,location) VALUES ('$_POST[wardno]','$_POST[wname]','$_POST[school]','$_POST[college]','$_POST[madrasha]','$_POST[temple]','$_POST[mosjid]','$_POST[hospital]','$_POST[clinic]','$_POST[location]')";
			$result=mysqli_query($this->dbConnect(),$sql);
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}

		function viewward()
		{
			$sql="SELECT * FROM ward WHERE 1";
			$result=mysqli_query($this->dbConnect(),$sql);

			return $result;
		}

		function updateactivity()
		{
			
			$sql="INSERT INTO activity(act,des) VALUES ('$_POST[act]','$_POST[des]')";
			$result=mysqli_query($this->dbConnect(),$sql);
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}

		function viewactivity()
		{
			$sql="SELECT * FROM activity WHERE 1";
			$result=mysqli_query($this->dbConnect(),$sql);

			return $result;
		}

		function updateongo()
		{
			
			$sql="INSERT INTO ongo(pname,about,budget,location,sdate,edate) VALUES ('$_POST[pname]','$_POST[about]','$_POST[budget]','$_POST[location]','$_POST[sdate]','$_POST[edate]')";
			$result=mysqli_query($this->dbConnect(),$sql);
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}

		function viewongo()
		{
			$sql="SELECT * FROM ongo WHERE 1";
			$result=mysqli_query($this->dbConnect(),$sql);

			return $result;
		}
		function updateupcome()
		{
			
			$sql="INSERT INTO upcome(pname,about,budget,location,sdate,edate) VALUES ('$_POST[pname]','$_POST[about]','$_POST[budget]','$_POST[location]','$_POST[sdate]','$_POST[edate]')";
			$result=mysqli_query($this->dbConnect(),$sql);
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}

		function viewupcome()
		{
			$sql="SELECT * FROM upcome WHERE 1";
			$result=mysqli_query($this->dbConnect(),$sql);

			return $result;
		}



	}

?>

