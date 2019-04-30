<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <table width="100%" border="1" cellpadding="1" cellspacing="0" style="empty-cells:show">
        <tr>
            <th width="10%">No</th>
            <th width="10%">NIM</th>
            <th width="20%">NAMA</th>
            <th>ALAMAT</th>
        </tr>
        <?php
            require("db.php");
            $sql = "SELECT * FROM mahasiswa;";
            $nomor = 1;
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
                echo "
                <tr>
                    <td>".$nomor."</td>
                    <td>".$row['NIM']."</td>
                    <td>".$row['Nama']."</td>
                    <td>".$row['Alamat']."</td>
                </tr>
                ";
                $nomor++;
            }
            $conn->close();
        ?>
    </table>
    <a href="index.php">&laquo;home</a>
</body>

</html>