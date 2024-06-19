<?php
include_once("connect.php");
$query = mysqli_query ($db, "SELECT * FROM  produk");
//$data = mysqli_fetch_assoc($query);
//var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <style>
        tr,td{
            padding: 10px;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <td>
                ID
            </td>
            <td>
                Nama
            </td>
            <td>
                Harga
            </td>
            <td>
                Action
            </td>
        </tr>
        <?php foreach($query as $d){?>


        <tr>
            <?php foreach($query as $d){ ?>
            <?php echo "<td>" . $d["id"] . "</td>"?>
            
            <?php } ?>
        </tr>


    </table>
    <a href="tambah-data_produk.php">Tambah Produk</a> <br>
</body>
</html>