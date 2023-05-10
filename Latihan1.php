<html>
    <head><title>Latihan 1</title>
    </head>
    <body>
        <?php
            $minimal_belanja = 100000;
            $total_belanja = 120000;
            $space = "<br></br>";

            if($total_belanja > $minimal_belanja){
                $total_diskon = $total_belanja * 10/100;
                $total_bayar = $total_belanja - $total_diskon;
                echo "Selamat anda mendapatkan diskon sebesar 10%" .$space;
                echo "Total bayar awal = " .$total_belanja .$space;
                echo "Total diskon = " .$total_diskon .$space;
                echo "Total pembayaran = " .$total_bayar;
            }
        ?>
    </body>
</html>