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
    <style>
        <?php include 'style.css';?>
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
                        <a href="">Data Peminjam</a>
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
        <div class="button">
            <a href="create.php"><button>Tambahkan Peminjam</button></a>
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
                $j = $i++;
                $sql = "SELECT * FROM peminjam";
                $query = mysqli_query($conn,$sql);
                while($value = mysqli_fetch_array($query)){    
                    echo"
                    <tr>
                        <td>$j</td>
                        <td>$value[id]</td>
                        <td>$value[nama]</td>
                        <td>$value[usia] Tahun</td>
                        <td>$value[gmail]</td>
                        <td>
                          
                            <a href='editform.php?id=".$value['id']."'><button>Edit</button></a>            
                          
                            <button>
                            <a href='delete.php?id=".$value['id']."'><button>Delete</button></a>
                            </button>
                        </td>
                    </tr>";
                } 
                ?> 
            </table>
        </div>
    </div>
</body>
</html>