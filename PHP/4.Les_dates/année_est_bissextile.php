<?php

function bissextile() {
  $date1 = new DateTime('2025-01-01'); 
  $date2 = new DateTime('2026-01-01'); 
  
  $interval = $date1->diff($date2); 

  // Сравниваем количество дней, а не сам объект
  if($interval->days == 365) {
    echo "ce n'est pas une année bissextile";
  } else if($interval->days == 366) {
    echo "c'est une année bissextile";
  }
}

bissextile(); 
?>
