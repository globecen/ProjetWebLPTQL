<?php
include_once("db.inc.php");
echo '<center><form method="post" action="">';
$db=new PDO("$server:host=$host;port=$port;dbname=$base", $user, $pass);
// set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="SELECT * FROM Activites limit 25";
	echo "<p>Choix des activites :</p>";
	$i=0;
	foreach ($db->query($sql) as $activites){
		$i=$i+1;
		echo "<div>
  <input type='checkbox' id='huey' name='drone' value=".$activites['note']." 
label for='activites'>".$activites['note']."</label></div><br>";
	}
	echo '<input type="submit" value="Afficher les listes">
	</form></center>'
	
?>