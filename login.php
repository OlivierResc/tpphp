<?php
include 'utils.inc.php';
?>

<?php
echo $step;
?>

<form action="test-pass.php" method="post">
    <input type="text" name="login" placeholder="login"/> <br>
    <input type="password" name="password" />
    <input type="submit" name="action" value="ok" /> <br>
</form>
