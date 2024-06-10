<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        .calculator {
            width: 300px;
            margin: 100px auto;
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
        }
        input[type="number"] {
            width: 80px;
            margin: 5px;
        }
        input[type="submit"] {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <form method="post">
            <input type="number" name="num1" placeholder="Angka 1" required>
            <input type="number" name="num2" placeholder="Angka 2" required>
            <input type="number" name="num3" placeholder="Angka 3" required>
            <br>
            <input type="submit" name="add" value="Tambah">
            <input type="submit" name="subtract" value="Kurang">
            <input type="submit" name="multiply" value="Kali">
            <input type="submit" name="divide" value="Bagi">
            <input type="submit" name="modulus" value="Modulus">
        </form>
        <?php
        if(isset($_POST['add'])) {
            $result = $_POST['num1'] + $_POST['num2'] + $_POST['num3'];
            echo "Hasil Penjumlahan: $result";
        }
        if(isset($_POST['subtract'])) {
            $result = $_POST['num1'] - $_POST['num2'] - $_POST['num3'];
            echo "Hasil Pengurangan: $result";
        }
        if(isset($_POST['multiply'])) {
            $result = $_POST['num1'] * $_POST['num2'] * $_POST['num3'];
            echo "Hasil Perkalian: $result";
        }
        if(isset($_POST['divide'])) {
            $result = $_POST['num1'] / $_POST['num2'] / $_POST['num3'];
            echo "Hasil Pembagian: $result";
        }
        if(isset($_POST['modulus'])) {
            $result = $_POST['num1'] % $_POST['num2'] % $_POST['num3'];
            echo "Hasil Modulus: $result";
        }
        ?>
    </div>
</body>
</html>
