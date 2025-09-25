<form method= "post">
    Email : <input type="email" name= "email">
    <button type="submit"> Envoyer</button>
</form>


<?php
if(!empty($_POST['email'])) {//$_POST sert à récupérer les données envoyées par un formulaire HTML avec la méthode POST
    echo "Ton email est : " . htmlspecialchars($_POST['email']);
}
// http://localhost/superglobales-php/exo2_form_get-post/demo_post.php?email=lol%40lol.fr




?>