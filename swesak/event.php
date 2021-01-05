<html>
	<head>
		<style>	
			.list{
					background-color: blue;
					color: white;
					margin-left: 30%;
					margin-top: 30%;
					margin-right: 30%;
					font-size: 36px;
					border-top-left-radius: 25px;
					
				}
				
				#pbutton{
					
						}
		</style>
	</head>
</html>
<?php
	$con=mysqli_connect('localhost','1154678','swesaks','1154678');
	$sql="SELECT * FROM college_entry WHERE eventtype='event'";
	$result=mysqli_query($con,$sql);
	//$num_rows= mysqli_num_rows($result);
	
	if($result->num_rows >0)
	{
		while($row=$result->fetch_assoc())
		{
			echo     "<div class='list'>" . $row['collegename']."<br><br>".$row['eventname']."<br><br>".$row['date']."<a id='pbutton' href='payment.php'></a>Click here to register!!</div><br>";
			
		}
	}
?>