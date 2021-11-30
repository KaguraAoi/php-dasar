<?php
  // pertemuan 2 - sintaks php

  // output
  // echo, print, print_r, var_dump()
  // print_r : untuk menampilkan isi array
  // var_dump() : berisi informasi tambahan seperti type data yang digunakan dan jumlah karakter dari string tersebut
  // print_r dan var_dump() digunakan untuk debugging program

  // letak penulisan sintaks php
  // 1. php di dalam html(lebih disarankan)
  // 2. html di dalam php

  // variabel
  // digunakan untuk menampung sebuah nilai
  // tidak boleh diawali angka tetapi boleh mengandung angka
  // diawali tanda $ lalu nama variabel nya
  // contoh : $nama = "aditya atha"; (menggunakan kutip 2 lebih disarankan)

  // operator
  // 1. aritmatika (+, -, *, /, %)
  // contoh :
  $x = 10; $y = 20;
  echo $x * $y;

  // 2. concatenation / penggabung string (.)
  // contoh :
  $namadepan = "aditya";
  $spasi = " ";
  $namabelakang = "atha";
  echo $namadepan . $spasi . $namabelakang;

  // 3. perbandingan (<, >, <=, >=, ==, !=)
  // contoh : 
  var_dump(5 > 2);
  var_dump(1 == "1"); // (bernilai true karena hanya mengecek berdasarkan string saja)

  // 4. identitas (===, !==)
  // contoh :
  var_dump(2 === "2") // (bernilai false karena juga mengecek tipe data)

  // 5. logika (&&, ||, !)
  // contoh :
  $x = 30;
  var_dump($x < 40 && $x % 2 == 0) // (false karena salah satu bernilai salah)
  var_dump($x > 20 || $x % 2 == 1) // (true walaupun salah satu nilai bernilai false)
?>
