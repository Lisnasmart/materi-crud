<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>membuat crud dengan php</title>
</head>
<body>
      <h4>CRUD</h4>
      <a href="tambah.php">tambahkan data</a>

        <table border="1">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Jurusan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $nomor = 1;
        $result = mysqli_query($conn, "SELECT * FROM nana1");

        //sistem tampilan
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
              <td>{$nomor}</td>
              <td>{$row['nama']}</td>
              <td>{$row['kelas']}</td>
              <td>{$row['jurusan']}</td>
              <td  class='text-center'>
                  <a href='edit.php?id={$row['id']}'>edit</a>
                  <a href='hapus.php?id={$row['id']}' onclick='return confirm(\"apakah anda ingin menghapus data ini?\");'>hapus</a>
              </td>
            </tr>";
          $nomor++;
        }
        ?>
      </tbody>
    </table>
   

  <!--2025 - aditya m.p-->
</body>
</html>
