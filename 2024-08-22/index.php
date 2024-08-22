<?php
    require_once("content.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Sekolah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header">
        <h1>ini adalah header</h1>
        <?php 
            foreach ($pages as $key => $value) {
        ?>
            <li><a href="?pages=<?= $value?>"><?= $key?></a></li>
        <?php 
            }
        ?>
    </div>
    <div class="content">
        <h1>ini adalah konten</h1>
        <?php 
        if(isset($pages)){
            $page = $_GET["pages"];
            if($page == "contact"){
            require_once("pages/contact.php");
            }
            if ($page == "jurusan"){
            require_once("pages/jurusan.php");
            }
            if ($page == "sejarah"){
            require_once("pages/sejarah.php");
            }
            if ($page == "prestasi"){
            require_once("pages/prestasi.php");
        }
    } else {
        echo "Variabel page belum ada isinya";
    }
        ?>  
    </div>    
    <div class="footer">
        <h1>ini adalah footer</h1>
    </div>
    <!-- <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="pages/jurusan.php">Jurusan</a></li>
        <li><a href="pages/sejarah">Sejarah</a></li>
        <li><a href="pages/contact">Kontak</a></li>
    </ul> -->

   <?php
        foreach ($gambar as $key) {
    ?>      
        <img src="images/<?= $key?>" alt="" srcset="">
    <?php    
        }
    ?>    
</body>
</html>