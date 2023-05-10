<html>
    <head><title>Latihan 2</title>
    </head>
    <body>
        <?php
            $minimal_belanja = 100000;
            $total_belanja = 100000;
            $space = "<br></br>";

            if($total_belanja >= $minimal_belanja){
                $total_diskon = $total_belanja * 10/100;
                $total_bayar = $total_belanja - $total_diskon;
                echo "Selamat anda mendapatkan diskon sebesar 10%" .$space;
                echo "Total bayar awal = " .$total_belanja .$space;
                echo "Total diskon = " .$total_diskon .$space;
                echo "Total pembayaran = " .$total_bayar;
            }else{
                echo "Maaf anda tidak mendapatkan diskon, karena total belanja ada kurang dari 100000" .$space;
                echo "Total pembayaran = " .$total_belanja;
            }
        ?>
    </body>
</html>