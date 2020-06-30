<?php
class Proses
{
  public function koneksi()
  {
    $conn = mysqli_connect("localhost", "root", "", "phpnative");
    return $conn;
  }

  public function tampildata()
  {
    $conn = $this->koneksi();
    $query = "SELECT * FROM mahasiswa";
    $result = $conn->query($query);
    $data = [];
    while ($row = $result->fetch_assoc()) {
      $data[] = $row;
    }
    return $data;
  }
}
