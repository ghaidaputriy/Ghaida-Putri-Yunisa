<?php
include_once("connect.php");
if(isset($_POST["nama"]) && isset($_POST[harga])){
    $nama =$_POST["nama"];
    $harga =$_POST["harga"];
    $query = mysqli_query($db, "SELECT * FROM produk WHERE nama=$'nama'");
    if(mysqli_num_rows($query) > 0){
        header("location: index.php");
    }else{
        $query = mysqli_query($db, "INSERT INTO produk (nama, harga) VALUES ('$nama', '$harga')")
    }
}
?>