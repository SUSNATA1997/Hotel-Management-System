<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Edit Details</title>
  <link rel="icon" type="img/png" href="icon/logo.png">
  <style>
    .container {
      margin-top: 50px;
    }
    
    .form-label {
      font-weight: bold;
    }
    
    .btn-primary {
      margin-top: 20px;
    }
    
    .alert {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Edit Details</h2>
    <?php
      include('db_connect.php');

      if(isset($_GET['id'])) {
        $id = $_GET['id'];

        // Fetch the room details from the database based on the ID
        $sql = "SELECT * FROM roombook WHERE c_id = '$id'";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($query);

        // Check if the form is submitted
        if(isset($_POST['submit'])) {
          // Get the updated values from the form
          $roomType = $_POST['room_type'];
          $beddingType = $_POST['bedding_type'];
          $noOfRooms = $_POST['no_of_rooms'];
          $mealPlan = $_POST['meal_plan'];

          // Update the room details in the database
          $updateSql = "UPDATE roombook SET room_type = '$roomType', bedding_type = '$beddingType', no_of_rooms = '$noOfRooms', meal_plan = '$mealPlan' WHERE c_id = '$id'";
          $updateQuery = mysqli_query($con, $updateSql);

          if($updateQuery) {
            // Redirect back to bookings.php
            header("Location: bookings.php");
            exit();
          } else {
            echo '<div class="alert alert-danger" role="alert">Failed to update details. Please try again.</div>';
          }
        }
    ?>

    <!-- Edit Details Form -->
    <form method="POST">
      <div class="mb-3">
        <label for="roomType" class="form-label">Room Type</label>
        <select id="roomType" class="form-control" name="room_type" required>
          <option value=""></option>
          <option value="Superior Room" <?php if($row['room_type'] === 'Superior Room') echo 'selected'; ?>>Superior Room</option>
          <option value="Deluxe Room" <?php if($row['room_type'] === 'Deluxe Room') echo 'selected'; ?>>Deluxe Room</option>
          <option value="Guest House" <?php if($row['room_type'] === 'Guest House') echo 'selected'; ?>>Guest House</option>
          <option value="Single Room" <?php if($row['room_type'] === 'Single Room') echo 'selected'; ?>>Single Room</option>
        </select>
        <!--<input type="text" class="form-control" id="roomType" name="room_type" value="<?php echo $row['room_type']; ?>" required>-->
      </div>
      <div class="mb-3">
        <label for="beddingType" class="form-label">Bedding Type</label>
        <select id="beddingType" class="form-control" name="bedding_type" required>
          <option value=""></option>
          <option value="Single" <?php if($row['bedding_type'] === 'Single') echo 'selected'; ?>>Single</option>
          <option value="Double" <?php if($row['bedding_type'] === 'Double') echo 'selected'; ?>>Double</option>
          <option value="Triple" <?php if($row['bedding_type'] === 'Triple') echo 'selected'; ?>>Triple</option>
          <option value="Quad" <?php if($row['bedding_type'] === 'Quad') echo 'selected'; ?>>Quad</option>
          <option value="None" <?php if($row['bedding_type'] === 'None') echo 'selected'; ?>>None</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="noOfRooms" class="form-label">Number of Rooms</label>
        <select id="noOfRooms" class="form-control" name="no_of_rooms" required>
          <option value=""></option>
          <option value="1" <?php if($row['no_of_rooms'] === '1') echo 'selected'; ?>>1</option>
          <option value="2" <?php if($row['no_of_rooms'] === '2') echo 'selected'; ?>>2</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="mealPlan" class="form-label">Meal Plan</label>
        <select id="mealPlan" class="form-control" name="meal_plan" required>
          <option value=""></option>
          <option value="Room Only" <?php if($row['meal_plan'] === 'Room Only') echo 'selected'; ?>>Room Only</option>
          <option value="Breakfast" <?php if($row['meal_plan'] === 'Breakfast') echo 'selected'; ?>>Breakfast</option>
          <option value="Half Board" <?php if($row['meal_plan'] === 'Half Board') echo 'selected'; ?>>Half Board</option>
          <option value="Full Board" <?php if($row['meal_plan'] === 'Full Board') echo 'selected'; ?>>Full Board</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>

    <?php
      } else {
        echo '<div class="alert alert-danger" role="alert">Invalid ID. Please go back and try again.</div>';
      }
    ?>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
