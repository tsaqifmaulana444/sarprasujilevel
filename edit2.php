<?php 
include 'conn.php';


if(isset($_POST['submit2'])){
    $nama_barang = $_POST['nama_barang'];
    $jumlah_unit = $_POST['jumlah_unit'];
    $dipinjam = $_POST['dipinjam'];
    $id = $_POST['id'];
    
    $sql = "UPDATE barang SET nama_barang ='$nama_barang', jumlah_unit='$jumlah_unit', dipinjam='$dipinjam' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    
    if($query){
        header('Location: index2.php');
    }else{
        header('Location: editform2.php?status=failed');
    }
}

?>

