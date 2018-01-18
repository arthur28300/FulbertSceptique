<html>
<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="stylemenu1.css">
</head>
<title> les dangers du régime vegan sur la santé </title>

<body><form>
<!-- contenu -->
<!--<form action="projetadd.php">-->
<div class='paine'>
Prenom  : <input type="text" name="prenom"><br>
Nom : <input type="text" name="nom"><br>
Adresse mail  : <input type="text" name="mail"><br>
Message : 	<input type="text" name="message"><br>
		<input type="submit" class='luna' value="valider">

		

<?php
     $to      = 'personne@example.com';
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: aclayette2@gmail.com' . "\r\n" .
     'Reply-To: aclayette2@gmail.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
	 ?>