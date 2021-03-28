<?php  

$dbservername = "localhost";

$dbusername = "kavyasr1_db1";

$dbpassword = "Kavyasri230997";

$dbname = "kavyasr1_wdmproject";



$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);



if (mysqli_connect_errno())

  {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

  }







	$first = $_POST['fname'];

	$last = $_POST['lname'];

	$mail = $_POST['mail'];

	$uname = $_POST['uname'];

	$pwd = $_POST['pwd'];	



//	$sql = " INSERT INTO signup (fname,lname,uname,mail,Password) VALUES //('$first','$last','$uname','$mail','$pwd');";

	

	

	mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");

	

	mysqli_query($conn,  " INSERT INTO signup (fname,lname,uname,mail,Password) VALUES ('$first','$last','$uname','$mail','$pwd')");



    

	mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");

    

	//echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";

	header("Location: Home.html?signup=success")    //going back to sign up page   //{$_SERVER['HTTP_REFERER']}



?>