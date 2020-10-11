<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Fibonanci</title>
</head>
<body>
    <form id="fibonacci" name="fibonacci" action="tampilan_deret_fibonanci.php" method="POST">
    <h2>Deret Fibonanci</h2>
        <label for="angka1">Masukkan Angka 1</label><br>
        <input type="number" name="angka1" id="angka1">
        <br><br>
        <label for="angka2">Masukkan Angka 2</label><br>
        <input type="number" name="angka2" id="angka2">
        <br><br>
        <label for="angka2">Jumlah yang di Harapkan</label><br>
        <input type="number" name="deret" id="deret">
        <br><br>
        <button type="submit" value="kirim">Simpan</button>
    </form>
</body>
</html>