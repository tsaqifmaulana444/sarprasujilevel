<?php
include 'conn.php';

if(isset($_POST['add'])){
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $gmail = $_POST['gmail'];
    
    $sql = "INSERT INTO peminjam(nama, usia, gmail) VALUES('$nama', '$usia', '$gmail')";
    $query = mysqli_query($conn,$sql);

    if($query){
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>";
    }else{
        header('Location: save.php?status=failed');
    }
}
?>
