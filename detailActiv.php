<?php
include_once 'db.inc.php';

$echeance = $_POST['date'];
$note = $_POST['note'];
$lien = $_POST['lien'];


$db=new PDO("$server:host=$host;port=$port;dbname=$base", $user, $pass);

$sql="UPDATE Activites
    SET echeance = '$echeance',
    note = '$note', 
    lien = '$lien' 
    WHERE id_a = '1'";



$db->query($sql);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
p, label{
   /* font: 1rem 'Fira Sans', sans-serif;*/
    font-family:Times New Roman, Times, serif;
    font-size: 30px;
    font-weight:bold;
        }

        /*input {
    margin: .4rem;
        }*/
        #entete, #menu, #contenu, #footer {
            padding:1px ;
        }

        #entete {
            border: 2px solid black;
            text-align:center;
            height: 80px;
        }
        #main {
            max-with:960px;
            margin:auto;
        }

        #modifier{
            float: right;
            padding: 5px;
        margin-top: -85px;
            display: block;
            vertical-align: middle;
        }
         #supprimer {
            float: right;

             padding: 5px;
             margin-top: -80px;
             margin-left: 25px;
             display: inline-block;


        }
        #menu{
            float:left;
            width:240px;
            height: 300px;
            border: 2px solid black;
        }

        #contenu {
            margin-left:auto;
            border: 2px solid black;
            margin-top: 5px;
            margin-bottom: 5px;
            height: 500px;
        }
        #footer {
            border: 2px solid black;
            text-align:center;
            clear:both;
            height: 60px;
        }
    </style>

</head>
<body>
<div id="entete">
    <p>Liste des activités accessibles et urgentes</p>

    <input type="submit" id="modifier" value="Modifier" ><br><br>
    <input type="submit" id="supprimer" value="Supprimer">

</div>
<div id="main">

    <div id="contenu">

        <form action="#" method="POST">

            <p>
            <label>Echéance</label>
            <input type="date" name="date">
            </p>

            <p>
            <label>Note</label>
            <input type="text" name="note">
            </p>

            <p>
            <label>Lien</label>
            <input type="text" name="lien">
            </p>

            <input type="submit" id="modifier" value="Modifier" >

        </form>



    </div>
</div>




</body>
</html>

