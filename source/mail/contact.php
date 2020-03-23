<?php

require 'PHPMailerAutoload.php';

$errors = array();

$fields = array(
	'name' => array(
		'required' => true,
		'nicename' => 'Naam'
	),
	'streetname' => array(
		'required' => true,
		'nicename' => 'Straat'
	),
	'postcode' => array(
		'required' => true,
		'nicename' => 'Postcode'
	),
	'place' => array(
		'required' => true,
		'nicename' => 'Plaats'
	),
	'mobile' => array(
		'required' => true,
		'nicename' => 'Mobiele telefoonnummer'
	),
	'company' => array(
		'required' => true,
		'nicename' => 'Bedrijfsnaam'
	),
	'phone' => array(
		'required' => true,
		'nicename' => 'Telefoonnummer'
	),
	'email' => array(
		'required' => true,
		'nicename' => 'E-mail'
	),
	'proposition' => array(
		'required' => false,
		'nicename' => 'Voorstel'
	),
	'description' => array(
		'required' => true,
		'nicename' => 'Omschrijving'
	)
);

if (isset($_POST) && !empty($_POST)) {

	foreach ($fields as $key => $options) {
		if (! isset($_POST[$key])) {
			$errors[] = $key . ' is missing';
		} else if ($options['required'] === true && empty($_POST[$key])) {
			$errors[] = $key . ' is required';
		}
	}

	if (count($errors) === 0) {

		//http://stackoverflow.com/questions/16048347/send-email-using-gmail-smtp-server-through-php-mailer

		$mail = new PHPMailer;
		// Set PHPMailer to use the sendmail transport
		$mail->IsSMTP(); // telling the class to use SMTP
		$mail->Host       = "smtp.transip.email"; // SMTP server
		//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
		                                           // 1 = errors and messages
		                                           // 2 = messages only
		$mail->SMTPSecure = 'ssl';
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->Host       = "smtp.transip.email"; // sets the SMTP server
		$mail->Port       = 465;                    // set the SMTP port for the GMAIL server
		$mail->Username   = "info@dtb.amsterdam"; // SMTP account username
		$mail->Password   = "Ronnie64";        // SMTP account password

		//Set who the message is to be sent from
		$mail->setFrom('info@dtb.amsterdam', 'DTB webmailer');

		//$mail->AddReplyTo($_POST['email'], $_POST['name']);

		//Set an alternative reply-to address		//Set who the message is to be sent to
		//$mail->addAddress('info@dtb.amsterdam', 'Webmaster');
		$mail->addAddress('info@dtb.amsterdam', 'Webmaster');
		//Set the subject line
		$mail->Subject = 'Offerte via website';
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body

		$html  = 'Het onderstaande werd verstuurd via de website vanaf het ip adres '. $_SERVER["REMOTE_ADDR"] . '<br><br>';
		$html .= '<table border="0">';
		foreach ($fields as $key => $options) {
			$html .= '<tr>';
			$html .= '<td>' . $options['nicename'] . '</td>';
			if (is_array($_POST[$key])) {
				$html .= '<td>' .  implode(', ', array_map('ucfirst', $_POST[$key])) . '&nbsp;</td>';
			} else {
				$html .= '<td>' . $_POST[$key] . '</td>';
			}
			$html .= '</tr>';
		}
		$html .= '</table>';

		$mail->msgHTML($html);
		//Replace the plain text body with one created manually

		//send the message, check for errors
		if (!$mail->send()) {
			http_response_code(400);
		    echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		    echo "Message sent!";
		}
	} else {
		http_response_code(400);
		$html = '<ul>';
		foreach ($errors as $message) {
			$html .= '<li>' . $message . '</li>';
		}
		$html .= '</ul>';
		echo $html;
	}

} else {
	http_response_code(400);
	echo 'Invalid';
}

	
?>