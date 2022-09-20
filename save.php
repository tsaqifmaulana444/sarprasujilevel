<?php
include 'conn.php';

if(isset($_POST['add'])){
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $gmail = $_POST['gmail'];
    
    $sql = "INSERT INTO peminjam(nama, usia, gmail) VALUES('$nama', '$usia', '$gmail')";
    $query = mysqli_query($conn,$sql);

    if($query){
        header('Location: index.php');
    }else{
        header('Location: save.php?status=failed');
    }
}
?>
