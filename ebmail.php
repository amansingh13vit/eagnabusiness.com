<?php
if(isset($_POST['SEND'])){

	$email = $_POST['email'];


	$to ='aman76079@gmail.com';

	$subject = 'Form Submission';
	$headers = "Form:".$email;
         

	$message ="Email from Eagan Business solution"."\n"."Email:".$email;

	if(mail($to, $subject, $message, $headers)){
		echo 'We have received your Email!<a href="http://appaddindia.com">Goto Home</a>';
	}
	
}

?>