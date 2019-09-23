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



    <form action="calcul.php" method="post">
        <input type="text" name="op1"/><br/>
        <input type="text" name="op2"/><br/>
        <input checked="checked" type="radio" name="op" value="*"/>*<br/>
        <input type="radio" name="op" value="+"/>+<br/>
        <input type="radio" name="op" value="-"/>-<br/>
        <input type="radio" name="op" value="/"/>/<br/>
        <input type="submit"  value="submit"/>
        <input type="reset" value="suppr"/>
    </form>

<?php
end_page();
?>