<?php 
include "./dpd_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM  Pays  WHERE  id_pays = $id ";

$result = mysqli_query($conn,$sql);

if ($result) {
  header("Location: pays.php?msg=Data deleted successfully");
  exit();
}
else
{
  echo "Failed" . mysqli_error($conn);
}


?>
