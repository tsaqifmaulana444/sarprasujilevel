<?php
include 'conn.php';

if(isset($_GET['id'])){
    header('Location: index.php');
}

$id = $_GET['id'];

    $sql = "DELETE FROM peminjam WHERE id='$id'";
    $query - mysqli_query($conn,$sql);

    if($query){
        header('Location: index.php');
    }else{
        header('Location: delete.php?status=failed');
    }

?>