<?php
require_once("Model/modelPelanggan.php");
require_once("Model/modelTransaksi.php");
require_once("Model/modelPelanggan.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Persewaan Mobil</title>
    <style>
        a {
            background-color: aqua;
            padding: 20px;
            border-radius: 10px;
            text-decoration: none;
        }

        .home {
            text-align: center;
        }

        form {
            margin-top: 50px;
        }

        #search {
            padding: 5px;
            width: 230px;
        }

        #search-button {
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="home">
        <h1>Selamat Datang di</h1>
        <h1>Jasa Persewaan Mobil</h1><br>
        <a href="index.php?i=pesan">Pesan langsung</a>
        <a href="index.php?i=mobil">Lihat daftar mobil</a>
        <div class="pencarian">
            <form method="GET">
                <input id="search" placeholder="Cari ID pelanggan..." type="text" name="search">
                <button id="search-button">Cari</button>
            </form>
        </div>
        <?php if (isset($_GET["search"])) : ?>
            <div class="content" style="text-align: center;">
                <br>
                <h1>Daftar Transaksi</h1>
                <table border="1" cellpadding="15" cellspacing="0" align="center">
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Plat</th>
                        <th>Tanggal Sewa</th>
                        <th>Lama Sewa</th>
                        <th>Total</th>
                    </tr>

                    <?php
                    $transaksi = new modelTransaksi();
                    $data = $transaksi->selectTransaksi($_GET["search"]);
                    // $row = $pelanggan->fetch($data);
                    // echo "<pre>";
                    // var_dump($row);
                    // echo "</pre>";
                    $i = 1;
                    while ($row = $this->modelTransaksi->fetch($data)) {
                        echo
                        "<tr>
                    <td>$i</td>
                    <td align='left'>$row[0]</td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                    <td>$row[4]</td>
                    <td>$row[5]</td>
                </tr>";
                        $i++;
                    }
                    ?>

                </table>
            </div>
        <?php endif ?>
    </div>

</body>

</html>