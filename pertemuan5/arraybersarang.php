<?php
  // pertemuan 5 - array bersarang

  $mahasiswa = [
    ["aditya", "192102118"],
    ["atha", "192102178"]
  ];
?>

<!DOCTYPE html>
<html>
<head>
  <title>array bersarang</title>
</head>
<body>
  <!-- ibarat $mahasiswa adalah tempat pensil dan nilai di dalamnya ibarat pensil -->
  <!-- jadi setiap looping keluarin 1 pensil lalu tampilkan sampai looping selesai -->
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>
        <?php echo"$mhs[0]"; ?>
      </li>
      <li>
        <?php echo"$mhs[1]"; ?>
      </li>
    </ul>
  <?php endforeach; ?>
</body>
</html>
