<?php
  // pertemuan 3 - struktur kendali

  // looping
  // for, do while, while, foreach
  // do while : minimal mengerjakan 1x looping meskipun bernilai false
  // foreach : looping khusus untuk array

  // contoh for
  for($i=1; $i<=5; $i++) {
    echo "baris ke-<br>";
  }
  
  // do while
  $x = 1;
  do {
    echo "ini baris ke-$x<br>";
    $x++;
  } while ($x<=5);

  // while
  $a = 1;
  while ($a<=5) {
    echo "ini baris ke-$a<br>";
    $a++;
  }
?>
