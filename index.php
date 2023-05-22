<?php 
include_once __DIR__ . "/server.php";
$arrayMovie = [
  $movie1, $movie2
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Document</title>
</head>
<body>
  <div class="mainwrapper">
    <div class="container mt-5">
      <h1 class="mb-3">Movie</h1>
      
      <div class="">

        <?php foreach ($arrayMovie as $movie): ?>

              <?php echo $movie->Get_all_info() ?>

          <?php endforeach ?>

      </div>
      
    </div>
  </div>
</body>
</html>