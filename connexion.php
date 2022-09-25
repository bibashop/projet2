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
<?php
require('config.php');
session_start();
if (isset($_POST['username'])){
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    $mdp = stripslashes($_REQUEST['mdp']);
    $mdp = mysqli_real_escape_string($conn, $mdp);
    $query = "SELECT * FROM `users` WHERE
    username='$username' and mdp='".hash('sha256', $mdp)."'";
    $result = mysqli_query($conn,$query)or
    die(mysqli_error());
    $rows = mysqli_num_rows($result);
    if($rows==1){
        $_SESSION['username'] = $username;
        header("Location: home.php");
    }else{
        $message = "Le nom d'utilisateur ou le mot de pasee est incorrect.";
    }
}
?>

    <section>
    <center><img src='bibashop.png'width='100px'></center>
    <h1>connexion</h1>
<form action=''method='post'>
<label>User name</label>
<input type='text' name='username'>
<label>Mot de passe</label>
<input type='password' name='mdp'>
<button>Se connecter</button>
<li><a class='inscrip' href="inscription.php">incrivez-vous</a></li>
<?php if (!empty($message)){ ?>
    <p class= "errorMessage"><?php echo $message; ?></p>
    <?php } ?>
</form>
</section>

</body>
</html>