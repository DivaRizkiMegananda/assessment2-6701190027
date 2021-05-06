<?php 
$host="localhost";
$user="root";
$password="";
$db="ass2pengweb";

$conn = mysqli_connect($host,$user,$password,$db);
if (!$conn){
	  die("konneksi gagal:".mysqli_connect_error());
}

//query
function query($query){
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// ipk CRUD

function tambah($data)
{
  global $conn;
  //ambil data dari tiap elemen dalam form
	$semester	=htmlspecialchars($data["semester"]);
  $ipk =htmlspecialchars($data["ipk"]);
  //insert data ipk
  $query = "INSERT INTO mahasiswa VALUES ('$semester','$ipk');
";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function hapus($semester)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE semester = $semester");
  return mysqli_affected_rows($conn);
} 

function ubah($data)
{
  global $conn;
  //ambil data dari tiap elemen dalam form
	$semester = htmlspecialchars($data["semester"]);
  $ipk 	=htmlspecialchars($data["ipk"]);

  // query update data ipk
  $query = "UPDATE mahasiswa SET
		semester = '$semester',
		ipk = '$ipk',
    
		WHERE semester = $semester
		";

  mysqli_query($conn, $query);


  return mysqli_affected_rows($conn);
}

?>