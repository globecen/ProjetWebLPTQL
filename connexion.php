<?php
include_once('db.inc.php');
session_start();
$_SESSION['email'] = 'email';
$_SESSION['statut'] = 'statut';
$db=new PDO("$server:host=$host;dbname=$base",	$user, $pass);
$sql="SELECT * from _Utilisateurs";
foreach ($db->query($sql) as $ligne){
	echo $ligne['id_u'];
	echo $ligne['login'];
	echo $ligne['mdp'];
}
?>
<center>
<form action="#">
	Email : <input type="text" name="email"> <br>
	Mot de passe : <input type="password" name="pass">
</form>
</center>