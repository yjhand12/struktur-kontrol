<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <form method="POST">
    <label>Masukan bilangan pertama </label> <input type="text" name="bilangan1" value="<?php echo @$_POST['bilangan1'] ?>"><br><br>
    <label>Masukan bilangan kedua </label><input type="text" name="bilangan2" value="<?php echo @$_POST['bilangan2'] ?>"><br><br>

    <label>Masukan operator </label><select name="operator">
        <option>Pilih operator bilangan</option>
        <option <?php echo @$_POST['operator'] === '+' ?> value="+">+</option>
        <option <?php echo @$_POST['operator'] === '-' ?> value="-">-</option>
        <option <?php echo @$_POST['operator'] === '*' ?> value="*">*</option>
        <option <?php echo @$_POST['operator'] === '/' ?> value="/">/</option>
    </select><br><br>
    <button type="submit">Hitung</button><br><br>
    </form>
    <?php
        if ($_POST):
            $a = @$_POST['bilangan1'];
            $b = @$_POST['bilangan2'];
            $operator = @$_POST['operator'];

            if($a == false){
                echo "Bilangan 1 tidak boleh kosong. Harap masukan bilangan 1 !<br>";
            }

            if($b == false){
                echo "Bilangan 2 tidak boleh kosong. Harap masukan bilangan 2 !<br>";
            }
            
            if($operator === '+'){
                $hasil = $a + $b;
                echo "Bilangan pertama = " .$a. "<br>";
                echo "Bilangan kedua = " .$b. "<br>";
                echo "Operator = " .$operator. "<br>";
                echo "Hasil perhitungan " .$a .$operator .$b. " = " .$hasil;

            }elseif($operator === '-'){
                $hasil = $a - $b;
                echo "Bilangan pertama = " .$a. "<br>";
                echo "Bilangan kedua = " .$b. "<br>";
                echo "Operator = " .$operator. "<br>";
                echo "Hasil perhitungan " .$a .$operator .$b. " = " .$hasil;

            }elseif($operator === '*'){
                $hasil = $a * $b;
                echo "Bilangan pertama = " .$a. "<br>";
                echo "Bilangan kedua = " .$b. "<br>";
                echo "Operator = " .$operator. "<br>";
                echo "Hasil perhitungan " .$a .$operator .$b. " = " .$hasil;

            }elseif($operator === '/'){
                $hasil = $a / $b;
                echo "Bilangan pertama = " .$a. "<br>";
                echo "Bilangan kedua = " .$b. "<br>";
                echo "Operator = " .$operator. "<br>";
                echo "Hasil perhitungan " .$a .$operator .$b. " = " .$hasil;

            }else{
                echo "Mohon masukan opeator bilangan. Terima kasih!";
            }
        endif;
    ?>
</body>
</html>