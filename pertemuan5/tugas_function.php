<?php
    function isGanjil($z) {
        return $z % 2 == 1;
    }

    $jumlah = 0;
    for ($bil = 10; $bil <= 123456; $bil++) {
        if (isGanjil($bil)) {
            $jumlah++;
        }
    }

    echo "Jumlah bilangan ganjil antara 10 sampai 123456 adalah $jumlah";
?>