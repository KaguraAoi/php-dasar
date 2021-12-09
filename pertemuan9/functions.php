<?php
  // koneksi ke database
  $conn = mysqli_connect("localhost", "root", "", "phpdasar");

  // menampilkan data
  function query($query) {
    $rows = [];
    global $conn;
    
    // ambil data dari tabel mahasiswa
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result) {
      $rows[] = $row;
    } return $rows;
  }
?>
