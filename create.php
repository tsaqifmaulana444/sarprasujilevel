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
                        <a href="index2.php">Data Barang</a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
    <div class="content">
        <p id="wm">Uji Level Tingkat XI</p>
        <p id="info">Tambahkan Data Peminjam</p>
        <form action="save.php" method="post">
            <table>
                <tr>
                    <td><pre>ID Pinjam : </pre></td>
                    <td>(Didapatkan secara otomatis)</td>
                </tr>
                <tr>
                    <td><pre>Nama : </pre></td>
                    <td><input type="text" required name="nama"></td>
                </tr>
                <tr>
                    <td><pre>Usia : </pre></td>
                    <td><input type="number" required name="usia"></td>
                </tr>
                <tr>
                    <td><pre>Gmail : </pre></td>
                    <td><input type="email" required name="gmail"></td>
                </tr>
            </table>
            <input id="inp" type="submit" value="Simpan Perubahan" name="add">
        </form>
    </div>
</body>
</html>
