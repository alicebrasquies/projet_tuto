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

<div align=center>
	<form method=POST action=mail.php >
		<input type=hidden name=subject value=mail>
		<table>

			<tr><td>Votre Identifiant:</td>
			<td><input type=text name=identifiant size=30></td></tr>

			<tr><td>Votre Email:</td>
			<td><input type=text name=email size=30></td></tr>

		</table>

		<br> <input type=submit value=Envoyer> -
		<input type=reset value=Annuler>
	</form>
</div> 


</body>
</html>
