<?php
include_once('db.inc.php');
session_start();
if (isset ($_SESSION['login']))
{
	echo '<center>Vous etes connecter '.$_SESSION['login'].'</center>';
	echo '<li class="nav-item">
        <a class="nav-link" href="">Deco</a>
	  </li>'
	  ;
	  session_destroy(); 
}
elseif (!isset ($_POST['email'])OR !isset ($_POST['pass'])) {
	print'<center><form method="post" 	action="">
	Email : <input type="text" name="email" required> <br>
	Mot de passe : <input type="password" name="pass" required><br>
	<input type="submit" value="Se connecter">
	</form></center>';
}
else {

	$emailform = $_POST['email'];
	$passform = $_POST['pass']; 

	$db=new PDO("$server:host=$host;port=$port;dbname=$base", $user, $pass);
	$sql="SELECT * from Utilisateurs where login='$emailform' AND mdp='$passform'";
	$stmt = $db->prepare($sql);
	$stmt->execute();
	if ($stmt->fetch()){
		$_SESSION['login'] = $emailform;
		echo '<center>Vous etes connecter '.$_SESSION['login'].'</center>';
		echo '<li class="nav-item">
		<a class="nav-link" href="">Deco</a>
	  </li>';
	  session_destroy(); 
	}
	else {
		print '<center>Identifiant ou mot de passse inccorect <br>';
		print'<form method="post" 	action="">
		Email : <input type="text" name="email"> <br>
		Mot de passe : <input type="password" name="pass"><br>
		<input type="submit" value="Se connecter">
		</form><br>';
		print 'Création de compte <a href="CreerCompte.php">Créer un compte</a></center>';
	}
} 

?>