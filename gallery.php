<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <title>Worldwide Hotel | Your Favorite Holiday Destination.</title>
    <link rel="icon" type="img/png" href="img/logo.png">
  </head>
  <body>
    <?php
      include("header.php");
    ?>
  <div class="container">
    <h1 class="text-center my-5">&nbsp</h1>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="img/gal1.jpg" class="img-responsive" alt="Image 1">
          <div class="card-body">
            <h5 class="card-title">Washroom</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/gal2.jpg" class="img-responsive" alt="Image 2">
          <div class="card-body">
            <h5 class="card-title">Swimming-Pool</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/gal3.jpg" class="img-responsive" alt="Image 3">
          <div class="card-body">
            <h5 class="card-title">Lounge</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/gal4.jpg" class="img-responsive" alt="Image 3">
          <div class="card-body">
            <h5 class="card-title">Living Room</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/gal5.jpg" class="img-responsive" alt="Image 3">
          <div class="card-body">
            <h5 class="card-title">Double Bedroom</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/gal6.jpg" class="img-responsive" alt="Image 3">
          <div class="card-body">
            <h5 class="card-title">Dining Hall</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/gal7.jpg" class="img-responsive" alt="Image 3">
          <div class="card-body">
            <h5 class="card-title">Docks</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/gal8.jpg" class="img-responsive" alt="Image 3">
          <div class="card-body">
            <h5 class="card-title">Indoor Swimming Pool</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/gal9.jpg" class="img-responsive" alt="Image 3">
          <div class="card-body">
            <h5 class="card-title">Single Bedroom</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="locationModalLabel">Worldwide Hotel Address</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Worldwide Hotel</p>
          <p>123 CR Avenue</p>
          <p>New City, KOL 700123</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
  <?php
    include('footer.php');
    include('copyright.php');
  ?>
  </body>
</html>