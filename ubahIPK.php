<?php
require 'koneksi.php';

//ambil data di url
$semester = $_GET['semester'];

//query data event berdasarkan id
$semester = query("SELECT * FROM mahasiswa WHERE semester= $semester")[0];

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

  //cek apakah data berhasil diubah atau tidak
  if (ubah($_POST) > 0) {
    echo "
		<script>
		alert('data berhasil diubah');
		document.location.href = 'tampilIPK.php'
		</script>
			";
  } else {
    echo "
		<script>
		alert('data gagal diubah');
		document.location.href = 'tampilIPK.php'
		</script>
			";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Edit IPK</title>
    <!-- Load file CSS Bootstrap online -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <h2>Input Data</h2>


    <form action="" method="post" >
        <div class="form-group">
            <label>Semester :</label>
            <input type="number" name="semester" class="form-control" placeholder="Masukan Semester" required value="<?= $semester["semester"]; ?>"/>

        </div>
        <div class="form-group">
            <label>Jumlah IPK :</label>
            <input type="text" name="ipk" class="form-control" placeholder="Masukan IPK " required value="<?= $semester["ipk"]; ?>"/>

        </div>     
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>