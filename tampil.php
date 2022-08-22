<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampil</title>
</head>

<body>
    <h1>tampil data</h1>
    <a href="input.html"><input type="button" value="Tambah data"></a>
        <table border="1">
            <tr>
                <td>no</td>
                <td>nama merek</td>
                <td>warna</td>
                <td>jumlah</td>
            </tr>
            <?php
            include('database/koneksi.php');
            $sql = mysqli_query($db,"SELECT * FROM tbproduk");
            while($data = mysqli_fetch_array($sql)){
            echo  "
            <tr>
                <td>".$data['no']."</td>
                <td>".$data['nama_merek']."</td>
                <td>".$data['warna']."</td>
                <td>".$data['jumlah']."</td>
            </tr>";
            }
            ?>
        </table>

</body>

</html>