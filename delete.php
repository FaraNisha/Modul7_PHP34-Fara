<?php
include '../connect.php';

$kode = $_GET['kode'];
$query = "DELETE FROM matakuliah WHERE kode = '$kode'";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
  echo "Berhasil Hapus Data";
}
else
{
  echo "Gagal Hapus Data";
}
echo "<a href='read.php'> Lihat Data</a>";
 ?>
