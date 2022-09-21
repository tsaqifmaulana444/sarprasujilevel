<?php 
include 'conn.php';


if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $gmail = $_POST['gmail'];
    $id = $_POST['id'];
    
    $sql = "UPDATE peminjam SET nama ='$nama', usia='$usia', gmail='$gmail' WHERE id='$id'";
    $query = mysqli_query($conn , $sql);
    
    if($query){
        echo "<script>
        alert('data berhasil diubah');
        document.location.href = 'index.php';
        </script>";
    }else{
        header('Location: formedit.php?status=failed');
    }
}

?>

