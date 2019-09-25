<?php

$dbLink = mysqli_connect(mysql-olivier-rescigno-portofolio.alwaysdata.net, 174440, MagicOR14)
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

?>

<?php
mysqli_select_db($dbLink , user)
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)
);
?>
