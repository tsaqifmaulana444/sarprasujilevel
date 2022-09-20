<?php 
include 'conn.php';

$nama = $_POST['nama'];
$usia = $_POST['usia'];
$gmail = $_POST['gmail'];
$id = $_GET['id'];

if(isset($_POST['submit'])){
    
$sql = "UPDATE peminjam SET nama ='$nama', usia='$usia', gmail='$gmail' WHERE id='$id'";
        $query = mysqli_query($conn , $sql);
    
        if($query){
            header('Location: index.php');
        }else{
            header('Location: formedit.php?status=failed');
        }
}

?>

