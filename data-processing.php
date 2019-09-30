<?php
include 'utils.inc.php';
?>

<?php
$tel= $_POST ['tel'];
$id= $_POST ['id'];
$pays= $_POST ['pays'];
$email= $_POST ['email'];
$password= $_POST ['mdp'];
$Civilite= $_POST ['Civilite'];
$Cond= $_POST ['Cond'];
$action = $_POST['action'];

?>

<?php
if($action == 'mailer')
{
$message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
$message .= 'Email : ' . $email . PHP_EOL;
$message .= 'identifiant : ' . PHP_EOL . $id;
$message .= 'Mot de passe : ' . PHP_EOL . $password;
$message .= 'Téléphone : ' . PHP_EOL . $tel;
$message .= 'Pays : ' . PHP_EOL . $pays;
mail($email,'inscription', $message);
echo '<br/><strong>Mail envoyé gros bg!</strong><br/>';
}
else
{
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}
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
$today = date('Y-m-d');
?>

<?php
$query = 'INSERT INTO user (date, email , id, mdp, tel, pays, Cond, Civilité) VALUES (\'' . $today . '\' ,
    \''. $email . '\',
    \''. $id . '\',
    \''. $password . '\',
    \''. $pays . '\', 
    \''. $tel . '\',  
    \''. $Cond . '\',  
    \''. $Civilite .'\' )';
?>

<?php
if(!($dbResult = mysqli_query($dbLink, $query)))
{
    echo 'Erreur dans requête<br />';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}

else{
    echo '<br/><strong>Bonjour, Mickaël
Votre inscription a bien été enregistrée, merci.</stong><br/>';
}
?>
