<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" href="kalkulator.css">
</head>
<body>
    <div class="conatiner">
        <div class="calculator">
            <form method="post">
                <input type="text" name="display" id="display" readonly>
                <div class="buttons">
                    <input type="button" value="7" onclick="appendToDisplay('7')">
                    <input type="button" value="8" onclick="appendToDisplay('8')">
                    <input type="button" value="9" onclick="appendToDisplay('9')">
                    <input type="button" value="+" onclick="appendToDisplay('+')">
                    <input type="button" value="4" onclick="appendToDisplay('4')">
                    <input type="button" value="5" onclick="appendToDisplay('5')">
                    <input type="button" value="6" onclick="appendToDisplay('6')">
                    <input type="button" value="-" onclick="appendToDisplay('-')">
                    <input type="button" value="1" onclick="appendToDisplay('1')">
                    <input type="button" value="2" onclick="appendToDisplay('2')">
                    <input type="button" value="3" onclick="appendToDisplay('3')">
                    <input type="button" value="x" onclick="appendToDisplay('*')">
                    <input type="button" value="0" onclick="appendToDisplay('0')">
                    <input type="button" value="C" onclick="clearDisplay()">
                    <input type="button" value="=" onclick="calculate()">
                    <input type="button" value=":" onclick="appendToDisplay('/')">
                </div>
            </form>
        </div>

    <div class="button-container">
            <a href="index.html" class="btn">Home</a>
            <a href="diskon.php" class="btn">Kalkulator Diskon</a>
            <a href="konversi.php" class="btn">Kalkulator Konversi Berat</a>
    </div>

    </div>

    <script>
        function appendToDisplay(value) {
            document.getElementById('display').value += value;
        }

        function clearDisplay() {
            document.getElementById('display').value = '';
        }

        function calculate() {
            let displayValue = document.getElementById('display').value;
            document.getElementById('display').value = eval(displayValue);
        }
    </script>
</body>
</html>