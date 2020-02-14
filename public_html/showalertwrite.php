<?php
$myfile = fopen("python_scripts/logs/dismissAlertStatus.txt", "w") or die("Unable to open file!");
$txt = "";
fwrite($myfile, $txt);
fclose($myfile);

header("Refresh:2; url=index.php");
?>
