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
        <?php include 'create2.css';?>
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
                        <i class="fa-solid fa-circle-user fa-2x"></i>
                        <a href="index.php">Data Peminjam</a>
                    </li>
                </div>
                <div>
                    <li>
                        <i class="fa-solid fa-warehouse fa-2x"></i>
                        <a href="index2.php">Data Barang</a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
    <div class="content">
        <p id="info">Tambahkan Data Barang</p>
        <form action="save2.php" method="post">
            <table>
                <tr>
                    <td><pre>ID Pinjam : </pre></td>
                    <td>(Didapatkan secara otomatis)</td>
                </tr>
                <tr>
                    <td><pre>Nama Barang: </pre></td>
                    <td><input type="text" required name="nama_barang" autocomplete="off"></td>
                </tr>
                <tr>
                    <td><pre>Jumlah Barang : </pre></td>
                    <td><input type="number" required name="jumlah_barang" autocomplete="off"></td>
                </tr>
                <tr>
                    <td><pre>Barang Dipinjam : </pre></td>
                    <td><input type="number" required name="dipinjam" autocomplete="off"></td>
                </tr>
            </table>
            <input id="inp" type="submit" value="Simpan Perubahan" name="add">
        </form>
    </div>
</body>
</html>
