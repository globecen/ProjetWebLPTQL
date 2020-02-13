<html>
<style>

    .container-content-grid{

        display: grid;
        grid-template-columns: 90% 10% ;
        grid-template-rows: 10% auto;
        justify-content: stretch;

    }
    .child-grid-liste-name{
        grid-column-start: 1;
        grid-column-end: 2;
        grid-row-start:1 ;
        grid-row-end: 2;

    }
    .child-grid-new-fiche{
        grid-column-start: 2;
        grid-column-end: 3;
        grid-row-start:1 ;
        grid-row-end: 2;
        background-color: grey;
        color: white;
        display: block;
        text-align: center;
        text-decoration: none;
    }
    .child-grid-liste-flex{
        grid-column-start: 1;
        grid-column-end: 3;
        grid-row-start: 2;
        grid-row-end: 3;


    }
    .container-liste-flex{
        height: auto;
        width: auto;
        max-height: inherit;
        display: flex;
        flex-flow: row wrap;
        justify-content: left;
        align-items: flex-start;

    }
    .child-liste-flex{
        flex: 0 1 20%;
        padding: 50px;
        margin: 15px;
        background: #9e2c2c;

    }
</style>
<?php
//include("header.php")
?>


    <?php
    include_once('db.inc.php');
    $db=new PDO("$server:host=$host;port=$port;dbname=$base", $user, $pass);
    $idActivity = 1;
    $sql="SELECT Fiches.description_f FROM Fiches,Associer WHERE Fiches.id_f = Associer.id_f AND Associer.id_a =1 ";
    foreach ($db->query($sql) as $fiche){
        echo("<div class=\"child-liste-flex\">");
        echo($fiche);
        echo("</div>");
    }
    ?>
<?php
//include ("footer.php")
?>
</html>