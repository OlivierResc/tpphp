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
$operateurs = '*+-/';
?>


    <form action="calcul.php" method="post">
        <input type="text" name="op1"/><br/>
        <input type="text" name="op2"/><br/>

<!--    --><?php
//        for($cpt = 0 ; $cpt <= 3 ; ++$cpt)
//        {
//        echo '<input ';
//        if($cpt == 0)
//        {
//        echo 'checked="checked" ';
//        }
//        echo 'type="radio" name="op" value="' . $operateurs[$cpt] . '"/>' . $operateurs[$cpt] . ' <br/>' . "\n";
//        }
//     ?>
        <input type="submit" name="action" value="*"/>
        <input type="submit" name="action" value="+"/>
        <input type="submit" name="action" value="-"/>
        <input type="submit" name="action" value="/"/>
        <input type="submit" name="action" value="submit"/>
        <input type="reset" value="suppr"/>
    </form>

<?php
end_page();
?>