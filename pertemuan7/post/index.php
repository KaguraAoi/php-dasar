<?php
  // pertemuan 7 - metode post

  // post berbeda dengan get
  // data post dikirim lewat form
  // data yang dikirim tidak kelihatan di url
?>

<!DOCTYPE html>
<html>
<head>
  <title>post</title>
</head>
<body>
  <!-- data yang sudah terkirim akan ditampilkan di halaman index.php -->
  <h1>selamat datang <?php echo $_POST["name"]; ?></h1>
</body>
<html>
