<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimarket</title>
</head>
<body>
    <form method="POST">
        <label >PROMO AKHIR TAHUN, SEMUA BARANG HARGA DIATAS Rp. 30000 DISKON 7%, DIBAWAH Rp. 30000 DISKON 5%</label> <br><br>
        <label>Masukan nama barang 1</label><br>
        <input type="text" name="barang1" value="<?php echo @$_POST['barang1'] ?>"><br>
        <label>Masukan harga satuan</label><br>
        <input type="text" name="harga1" value="<?php echo @$_POST['harga1'] ?>"><br>
        <label>Masukan jumlah barang yang dibeli</label><br>
        <input type="text" name="jumlah1" value="<?php echo @$_POST['jumlah1'] ?>"><br><br>

        <label>Masukan nama barang 2</label><br>
        <input type="text" name="barang2" value="<?php echo @$_POST['barang2'] ?>"><br>
        <label>Masukan harga satuan</label><br>
        <input type="text" name="harga2" value="<?php echo @$_POST['harga2'] ?>"><br>
        <label>Masukan jumlah barang yang dibeli</label><br>
        <input type="text" name="jumlah2"value="<?php echo @$_POST['jumlah2'] ?>"><br><br>
        <label>Member toko atau bukan</label><br>
        
        <input type="radio" name="member" <?php echo @$_POST['member'] ?> value="Ya">Ya<br>
        <input type="radio" name="member" <?php echo @$_POST['member'] ?> value="Tidak">Tidak<br><br>

        <button type="submit">Total bayar</button><br><br>
    </form>

    <?php
        if ($_POST):
            $barang1 = @$_POST['barang1'];
            $barang2 = @$_POST['barang2'];
            $harga1 = @$_POST['harga1'];
            $harga2 = @$_POST['harga2'];
            $jumlah1 = @$_POST['jumlah1'];
            $jumlah2 = @$_POST['jumlah2'];
            $member = @$_POST['member'];

            if($harga1 >= 30000){
              $diskon1 = "0.07";
            }else{
              $diskon1 = "0.05";
            }
            
            if($harga2 >= 30000){
              $diskon2 = "0.07";
            }else{
              $diskon2 = "0.5";
            }
            $total_harga = (($harga1 * $jumlah1)-($harga1 * $diskon1 * $jumlah1))+(($harga2 * $jumlah2)-($harga2 * $diskon2 * $jumlah2));
            
            echo "Apakah pembeli merupakan member toko ? " .$member. "<br><br>";
            echo "Total Barang Belanjaan<br><br>";
            echo "Barang 1<br>";
            echo "Nama Barang = " .$barang1. "<br>";
            echo "Harga = Rp. " .$harga1. "<br>";
            echo "Jumlah = " .$jumlah1. "<br>";
            echo "Diskon barang = " .$diskon1. "<br><br>";

            echo "Barang 2<br>";
            echo "Nama Barang = " .$barang2. "<br>";
            echo "Harga = Rp. " .$harga2. "<br>";
            echo "Jumlah = " .$jumlah2. "<br>";
            echo "Diskon barang = " .$diskon2. "<br><br>";

            
            echo "Total harga = Rp. " .$total_harga. "<br>";
            if($member === 'Ya'){
              $diskon_member = "0.05";
              echo "Diskon untuk member = " .$diskon_member. "<br>";
              $total_bayar = ($total_harga - ($total_harga * $diskon_member));
            }else{
              $total_bayar = $total_harga;
            }
            echo "Total pembayaran = Rp. " .$total_bayar;

        endif;
    ?>
    
</body>
</html>