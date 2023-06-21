<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page admin</title>
    <style>
        .center{
            background-image: 'images/admin.jpg';
        }
    </style>
</head>
<body>
    <center>
        <h1>Ini adalah halaman Admin</h1>
        <?php 
            session_start();
            echo "Anda Berhasil Login Sebagai " . $_SESSION['username'] . " Dan Anda Terdaftar Sebagai " . $_SESSION['status'];
        ?>
        <br>
        Silahkan Logout dengan klik link <a href="logout_tugas.php">Disini!</a>
    </center>
</body>
</html>