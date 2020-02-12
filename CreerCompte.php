<?php
include_once("db.inc.php");
$_POST['email']=$email;
$_POST['email']=$password;
$db=new PDO("$server:host=$host;port=$port;dbname=$base", $user, $pass);
	$sql="INSERT INTO Utilisateurs values(,$email,$password)";
	$stmt = $db->prepare($sql);
	$stmt->execute();
	print($sql);
?>
<center>
<form method="POST" action="">
	Email : <input type="text" name="email"><br>
	Password : <input type="password" name="pass">
</form></center>
