<?php

session_start();//sans ca la superglobal $_SESSION n'existe pas
// l’appeler avant toute sortie HTML(avant echo,print,etc...),sinon PHP ne peut pas envoyer les bons en-têtes HTTP

if(!isset($_SESSION['user'])){// verification si (key)user nexiste pas encore
    $_SESSION['user'] = "KA";
}//si user n'est pas definion initialise avec la valeur KA


setcookie("last_visit", date("d/m/Y H:i"), time() + 3600);
// (""=nom du cookie,date +heure et (i)minutes) time(retourne le timestamp UNIX actuel (nombre de secondes depuis 1970).)
// +3600 scondes ,le cookie expirera dans 1 heure.


echo " Bonjour " . $_SESSION['user'] ."<br>";
if (isset($_COOKIE['last_visit'])){
    echo "derniere visite : " . $_COOKIE['last_visit'];
}//rffraichir la page pour voir l'affichage du if  



// setcookie(..)cree n cookie coté navigateur (pour pouvoir lire a une deuxieme connexion )
// isset() retourne true si la variable est définie et non nulle
?>