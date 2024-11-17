<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menghitung Bidang Datar</title>
<style>
    body {
        background-color: #121212;
        font-family: 'Roboto', sans-serif;
        color: #ffffff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        margin: 0;
    }
    h1 {
        color: #FFEB3B;
        text-transform: uppercase;
        text-align: center;
        margin-bottom: 20px;
    }
    h2 {
        color: #00BCD4;
        text-align: center;
    }
    table {
        background-color: #424242;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    td {
        padding: 10px;
    }
    input[type="text"], select {
        width: calc(100% - 20px);
        padding: 8px;
        margin: 5px 0;
        border: none;
        border-radius: 4px;
    }
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #FFEB3B;
        border: none;
        border-radius: 4px;
        color: #000000;
        font-weight: bold;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #FDD835;
    }
    .result {
        color: #00E676;
        text-align: center;
        margin-top: 20px;
    }
</style>
</head>
<body>
<h1>Operasi Menghitung Luas & Keliling Bangun Datar</h1>
<form method="post">
    <h2>SEGIEMPAT</h2>
    <table>
        <tr>
            <td>Masukkan Lebar :</td>
            <td><input type="text" size="8" name="x"></td>
        </tr>
        <tr>
            <td>Masukkan Tinggi :</td>
            <td><input type="text" size="8" name="y"></td>
        </tr>
        <tr>
            <td>Operasi dipilih :</td>
            <td>
                <select name="operasi">
                    <option value="Luas">Hitung Luas</option>
                    <option value="Keliling">Hitung Keliling</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Calculate"></td>
        </tr>
    </table>
</form>
<hr>
<?php
if (isset($_POST['submit'])) {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $operasi = $_POST['operasi'];
    if ($operasi == "Luas") {
        $L = $x * $y;
    } else if ($operasi == "Keliling") {
        $L = 2 * ($x + $y);
    }
    echo "<div class='result'>";
    echo "<p>Lebar = <b>$x</b></p>";
    echo "<p>Tinggi = <b>$y</b></p>";
    echo "<p>Hasil Perhitungan <b>$operasi</b> adalah = <b>$L</b></p>";
    echo "</div>";
}
?>
</body>
</html>
