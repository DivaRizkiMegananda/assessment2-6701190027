<?php
require 'koneksi.php';

$semester = $_GET['semester'];

//cekkk data berhasil
if (hapus($semester) > 0) {
  echo "
    <script>
    alert('data berhasil dihapus!');
    document.location.href = 'tampilIPK.php';
    </script>
    ";
} else {

  echo "<script>
    alert('data gagal dihapus!');
    document.location.href = 'tampilIPK.php';
    </script>";
}
