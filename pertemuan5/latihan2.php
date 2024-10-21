<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('perpus.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
        }
        h1, h3, h5 {
            color: #333;
        }
        h1 {
            font-size: 2.5em;
        }
        h3 {
            font-size: 1.5em;
        }
        h5 {
            font-size: 1em;
            font-style: italic;
            color: #777;
        }
        form {
            background-color: white;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        input[type="text"],
        input[type="number"],
        input[type="radio"],
        textarea,
        select {
            display: block;
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"],
        input[type="reset"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="reset"] {
            background-color: #dc3545;
        }
        input[type="submit"]:hover,
        input[type="reset"]:hover {
            opacity: 0.9;
        }
        hr {
            border: none;
            height: 2px;
            background-color: red;
            margin: 20px 0;
        }
        marquee {
            font-size: 1em;
            color: #fafafa;
        }
        center {
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="bukti.php" method="post">
        <center>
            <h1>Perpustakaan Rajin Membaca</h1>
            <h3>Pendaftaran Anggota secara Online</h3>
            <h5><i>Jl. Cipendawa Lama no.46 Bekasi Utara</i></h5>
            <hr>
        </center>
        <label for="nama">Nama Lengkap:</label>
        <input type="text" name="nama" size="35" maxlength="30" placeholder="Masukan Nama Anda" required>

        <label for="tempatlahir">TTL:</label>
        <input type="text" name="tempatlahir" size="20" placeholder="Masukan Tempat Lahir Anda" maxlength="20">
        <select size="1" name="tanggallahir" required>
            <?php
            for($i=1;$i<=31;$i++) {
                echo"<option value=$i>$i</option>";
            }
            ?>
        </select>
        <select size="1" name="bulanlahir">
            <option>Januari</option>
            <option>Februari</option>
            <option>Maret</option>
            <option>April</option>
            <option>Mei</option>
            <option>June</option>
            <option>July</option>
            <option>Agustus</option>
            <option>Oktober</option>
            <option>November</option>
            <option>Desember</option>

            <!-- Bulan lainnya -->
        </select>
        <input type="text" name="tahunlahir" size="10" maxlength="4" value="2005" required>

        <label>Jenis Kelamin:</label>
        <input type="radio" name="jk" value="L">Laki-laki
        <input type="radio" name="jk" value="p" required>Perempuan<br><br>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" rows="3" cols="35" wrap="on" placeholder="Masukan Alamat Anda" required></textarea>

        <label for="telp">No. Telephone:</label>
        <input type="text" name="telp" size="15" maxlength="15" placeholder="Masukan Telephone Anda" required>

        <label for="prodi">Program Studi:</label>
        <input type="number" name="prodi" id="programstudi" min="1" max="2" placeholder="Masukan Prodi Anda" required>
        <p>1 untuk TI, 2 untuk SI</p>

        <input type="submit" value="KIRIM">
        <input type="reset" value="BERSIH">
    </form>
    <hr>
    <marquee direction="right">
        <i>--Pendaftaran Anggota Perpustakaan secara Online--</i>
    </marquee>
</body>
</html>
