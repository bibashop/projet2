<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire</title>
    <link rel='stylesheet'href='style.css'>
</head>
<body>
    <!--validation-->
<?php
require('config.php');
if (isset($_REQUEST['email'], $_REQUEST['username'], $_REQUEST['mdp'])){
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    $mdp = stripslashes($_REQUEST['mdp']);
    $mdp = mysqli_real_escape_string($conn, $mdp);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $query = "INSERT into `users` (username, email, mdp)
    VALUES ('$username', '$email','".hash('sha256', $mdp)."')";
    $res = mysqli_query($conn, $query);
    if($res){
        echo "<div class ='sucess'>
        <h3>Vous êtes inscrit avec succès.</h3>
        <p>Cliquez ici pour vous <a href='connexion.php'>connecter</a></p>
        </div>";
    }
}else{
    ?>
        <section>
    <center><img src='bibashop.png'width='100px'></center>
    <h1>INSCRIPTION</h1>
<form action=''method='post' novalidate>
<label>Mail</label>
<input type='text' name='email' required>
<?php
if(isset($_POST['email']) &&empty($_POST['email'])) {
    echo '<span class="erreur">ENTRER VOTRE MAIL</span>';
}
?>
<label>user name</label>
<input type='username' name='username' required>
<?php
if( isset($_POST['username']) && empty($_POST['username'])) {
    echo '<span class="erreur">ENTRER VOTRE NOM d UTILISATEUR</span>';
}
?>
<label>Mot de passe</label>
<input type='password'required="required" name='mdp'>
<?php
if( isset($_POST['mdp']) &&empty($_POST['mdp'])) {
    echo '<span class="erreur">ENTRER VOTRE MOT DE PASSE</span>';
}
?>
<button>Valider</button>
</form>
</section>
<?php }  ?>
</body>
</html>