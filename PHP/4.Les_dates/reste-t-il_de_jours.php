<?php

$date1 = new DateTime('2024-09-12'); 
$date2 = new DateTime('2024-10-11'); 

$interval = $date1->diff($date2); 

echo "Количество дней: " . $interval->days; // Выводим количество дней

?>
