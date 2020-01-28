<?php

$loadPage = location.href;

if(strpos($loadPage, "index.php?light=") !== true){
  header("Location: incubator.php?light=Unknown");
}else{

}
?>
