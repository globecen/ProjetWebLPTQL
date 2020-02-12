<link rel="stylesheet" href="style.css">
<div class="container-content-grid">


<?php
echo ("<div class=\"container-liste-flex child-grid-liste-flex\">");
    include_once('db.inc.php');
    $db=new PDO("$server:host=$host;port=$port;dbname=$base", $user, $pass);
    $idActivity =
    $sql="SELECT description_f FROM Fiches WHERE id_f == id_f FROM Associer WHERE id_a = $idActivity ";
    foreach ($db->query($sql) as $fiche){
        echo("<div class=\"child-liste-flex\">");
        echo($fiche);
        echo("</div>");
    }

echo ("</div>");

?>
</div>