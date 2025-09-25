<?php
session_start();

if(!empty($_SESSION['username'])){
    $_SESSION['username'] = $_POST['username'] ;
 setcookie('derniere_connexion', date("d/m/Y H:i"), time() +3600);

}

?>
<form method= "post">
    UserName : <input type="text" name= "username">
     <!-- Email : <input type="email" name= "email">
    Age : <input type="number" name= "age"> -->
    <button type="submit"> Appliquer</button>
</form>


<?php



if(isset($_SESSION ['username'])){
echo "Bonjour ".htmlspecialchars($_SESSION['username']);

if(isset($_COOKIE['derniere_connexion'])){
    echo " Derniere visite : " . htmlspecialchars($_COOKIE['derniere_connexion']);
}
}
?>