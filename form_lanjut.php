<!DOCTYPE html>
<html>
    <head>
        <title>Contoh Form dengan PHP</title>
    </head>
    <body>
        <h2>Form Contoh</h2>
        <form action="proses_lanjut.php" method="post">
            <label for="buah">Pilih Buah:</label>
            <select name="buah" id="buah">
                <option value="apel">Apel</option>
                <option value="pisang">Pisang</option>
                <option value="mangga">Mangga</option>
                <option value="jeruk">Jeruk</option>
            </select>

            <br>

            <label>Pilih Warna Favorit:</label><br>
            <input type="checkbox" name="warna[]" value="merah"> Merah <br>
            <input type="checkbox" name="warna[]" value="biru"> Biru <br>
            <input type="checkbox" name="warna[]" value="hijau"> Hijau <br>

            <br>

            <label>Pilih Jenis Kelamin:</label><br>
            <input type="radio" name="jenis_kelamin" value="laki-laki">laki-laki <br>
            <input type="radio" name="jenis_kelamin" value="perempuan">perempuan <br>

            <br>

            <input type="submit" value="Submit">
        </form>
    </body>
</html>