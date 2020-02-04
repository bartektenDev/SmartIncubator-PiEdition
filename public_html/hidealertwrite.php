<?php
$myfile = fopen("./python_scripts/logs/dismissAlertStatus.txt", "w") or die("Unable to open file!");
$txt = "youreExcusedKat";
fwrite($myfile, $txt);
fclose($myfile);
?>
