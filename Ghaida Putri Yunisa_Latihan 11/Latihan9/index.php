<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
</head>
<body>
    <h1>Aplikasi Perpustakaan</h1>
    
    <a href="./buku.php" >Lihat Daftar Buku</a>
    <br>
    <a href="./staff.php" >Lihat Daftar Staff</a>

    <?php
    session_start();

    include_once("./koneksi.php");

    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($db, $sql);

        if(mysqli_num_rows($result) > 0){
            echo "Email sudah terdaftar";
        }else{
            // Hindari serangan SQL Injection dengan menggunakan mysqli_real_escape_string()
            $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
            
            if(mysqli_query($db, $sql) === TRUE){
                echo "Registrasi berhasil. Silahkan <a href = 'login.php'>Login</a>.";
            }else{
                echo "Registrasi Gagal!";
            }
        }
    }
?>

</body>
</html>