<?php include ("cnxbase.php");
// recuperation variable
$nom=$_GET["nom"];
$prenom=$_GET["prenom"];
$mail=$_GET["mail"];
$message=$_GET["message"];

//requete
$requete=$connexion->prepare('INSERT INTO utilisateur (nom,prenom,mail) VALUES (:nom,:prenom,:mail)');
$requete=$connexion->prepare('INSERT INTO message (message) VALUES (:message)');
//bindparam 
$requete->bindParam(':nom', $nom, PDO::PARAM_STR);
$requete->bindParam(':prenom', $prenom, PDO::PARAM_STR);
$requete->bindParam(':mail', $mail, PDO::PARAM_STR);
$requete->bindParam(':message', $message, PDO::PARAM_STR);

//execution requete
$requete->execute();
echo("le stage de ".$nom." a été ajouté");
?>
<html>
<link rel="stylesheet" type="text/css" href="stylemenu1.css">