<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL
    ;
};
?>

<?php
function end_page()
{
    echo '</body></html>'
    ;
};
?>

<?php
start_page('calculator');
?>

<?php
$op1 = $_POST['op1'];
$op2 = $_POST['op2'];
$op = $_POST['op'];
?>

<?php
if('*' == $op)
{
    echo $op1 * $op2;
}
elseif('+' == $op)
{
    echo $op1 + $op2;
}
elseif('/' == $op)
{
    echo $op1 / $op2;
}
elseif('-' == $op)
{
    echo $op1 - $op2;
}
else
{
    echo '<br/><strong>opérateur ' . $op . ' non géré </strong>';
}
?>

<?php
end_page();
?>
