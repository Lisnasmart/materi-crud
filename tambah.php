<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    if($nama == "" || $kelas =="" || $jurusan ==""){
        echo "!!Data tidak boleh kosong bos!!";
    }else{
    $query = "INSERT INTO nana1 (nama, kelas, jurusan) VALUES ('$nama', '$kelas', '$jurusan')";
    $result = mysqli_query($conn, $query);
if ($result) {
    echo "Data sudah masuk salam terimakasih";
    } else {
        echo "Data gagal masuk maz";
        }
     }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambahkan data</title>
</head>
<body>
<h5>Tambah data siswa</h5>
            <form action="tambah.php" method="POST">

            <!--- form untuk menambahkan dara -->
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama">
                <br>
                <br>
                    <label for="kelas">kelas</label>
                    <input type="text" name="kelas" id="kelas">
                <br>
                <br>
                    <label for="nama">jurusan</label>
                    <input type="text" name="jurusan" id="jurusan">
                <br>
                <br>
                 <button type="submit">Kirim</button>
                 <a href="index.php">Kembali</a>
            </form>
</body>
</html>