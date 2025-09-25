
<form method="post">
Nom : <input type="text" name="nom">
<button type="submit">Envoyer</button>
</form>
<form method="post">
email : <input type="email" name="email">
<button type="submit">Envoyer</button>
</form>
<?php
// post n'affiche pas dans la barre de recherche le resutat 

if(!empty($_POST['nom'])) {
    echo " Bonjour " .htmlspecialchars($_POST['nom']);
}
if(!empty($_POST['email'])) {
    echo "Ton email est : " . htmlspecialchars($_POST['email']);
}
?>

 <form method="get">
Nom : <input type="text" name="nom">
<button type="submit">Envoyer</button>
</form>
<form method="get">
emai : <input type="email" name="email">
<button type="submit">Envoyer</button>
</form>

<?php
// get affiche leresultat dans a barre de recherche 

if(!empty($_GET['nom']) ) {
    echo " Bonjour " .htmlspecialchars($_GET['nom']);
}
if(!empty($_GET['email'])) {
    echo "Ton email est :  " .htmlspecialchars($_GET['email']);
}

?> 



<?php
//!empty()  pour savoir si la variable n'est pas vide
//empty() function qui test si la variable est vide
?>