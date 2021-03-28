<?php  

if(count($_POST)>0) {

$dbservername = "localhost";

$dbusername = "kavyasr1_db1";

$dbpassword = "Kavyasri230997";

$dbname = "kavyasr1_wdmproject";



$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);



if (mysqli_connect_errno())

  {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

  }



	

	//$uname = $_POST['uname'];

	//$pwd = $_POST['pwd'];	







	 $myusername = mysqli_real_escape_string($conn,$_POST['uname']);

      $mypassword = mysqli_real_escape_string($conn,$_POST['pwd']); 

      

      







	if($myusername=="admin")

	{	

		$result = mysqli_query($conn," SELECT adminkey FROM signup WHERE fname = '$myusername' ");

		//$count  = mysqli_num_rows($result);

		//if($result==1) 

		//{

			header("Location: HomeAdmin.html?signup=success"); 

	}

	else 

	{

	  $sql = "SELECT * FROM signup WHERE uname = '$myusername' and Password = '$mypassword'";

      $result = mysqli_query($conn,$sql);

      



	$count = mysqli_num_rows($result);

      

      // If result matched $myusername and $mypassword, table row must be 1 row

		

      if($count == 1) 

      {

         

        header("Location: Home.html?signup=success");

      }else {

        // $error = "Your Login Name or Password is invalid";

         echo "<script>";

		echo "alert('Your Login Name or Password is invalid');";

		echo "</script>";

      }

   }





			

	}





?>