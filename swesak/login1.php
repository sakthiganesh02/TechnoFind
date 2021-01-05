<!DOCTYPE html>
<html >
	<head>
		<title>Animated Login form</title>
					
		<style>
		@import:"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
				body{
						margin:0;
						padding:0;
						font-family:sans-serif;
						background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url("login.jpg");
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
						background-color:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),grey;
						text-align:center;
						border-radius:20px;
						border-color:#00b5cc
						}
						
				.box h1{
						color:white;
						text-transform:uppercase;
						font-weight:500;
						
						}
						
				.box input[type="text" ],.box input[type="password"]
					{
						border:0;
						background:none;
						display:block;
						margin: 20px auto;
						text-align:center;
						border:2px solid #f62459;
						padding:14px 10px;
						width:200px;
						outline:none;
						color:white;
						border-radius:24px;
						transition:0.25s;
					}
					
			.box input[type="text" ]:focus,.box input[type="password"]:focus
			{
				width:280px;
				border-color:#ec644b;
			
			}
			.box input[type="submit" ]
				{
						border:0;
						background:none;
						display:block;
						margin: 20px auto;
						text-align:center;
						border:2px solid #f62459;
						padding:14px 40px;
						outline:none;
						color:white;
						border-radius:24px;
						transition:0.25s;
						cursor:pointer;
					}
			.box input[type="submit"]:hover
			{
				background:#f03434;
			}
			.box i{
					width:26px;
					color:white;
					text-align:center;
					
	
	</style>
	</head>
	<body>
	
		<form class="box"  action="login1.php" method="post">
		<h1><font color="white">Login</font></h1>
		<input type="text" name="lname" placeholder="Username">
		<input type="password" name="pwd" placeholder="Password">
		<input type="submit" name="Login" value="Login">
		
		<br/>
		<p><font color="white">Not a member yet<a href="signup.php">Signup<a></font></p>
		</form>
		<?php 
$con = mysqli_connect('localhost','1154678','swesaks','1154678');
if(isset($_POST['Login']))
{
    $username=($_POST['lname']);
	$password=md5($_POST['pwd']);
	
	$check_database_query=mysqli_query($con,"SELECT * FROM registration_table WHERE username='$username' AND password='$password'");
	$check_login_query=mysqli_num_rows($check_database_query);
	echo $check_login_query;
	$row= mysqli_fetch_array($check_database_query);
	
	if($check_login_query==1)
	{
		header("Location: menu.php");
		
	}
	
	else
	{
		echo "<script>alert('Invalid Usernamae and Password')</script>";
	}
	
}
?>
	</body>
</html>
