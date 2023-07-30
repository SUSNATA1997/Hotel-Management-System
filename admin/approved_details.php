<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Approved Details</title>
    <link rel="icon" type="img/png" href="icon/logo.png">
  </head>
  <body>
    <!-- Optional JavaScript; choose one of the two! -->
    <div>
      <h2 class="text-center" style="color: black;">Approved Customer Details</h2>
      <table class="table table-bordered table-hover text-white" style="background: linear-gradient(#9376E0, #E893CF);">
        <thead style="background: linear-gradient(#3F0071, #FB2576);">
          <tr>
            <th>Customer ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Type of Room</th>
            <th>Bedding Type</th>
            <th>Number of Rooms</th>
            <th>Meal Plan</th>
            <th>Check-In</th>
            <th>Check-Out</th>
            <th colspan="2" class="">Operation</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include('db_connect.php');
            $sql = "SELECT * FROM roombook WHERE approved = 1";
            $query = mysqli_query($con, $sql);
            while($row=mysqli_fetch_array($query))
            {

          ?>
          <tr>
            <td><?php echo $row['c_id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['phone']?></td>
            <td><?php echo $row['room_type']?></td>
            <td><?php echo $row['bedding_type']?></td>
            <td><?php echo $row['no_of_rooms']?></td>
            <td><?php echo $row['meal_plan']?></td>
            <td><?php echo $row['check_in']?></td>
            <td><?php echo $row['check_out']?></td>
            <td><button class="btn btn-outline-danger text-white"><a class="text-decoration-none" href="delete.php? id=<?php echo $row['c_id']; ?>">Delete</a></button></td>
            <td><button class="btn btn-outline-success text-white custom-button"><a class="text-decoration-none" href="edit.php? id=<?php echo $row['c_id']; ?>">Edit</a></button></td>
          </tr>
          <?php
             }
          ?>
        </tbody>
      </table>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>