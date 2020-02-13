<?php
include_once("db.inc.php");
include("header.php");
echo '<center><form method="post" action="">';
$db=new PDO("$server:host=$host;port=$port;dbname=$base", $user, $pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="SELECT * FROM Activites limit 25";
echo 'Choix de l activite
<select name="choixActivite" id="ActiviteChoix">';
foreach ($db->query($sql) as $activites){
	echo '<option value="'.$activites['note'].'">'.$activites['note'].'</option>';
}
echo '</select>';
echo '<input type="submit" value="Afficher les listes">';

$choixActivity = $_POST['choixActivite'];
$sql1="SELECT * from Activites where note='$choixActivity'";
foreach ($db->query($sql1) as $idactivity){
	$result=$idactivity['id_a'];
}
$sql2="SELECT * FROM Activites,Associer,Fiches where Activites.id_a=Associer.id_a AND Fiches.id_f=Associer.id_f and Associer.id_a=$result";
echo '<table>'; 
echo'<th colspan="2">Ma liste de fiches :</th></table>';
echo '<table border="1">'; 
foreach ($db->query($sql2) as $listes){
	echo $listes['id_f'];
	echo $listes['description_f'];
	echo '<br>';
}
echo '</table>';
include("footer.php");
?>