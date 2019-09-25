<?php
include 'utils.inc.php';
?>

<?php
$email= $_POST ['e'];
$password= $_POST ['mdp'];
$action = $_POST['action'];

?>

<?php
if($action == 'mailer')
{
$message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
$message .= 'Email : ' . $email . PHP_EOL;
$message .= 'Mot de passe : ' . PHP_EOL . $password;
mail($email,'inscription', $message);
echo '<br/><strong>Mail envoyé gros bg!</strong><br/>';
}
else
{
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}
?>
