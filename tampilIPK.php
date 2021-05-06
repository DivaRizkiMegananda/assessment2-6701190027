<?php 

    require "koneksi.php";
    $semester = query("SELECT * FROM mahasiswa");

?>


<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap online -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <br>
    <h4>Halaman IPK</h4>

    <table class="table table-bordered table-hover">
        <br>
        <thead>
        <tr>
            <th>No</th>
            <th>Semester</th>
            <th>Jumlah IPK </th>
            <th colspan='2'>Aksi</th>
        </tr>
        </thead>
        <?php $i = 1;  ?>
        <?php foreach ($semester as $row) : ?>
          <tr>
            <th scope="row"> <?= $i ?></th>
            <td><?= $row["semester"]; ?></td>
            <td><?= $row["ipk"]; ?></td>
            <td>  
            <a href="ubahIPK.php?semester=<?= $row["semester"]; ?>" class="btn btn-warning" role="button">Update</a>
            <a href="hapusIPK.php?semester=<?= $row["semester"]; ?>" class="btn btn-danger" role="button">Delete</a>
            </td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    <a href="tambahIPK.php" class="btn btn-primary" role="button">Tambah Data</a>

</div>
</body>
</html>