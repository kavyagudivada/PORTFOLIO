<?php





if( isset($_POST["uname"]) && isset($_POST["mail"]) && isset($_POST["msg"])) 		//for validations

{

	$name = $_POST["uname"];

	$mail = $_POST["mail"];

	$msg = $_POST["msg"];

	if (name.length !=0 && email.length!=0 && message.length !=0) {
          let subject = "Send from my portfolio"
          let body = "Name:"+name+"\n Email:"+email+"\n Message:"+message;
          window.open("mailto:kavyasri.gudivada@mavs.uta.edu?subject="+subject+"&body="+body); 
        }

	$subject = "New Message from wdm website.";

	$body = ' <!DOCTYPE html>

	<html>

	<body>

		<p>Name: <br> '.$name.' </p>

		<p>E-mail: <br> '.$mail.' </p>

		<p>Message: <br> '.$msg.' </p>

	</body>

	</html>

	';



	//headers

	$headers = "FROM: ".$name." <".$mail.">\r\n";

	$headers .= "Reply-to: ".$mail."\r\n";	

	$headers .= "NINE-VERISON: 1.0\r\n";	

	$headers .= "Content-type: text/html; charset-utf-8";



    $send = mail( $to, $subject, $body, $headers);



    if ($send) {

    	echo '<br>';

    	echo 'Mail sent,Please Go to the previous page.';

    }

}



?>



