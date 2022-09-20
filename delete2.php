<?php
include 'conn.php';

if(isset($_GET['id'])){
    header('Location: index2.php');
}

$id = $_GET['id'];

    $sql = "DELETE FROM barang WHERE id='$id'";
    $query = mysqli_query($conn,$sql);

    if($query){
        header('Location: index2.php');
    }else{
        header('Location: delete2.php?status=failed');
    }

?>