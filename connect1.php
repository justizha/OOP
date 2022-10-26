<?php


require 'connect.php';


$sql = query("SELECT * FROM siswa ");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel siswa</title>
</head>
<body>
    <table border="1">
        <thead>
            <th>No</th>
            <th>nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>

            <?php $i = 1;?>
            <?php foreach($sql as $row) :?>
        </thead>
        <tbody>
            <tr>
                <td><?= $i;?></td>
                <td><?= $row['nama'];?></td>
                <td><?= $row['kelas'];?></td>
                <td><?= $row ['jurusan'];?></td>
            </tr>

            <?php $i++?>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>