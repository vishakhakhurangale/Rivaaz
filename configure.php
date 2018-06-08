<?php
	function create_email($fromemail,$fromname){	
		$mail = new PHPMailer;
		$mail->Host = "smtp.gmail.com";
		$mail->SMTPAuth = true;
		$mail->Username = 'krishnakumardey.dey@gmail.com';
		$mail->Password = 'Passwordgoeshere';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		$mail->setFrom($fromemail,$fromname);
		$mail->isHTML(true);
		return $mail;
	}
?>