

<form method= "post">
    Email : <input type="test" name= "email">
    <button type="submit"> Envoyer</button>
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
$email = trim($_POST['email']);

if(empty($email)) {
    echo "erreur : email vide.";

}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo " erreur : email invalide.";
}else {
    echo "email valide : " . htmlspecialchars($email);
}
}

// FILTER_VALIDATE_INT vérifie que la valeur(ici _EMAIL) est bien un entier (pas une chaîne comme "12h" ou "abc"
// htmlspecialchars() — Convertit les caractères spéciaux en entités HTML
// filter_var ca verifieles donnes entrentes , ici, si $mail invalide alors afficher message erreur .
// trim — Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
// empty — Détermine si une variable est vide
?>