<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 300px;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="number"] {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .operator-buttons {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .operator-buttons button {
            width: 23%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Kalkulator Sederhana</h2>

    <form id="calculatorForm" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Angka Pertama: <input type="number" name="num1" required value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : '' ?>"><br>
        Operator: 
        <select name='operator'>
            <option value="Tambah">+</option>
            <option value="Kurang">-</option>
            <option value="Kali">*</option>
            <option value="Bagi">/</option>
            <option value="Mod">%</option>
        </select><br>
        Angka Kedua: <input type="number" name="num2" required value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : '' ?>"><br>
        <input type="submit" value="Hitung">
    </form>

    <div class="operator-buttons">
        <button type="button" onclick="document.forms['calculatorForm'].operator.value = 'Tambah'">+</button>
        <button type="button" onclick="document.forms['calculatorForm'].operator.value = 'Kurang'">-</button>
        <button type="button" onclick="document.forms['calculatorForm'].operator.value = 'Kali'">*</button>
        <button type="button" onclick="document.forms['calculatorForm'].operator.value = 'Bagi'">/</button>
        <button type="button" onclick="document.forms['calculatorForm'].operator.value = 'Mod'">%</button>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch($operator){
            case "Tambah":
                $hasil = $num1 + $num2;
                break;
            case "Kurang":
                $hasil = $num1 - $num2;
                break;
            case "Kali":
                $hasil = $num1 * $num2;
                break;
            case "Bagi":
                $hasil = $num1 / $num2;
                break;
            case "Mod":
                $hasil = $num1 % $num2;
                break;
            default:
                $hasil = "Operator tidak valid";
        }
        echo "Hasil: " . $hasil;
    }
    ?>

</div>

<script>
    // Simpan nilai input setelah pengiriman formulir
    window.onload = function() {
        var form = document.getElementById('calculatorForm');
        form.addEventListener('submit', function(event) {
            var num1Input = form.querySelector('input[name="num1"]');
            var num2Input = form.querySelector('input[name="num2"]');
            localStorage.setItem('num1', num1Input.value);
            localStorage.setItem('num2', num2Input.value);
        });
        var num1Saved = localStorage.getItem('num1');
        var num2Saved = localStorage.getItem('num2');
        if (num1Saved !== null && num2Saved !== null) {
            document.querySelector('input[name="num1"]').value = num1Saved;
            document.querySelector('input[name="num2"]').value = num2Saved;
        }
    }
</script>

</body>
</html>
