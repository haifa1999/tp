<?php

include "config.php";
$base= connect();
$req="SELECT*from users";

$result=$base->query($req);

while ($user=$result->fetchobject()){
echo $user->nom." ".$user->prenom." ".$user->telephone." ".$user->genre." ".$user->email." ".$user->date de naissance." ".$user->nationalité.$user->interet." ".$user->mot de passe." ".$user->configuaration mot de passe;
}

?>