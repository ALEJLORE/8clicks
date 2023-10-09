<?php
$target = $_GET["target"];
$pingResult = shell_exec("ping 4 $target");

echo "<pre>$pingResult</pre>";
?>
