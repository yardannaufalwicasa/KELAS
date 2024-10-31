<?php 

$identitas = ["nama" => "Yardan Naufal Wicasa Rajendra",
              "Alamat" => "Perumahan Puri Sejahera",
              "Telepon" => "0824-6745-7781",
              "Email" => "Yardannaja@gmail.com",
              "Instragram" => "yardannaufalwicasa",
              "Tiktok" => "Yardan"];

$sekolah = ["TK" => "Darma Wanita",
            "SD" => "Sdn Sidokepung 1",
            "SMP" => "Smp Pgri 1 Buduran",
            "SMK" => "Smkn 2 Buduran"];
            
$hobi = ["Joging","Mancing","Renang","Game","Futsal"];

$skil = ["C++" => "Expert",
         "Html" => "Newbie",
         "CSS" => "Intermediate",
         "PHP" => "Newbie"];

$deskripsi = "Saya seorang progammer pemula yang giat bekerja dan rajin belajar agar saya kaya raya, <br>
              saya juga mempunyai hobi olahraga dan bercita-cita menjadi seorang tentara, <br>
              dan saya ingin membahagiakan kedua orang tua ketika sukses";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar riwayat hidup</title>
    <style>.container{width: 900px; margin: auto;}</style>
</head>
<body>
    <div class="container">
        <h1>DAFTAR RIWAYAT HIDUP</h1>
        <h2>Data Diri</h2>
        <table border="1px">
            <thead>
            <tr>
                <th>Data</th>
                <th>Deskripsi</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($identitas as $key => $value) {
                    ?>
                    <tr>
                        <td><?= $key?></td>
                        <td><?= $value?></td>
                    </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>RIWAYAT PENDIDIKAN</h2>
        <table border="2px">
                <thead>
                    <tr>
                        <th>Pendidikan</th>
                        <th>Nama Sekolah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($sekolah as $key => $value) {
                    ?>
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $value ?></td>
                    </tr>
                    <?php
                    }
                ?>  
                </tbody>
        </table>
        <hr>
        <h2>SKILL COODING</h2>
        <table border="1px">
            <thead>
                <tr>
                    <th>Coding</th>
                    <th>Nama $skil</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($skil as $key => $value) {
                        ?>
                        <tr>
                            <td><?= $key ?></td>
                            <td><?= $value ?></td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Hobi</h2>
        <ul>
            <?php 
            foreach ($hobi as $key) {
            ?>
            <li><?= $key?></li>
            <?php
            }
            ?>
        </ul>
        <hr>
        <h2>Tentang Aku</h2>
        <p><?= $deskripsi?></p>
    </div>
</body>
</html>