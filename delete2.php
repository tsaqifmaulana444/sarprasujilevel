<?php
include 'conn.php';

if(isset($_GET['id'])){
    header('Location: index2.php');
}

$id = $_GET['id'];

    $sql = "DELETE FROM barang WHERE id='$id'";
    $query = mysqli_query($conn,$sql);

    if($query){
        echo "<script>
        alert('data berhasil dihapus');
        document.location.href = 'index2.php';
        </script>";
    }else{
        header('Location: delete2.php?status=failed');
    }

?>