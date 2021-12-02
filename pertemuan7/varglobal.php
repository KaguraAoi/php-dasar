<?php
  // pertemuan 7 - variabel global

  $x = 10;

  function tampilX () {
    global $x; // mencari variabel x di luar function
    $x = 20; // variabel x lokal / hanya berlaku di dalam function ini
    echo $x;
  }

  echo tampilX(); // 20 (kalo diberi variabel global $x maka hasilnya 10)
  echo $x; // 10
?>
