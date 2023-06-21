<?php 
    session_start();
    error_reporting(E_ALL^E_NOTICE^E_DEPRECATED);
    $con = mysqli_connect('localhost','root','','informatika');
    // $mysql_connect('localhost','root','');
    // mysql_select_db('informatika');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $submit = $_POST['submit'];

    if ($submit) {
        $sql = "select * from user where username='$username' and password='$password'";
        $query = mysqli_query($con,$sql);
        // $query = mysql_query($sql);
        $row = mysqli_fetch_array($query);
        if ($row['username']!="") {
            //berhasil login
            $_SESSION['username']=$row['username'];
            $_SESSION['status']=$row['status'];
?>
    <script language script='JavaScript'>
        alert('Anda Login Sebagai <?php echo $row['username'];?>');
        <?php 
            if ($row['username'] == 'admin' ) {
        ?>
            document.location='admin_page.php'
        <?php 
            }else{
        ?>
            document.location='user_page.php'
        <?php 
            }
        ?>
    </script>
<?php
    }else{
        //gagal login
?>
     <script language script='JavaScript'>
        alert('Gagal Login');
        document.location='login.php'
    </script>
<?php
        }
    }
?>
<form action="login_tugas.php" method='POST'>
    <p align='center'>
        Username : <input type="text" name="username"><br>
        Password : <input type="password" name="password"><br>
        <input type="submit" name="submit">
    </p>
</form>
