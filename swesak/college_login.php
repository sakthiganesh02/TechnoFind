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
	
		<form class="box"  action="college_login.php" method="post">
		<h1><font color="white">College Login</font></h1>
		<i class="fa fa-user-o" aria-hidden="true"></i>
		<input type="text" name="cname" placeholder="College name" required>
		<input type="password" name="cpwd" placeholder="Password" required>
		<input type="submit" name="CLogin" value="Login" >
		
		<br/>
		<p><font color="white">Not a member yet | <a href="college_signup.php">Signup<a></font></p>
		</form>
		</body>

		
		<?php 
		echo "Hello";
$con = mysqli_connect('localhost','1154678','swesaks','1154678');
	
   
if(isset($_POST['CLogin']))
{
	echo "Hello";
    $username=($_POST['cname']);
	$password=md5($_POST['cpwd']);
	
	$check_database_query=mysqli_query($con,"SELECT * FROM college_registration WHERE collegename='$username' AND c_password='$password'");
	$check_login_query=mysqli_num_rows($check_database_query);
	echo "iiiiittttt iiiissss " . $check_login_query;
	//$row= mysqli_fetch_array($check_database_query);
	
	if($check_login_query!=0)
	{
		header('Location:collegeentry.php');
		
	}
	
	else
	{
		echo '<script>Invalid Input</script>';
	}
	
}
?>
</html>