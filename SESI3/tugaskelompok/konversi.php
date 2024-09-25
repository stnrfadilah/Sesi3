<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Konversi Berat</title>
    <link rel="stylesheet" href="konversi.css">
</head>
<body>
    <div class="container">
    <div class="calculator">
        <h1>Kalkulator Konversi Berat</h1>
        <form method="post">
            <label for="berat">Masukkan Berat (kg):</label>
            <input type="number" name="berat" id="berat" placeholder="Masukkan berat dalam kg" required>

            <label for="konversi">Konversi ke:</label>
            <select name="konversi" id="konversi">
                <option value="gram">Gram (g)</option>
                <option value="miligram">Miligram (mg)</option>
                <option value="ons">Ons (oz)</option>
                <option value="pon">Pound (lbs)</option>
            </select>

            <input type="submit" name="hitung" value="Konversi">
        </form>

        <?php
        if (isset($_POST['hitung'])) {
            $berat = $_POST['berat'];
            $konversi = $_POST['konversi'];
            $hasil = 0;

            switch ($konversi) {
                case 'gram':
                    $hasil = $berat * 1000;
                    echo "<div class='result'><p>Hasil Konversi: $berat kg = $hasil gram</p></div>";
                    break;
                case 'miligram':
                    $hasil = $berat * 1000000;
                    echo "<div class='result'><p>Hasil Konversi: $berat kg = $hasil miligram</p></div>";
                    break;
                case 'ons':
                    $hasil = $berat * 35.274;
                    echo "<div class='result'><p>Hasil Konversi: $berat kg = $hasil ons</p></div>";
                    break;
                case 'pon':
                    $hasil = $berat * 2.205;
                    echo "<div class='result'><p>Hasil Konversi: $berat kg = $hasil pon</p></div>";
                    break;
            }
        }
        ?>
    </div>

    <div class="button-container">
            <a href="kalkulator.php" class="btn">Kalkulator Sederhana</a>
            <a href="diskon.php" class="btn">Kalkulator Diskon</a>
            <a href="index.html" class="btn">Home</a>
    </div>

    </div>
</body>
</html>