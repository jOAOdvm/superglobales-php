

<form method="get">
Nom :<input type="text" name="nom">
<button type = "submit"> Envoyer </button>
</form>
<?php
if(!empty($_GET['nom'])) {//$_GET sert à récupérer les paramètres passés dans l’URL après le ?
    echo " Bonjour " .htmlspecialchars($_GET['nom']);
}
// http://localhost/superglobales-php/exo2_form_get-post/demo_get.php?nom=jojo
?>

