<!DOCTYPE html>
<html>
<head>
	<title>Edit Gedung</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <b><h2>Edit Gedung</h2></b>
</thead>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM tb_gedung where id='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="update.php">
            <table>
                <tr>
                    <td>Nama Gedung</td>
                    <td> : </td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="nama_gedung" value="<?php echo $d['nama_gedung']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat Gedung</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="alamat_gedung" value="<?php echo $d['alamat_gedung']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Lantai</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="lantai" value="<?php echo $d['lantai']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Fasilitas Gedung</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="fasilitas_gedung" value="<?php echo $d['fasilitas_gedung']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Simpan">
                        <button href="index.php">Batal</button></td>
                </tr>
            </table>
            <?php
    }
    ?>

</body>
</html>