<?php
include_once("db.inc.php");
echo '<center><form method="post" action="">';
$db=new PDO("$server:host=$host;port=$port;dbname=$base", $user, $pass);
// set the PDO error mode to exception
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="SELECT * FROM Activites limit 25";
	echo '<input name="texte" type="TEXT"/>
	<label for="pet-select">Choix de l activite :</label>
		<select name="choixActivite" id="ActiviteChoix" onchange="getIdActivite(this.options[this.selectedIndex].text)">';
	foreach ($db->query($sql) as $activites){
		echo '<option value='.$activites['note'].'>'.$activites['note'].'</option>';
	}
	$choixSelect=ActiviteChoix.options[this.selectedIndex].text;
	$sql2="SELECT Fiches.description_f FROM Activites,Associer,Fiches where Activites.id_a=Associer.id_a AND Fiches.id_f=Associer.id_f and Associer.id_a=1"; 

?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous">
			  function getIdActivite(value){
				  var valIdActivite = value;
				  console.log(valIdActivite);
				  $.ajax({
					  url:"AffichageListes.php",
					  method:"POST",
					  data: {choixActivity : valIdActivite}
				  }).done((html)=>{
					  $('center').append(html);
				  });
			  }
 </script>
 <?php
 $choixActivity = $_POST['choixActivity'];
 echo $choixActivity;
 ?>