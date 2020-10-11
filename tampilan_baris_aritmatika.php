<?php
    $suku1 = $_POST['suku1'];
    $suku2 = $_POST['suku2'];
    $suku_n = $_POST['Un'];

    echo "Suku 1 adalah  ".$suku1."<br>";
    echo "Suku 2 adalah  ".$suku2."<br>";
    echo "Suku Ke-N adalah ".$suku_n."<br><br>";

    echo  "Hasil : <table border=2 cellspacing=1 cellpadding=9>
            <tr>
                <td>i</td>
                <td>x</td>
            </tr>";
    $beda = 0;
    $total = 0;
    $rata2 = 0;
    for ($i=1; $i <= $suku_n; $i++){
        if ($i == 1){
            echo "
                <tr>
                    <td>$i</td>
                    <td>$suku1</td>
                </tr>";
        }elseif ($i == 2){
            echo "
            <tr>
                <td>$i</td>
                <td>$suku2</td>
            </tr>";
        }else {
            $beda=$suku2 - $suku1;
            $baris =  $suku2 + $beda;
            $suku1 = $suku2;
            $suku2 = $baris;

            echo "
                <tr>
                    <td>$i</td>
                    <td>$baris</td>
                </tr>";
            $total=$total+$baris;
            $rata2=$total/$suku_n;
        }
    }
    echo "</table>";
    echo "Jumlah nilai= ".$total."<br>";
    echo "Rata - Rata = ".round($rata2,0,PHP_ROUND_HALF_EVEN);
?> 