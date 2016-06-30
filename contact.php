<html>
<head>
	<meta charset="utf-8"/>
	<TITLE>Donkili Do</TITLE>
	<link rel="stylesheet" href="form.css"/>
	<link href="LOGO_accueil2.png" rel="shortcut icon" >
</head>


<body>
<div class="header">
	<a href="accueil.html"><div class="photo"></div></a>
	
	<div class="session">
		<script src="script_1.js"></script>
		<form name=login>
			<table class="passlog">
				<tr><td class="titre_p">Identifiant</td><td><input type=text name=username style="height:20px; width:100px;"></td></tr>
				<tr><td class="titre_p">Mot de passe</td><td><input type=password name=password style="height:20px; width:100px;"></td></tr>
				<tr><td class="titre_p"><input type=button value="Connexion" onClick="Login()"></td></tr><br>
			</table>
			<a href="contact.html">Mot de passe oublié ?</a>
		</form> 
	</div>
	
   	<center><H1> DONKILI DO <BR> CHORALE DE PUGET-SUR-DURANCE</H1></center>
</div>
<?php
$mail = 'faust.def@gmail.com'; // Déclaration de l'adresse de destination.

	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.

		{

		    $passage_ligne = "\r\n";

		}

	else

		{

		    $passage_ligne = "\n";

		}

//=====Déclaration des messages au format texte et au format HTML.

 $message_txt = $_POST['text'];

//==========

 

//=====Création de la boundary

 $boundary = "-----=".md5(rand());

//==========

 

//=====Définition du sujet.

 $sujet = $_POST['sujet'];

//=========

 

//=====Création du header de l'e-mail.

 $header = "From: \"".$_POST['prenom']." ".$_POST['nom']."\"<".$_POST['email'].">".$passage_ligne;

 $header.= "MIME-Version: 1.0".$passage_ligne;

 $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

//==========

 

//=====Création du message.

 $message = $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format texte.

 $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;

 $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

 $message.= $passage_ligne.$message_txt.$passage_ligne;

//==========

 $message.= $passage_ligne."--".$boundary.$passage_ligne;

//==========

 $message.= $passage_ligne."--".$boundary."--".$passage_ligne;

 $message.= $passage_ligne."--".$boundary."--".$passage_ligne;

//==========

 

//=====Envoi de l'e-mail.

 mail($mail,$sujet,$message,$header);

//==========
 Header("Location: https://dev.termwatch.es/~s15defour/progweb/projet_tuto/msgsend.php");
?>
</body>
</html>
