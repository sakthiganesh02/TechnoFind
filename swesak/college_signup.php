<!DOCTYPE html>
<html >
	<head>
		<title>College Signup form</title>
		<style>
				body{
						margin:0;
						padding:0;
						font-family:sans-serif;
						background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("sign.jpg");
						background-size:cover;
						height:100vh;
						background-position:center;
						margin-top:40px;
						background-position:fixed;
						}
				.box{
						width:300px;
						padding:40px;
						position:absolute;
						top:50%;
						left:50%;
						transform:translate(-50%,-50%);
						text-align:center;
						border-radius:20px;
						border-color:white;
						}
						
				.box h1{
						color:white;
						text-transform:uppercase;
						font-weight:500;
						
						}
						
				.box input[type="text" ],.box input[type="password"],.box input[type="email"]
					{
						border:0;
						background:none;
						display:block;
						margin: 20px auto;
						text-align:center;
						border:2px solid  #f9690e;
						padding:14px 10px;
						width:200px;
						outline:none;
						color:white;
						border-radius:24px;
						transition:0.25s;
					}
					
			.box input[type="text" ]:focus,.box input[type="password"]:focus,.box input[type="email"]:focus
			{
				width:280px;
				border-color:#29f1c3;			
			
			}
			.box input[type="submit" ]
				{
						border:0;
						background:none;
						display:block;
						margin: 20px auto;
						text-align:center;
						border:2px solid #f22613;
						padding:14px 40px;
						outline:none;
						color:white;
						border-radius:24px;
						transition:0.25s;
						cursor:pointer;
					}
			.box input[type="submit"]:hover
			{
				background:#f62459;
			}
	</style>
	</head>
	<body>
	
		<form class="box"  action="college_signup.php" method="post" >
		<h1><font color="white">COLLEGE SIGNUP</font></h1>
		<input type="text" name="cname" placeholder="College name" required>
		<input type="email" name="cemail" placeholder="Email" required>
		<input type="password" name="cpwd" placeholder="Password" required>
		
		<input type="submit" name="c_entry" value="SignUp">
		</form>
		
	</body>
</html>
<?php
		$con = mysqli_connect('localhost','1154678','swesaks','1154678');
			echo "hello";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$user=($_POST['cname']);
			$pass=md5($_POST['cpwd']);
			$email=($_POST['cemail']);
			
			$flag=0;
			
			if(strlen($user)<5 || strlen($user)>25)
			{
				$flag=1;
				echo "<p id='username'>Your Username should be atleast 5 characters</p>";
			}
			
			if(strlen($pass)<5)
			{
				$flag=1;
				echo "<p id='username'>Your Password should be Atleast 5 characters</p>";
			}
			
			if($flag==0)
			{
				echo "flag=0";
			 $query = mysqli_query($con,"INSERT INTO college_registration VALUES ('$user','$email','$pass')");
			// if(mysqli_query($con,$query))
			 //
				echo "<script>alert('register successful');</script>";
				header('Location: collegeentry.php');
			 //
			}
			}
		
?>