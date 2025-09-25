<form method= "post">

    Nom : <input type="nom" name= "nom">
    Email : <input type="email" name= "email">
    Age : <input type="number" name= "age">

    <button type="submit"> Envoyer</button>

</form>

<?php

    
if(!empty($_POST['nom'])) {
    if(filter_var($_POST['nom']));
    echo " Bonjour " .htmlspecialchars($_POST['nom'])." <br>";
}else{
    echo "erreur :veuillez indiquer un NOM valide <br> ";
}

// -------------------------------------------------------------

if(!empty($_POST['email'])) {
    if(filter_var($_POST['email']));
    echo " Ton email est :  " .htmlspecialchars($_POST['email']). " <br>";

}else{
    echo "erreur , email invalide , veuillez reeseyer <br> ";
}

// -------------------------------------------------------------------

if(!empty($_POST['age'])){
    if (filter_var($_POST['age']));
        echo " Age : " . htmlspecialchars($_POST['age']). " ans <br>";

}


?>