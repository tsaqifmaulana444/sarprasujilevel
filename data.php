<?php 
include 'conn.php';
$id = $_GET['id'];
$sql = "SELECT * FROM peminjam WHERE id = '$id'";
$query = mysqli_query($conn,$sql);
$value = mysqli_fetch_assoc($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjam - Starbhak Sarpras</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4374417e55.js" crossorigin="anonymous"></script>
    <style>
        <?php include 'create.css';?>
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="blank-profile-picture-973460_1280.jpg" alt="">
            <h1>Starbhak Sarpras</h1>
        </div>
        <div class="list">
            <ul>
                <div>
                    <li>
                        <a href="index.php">Data Peminjam</a>
                    </li>
                </div>
                <div>
                    <li>
                        <a href="">Data Barang</a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
    <div class="content">
        <p id="wm">Uji Level Tingkat XI</p>
        <p id="info">Detail Peminjaman <?=$value ['nama'] ?></p>
        <div class="profile"></div>
        <form action="edit.php" method="post">
            <table>
                <tr>
                    <td><pre>ID Pinjam : </pre></td>
                    <td><?=$value ['id'] ?></td>                    
                </tr>
                <tr>
                    <td><pre>Nama : </pre></td>
                    <td><?=$value ['nama'] ?></td>
                </tr>
                <tr>
                    <td><pre>Usia : </pre></td>
                    <td><?=$value ['usia'] ?></td>
                </tr>
                <tr>
                    <td><pre>Gmail : </pre></td>
                    <td><?=$value ['gmail'] ?></td>
                </tr>
            </table>
            <input id="inp" type="submit" value="Simpan Perubahan" name="submit">
        </form>
    </div>
</body>
</html>