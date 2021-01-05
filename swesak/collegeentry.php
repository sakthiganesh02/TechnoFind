<!DOCTYPE html>
<html >
	<head>
		<title>Animated Login form</title>
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
						background:black;
						text-align:center;
						border-radius:20px;
						border-color:#00b5cc
						}
						
				.box h1{
						color:white;
						text-transform:uppercase;
						font-weight:500;
						
						}
						
				.box input[type="text" ],.box input[type="password"],.box input[type="list"],.box input[type="date"],#chumma
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
					
			.box input[type="text" ]:focus,.box input[type="password"]:focus,.box input[type="list"]:focus,.box input[type="date"]:focus
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
	</style>
	</head>
	<body>
	
		<form class="box"  action="collegeentry.php" method="post">
		<h1><font color="white">College Entry Details</font></h1>
		<input type="text" name="cname" placeholder="Name of the College" required>
		<input type="text" name="ename" placeholder="Name of the Event" required>

		<select id="chumma" name="evtype">
		<option value="event">Event</option>
		<option value="workshop">Workshop</option>
		<option value="culturals">Culturals</option>
		</select>
		<input type="date" name="cdate">
		<input type="submit" name="Enter" value="Enter">
			<a href="index.php">Continue</a>
		
		<br/>
		</form>
	
	</body>
	
	<?php
		$con = mysqli_connect('localhost','1154678','swesaks','1154678');
		if(isset($_POST['Enter']))
		{
			$colname=($_POST['cname']);
			echo "hello";
			$evename=($_POST['ename']);
			$etype=($_POST['evtype']);
			$edate=($_POST['cdate']);
			$query = mysqli_query($con,"INSERT INTO college_entry VALUES ('$colname','$evename','$etype','$edate')");
			if(mysqli_query($con,$query))
			{
				echo "<script>alert('register successful');</script>";
			}
		}
?>

</html>
