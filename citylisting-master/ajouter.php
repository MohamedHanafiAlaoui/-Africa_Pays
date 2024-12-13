<?php 
include "./dpd_conn.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pys_name = $_POST['py_name'];
    $pys_population = $_POST['population'];
    $pys_Languages = $_POST['langues'];
    $pys_Description= $_POST['Description'];


    
  
    $sql = "INSERT INTO Pays ( name, population, langues, description, id_continent) 
    VALUES ( '$pys_name', $pys_population, '$pys_Languages', '$pys_Description', 1)
    ";

        $result = mysqli_query($conn,$sql);

        if ($result) {
          header("Location: pays.php?msg=ajouter");
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
        <h2 class="text-center mb-4">Country Registration Form</h2>
        <form  action="" method="POST">


            <!-- Name -->
            <div class="mb-3">
                <label for="py_name" class="form-label">Name</label>
                <input type="text" class="form-control"  name="py_name" maxlength="50" required>
            </div>

            <!-- Population -->
            <div class="mb-3">
                <label for="population" class="form-label">Population</label>
                <input type="number" class="form-control" id="population" name="population" required>
            </div>

            <!-- Languages -->
            <div class="mb-3">
                <label for="langues" class="form-label">Languages</label>
                <input type="text" class="form-control" id="langues" name="langues" maxlength="50" required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
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