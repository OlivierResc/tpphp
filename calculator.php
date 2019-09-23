<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL
    ;
};
?>

<?php
start_page('calculator');
?>

<input checked="checked" type="radio" name="op" value="*"/>*<br/>
<input type="radio" name="op" value="+"/>+<br/>
<input type="radio" name="op" value="-"/>-<br/>
<input type="radio" name="op" value="/"/>/<br/>

<?php
function end_page()
{
    echo '</body></html>'
    ;
};
?>

<hr/><br/><strong>Calcl</strong><br/><hr/>
