<form action="" method="post">
    <input type="number" name="bulan" placeholder="masukkan bulan">
    <input type="number" name="tanggal" placeholder="masukkan tanggal">
    <input type="submit" value="kirim" name="tombol">
</form>

<?php 
if (isset ($_POST["tombol"])){
    $bulan = $_POST["bulan"];
    $tanggal = $_POST["tanggal"];

    //echo $bulan;
    //echo $tanggal;

    $keterangan = "salah";


if ($bulan > 0 && $bulan < 13 && $tanggal > 0 && $tanggal < 32){
    //$keterangan = "benar";
    if ($bulan == 1){
        if ($tanggal > 0 && $tanggal < 20){
            $keterangan = "capricorn";
        }
        if ($tanggal > 19 && $tanggal < 33){
            $keterangan = "aquarius";

        }
    }
    if ($bulan == 2){
        if ($tanggal > 0 && $tanggal < 19){
            $keterangan = "Pisces";
        }
        if ($tanggal > 19 && $tanggal < 33){
            $keterangan = "pisces";

        }
    }
    if ($bulan == 3){
        if ($tanggal > 0 && $tanggal < 20){
            $keterangan = "Aries";
        }
        if ($tanggal > 19 && $tanggal < 33){
            $keterangan = "aries";

        }
    }
    if ($bulan == 4){
        if ($tanggal > 0 && $tanggal < 20){
            $keterangan = "aries";
        }
        if ($tanggal > 19 && $tanggal < 33){
            $keterangan = "taurus";

        }
    }
    if ($bulan == 5){
        if ($tanggal > 0 && $tanggal < 20){
            $keterangan = "taurus";
        }
        if ($tanggal > 19 && $tanggal < 33){
            $keterangan = "gemini";

        }
    }
    if ($bulan == 6){
        if ($tanggal > 0 && $tanggal < 20){
            $keterangan = "gemini";
        }
        if ($tanggal > 19 && $tanggal < 33){
            $keterangan = "cancer";

        }
    }
    if ($bulan == 7){
        if ($tanggal > 0 && $tanggal < 20){
            $keterangan = "cancer";
        }
        if ($tanggal > 19 && $tanggal < 33){
            $keterangan = "leo";

        }
    }
    if ($bulan == 8){
        if ($tanggal > 0 && $tanggal < 20){
            $keterangan = "leo";
        }
        if ($tanggal > 19 && $tanggal < 33){
            $keterangan = "virgo";

        }
    }
    if ($bulan == 9){
        if ($tanggal > 0 && $tanggal < 20){
            $keterangan = "virgo";
        }
        if ($tanggal > 19 && $tanggal < 33){
            $keterangan = "libra";

        }
    }
    if ($bulan == 10){
        if ($tanggal > 0 && $tanggal < 20){
            $keterangan = "libra";
        }
        if ($tanggal > 19 && $tanggal < 33){
            $keterangan = "scorpio";

        }
    }
    if ($bulan == 11){
        if ($tanggal > 0 && $tanggal < 20){
            $keterangan = "scorpio";
        }
        if ($tanggal > 19 && $tanggal < 33){
            $keterangan = "sagitarius";

        }
    }
    if ($bulan == 12){
        if ($tanggal > 0 && $tanggal < 20){
            $keterangan = "Sagitarius";
        }
        if ($tanggal > 19 && $tanggal < 32){
            $keterangan = "capricorn";

        }
    }
}
echo $keterangan;

}

?>