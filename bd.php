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
$query = 'SELECT id, email, date FROM user';
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
while($dbRow = mysqli_fetch_assoc($dbResult))
{

    echo $dbRow['id'] . '<br/>';
    echo $dbRow['email'] . '<br/>';
    echo $dbRow['identifiant'] . '<br>';
    echo date('d.m.Y', strtotime($dbRow['date']));

    echo '<br/><br/>';

}
?>
