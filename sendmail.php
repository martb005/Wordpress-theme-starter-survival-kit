<?
	$name = trim(strip_tags($_POST['name']));
	$email = trim(strip_tags($_POST['email']));
	$message = htmlentities($_POST['message'],ENT_QUOTES,'UTF-8');

	// settings
	$subject = "Auto subject"; // Subject idenfication for receiver
	$to = 'yourmail@yourdomain.com'; // Email address for receiver

	$body = <<<HTML
	<html>
	<body>
		<p>$message</p>
		<p><i>$name</i>, <i>$email</i></p>
	</body>
	</html>
HTML;

	$headers = "From: $email\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\n";
	$headers .= "Content-Transfer-Encoding: 8bit\n";

	// send
	mail($to, $subject, $body, $headers);

	// redirect
	header('Location: index.php');
?>