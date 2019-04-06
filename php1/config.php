<?php
function connect(){
$server="localhost";
$base="hayfoufa";
$username="root";
$pass="";
try{
    
    $con=new PDO("mysql:host=$server;dbname=$base",$username,$pass);//con:tconnectilna aal base de donne..
    return $con;
}catch ( PDOExeption $e){
    
    die("erreeeeeur: ".$e->getMessage());
}
}
?>