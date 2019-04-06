<?php
//inclure un fichier
include "config.php";

//appel fonction
$base = connect();
$n = $_REQUEST['nom'];
$p = $_REQUEST['prenom'];
$t = $_REQUEST['telephne'];
$g = $_REQUEST['genre'];
$e = $_REQUEST['email'];
$d = $_REQUEST['datedenaissance'];
$na = $_REQUEST['nationalité'];
$i = $_REQUEST['interet'];
$m = $_REQUEST['mdp'];
$cm = $_REQUEST['conmdp'];
$mdpc =pd5($m);
$req = "INSERT INTO users (nom,prenom,telephone,genre,email,date de naissance,nationalité,interet,mot de passe,confirmation mot de passe) VALUES(null,'$n','$p','$t','$g','$e','$d','$na','$i','$m','$cm','$mdpc')";

$resp = $base->exec($req);
if ($resp==1){
    echo" données insereées";
}else 
echo"verifier la requette ";
?>