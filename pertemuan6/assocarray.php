<?php
  // pertemuan 6 - associative array

  // definisinya sama seperti array numerik, kecuali key-nya adalah string yang kita buat sendiri

  $mahasiswa = [
    [
      "nama" => "aditya",
      "nim" => "192102118",
      "jurusan" => "teknik informatika"
    ],
    [
      "nama" => "atha",
      "nim" => "192102178",
      "jurusan" => "sistem informasi"
    ]
  ];
?>

<!DOCTYPE html>
<html>
<head>
  <title>associative array</title>
</head>
<body>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>nama : <?php echo $mhs["nama"]; ?></li>
      <li>nim : <?php echo $mhs["nim"]; ?></li>
      <li>jurusan : <?php echo $mhs["jurusan"]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>
</html>
