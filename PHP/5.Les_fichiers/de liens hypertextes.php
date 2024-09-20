<?php
$liste = file ("Untitled.txt");
foreach($liste as $ligne){
  echo "<a href=\"$ligne\">$ligne</a><br>";
}
?>
