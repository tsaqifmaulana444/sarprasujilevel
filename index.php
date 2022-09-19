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
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
        $sql = "SELECT * FROM peminjam";
        $query = mysqli_query($conn,$sql);
        while($value = mysqli_fetch_array($query)){ 
            echo"
            <tr>
                <td>1</td>
                <td>$value[id]</td>
                <td>$value[nama]</td>
                <td>$value[usia]</td>
                <td>$value[gmail]</td>
                <td>
                    <a href='editform.php?id=".$value['id']."'>Edit</a>            
                    <a href='delete.php?id=".$value['id']."'>Delete</a>
                </td>
            </tr>";
        } 
        ?>
    </table>
</body>
</html>