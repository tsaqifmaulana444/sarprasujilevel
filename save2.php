<?php
include 'conn.php';
 
if(isset($_POST['add'])){
    $nama_barang = $_POST['nama_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $dipinjam = $_POST['dipinjam'];
    
    $sql = "INSERT INTO barang VALUES('','$nama_barang', '$jumlah_barang', '$dipinjam')";
    $query = mysqli_query($conn,$sql);

    if($query){
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index2.php';
        </script>";
    }else{
        header('Location: save2.php?status=failed');
    }
}
?>
