<!DOCTYPE html>
<html>
<head>
    <title>latihan2_php</title>
</head>
<body>
    <h1>Kalkulator WAD</h1>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="InputAngka1">Masukkan Angka Pertama: </label>
        <input type="number" id="InputAngka1" name="InputAngka1" required><br><br>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="InputAngka2">Masukkan Angka Kedua: </label>
        <input type="number" id="InputAngka2" name="InputAngka2" required><br><br>
        <label for="Dropdown">Pengoperasian: </label>
        <select id="Dropdown" name="Dropdown">
            <option value="pilihan1">Perkalian</option>
            <option value="pilihan2">Penjumlahan</option>
            <option value="pilihan3">Pengurangan</option>
        </select><br><br>

        <button type="submit" name="hitung">Hitung</button>
    </form>
</html>
