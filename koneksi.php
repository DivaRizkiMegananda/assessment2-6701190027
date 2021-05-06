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

// Event CRUD

function tambah($data)
{
  global $conn;
  //ambil data dari tiap elemen dalam form
	$semester	=htmlspecialchars($data["semester"]);
  $ipk =htmlspecialchars($data["ipk"]);
  //insert data event
  $query = "INSERT INTO ipk VALUES ('','$semester','$ipk');
";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
?>