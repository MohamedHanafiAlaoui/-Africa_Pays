<?php 
include "./dpd_conn.php";

$id = $_GET["id"];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vil_name = $_POST['py_name'];
    $vil_Description= $_POST['Description'];
    $payid= $_POST['paysid'];


    $sql = "UPDATE  Ville 
            SET name ='$vil_name',
                description = '$vil_Description',
                id_pays = $payid

            WHERE  id_ville = $id ";

    $result = mysqli_query($conn,$sql);

    if ($result) {
          header("Location:ville.php?msg=Data updated successfully");
          exit();
        }
    else
        {
 
          echo "Failed" . mysqli_error($conn);
        }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Registration Fornamem</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-Primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">AFRICA_PAYS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./ajouter.php">Ajouter pays </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./ajouterVille.php">Ajouter Ville</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./pays.php">Pays </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./ville.php"> Ville</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



    <div class="container mt-5">
        <h2 class="text-center mb-4">modifer Registration Form</h2>

        <?php

        if(isset($_GET['id'])){

            $id = $_GET['id'];
            $sql="SELECT * FROM `Ville` WHERE id_ville = $id LIMIT 1";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            
        }


        ?>
        <form  action="" method="POST">


            <!-- Name -->
            <div class="mb-3">
                <label for="py_name" class="form-label">Name</label>
                <input type="text" class="form-control"  name="py_name" maxlength="50" value="<?php echo $row['name'];?>" required>
            </div>
            <!-- Description -->
            <div class="mb-3">
                <label for="Description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="Description" rows="4"   required> <?php echo $row['description'];?></textarea>
            </div>

            <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="paysid">
              <option selected>Open this select menu</option>
              <?php

$sql="SELECT * FROM `Pays`";
            
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
    ?>

<option value="<?php  echo $row['id_pays'];?>" ><?php
                echo $row['name'];
             ?></option>


  <?php


}


    ?>

            </select>
            </div>
            <!-- Submit Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>