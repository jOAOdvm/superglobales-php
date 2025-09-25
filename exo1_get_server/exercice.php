<?php

//URL test:http://localhost/superglobales-php/exo1_get_server/exercice.php?ville=Santiago&pays=Chile


echo"<h3>Contenu de \$_GET</h3>";;// montre le contenu de $get
print_r($_GET);   // passe le parametre dasn l'url

echo "<h3>Infos server</h3>";
echo "Méthode : " .$_SERVER['REQUEST_METHOD']. "<br>";
echo "Script : " . $_SERVER['PHP_SELF'] . "<br>";
// echo "IP : " . $_SERVER['REMOTE_ADDR'] . "<br>";



?>