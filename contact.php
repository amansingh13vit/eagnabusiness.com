<?php
if(isset($_POST['SEND'])){
	$name=$_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$to ='aman76079@gmail.com';
	 $from = "amansingh13vit@gmail.com"; 

	$subject = 'Form Submission';
	 $headers = "From: $from";
         

	$message ="Email from Eagan Business solution"."\n"."Name:".$name."\n"."Email:".$email."\n"."Subject".$subject."\n"."Message".$message;

	$ok = mail($to, $subject, $message, $headers)
	if ($ok) { 
        echo "<p>mail sent to $to!</p>"; 
    } else { 
        echo "<p>mail could not be sent!</p>"; 
    } 
	
}

?>