<?php 
include 'conn.php'
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
        <?php include 'style2.css';?>
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
        <p id="wm">Data Barang</p>
        <div class="button">
            <a href="create2.php"><button><pre>    </pre><i class="fa-solid fa-plus fa-3x"></i><pre>  </pre> Tambahkan Barang</button></a>
        </div>
        <div class="table">
            <table>
                <tr>
                    <th>No</th>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Unit</th>
                    <th>Barang Dipinjam</th>
                    <th>Action</th>
                </tr>
                <?php 
                $i = 1;
                
                $sql = "SELECT * FROM barang";
                $query = mysqli_query($conn,$sql);
                while($value = mysqli_fetch_array($query)){    
                    echo"
                    <tr>
                        <td>$i</td>
                        <td>$value[id]</td>
                        <td>$value[nama_barang]</td>
                        <td>$value[jumlah_unit] Unit</td>
                        <td>$value[dipinjam] Unit</td>
                        <td>
                            <a href='editform2.php?id=".$value['id']."'><button>Edit</button></a>            
                            <a href='delete2.php?id=".$value['id']."'><button>Delete</button></a>
                        </td>
                        </tr>";
                    $i++;    
                } 
                ?> 
            </table>
        </div>
    </div>
</body>
</html>