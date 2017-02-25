<?php
  $name = $_POST['name'];
  $company = $_POST['company'];
  $employees = $_POST['employees'];
  $function = $_POST['funct'];
  $email = $_POST['email'];
	
	$to      = 'michel@michel-akoya.be';
	$subject = 'Spencer demo request';
	$message = 'name: ' . $name . "\r\n" .
		'company: ' . $company . "\r\n" .
		'employees: ' . $employees . "\r\n" .
		'function: ' . $function . "\r\n" .
		'e-mail: ' . $email . "\r\n";
	$headers = 'From: webmaster@spencer.co' . "\r\n" .
			'Reply-To: noreply@spencer.co' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

	$succes = mail($to, $subject, $message, $headers);

  echo $succes;
?>
