<?php
include 'config.php';
 

if(isset($_GET['id'])){
    //ngambil id dari url
    $id = $_GET['id'];
   
    if(is_numeric($id)){
    $sql ="DELETE FROM nana1 WHERE id = '$id'";
    

    if($conn->query($sql)){
        header("location: index.php");
        exit();
    }
     else{
        echo"gagal hapus data!!";
     }
    } else {
        echo"id tidak valid";
    }
}
