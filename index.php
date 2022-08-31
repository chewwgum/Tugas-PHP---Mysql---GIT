<!DOCTYPE html>
<html>
<head>
	<title>Data Gedung</title>
    
</head>
<body>
    <br>
    <h2 align="center">Data Gedung</h2>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <br>
    <button ><a class="btn btn-primary" href="tambah.php" style="margin: 15px;">Tambah Gedung</a></button>

    <div class="col-md-12">
        <table border="1" class="table table-dark">
            <thead>
                <br>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Lantai</th>
                    <th class="text-center">Fasilitas</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM tb_gedung");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td class="text-center"><?php echo $no++; ?></td>
                    <td class="text-center"><?php echo $d['nama_gedung']; ?></td>
                    <td class="text-center"><?php echo $d['alamat_gedung']; ?></td>
                    <td class="text-center"><?php echo $d['lantai']; ?></td>
                    <td class="text-center"><?php echo $d['fasilitas_gedung']; ?></td>
                    <td class="text-center"> 
                        <a class="btn btn-danger" href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
                        <a class="btn btn-warning" href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>

        </div>
</body>
</html>