<?php 
include "./dpd_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM  Ville  WHERE  id_ville = $id ";

$result = mysqli_query($conn,$sql);

if ($result) {
  header("Location: ville.php?msg=Data deleted successfully");
  exit();
}
else
{
  echo "Failed" . mysqli_error($conn);
}


?>
