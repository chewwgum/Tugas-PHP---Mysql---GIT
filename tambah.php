<!DOCTYPE html>
<html>
<head>
	<title>Tambah Gedung</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <b><h2>Tambah Gedung</h2></b>
    <form method="post" action="proses_tambah.php">
        <table>
            <tr>
                <td>Nama Gedung</td>
                <td> : </td>
                <td><input type="text" name="nama_gedung"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td> : </td>
                <td><input type="text" name="alamat_gedung"></td>
            </tr>
            <tr>
                <td>Lantai</td>
                <td> : </td>
                <td><input type="text" name="lantai"></td>
            </tr>
            <tr>
                <td>Fasilitas</td>
                <td> : </td>
                <td><input type="text" name="fasilitas_gedung"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Tambah">
                    <button href="index.php">Batal</a></button>
            </td>
            </tr>
        </table>
</form>
<?php
@$PAGE = $_GET['page'];
?>
</body>
</html>
