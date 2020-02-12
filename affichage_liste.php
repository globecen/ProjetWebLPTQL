<html>
    <style>
        .container-liste-flex{
            display: flex;
            flex-flow: row wrap;
            justify-content: left;
            background: grey;
            align-content: space-evenly;
        }
        .child-liste-flex{
            flex: 0 1 20%;
            padding: 50px;
            margin: 15px;
            background: #9e2c2c;
        }
        .container-content-grid{
            display: grid;
            grid-template-columns: 15% 85% ;
            grid-template-rows: 25% 75%;
            background: aqua;
        }
        .child-grid-liste-flex{
            grid-column-start: 2;
            grid-column-end: 3;
            grid-row-start: 1;
            grid-row-end: span 3;
        }
    </style>
    <div class="container-content-grid">
        <div class="container-liste-flex child-grid-liste-flex">
            <?php
            include_once('db.inc.php');
            $db=new PDO("$server:host=$host;port=$port;dbname=$base", $user, $pass);
            $idActivity =
            $sql="SELECT description_f FROM Fiches WHERE id_f == id_f FROM Associer WHERE id_a = $idActivity ";
            foreach ($db->query($sql) as $fiche){
                echo("<div class=\"child-liste-flex\">");
                echo($fiche);
                echo("</div>")
}
            ?>





        </div>
    </div>
</html>