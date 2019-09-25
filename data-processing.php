<?php
include 'utils.inc.php';
?>

<?php
$tel= $_POST ['tel'];
$id= $_POST ['id'];
$pays= $_POST ['pays'];
$email= $_POST ['email'];
$password= $_POST ['mdp'];
$Civilité= $_POST ['Civilité'];
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
