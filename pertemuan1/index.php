<?php

include 'Proses.php';
$proses = new Proses;
$r = $proses->tampildata();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman utama</title>
</head>

<body>

  <h1>halaman Utama</h1>
  <table border="1" cellpadding="10" cellspacing="1">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Nim</th>
      <th>alamat</th>
      <th>jurusan</th>
    </tr>
    <?php
    $no = 1;
    foreach ($r as $m) : ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $m['nama']; ?></td>
        <td><?php echo $m['nim']; ?></td>
        <td><?php echo $m['alamat']; ?></td>
        <td><?php echo $m['jurusan']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>