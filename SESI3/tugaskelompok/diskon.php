<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Diskon</title>
    <link rel="stylesheet" href="diskon.css">
</head>
<body>
    
<div class="container">
    <div class="discount-calculator">
        <h1>Kalkulator Diskon</h1>
        <form method="post">
            <label for="price">Harga Awal (Rp):</label>
            <input type="number" name="price" id="price" placeholder="Masukkan harga awal" required>

            <label for="discount">Diskon (%):</label>
            <input type="number" name="discount" id="discount" placeholder="Masukkan diskon (%)" required>

            <input type="submit" name="calculate" value="Hitung Diskon">
        </form>

        <?php
        if (isset($_POST['calculate'])) {
            $price = $_POST['price'];
            $discount = $_POST['discount'];

            $discountAmount = ($price * $discount) / 100;
            $finalPrice = $price - $discountAmount;

            echo "<div class='result'>
                    <p>Harga Awal: Rp" . number_format($price, 2, ',', '.') . "</p>
                    <p>Diskon: Rp" . number_format($discountAmount, 2, ',', '.') . "</p>
                    <p>Harga Setelah Diskon: Rp" . number_format($finalPrice, 2, ',', '.') . "</p>
                  </div>";
        }
        ?>
    </div>
    <div class="button-container">
            <a href="kalkulator.php" class="btn">Kalkulator Sederhana</a>
            <a href="index.html" class="btn">Home</a>
            <a href="konversi.php" class="btn">Kalkulator Konversi Berat</a>
    </div>
</div>
</body>
</html>