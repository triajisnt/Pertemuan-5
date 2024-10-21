<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Anggota</title>
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
        .container {
            background-color: white;
            max-width: 700px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1, h3, h5 {
            text-align: center;
            color: #333;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        h3 {
            font-size: 1.5em;
            margin: 10px 0;
        }
        h5 {
            font-size: 1em;
            font-style: italic;
            color: #777;
        }
        hr {
            border: none;
            height: 2px;
            background-color: red;
            margin: 20px 0;
        }
        .content {
            margin: 20px 0;
        }
        pre h2 {
            font-size: 1.5em;
            color: #333;
        }
        .info {
            background-color: #f0f8ff;
            border: 1px solid #b0c4de;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .info p {
            margin: 8px 0;
            font-size: 1.1em;
        }
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        a:hover {
            background-color: #0056b3;
        }
        marquee {
            color: #fafafa;
            font-size: 1em;
        }
        p {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <center>
            <h1>PERPUSTAKAAN "PINTAR MEMBACA"</h1>
            <h3>Pendaftaran Anggota Secara Online</h3>
            <h5><i>Jl. Cipendawa Lama No.46 Bekasi Utara</i></h5>
            <hr>
        </center>
        
        <div class="content">
            <center>
            <pre><h2>**** BUKTI PENDAFTARAN ****</h2></pre>
            </center>
            <div class="info">
                <?php
                $nama = $_POST['nama'];
                $tempat = $_POST['tempatlahir'];
                $tgl = $_POST['tanggallahir'];
                $bln = $_POST['bulanlahir'];
                $thn = $_POST['tahunlahir'];
                $jenis = $_POST['jk'];
                $alamat = $_POST['alamat'];
                $telp = $_POST['telp'];

                echo "<p><strong>Tanggal Cetak:</strong> " . date("D - d/m/y") . "</p>";
                echo "<p><strong>Nama Lengkap:</strong> $nama</p>";
                echo "<p><strong>TTL:</strong> $tempat - $tgl/$bln/$thn</p>";

                if ($jenis == '1') {
                    $jk = 'Laki-laki';
                } else {
                    $jk = 'Perempuan';
                }

                echo "<p><strong>Jenis Kelamin:</strong> $jk</p>";
                echo "<p><strong>Alamat:</strong> $alamat</p>";
                echo "<p><strong>No. Telepon:</strong> $telp</p>";

                if (isset($_POST['prodi'])) {
                    $pilih = $_POST['prodi'];

                    switch ($pilih) {
                        case 1:
                            echo "<p><strong>Program Studi:</strong> Teknik Informatika</p>";
                            break;
                        case 2:
                            echo "<p><strong>Program Studi:</strong> Rekayasa Perangkat Lunak</p>";
                            break;
                        default:
                            echo "<p><strong>Program Studi:</strong> Tidak ada pilihan yang tersedia</p>";
                            break;
                    }
                }
                ?>
            </div>
            <p>
                <a href="latihan2.php"><<< INPUT Lagi</a>
            </p>
        </div>
        
        <hr>
        <marquee direction="right">
            <i>--Pendaftaran Anggota Perpustakaan secara Online--</i>
        </marquee>
    </div>
</body>
</html>
