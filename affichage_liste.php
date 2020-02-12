<html>
<style>

    .container-content-grid{

        display: grid;
        grid-template-columns: 90% 10% ;
        grid-template-rows: 10% auto;
        background: aqua;
        justify-content: stretch;

    }
    .child-grid-liste-name{
        grid-column-start: 1;
        grid-column-end: 2;
        grid-row-start:1 ;
        grid-row-end: 2;
        background: chocolate;
    }
    .child-grid-new-fiche{
        grid-column-start: 2;
        grid-column-end: 3;
        grid-row-start:1 ;
        grid-row-end: 2;
        background-color: indigo;
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
        background: grey;

    }
    .container-liste-flex{
        height: auto;
        width: auto;
        max-height: inherit;
        display: flex;
        flex-flow: row wrap;
        justify-content: left;
        align-items: flex-start;
        background: coral;
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

<div class="container-content-grid">


    <?php
    echo ("<div class=\"child-grid-liste-name\">");
    echo ("<h1>test</h1>");
    echo ("</div>");
    echo ("<a class=\"child-grid-new-fiche\" href=\"add_fiche_liste.php\">nouvelle fiche</a>");
    echo ("<div class=\"child-grid-liste-flex\">");
    echo ("<div class=\"container-liste-flex\">");
    /*include_once('db.inc.php');
    $db=new PDO("$server:host=$host;port=$port;dbname=$base", $user, $pass);
    $idActivity =
    $sql="SELECT description_f FROM Fiches WHERE id_f == id_f FROM Associer WHERE id_a = $idActivity ";
    foreach ($db->query($sql) as $fiche){
        echo("<div class=\"child-liste-flex\">");
        echo($fiche);
        echo("</div>");
    }
    */
    for ($i = 0;$i <7;$i++){
        echo("<div class=\"child-liste-flex\">");
        echo($i);
        echo("</div>");
    }
    echo ("</div>");
    echo ("</div>");
    ?>
</div>
<?php
//include ("footer.php")
?>
</html>