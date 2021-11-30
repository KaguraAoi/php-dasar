<?php
  // pertemuan 4 - function

  // parameter di dalam function ini digunakan sebagai parameter default. pada saat user tidak menginput data ke parameter maka parameter default yang akan digunakan
  function salam($waktu="datang", $nama="admin") {
    return "selamat $waktu, $nama";
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>function</title>
</head>
<body>
  <h1><?php echo salam ("pagi", "aditya"); ?></h1>
  <!-- karena parameter tersebut berisi inputan maka parameter default tidak digunakan -->
</body>
</html>
