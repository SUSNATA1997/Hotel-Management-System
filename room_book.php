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
  <div class="container1">
    <h1>Book Your Room</h1>
    <form method="POST" action="admin/sql.php">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="number" class="form-control" id="phone" name="phone" required>
      </div>
      <div class="mb-3">
        <label for="room-type" class="form-label">Type Of Room</label>
        <select name="troom" id="troom" class="form-control" required>
          <option value selected ></option>
          <option value="Superior Room">Superior Room</option>
          <option value="Deluxe Room">Deluxe Room</option>
          <option value="Guest House">Guest House</option>
          <option value="Single Room">Single Room</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="bedding-type" class="form-label">Bedding Type</label>
        <select name="bed" id="bed" class="form-control" required>
          <option value selected ></option>
          <option value="Single">Single</option>
          <option value="Double">Double</option>
          <option value="Triple">Triple</option>
          <option value="Quad">Quad</option>
          <option value="None">None</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="no-of-rooms" class="form-label">No.of Rooms</label>
        <select name="nroom" id="nroom" class="form-control" required>
          <option value selected ></option>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="meal-plan" class="form-label">Meal Plan</label>
        <select name="meal" id="meal" class="form-control"required>
          <option value selected ></option>
          <option value="Room only">Room only</option>
          <option value="Breakfast">Breakfast</option>
          <option value="Half Board">Half Board</option>
          <option value="Full Board">Full Board</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="cin" class="form-label">Check-In</label>
        <input name="cin" id="cin" type ="date" class="form-control">
      </div>
      <div class="mb-3">
        <label for="cout" class="form-label">Check-Out</label>
        <input name="cout" id="cout" type ="date" class="form-control">
      </div>
      <button type="submit" id="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap JS link -->
  <?php
    include('footer.php');
    include('copyright.php');
  ?>
  </body>
</html>