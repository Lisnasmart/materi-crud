<?php include 'config.php';?>
    <?php
    $id =$_GET['id'];
    $sql = "SELECT * FROM nana1 WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>


  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit data</title>
  </head>
  <body>
          <?php
          //fungsi untuk mengupdate data
            if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];

        //vadasi data agar tidak kosong
        if($nama == '' || $kelas == '' || $jurusan == '') {
            echo "!!Data yang di update tidak bisa kosong!!";
            } else {
        
                //jika data tidak kosong maka akan mengupdate
        $sql = "UPDATE nana1 SET nama='$nama', kelas='$kelas', jurusan='$jurusan'
        WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        //tanda jika data berhasil diupdate
        if($result){
            echo "BERHASIL DI UPDATE";
            header("location: index.php");
            } else {
                echo "gagal update data";
            }
 }
}
?>
        <h5>edit data</h5>

         <!-- form untuk mengupdate data  -->
            <form method="POST">
                  <label for="nama">nama</label>
                <input type="text" id="nama" name="nama"value="<?php echo $row['nama'];?>">
                <br>
                  <label for="kelas">kelas</label>
                <input type="text" id="kelas" name="kelas"value="<?php echo $row['kelas'];?>">
                <br>
                  <label for="jurusan">jurusan</label>
                <input type="text" id="jurusan" name="jurusan"value="<?php echo $row['jurusan'];?>">
                <br>


                <input type="submit" name="submit" value="update"> 
            </form>
  </body>
  </html>