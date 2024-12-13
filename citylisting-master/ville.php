<?php 
include "./dpd_conn.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Registration Fornamem</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">pays Name</th>
            <th scope="col">description</th>
            <th scope="col">id_pays</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            <?php

        $sql="SELECT * FROM `Ville`";
            
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
            ?>

            <tr>
            <th > <?php
                echo $row['id_ville'];
             ?></th>
                         <th > <?php
                echo $row['name'];
             ?></th>
                         <th > <?php
                echo $row['description'];
             ?></th>
                                      <th > <?php
                echo $row['id_pays'];
             ?></th>

            <td>
                <a href="editVille.php?id=<?php echo $row['id_ville']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="supprimerville.php?id=<?php echo $row['id_ville']; ?>"><i class="fa-solid fa-trash"></i></a>
            </td>
          </tr>
          <?php


        }


            ?>

        </tbody>
      </table>
    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>