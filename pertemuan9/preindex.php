<?
  // koneksi ke database
  $conn = mysqli_connect("localhost", "root", "", "phpdasar"); // parameternya(nama host, username, password, nama database)
  
  // ambil data dari tabel mahasiswa
  $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

  // mysqli_fetch_arrow: mengembalikan array berbentuk numerik
  // mysqli_fetch_assoc: mengembalikan array berbentuk associative
  // mysqli_fetch_array: mengembalikan array berbentuk keduanya
  // mysqli_fetch_assoc: mengembalikan array berbentuk object

  // ambil data mahasiswa dari objek result
  while($mhs = mysqli_fetch_assoc($result)) { // data yang diambil berbentuk associative. selama data tersebut ada maka lakukan looping
    var_dump($mhs);
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>daftar mahasiswa</title>
</head>
<body>
  <table border="1" cellpadding="10" cellspacing="0">
    <?php $i = 1; ?>
    <?php while ($mhs = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <td>
          <?php echo $i; ?>
        </td>
        <td>
          <a href="">hapus</a> | 
          <a href="">ubah</a>
        </td>
        <td>
          <?php echo $mhs["nama"]; ?>
        </td>
        <td>
          <?php echo $mhs["nim"]; ?>
        </td>
        <td>
          <?php echo $mhs["email"]; ?>\
        </td>
        <td>
          <?php echo $mhs["jurusan"]; ?>
        </td>
        <?php $i++; ?>
      </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
