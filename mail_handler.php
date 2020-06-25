<?php
	if(isset($_POST['submit'])){
		$Nom=$_POST['Nom'];
		$Email=$_POST['Email'];
		$phone=$_POST['phone'];
		$Sejet=$_POST['Sejet'];
		$msg=$_POST['msg'];

		$to='ah.alfaraji@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$Nom."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$Email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$Nom.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>