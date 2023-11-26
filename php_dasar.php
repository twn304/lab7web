<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PHP Tanpa Function</title>
</head>
<body>
    <h2>Form Input PHP Tanpa Function</h2>
    <form method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" required><br><br>

        <label for="pekerjaan">Pekerjaan:</label>
        <select name="pekerjaan" required>
            <option value="Programmer">Programmer</option>
            <option value="Designer">Designer</option>
            <option value="Manager">Manager</option>
            <option value="Marketing">Marketing</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
    <?php

        $nama = $_POST["nama"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $pekerjaan = $_POST["pekerjaan"];

        $today = new DateTime();
        $birthdate = new DateTime($tanggal_lahir);
        $umur = $today->diff($birthdate)->y;


            switch ($pekerjaan) {
                case "Programmer":
                    $gaji = 5000000;
                    break;
                case "Designer":
                    $gaji = 4500000;
                    break;
                case "Manager":
                    $gaji = 7000000;
                    break;
                case "Marketing":
                    $gaji = 6000000;
                    break;
                default:
                    $gaji = 0;
            }

            echo "<h3>Hasil Input:</h3>";
            echo "<p>Nama: $nama</p>";
            echo "<p>Tanggal Lahir: $tanggal_lahir</p>";
            echo "<p>Pekerjaan: $pekerjaan</p>";
            echo "<p>Umur: $umur tahun</p>";
            echo "<p>Gaji: Rp " . number_format($gaji, 0, ',', '.') . "</p>";
        
    ?>
</body>
</html>
