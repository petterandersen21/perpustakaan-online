<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>:Anggota</title>
    </head>
    <body>
 
        <center>
            <h2>Manajemen Anggota</h2>
            <a href="create.php">Tambah anggota</a>
            <table border="1" style="border-collapse:collapse" width="100%">
                <tr>
                    <td>No</td>
                    <td>Nama Anggota</td>
                    <td>Jenis Kelamin</td>
                    <td>Alamat</td>
                    <td>Tanggal Daftar</td>
                    <td>Action</td>
                </tr>
                <?php
                include 'perpustakaan_db.php';
                $no=0;
                $ambil = $koneksi->query("SELECT * FROM anggota");
                while($res = $ambil->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo ucwords($res['nama']) ?></td>
                        <td><?php echo $res['jk'] ?></td>
                        <td><?php echo ucwords($res['alamat']) ?></td>
                        <td><?php echo $res['tgl_daftar'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $res['id_anggota'] ?>">Edit</a> ||
                            <a href="delete.php?id=<?php echo $res['id_anggota'] ?>" onclick="return confirm('Hapus Anggota ini ???')">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </center>
    </body>
</html>