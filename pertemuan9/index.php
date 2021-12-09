<?php
  // hubungkan ke file functions.php
  require 'functions.php';
  
  // berisi perintah untuk menampilkan data dari tabel mahasiswa
  $mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
  <title>daftar mahasiswa</title>
</head>
<body>
  <table border="1" cellspacing="0" cellpadding="10">
    <tr>
      <th>nomor</th>
      <th>aksi</th>
      <th>nama</th>
      <th>nim</th>
      <th>email</th>
      <th>jurusan</th>
    </tr>
    
    <?php $no=1; ?>
    <?php foreach ($mahasiswa as $row) : ?>
      <tr>
        <td>
          <?php echo $no; ?>
        </td>
        <td>
          <a href="">ubah</a>
          <a href="">hapus</a>
        </td>
        <td>
          <?php echo $row["nama"]; ?>
        </td>
        <td>
          <?php echo $row["nim"]; ?>
        </td>
        <td>
          <?php echo $row["email"]; ?>
        </td>
        <td>
          <?php echo $row["jurusan"]; ?>
        </td>
        <?php $no++; ?>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
