<?php
include 'config.php';

session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="tambah.php">tambah data</a>
    <table border="1">
        <thead>
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>kelas</th>
                <th>jurusan</th>
                <th>uname</th>
                <th>pass</th>
                <th>aksi</th>
                
            </tr>
        </thead>
        <thead>
            <?php
            $nomor = 1;
            $result = mysqli_query($conn, "SELECT * FROM nana1");
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                <td>{$nomor}</td>
                <td>{$row['nama']}</td>
                <td>{$row['kelas']}</td>
                <td>{$row['jurusan']}</td>
                <td>{$row['uname']}</td>
                <td>{$row['pass']}</td>
                <td>
                <a href='edit.php?id={$row['id']}'>edit</a>
                <a href='hapus.php?id={$row['id']}' onclick='return confirm(\"apakah anda ingin menghapus data ini?\");'>hapus</a>
                </td>
                </tr>
                ";
                $nomor++;
            }
            ?>
        </thead>
    </table>
</body>
</html>