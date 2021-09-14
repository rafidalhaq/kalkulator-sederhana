<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Tugas 6 - Ghuzandi Rafid Alhaq</title>
</head>
<body>
    <?php    
            if(isset($_POST['tambah']))
            {
                function proses_penjumlahan()
                {
                    $bil1 = $_POST['bilangan1'];
                    $bil2 = $_POST['bilangan2'];

                    return ($bil1 + $bil2);
                }

            }
            else if(isset($_POST['kurang']))
            {
                function proses_pengurangan()
                {
                    $bil1 = $_POST['bilangan1'];
                    $bil2 = $_POST['bilangan2'];

                    return ($bil1 - $bil2);
                }
            }
            else if(isset($_POST['kali']))
            {
                function proses_perkalian()
                {
                    $bil1 = $_POST['bilangan1'];
                    $bil2 = $_POST['bilangan2'];

                    return ($bil1 * $bil2);
                }
            }
            else if(isset($_POST['bagi']))
            {
                function proses_pembagian()
                {
                    $bil1 = $_POST['bilangan1'];
                    $bil2 = $_POST['bilangan2'];

                    return ($bil1 / $bil2);
                }
            }
    ?>
        <div class="kalkulator">
        <br>
        <h2 class="judul">Aplikasi Kalkulator Sederhana</h2>
        <form method="post">
            <input type="number" class="bil" name="bilangan1" value="<?= (! empty($_POST['bilangan1']))?$_POST['bilangan1']:'' ?>" placeholder="Masukkan Bilangan Pertama" required >
            <br>
            <input type="number" class="bil" name="bilangan2" value="<?= (! empty($_POST['bilangan2']))?$_POST['bilangan2']:'' ?>" placeholder="Masukkan Bilangan Pertama" required >
            <br>
            <div class="tombol">
                <input type="Submit" value=" + " name="tambah">
                <input type="Submit" value=" - " name="kurang">
                <input type="Submit" value=" x " name="kali">
                <input type="Submit" value=" / " name="bagi">
            </div>
            <br>
            <br>
            <div class="hasil">
            <?php

                if(isset($_POST['tambah']))
                {
                    echo "Hasil Penjumlahannya adalah ". proses_penjumlahan();
                }
                else if(isset($_POST['kurang']))
                {
                    echo "Hasil Pengurangannya adalah ". proses_pengurangan();
                }
                else if(isset($_POST['kali']))
                {
                    echo "Hasil Perkaliannya adalah ". proses_perkalian();
                }
                else if(isset($_POST['bagi']))
                {
                    echo "Hasil Pembagiannya adalah ". proses_pembagian();
                }
            
            ?>
            </div>
        </form>
        </div>
</body>
</html>