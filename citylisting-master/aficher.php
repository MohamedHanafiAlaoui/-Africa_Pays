<?php 
include "./dpd_conn.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pys_name = $_POST['py_name'];
    $pys_population = $_POST['population'];
    $pys_pays = $_POST['pays'];
    $pys_Description= $_POST['Description'];


    
  

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-light bg-Primary" id="neubar">
      <div class="container">
        <a class="navbar-brand" href="./index.php">AFRICA_PAYS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 active" aria-current="page" href="./cardpays.php">Pays</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="./cardville.php">Ville</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Company
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="./ville.php">Dachborde</a></li>

              </ul>
            </li>
          </ul>
        </div>
      </div>
</nav>



        <div class="container">

                <?php
 
            //echo $_GET['nm'] ;


        if(isset($_GET['id'])){
            $id = $_GET['id'];

            if($_GET['Nm']  == 2)
            {
                $sql="SELECT * FROM `Pays` WHERE id_pays = $id LIMIT 1";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
               
                ?>
                <div class="body">
                <div class="img-post">
                    <img class="d-block img-fluid" src="./img/drapeau-maroc.png" alt="First slide">
                </div>
                <div>
                <h3>name</h3>
                <p><?php echo $row['name'];?></p>
                <h3>langues</h3>
                <p><?php echo $row['langues'];?></p>
                <h4> population</h4>
                <p><?php echo $row['population'];?></p>


                </div>
                <h2>description</h2>
                <p><?php echo $row['description'];?> </p>
            </div>
            <?php

            }
            
            else if ($_GET['Nm']  == 1) {
            

                $sql="SELECT * FROM `Ville` WHERE id_ville = $id LIMIT 1";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);

                ?>
                <div class="body">
                <div class="img-post">
                    <img class="d-block img-fluid" src="./img/Ifrane-Neige.jpg" alt="First slide">
                </div>
                <div>
                <h3>name:</h3>
                <p><?php echo $row['name'];?></p>

                </div>
                <h2>description</h2>
                <p><?php echo $row['description'];?> </p>
            </div>
                <?php
            }
            
        }
        ?>





                     
            


        </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
