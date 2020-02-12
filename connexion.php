<?php
include_once('db.inc.php');
//session_start();
$emailform = $_POST['email'];
$passform = $_POST['pass']; 
//$_SESSION['email'] = 'email';
//$_SESSION['statut'] = 'statut';
$db=new PDO("$server:host=$host;port=$port;dbname=$base", $user, $pass);
$sql="SELECT * from _Utilisateurs where login=$emailform and mdp=$passform";
if ($db->query($sql)){
echo "ok";
}	
echo "ko";
?>
<center>
<form method="post" action="#">
	Email : <input type="text" name="email"> <br>
	Mot de passe : <input type="password" name="pass"><br>
	<input type="submit" value="Se connecter">
</form>
</center>