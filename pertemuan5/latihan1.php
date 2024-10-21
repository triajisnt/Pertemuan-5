<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>

    <form method="POST" action="">

        <label for="programstudi">Pilih Program Studi:</label>        
        <input type="number" name="prodi" id="programstudi" min="1" max="2" placeholder="Masukan Prodi Anda" required><br>
                                           
        <input type="submit" value="Proses"> <br>
        <br><br>

    </form>

    <?php
    if (isset($_POST['prodi'])) {
        $pilih = $_POST['prodi'];

        switch ($pilih) {
            case 1:
                echo "Program Studi Teknik Informatika";
                break;
            case 2:
                echo "Program Studi Rekayasa Perangkat Lunak";
                break;
            default:
                echo "Tidak ada Pilihan yang tersedia";
                break;
        }
    }
    ?>


</body>
</html>