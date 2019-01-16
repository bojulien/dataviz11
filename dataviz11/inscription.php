<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="layout.css" />
        <title>Cabinet médical des étudiants</title>
    </head>
	
	<body>

	<header class=titre> Inscription </header>
	
	<div class=menu>
		<ul>
		 <li><a href="accueil.html">Accueil</a></li>
		 <li><a href="inscription.php">Inscription</a></li>
		 <li><a href="contact.html">Contact</a></li>
		</ul>
	</div>
	
	<div class=contenu>
		<h2>Inscrire un nouveau patient dans la base ETUDIANT-SANTE</h2>

       <form action="verifInscription.php" method="post">
		
		<table>
			<tr><td>Numéro INSEE : </td>
			<td><input type="text" name="insee" size="30" MAXLENGTH="15" value="" required></td></tr>
			
			<tr><td>Nom : </td>
			<td><input type="text" name="nom" size="30" MAXLENGTH="250" value="" required></td></tr>
			
			<tr><td>Prénom : </td>
			<td><input type="text" name="prenom" size="30" MAXLENGTH="250" value="" required></td></tr>
			
			<tr><td>Date de naissance : </td>
			<td><input type="text" name="date" size="30" placeholder="2000-01-31" MAXLENGTH="250" value="" required></td></tr>
			
			<tr><td>Adresse 1 : </td>
			<td><input type="text" name="ad1" size="30" MAXLENGTH="250" value="" required></td></tr>
			
			<tr><td>Adresse 2 : </td>
			<td><input type="text" name="ad2" size="30" MAXLENGTH="250" value="" required></td></tr>
			
			<tr><td>Code Postal: </td>
			<td><input type="text" name="cp" size="30" MAXLENGTH="6" value="" required></td></tr>
			
			<tr><td>Ville : </td>
			<td><input type="text" name="ville" size="30" MAXLENGTH="250" value="" required></td></tr>
			
			<tr><td>Teléphone fixe : </td>
			<td><input type="tel" name="fixe" size="30" MAXLENGTH="10" value="" required></td></tr>
			
			<tr><td>Téléphone portable: </td>
			<td><input type="tel" name="portable" size="30" MAXLENGTH="10" value="" required></td></tr>
			
			<tr><td>Mail : </td>
			<td><input type="email" name="mail" size="30" MAXLENGTH="250" value="" required></td></tr>
	</table>
		<br />
		<input type="submit" name="Valider" value="Valider l'inscription">

	</form>
	
<?php
	if (isset($_GET['inscription'])){
		if($_GET['inscription']=="OK"){
			echo "<p><font style='color:red;'>Inscription effectuée !</font></p>";
		}
	}	
?>
         
        <h2>Se connecter</h2> 
		
		<form action="verifConnexion.php" method="post">
		<table>
		
			<tr><td>Nom : </label></td>
			<td><input type="text" name="nom" size="20" MAXLENGTH="250" id="nom" value="" required ></td></tr>
		
			<tr><td>Mot de passe : </td>
			<td><input type="password" name="mdp" size="30" MAXLENGTH="250" value="" required></td></tr>
		</table>
		<br />
		<p>Une fois connecté, vous pourrez consulter la liste des patients.<p>
		<input type="submit" value="Se connecter">
		<br /><br />
	</form>
	
	<?php
	if (isset($_GET['error'])){
		if($_GET['error']=="ID"){
			echo "<p>
			<font style='color:red;'>Vos identifiants ne sont pas correctes !<br />
			Pour rappel, seuls les médecins peuvent se connecter.
			</font>
			</p>";
		}
	}	
?>

	</div>
	</body>
		
</html>	
	 
	 
	 
	
	


