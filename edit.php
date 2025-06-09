<?php include 'config.php';?>
    <?php
    $id = $_GET["id"];
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
          
            if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];

        if($nama == '' || $kelas == '' || $jurusan == '' || $hilangspasi == '' || $password == '') {
            echo "!!Data yang di update tidak bisa kosong!!";
            } else {
        
        $sql = "UPDATE poweranger SET nama='$nama', kelas='$kelas', jurusan='$jurusan', uname='$hilangspasi', pass='$password'
        WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
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
                  <label for="uname">uname</label>
                <input type="text" id="uname" name="uname"value="<?php echo $row['uname'];?>">
                <br>
                  <label for="pass">password</label>
                <input type="text" id="pass" name="pass"value="<?php echo $row['pass'];?>">
                <br>


                <input type="submit" name="submit" value="update"> 
            </form>
  </body>
  </html>