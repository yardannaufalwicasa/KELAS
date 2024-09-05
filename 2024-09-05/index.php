<?php 
    for ($i=1; $i <= 10; $i++) { 
        echo $i;
    }

    echo "<br>";
    for ($i=10; $i >= 0; $i--) { 
        echo $i;
    }

    echo "<br>";
    $ganjil =9%2;
    echo $ganjil;

    echo "<br>";
    for ($i=1; $i < 100; $i++) {
    $ganjil = $i % 2;
    //echo $ganjil;
    if ($ganjil == 1) {
        echo $i;
    }

    }

    echo "<br>";
    $kkm = 80;
    $nilai = 95;
    if ($nilai > $kkm) {
        echo "lulus";
    }
    else {
        echo "tidak lulus";
    }
    echo "<br>";
    $status = "tidak lulus";

    if ($nilai > $kkm){
        $status = "lulus";
    }
    echo $status;

    echo "<br>";
    $rapot = 0;
    $tugas = 0;
    if ($tugas == 0) {
        $rapot = 80;
    }
    echo $rapot;
    echo "<br>";

    $bulan = 1;
    $tanggal = 20;
    $keterangan = "salah";
    if ($bulan > 0 && $bulan <13) {
        //$keterangan = "benar";
        if ($tanggal > 9 && $tanggal < 32) {
            //$keterangan = "benar";
            if ($bulan == 1 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Aquarius";
            }
            if ($bulan == 1 && $tanggal > 19 && $tanggal < 31) {
                $keterangan = "Aquarius";
            }
            if ($bulan == 2 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Pisces";
            }
            if ($bulan == 2 && $tanggal > 19 && $tanggal < 30) {
                $keterangan = "Pisces";
            }
            if ($bulan == 3 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Aries";
            }
            if ($bulan == 3 && $tanggal > 19 && $tanggal < 30) {
                $keterangan = "Aries";
            }
            if ($bulan == 4 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Taurus";
            }
            if ($bulan == 4 && $tanggal > 19 && $tanggal < 30) {
                $keterangan = "Taurus";
            }
            if ($bulan == 5 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Gemini";
            }
            if ($bulan == 5 && $tanggal > 19 && $tanggal < 30) {
                $keterangan = "Gemini";
            }
            if ($bulan == 6 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Cancer";
            }
            if ($bulan == 6 && $tanggal > 19 && $tanggal < 30) {
                $keterangan = "Cancer";
            }
            if ($bulan == 7 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Leo";
            }
            if ($bulan == 7 && $tanggal > 19 && $tanggal < 30) {
                $keterangan = "Leo";
            }
            if ($bulan == 8 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Virgo";
            }
            if ($bulan == 8 && $tanggal > 19 && $tanggal < 30) {
                $keterangan = "Virgo";
            }
            if ($bulan == 9 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Libra";
            }
            if ($bulan == 9 && $tanggal > 19 && $tanggal < 30) {
                $keterangan = "Libra";
            }
            if ($bulan == 10 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Scorpio";
            }
            if ($bulan == 10 && $tanggal > 19 && $tanggal < 30) {
                $keterangan = "Scorpio";
            }
            if ($bulan == 11 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Sagitarius";
            }
            if ($bulan == 11 && $tanggal > 19 && $tanggal < 30) {
                $keterangan = "Sagitarius";
            }
            if ($bulan == 12 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Capicorn";
            }
            if ($bulan == 12 && $tanggal > 19 && $tanggal < 30) {
                $keterangan = "Capicorn";
            }
            
        }
    }
    echo $keterangan;
?>