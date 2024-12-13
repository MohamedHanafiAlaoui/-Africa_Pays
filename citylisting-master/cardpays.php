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
    <title>Country Registration Fornamem</title>
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

<section class="silde_afrique">
<div class="silde_africa" >

  <div class="hover_bg">
    <img src="https://next-images.123rf.com/index/_next/image/?url=https://assets-cdn.123rf.com/index/static/assets/top-section-bg.jpeg&w=3840&q=75" alt="">
  </div>
  <div class="hover_bg_text">
   <h1>Africa</h1>

  </div>


</div>
</section>




<section>
  <h1>pays</h1>
<div class="container mt-5">
<div class="row">

<?php

$sql="SELECT * FROM `Pays` ";
    
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
  ?>
  <div class="col-md-3">
  <a href="aficher.php?id=<?php echo ($row['id_pays']); ?>&Nm=<?php echo 2?>" class="card">
      <img class="card-img-top" src="./img/drapeau-maroc.png" alt="Card image cap">
      <div class="card-body">
          <h5 class="card-title"> <?php
                echo $row['name'];
             ?></h5>
    
      </div>
  </a>
</div>
<?php
}
?>
        

   
    </div>
</div>
</section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>