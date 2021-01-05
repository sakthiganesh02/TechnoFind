<html>
	<head>
		<style>	
			body{
					text-align: center;
					background-color:black;
					color: white;
				}
			div{
				 width: 60%;
				 height: 40%;
				 text-align: center;
				color:white;
				font-family:cursive;
				margin-left:22%;
				margin-top:30px;
				margin-bottom:10px;
				border: 3px solid #f1a9a0;
				border-radius: 30px;
			}
			.btn{
				border:1px solid #f1a9a0;
				padding: 10px 30px;
				color:white;
				text-decoration:none;
				border-radius:10px;
				}
		.btn:hover{
			background-color:#f62459;
			color:#f62459;
			transition:0.6s ease;
			color: black;
				}
		</style>
	</head>
</html>

<?php
	$con=mysqli_connect('localhost','1154678','swesaks','1154678');
	$sql="SELECT * FROM college_entry WHERE eventtype='workshop'";
	$result=mysqli_query($con,$sql);
	//$num_rows= mysqli_num_rows($result);
	
	if($result->num_rows >0)
	{
		while($row=$result->fetch_assoc())
		{
			echo     "<div class='list'>CONDUCTED BY: " . $row['collegename']."<br><br>EVENT NAME: ".$row['eventname']."<br><br> DATE: ".$row['date']."<br><br><a href='pay.html' class='btn'>  Register</a></div><br>";
			/*echo $row['collegename'];
			echo $row['eventname'];
			echo $row['date'];*/
		}
	}
?>