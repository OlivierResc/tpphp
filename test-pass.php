<?php
include 'utils.inc.php';
?>

<?php
$password = $_POST['password'];
$login = $_POST ['login'];
$action = $_POST['action'];

?>


<?php

$dbLink = mysqli_connect('mysql-olivier-rescigno-portofolio.alwaysdata.net', '174440', 'MagicOR14')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

?>

<?php
mysqli_select_db($dbLink , 'olivier-rescigno-portofolio_bd')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)
);
?>

<?php
$query = "SELECT identifiant, mdp FROM user WHERE user.identifiant =  '$login' and user.mdp = '$password' ";
?>

<?php
if(!($dbResult = mysqli_query($dbLink, $query)))
{
    echo 'Erreur de requête<br/>';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}
?>

<?php
if($dbRow = mysqli_fetch_assoc($dbResult))
{
    header('Location: welcome.php');
}
else{
    start_page('ereur');
}
?>
