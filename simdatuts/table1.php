<?php
include 'koneksi.php';

$sql = "SELECT * FROM datakaryawan INNER JOIN datahobirole ON datakaryawan.id_kar=datahobirole.id_kar";
$query = mysqli_query($koneksi, $sql);

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial scale-1.0">
        <title>Data Karyawan Tabel 1</title>
    </head>
    <body>
        <table cellspacing="0" border="1">
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>KODE KARYAWAN</th>
                <th>ID</th>
            </tr>
            <?php
            while ($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $data['no']?></td>
                    <td><?php echo $data['name_kar']?></td>
                    <td><?php echo $data['code_kar']?></td>
                    <td><?php echo $data['id_kar']?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </body>
</html>