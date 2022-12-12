<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persewaan Mobil</title>
    <style>
        body {
            margin: 50px 100px ;
        }
        a{
            text-decoration: none;
        }

    </style>
</head>

<body>
    <br>
    <div class="container">
        <a href="./index.php">Menu Utama</a>
    </div>
    
    <div class="content" style="text-align: center;">
        <br>
        <h1>Daftar Mobil</h1>
        <table border="1" cellpadding="15" cellspacing="0" align="center">
            <tr>
                <th>No</th>
                <th>Plat Nomor</th>
                <th>Nama</th>
                <th>Merk</th>
                <th>Harga</th>
            </tr>

            <?php
            $i = 1;
            while ($row = $this->modelMobil->fetch($data)) {
                echo
                "<tr>
                    <td>$i</td>
                    <td align='left'>$row[0]</td>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                </tr>";
                $i++;
            }
            ?>

        </table>
    </div>
</body>

</html>