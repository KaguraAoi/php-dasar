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
