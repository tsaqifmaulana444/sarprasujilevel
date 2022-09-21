<?php
include 'conn.php';

if(isset($_GET['id'])){
    header('Location: index.php');
}

$id = $_GET['id'];

    $sql = "DELETE FROM peminjam WHERE id='$id'";
    $query = mysqli_query($conn,$sql);

    if($query){
        echo "<script>
        alert('data berhasil dihapus');
        document.location.href = 'index.php';
        </script>";
    }else{
        header('Location: delete.php?status=failed');
    }
    echo"
<script>
    alert('sucessfully deleted!');
    docu
</script>"
?>