<?php
  // pertemuan 5 - array
  
  // array : variabel yang dapat menampung banyak nilai
  // elemen pada array boleh memiliki tipe data yang berbeda
  
  // membuat array
  // cara lama
  $hari = array ("senin", "selasa", "rabu");

  // cara baru
  $hari = ["senin", "selasa", "rabu"];
  $arr1 = [123, "text", false];

  // menampilkan array
  var_dump($hari); // menggunakan var_dump()
  print_r($hari); // menggunakan print_r

  // menampilkan array data tunggal
  // jika data yang mau kita tampilkan ke layar banyak tidak menggunakan echo tetapi menggunakan foreach
  echo $hari[2]; // mengambil data indeks ke 2 yaitu rabu
  echo $hari[0]; // mengambil data indeks ke 1 yaitu 123

  // menambahkan elemen baru pada array
  var_dump($hari);
  $hari[] = "kamis";
  var_dump($hari);
?>
