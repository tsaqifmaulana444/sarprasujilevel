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
        <?php include 'style.css';?>
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
        <p id="wm">Uji Level Tingkat XI</p>
        <div class="button">
            <a href="create.php"><button><pre>   </pre><i class="fa-solid fa-plus fa-3x"></i><pre> </pre> Tambahkan Peminjam</button></a>
        </div>
        <div class="table">
            <table>
                <tr>
                    <th>No</th>
                    <th>ID Pinjam</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Gmail</th>
                    <th>Action</th>
                </tr>
                <?php 
                $i = 1;
                $sql = "SELECT * FROM peminjam";
                $query = mysqli_query($conn,$sql);
                while($value = mysqli_fetch_array($query)){    
                    echo"
                    <tr>
                        <td>$i</td>
                        <td><a href='data.php?id=".$value['id']."'>$value[id]</a></td>
                        <td>$value[nama]</td>
                        <td>$value[usia] Tahun</td>
                        <td>$value[gmail]</td>
                        <td>
                            <a href='editform.php?id=".$value['id']."'><button>Edit</button></a>            
                            <a href='delete.php?id=".$value['id']."'><button>Delete</button></a>
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