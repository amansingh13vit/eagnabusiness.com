<?php
if(isset($_POST['SEND'])){
	$selected_val =$_POST['discuss'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	$to ='aman76079@gmail.com';

	$subject = 'Form Submission';
         

	$message ="Email from Eagan Business solution"."\n"."Discuss:".$selected_val."\n"."Email:".$email;
	$headers = "Form:".$email;

	if(mail($to, $subject, $message, $headers)){
		echo 'You Have Successfully Subscribed!<a href="www.eagnabusiness.com">Goto Home</a>';
	}
	
}

?>