<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>
<?php
echo '<strong> Voici mon premier programme PHP </strong><br/>' . "\n";
echo 'C\'est pas mal non ? <br/>';
?>

<?php
$var1 = 6;
$var2 = 1.3;
$var3 = 'Variable 3';
?>

<?php echo "$var1 + $var2"; ?>
<?php echo $var1 + $var2; ?>

<?php echo $var1 + $var3; ?>

<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL
    ;
};
?>

</body>
</html>