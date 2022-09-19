<?php 
include 'conn.php';

// $id_peminjam = $_POST['id_peminjam'];
// $nama = $_POST['nama'];
// $usia = $_POST['usia'];
// $gmail = $_POST['gmail'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data - Starbhak Sarpras</title>
</head>
<body>
    <form action="edit.php" method="post">
        <input type="number" value="<?= $id_peminjam?>" name="id_peminjam" required>
        <input type="text" value="nama" name="nama" required>
        <input type="number" value="nama" name="nama" required>
        <input type="email" value="email" name="email" required>
    </form>
</body>
</html>