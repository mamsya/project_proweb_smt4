<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai Mata Kuliah</title>
</head>
<body>
    <h2>Konversi Nilai Mata Kuliah</h2>
    <form method="post" action="">
        <label for="nilai">Masukkan Nilai:</label>
        <input type="text" name="nilai" id="nilai" placeholder="Masukkan nilai" required>
        <select name="konversi" required>
            <option value="4">A</option>
            <option value="3.5">A-</option>
            <option value="3">B+</option>
            <option value="2.5">B</option>
            <option value="2">B-</option>
            <option value="1.5">C+</option>
            <option value="1">C</option>
            <option value="0.5">C-</option>
            <option value="0">D/E</option>
        </select>
        <button type="submit" name="submit">Hitung</button>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $nilai = $_POST['nilai'];
        $konversi = $_POST['konversi'];

        $nilai_akhir = $nilai * $konversi;

        echo "<h3>Nilai Akhir Mata Kuliah: $nilai_akhir</h3>";
    }
    ?>
</body>    
</html>
