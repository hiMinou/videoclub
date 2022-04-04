<?php
require 'lib/connectdb.php';

$bdd = connectDb(); //connexion à la BDD
$liste = $bdd->prepare('Describe films'); // requête SQL
$liste->execute(); // paramètres et exécution
$columns = $liste->fetchAll(PDO::FETCH_COLUMN);

//on recupère les colones
if(isset($_GET["Direction"]) && isset($_GET["orderBy"]) && in_array($_GET["orderBy"], $columns)){

    $parm1 = $_GET["orderBy"];
    $parm2 = $_GET["Direction"];
    
}else{
    $parm1 = "id";
    $parm2 = "ASC";
}     

$query = $bdd->prepare('Select * from films order by '.$parm1.' '.$parm2); // requête SQL
$query->execute(); // paramètres et exécution
$data = $query->fetchAll();

?>