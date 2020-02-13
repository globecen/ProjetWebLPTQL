<?php
include_once("db.inc.php");
echo '<center><form method="post" action="">';
$db=new PDO("$server:host=$host;port=$port;dbname=$base", $user, $pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="SELECT * FROM Activites limit 25";
echo 'Choix de l activite
<select name="choixActivite" id="ActiviteChoix">';
foreach ($db->query($sql) as $activites){
	echo '<option value="'.$activites['note'].'">'.$activites['note'].'</option>';
}
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
    echo ("<form method='post' action=''> <input type=\"radio\" name=\"choixFiche\" onclick=\"this.form.submit();\" value=\"".$listes['id_f']."\" ></form>");
	echo $listes['id_f'];
	echo $listes['description_f'];
	echo '<br>';
}
echo '</table>';
$choixFiche = $_POST['choixFiche'];
$sql3="SELECT * FROM Fiches where id_f=$choixFiche";
echo '<form action="">';
foreach($db->query($sql3) as $ficheContent){
    echo '<input type="number" name="ficheEditId" value="'.$ficheContent['id_f'].'">';
    echo '<input type="text" name="ficheEditTexte" value="'.$ficheContent['description_f'].'">';
}
echo '<input type="submit" value="modifier fiche">';

echo '</form>';
$idFiche = $_POST['ficheEditId'];
$textFiche = $_POST['ficheEditTexte'];
$sql4="UPDATE Fiches SET description_f=$textFiche WHERE id_f=$idFiche";
$db->exec($sql4);
?>