<div class="login">
    <h1>login</h1>
    <form action="" method="post">
        <input type="email" name="email" required placeholder="masukkan email">
        <input type="password" name="password" required placeholder="masukkan password">
        <input type="submit" value="login" name="login">
    </form>
</div>

<?php 

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM customer WHERE email = '$email' AND PASSWORD = '$password'";
        // echo $sql;
        $hasil = mysqli_query($koneksi,$sql);
        $baris = mysqli_num_rows($hasil);
        if ($baris > 0) {
            $_SESSION['email'] = $email;
            header("location:index.php");
        }
    
    else {
        echo "<h1>email atau password salah</h1>";
    }
}

?>