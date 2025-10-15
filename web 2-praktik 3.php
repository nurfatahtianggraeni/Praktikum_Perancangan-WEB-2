<!DOCTYPE HTML>
<html>
<head>
    <title>Latihan Variabel</title>
</head>
<body>
<?php
    $gajiharian = 17500;
    $jumlahkaryawan = 300;
    $harikerja = 30;
    $totalgaji = $gajiharian * $jumlahkaryawan * $harikerja;
    echo "<h3> Perhitungan Gaji Karyawan </h3>";
    echo "Gaji Perhari = Rp " . number_format($gajiharian,0 , ',', '.') ; echo "<br>";
    echo "Jumlah Karyawan = $jumlahkaryawan orang <br>" ;
    echo "Hari kerja = $harikerja hari <br>" ; echo "<br>";
        echo "<b> Total Gaji Yang Harus Dibayarkan : Rp " . number_format($totalgaji, 0, ',' , '.'). "</br>";
    
    echo "<hr>";
    echo "<h3>  Informasi tentang variabel </h3>" ;
    var_dump($totalgaji) ; echo "<br>";
    print_r($totalgaji);

    echo "<hr>";
    echo "<h3>  Menguji tipe data </h3>" ;
    var_dump(is_int($totalgaji)); echo "<br>";
    var_dump(is_string($totalgaji));

    echo "<hr>";
    echo "<h3> Casting </h3>" ;
    echo "contoh casting ke integer :<br>";
        $castingint = "19 tahun";
        $hasil = (int) $castingint;
        var_dump($castingint); echo "<br>";
        var_dump($hasil); echo "<br>";
        echo "atau <br>";
        echo gettype($castingint); echo "<br>";
        echo gettype($hasil);
    
    echo "<hr>";
    echo "<h2> Pernyataan Seleksi </h2>" ;
    
    echo "Pernyataan if : <br>" ;
        $a = 10;
        $b = 5;
        if ($a > $b) {
            echo "a lebih besar dari b "; 
        } echo "<br>"; echo "<br>";

    echo "Pernyataan if - else : <br>" ;
        $a = 15;
        $b = 10;
        if ($a > $b) {
            echo "a lebih besar dari b";
        } else {
            echo "a tidak lebih besar dari b";
        } echo"<br>";
        $a = 10;
        $b = 15;
        if ($a > $b) {
            echo "a lebih besar dari b";
        } else {
            echo "a tidak lebih besar dari b";
        } echo "<br>"; echo "<br>";

    echo "Pernyataan if - elseif : <br>" ; 
        $a = 15;
        $b = 10;
        if ($a > $b) {
            echo 'a lebih besar dari b';
        } elseif ($a == $b) {
            echo 'a sama dengan b';
        } else {
            echo 'a kurang dari b';
        } echo "<br>";
        $a = 12;
        $b = 12;
        if ($a > $b) {
            echo 'a lebih besar dari b';
        } elseif ($a == $b) {
         echo 'a sama dengan b';
        } else {
            echo 'a kurang dari b';
        } echo "<br>";
        $a = 10;
        $b = 15;
        if ($a > $b) {
            echo 'a lebih besar dari b';
        } elseif ($a == $b) {
            echo 'a sama dengan b';
        } else {
            echo 'a kurang dari b';
        } echo "<br>"; echo "<br>";

    echo "Pernyataan switch : <br>" ;
        echo "tanpa switch <br>";
        $nol = 2;
        if ($nol == 0) {
            echo "i equals 0";
        } elseif ($nol == 1) {
            echo "i equals 1";
        } elseif ($nol == 2) {
            echo "i equals 2";
        } echo "<br>";
        echo "dengan switch <br>";
        switch ($nol) {
            case 0:
            echo "i equals 0";
            break;
            case 1:
            echo "i equals 1";
            break;
            case 2:
            echo "i equals 2";
            break;
        }

    echo "<hr>";
    echo "<h2> Pernyataan Seleksi </h2>" ;

    echo "Pengulangan while : <br>" ;
        $while = 5;
        while ($while <= 20) {
            echo $while;
            $while++;
            echo " ";
        }  echo "<br>"; 
        $while = 21;
        while ($while <= 20) {
            echo $while;
            $while++;
            echo " ";
        } echo "error <br>"; echo "<br>";

    echo "Pengulangan do - while : <br>" ;
        $do = 5;
        do {
            echo $do;
            $do++;
            echo " ";
        } while ($do <= 20); echo "<br>";
        $do = 21;
        do {
            echo $do;
            $do++;
            echo " ";
        } while ($do <= 20);
        echo " (error)"; echo "<br>"; echo "<br>";

    echo "Pengulangan for : <br>" ;
        for ($for = 0; $for <= 15; $for++) {
            echo $for; echo " ";
        } echo "<br>";
        for ($for = 16; $for <= 15; $for++) {
            echo $for; echo " ";
        } echo "error"; echo "<br>"; echo "<br>";

    echo "Pengulangan foreach : <br>" ;
        $frc = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        foreach ($frc as $value) {
            echo $value; echo " ";
        }
?>
</body>
</html>