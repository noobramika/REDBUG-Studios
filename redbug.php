<html>
    <head>
        <title>
           Redbug Studios         
        </title>
        <link rel="icon" type = "image/ico" href="images/image.png">
    </head>
<body style="background: linear-gradient(purple,black,red)">
</body>
</html>
<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	// Database connection
	$conn = new mysqli('localhost','u938030590_redbugsend','Lsam...28lsls','u938030590_contact_rb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact_us(name, email, subject, message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $name, $email, $subject, $message);
		$execval = $stmt->execute();
		echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><a href="thankyou.html"><b><font color = "red" size = "45" face = "Oswald"><center>Click Here To Place Your Order!<br></center></font><b></a><center><font color = "white">Authorized by REDBUG STUDIOS</font></center>';
		$stmt->close();
		$conn->close();
	}
?>