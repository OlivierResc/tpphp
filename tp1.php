<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL
    ;
};
?>

<?php
start_page('titre');
?>

<?php
function end_page()
{
    echo '</body></html>'
    ;
};
?>

<hr/><br/><strong>Test</strong><br/><hr/>


<?php
$heure = date('g:i a');
?>

<?php
$jour = date('l F d, Y');
?>

<?php
$day = date('l F d, Y');
?>

<?php
$jour = date('d/m/Y', strtotime($jour));
?>
<?php
echo $day . "\n";
echo $heure;
echo $jour;
?>


<?php
end_page();
?>
