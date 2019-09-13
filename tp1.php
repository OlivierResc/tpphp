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
echo date('friday september 13, 2019');
?>

<?php
$jour = date('l F d, Y');
?>

<?php
end_page();
?>
