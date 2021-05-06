<?php
    //Include file conneksi, untuk conneksikan ke database
    require "koneksi.php";
    //Cek apakah ada kiriman form dari method post
    if (isset($_POST["submit"])) {

        //cekkk data berhasil
        if (tambah($_POST) > 0) {
            echo "<script>alert('data berhasil ditambahkan!');
            document.location.href = 'tampilIPK.php';</script>";
        } else {
            echo "<script>alert('data gagal ditambahkan!');
            document.location.href = 'insertIPK.php'; </script>";
        }
    }

    
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Isi IPK</title>
    <!-- Load file CSS Bootstrap online -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <h2>Input Data</h2>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Semester :</label>
            <input type="number" name="semester" class="form-control" placeholder="Masukan Semester" required />
        </div>
        <div class="form-group">
            <label>ipk :</label>
            <input type="text" name="ipk" class="form-control" placeholder="Masukan IPK " required />
        </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>