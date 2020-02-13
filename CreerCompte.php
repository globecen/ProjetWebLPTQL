<?php
include("header.php");
?>
<center>
<form method="post" action="">
	Email : <input type="text" name="email" required><br>
	Password : <input type="password" name="password" required><br>
	<input type="submit" value="Inscription">
</form></center>
<?php

include_once("db.inc.php");
$email = $_POST['email'];
$password = $_POST['password'];
try {
$db=new PDO("$server:host=$host;port=$port;dbname=$base", $user, $pass);
// set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="INSERT INTO Utilisateurs values(NULL,'$email','$password')";
	$stmt = $db->prepare($sql);
	$stmt->execute();
	echo'Insertion effectuer';
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
include("footer.php");
?>

