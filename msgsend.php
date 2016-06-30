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

<div class="menu">
<center><div id="menu">

  <ul id="onglets">

    <li><a href="accueil.html"> Accueil </a></li>
 
    <li><a href="qsm.html"> Pr&eacute;sentation </a></li>

    <li><a href="agenda.html"> Actualit&eacute;s </a></li>

    <li><a href="repertoire.html"> R&eacute;pertoire </a></li>

    <li><a href="galerie.html"> Galerie </a></li>

    <li class="active"><a href="contact.html"> Contact </a></li>

  </ul>

</div>
<br/><br/>
<div align=center>
	<FONT color="green" size="4pt">Votre message a bien été envoyé !</FONT>
	<form method=POST action=contact.php >
		<input type=hidden name=subject value=mail>
		<table>
			<tr><td>Votre nom:</td>
			<td><input type=text name=nom size=30></td></tr>

			<tr><td>Votre prénom:</td>
			<td><input type=text name=prenom size=30></td></tr>

			<tr><td>Votre Email:</td>
			<td><input type=text name=email size=30></td></tr>

			<tr><td>Sujet:</td>
			<td><input type=text name=sujet size=30></td></tr>

			<tr><td colspan=2>Votre message:<br>
			<textarea COLS=50 ROWS=6 name=comments></textarea>
			</td></tr>

		</table>
		<br> <input type=submit value=Envoyer> -
		<input type=reset value=Annuler>
	</form>
</div> 

<p align="center"> <br> R&eacute;mi STEICHEN</p><br>
<p align="center">04.90.07.47.73</p><br>
<p align="center">remi.steichen@free.fr</p>

</body>
</html>
