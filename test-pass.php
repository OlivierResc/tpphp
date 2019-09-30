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
if (condition)
{

}
else
{

}
?>
