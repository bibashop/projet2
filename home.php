<?php
session_start();
if(!isset($_SESSION["username"])){
      header("Location: connexion.php");
      exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>bibashop</title>
      <link rel='stylesheet'href='menu.css'>
</head>
<body class= 'projet'>
      <span>
<header class='navbar'>
<div class=logo>
<img src= 'bibashop.png'>
</div>
<div class='col-2'><marquee><h1> BIENVENU <?php echo $_SESSION['username'];?> DANS VOTRE BOUTIQUE BIBA SHOP</marquee></h1></div>
<nav> 
<ul>
      <li><a class='acceil' href="home.php">Accueil</a></li>
      <li><a class='Apropos' href="apropos.php"target="blanck">Apropos</a></li>
      <li><a class='Apropos' href="produit.php"target="blanck">Produits</a></li>
      <li><a class='contact' href="contact.php"target="blanck">Contact</a></li>
      <li><a class='connexion' href="logout.php">Déconnexion</a></li>

     </ul>
</nav> 

</header>
<div class='hamid'>
<div class='col-2'><img src='image/shopping1.png' alt='landing image'></div>
</div> 
<div class='touré'><h1> OFFRES ILLIMITES<br> AVEC 100% <br>DE SATISFACTION</h1></div>
</span>    
</body>
</html>