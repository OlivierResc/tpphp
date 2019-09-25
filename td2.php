<?php
include 'utils.inc.php';
?>


<form action="data-processing.php" method="post">
    <input type="text" name="id" placeholder="Identifiant"/> <br>
    <input type="radio" value="Homme" name="Civilité" checked/> Homme <br>
    <input type="radio" value="Femme" name="Civilité" checked/> Femme <br>
    <input type="text" name="e" placeholder="E-mail"/> <br>
    <input type="password" name="password" placeholder="Mot de passe"/> <br>
    <input type="password" placeholder="Verif mdp"/> <br>
    <input type="text" name="tel" placeholder="Téléphone"/> <br>
    <select>
        <option> Coatie </option>
        <option> Serbie </option>
        <option> France </option>
        <option> Japon </option>
    </select> <br>
    <input type="checkbox" value="Conditions d'utilisations"/> Conditions Générales <br>
    <input type="submit" name="action" value="mailer" placeholder="Bouton de soumission"/> <br>
</form>
