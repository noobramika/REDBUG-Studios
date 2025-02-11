<html>
    <head>
    <title>Redbug Studios</title>
    <link rel="icon" type = "image/ico" href="images/image.png">
    </head>
<body style="background: linear-gradient(rgb(112, 6, 6),black,rgb(127, 8, 8));">
</body>
</html>
<?php
	$email = $_POST['email'];
	
	// Database connection
	$conn = new mysqli('localhost','u938030590_subscribe','Lsam...28lsls','u938030590_contact_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into Subscribe(email) values(?)");
		$stmt->bind_param("s",$email);
		$execval = $stmt->execute();
		echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><a href="subscribe.html"><b><font color = "red" size = "45" face = "Oswald"><center>Click Here To Subscribe!<br></center></font><b></a><center><font color = "white">Authorized by REDBUG STUDIOS</font></center>';
		$stmt->close();
		$conn->close();
	}
?>