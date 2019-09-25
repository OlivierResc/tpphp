<?php
include 'utils.inc.php';
?>

<?php
$id = POST ['id'];
$email= POST ['email'];
$password= POST ['password'];
$tel = POST ['tel'];

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
