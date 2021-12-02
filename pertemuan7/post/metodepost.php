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
  <!-- action: berarti data yang telah disubmit akan dikirim ke index.php dan otomatis akan beralih ke halaman tersebut -->
  <!-- method-nya post supaya data yang dikirim tidak terlihat di url -->
  <!-- atribut name digunakan sebagai pengenal agar data bisa terkirim -->
  <form action="index.php" method="post">
    <label>masukkan nama</label>
    <input type="text" name="name">
      <br>
    <label>masukkan password</label>
    <input type="password" name="password">
      <br>
    <button type="submit" name="submit">kirim</button>
  </form>
</body>
<html>
