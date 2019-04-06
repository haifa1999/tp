<?php
function connect(){
$server="localhost";
$base="isg";
$username="root";
$pass="";
try{
    //code a  executer ...
    $con=new PDO("mysql:host=$server;dbname=$base",$username,$pass);//con:tconnectilna aal base de donne..
    return $con;
}catch ( PDOExeption $e){
    //traitement en cas d'<exeption...
    die("erreeeeeur: ".$e->getMessage());
}
}
?>