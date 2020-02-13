<?php
include("header.php");
include_once("db.inc.php");
?>
<form>
	<section>
		<?php
		echo '<center>
		<form method="post" action="">';
		$db=new PDO("$server:host=$host;port=$port;dbname=$base", $user, $pass);
        // set the PDO error mode to exception
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM Utilisateurs";
		echo 'Utilisateur à ajouter
		<select name="choixActivite" id="ActiviteChoix">';
		foreach ($db->query($sql) as $Utilisateur){
			echo '<option value="'.$Utilisateur['login'].'">'.$Utilisateur['login'].'</option>';
		}
		echo'</select>';
		$db=new PDO("$server:host=$host;port=$port;dbname=$base", $user, $pass);
// set the PDO error mode to exception
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM Droits";
		
		foreach ($db->query($sql) as $droits){
			echo "<br><div>
			<input type='radio' id='huey' name='rdo' value=".$droits['libelle_d']." 
			label for='activites'>".$droits['libelle_d']."</label></div><br>";
		}
		$value = $_POST['rdo'];
		echo $value;
		$sql1 = "INSERT INTO `Correspond` (`id_d`, `id_u`) VALUES ('1', '9'); "
		?>
		
		<input type="submit" value="OK">
	</form>
	<?php
	include("footer.php");
	?>