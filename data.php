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
        <?php include 'data.css';?>
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="logo tb.png" alt="">
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
                        <a href="index2.php">Data Barang</a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
    <div class="content">
        <p id="info">Detail Peminjaman ID <?=$value ['id'] ?></p>
        <div class="profile">
            <img src="blank-profile-picture-973460_1280.jpg" alt="">
        </div>
    
        <table>
            <tr>
                <td><pre>Nama : </pre></td>
                <td><?=$value ['nama'] ?></td>
            </tr>
            <tr>
                <td><pre>Usia : </pre></td>
                <td><?=$value ['usia'] ?> Tahun</td>
            </tr>
            <tr>
                <td><pre>Gmail : </pre></td>
                <td><?=$value ['gmail'] ?></td>
            </tr>
            <tr>
                <td colspan="2"><b>Barang Yang Dipinjam</b></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="conta">
                        <ul>
                            <li>                
                                <p>Proyektor : 2 pcs</p>
                            </li>
                            <li>
                                <p>Stopkontak : 4 pcs</p>
                            </li>
                            <li>
                                <p>DVD : 10 pcs</p>
                            </li>
                            <li>
                                <p>Monitor : 2 pcs</p>
                            </li>                              
                            <li>
                                <p>Monitor : 2 pcs</p>
                            </li> 
                            <li>
                                <p>Monitor : 2 pcs</p>
                            </li> 
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td><p><b>Tanggal Peminjaman</b></p>  <br> <p>20-10-2020</p> </td> 
                <td><p><b>Estimasi Tanggal Pengembalian</b></p>  <br> <p>20-11-2020</p></td>
            </tr>
        </table> 
        <a href="index.php"><button id="back">Kembali</button></a> 
    </div>
</body>
</html>