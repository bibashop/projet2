<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSEWORD', '');
define('DB_NAME', 'shop');
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSEWORD, DB_NAME);
if($conn=== false){
    die("ERREUR: impossible de se connecter.".
    msqli_connect_error());
}
?>