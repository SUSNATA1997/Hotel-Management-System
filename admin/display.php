<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Pre-Approved Details</title>
  <link rel="icon" type="img/png" href="icon/logo.png">
  <style>
    html, body {
    height: 100%;
    }

    .sidebar {
      background: linear-gradient(#343a40, #6c757d);
      color: #fff;
      padding: 20px;
      height: 100vh;
      width: 98.5%;
    }
    
    .card-header {
      background: linear-gradient(#343a40, #6c757d);
    }

    .sidebar ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    
    .sidebar ul li {
      margin-bottom: 15px;
      margin-top: 30px;
    }
    
    .sidebar ul li a {
      color: #fff;
      text-decoration: none;
    }
    
    .content {
      padding: 20px;
    }

    .rb {
      font-size: 24px;
      opacity: 0.5;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3">
        <div class="sidebar">
          <h2>Admin Panel</h2>
          <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="customers.php">Customers</a></li>
            <li><a href="rooms.php">Rooms</a></li>
            <li><a href="bookings.php">Bookings</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>

      <!-- Main Content -->
      <div class="col-md-9">
        <div class="content">
          <h2>Dashboard <span class="rb">Room Booking</span></h2>

          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link text-decoration-none text-white" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Booking Requests
                  </button>
                </h5>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PHONE</th>
                        <th>ROOM TYPE</th>
                        <th>BEDDING TYPE</th>
                        <th>NO OF ROOMS</th>
                        <th>MEAL PLAN</th>
                        <th>CHECK IN</th>
                        <th>CHECK OUT</th>
                        <th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        include('db_connect.php');
                        $sql = "SELECT * FROM roombook WHERE approved = 0";
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
                      <!--<td><button class="btn btn-outline-danger text-white"><a class="text-decoration-none" href="delete.php? id=<?php echo $row['c_id']; ?>">Delete</a></button></td>
                      <td><button class="btn btn-outline-primary text-white"><a class="text-decoration-none" href="edit.php? id=<?php echo $row['c_id']; ?>">Edit</a></button></td>-->
                      <td><button class="btn btn-outline-success text-white"><a class="text-decoration-none" href="approve.php? id=<?php echo $row['c_id']; ?>">Approved</a></button></td>
                      </tr>
                      <?php
                        }
                      ?>
                   
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed text-decoration-none text-white" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Booked Rooms
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PHONE</th>
                        <th>ROOM TYPE</th>
                        <th>BEDDING TYPE</th>
                        <th>NO OF ROOMS</th>
                        <th>MEAL PLAN</th>
                        <th>CHECK IN</th>
                        <th>CHECK OUT</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
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
                      </tr>
                     
                      <?php
                        }
                      ?>
              
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed text-decoration-none text-white" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Payment Details
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Room Type</th>
                      <th>Bedding Type</th>
                      <th>No. of Rooms</th>
                      <th>Meal Plan</th>
                      <th>Check-in</th>
                      <th>Check-out</th>
                      <th>Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $sql = "SELECT * FROM roombook WHERE approved = 1";
                      $query = mysqli_query($con, $sql);
                      while($row=mysqli_fetch_array($query))
                      {
                        $id = $row['c_id'];
                        $roomType = $row['room_type'];
                        $beddingType = $row['bedding_type'];
                        $noOfRooms = $row['no_of_rooms'];
                        $mealPlan = $row['meal_plan'];
                        $checkIn = $row['check_in'];
                        $checkOut = $row['check_out'];

                        $amount = 0;
                        // Perform your payment calculations here
                        if($roomType == 'Superior Room') {
                          $amount += 500;
                        } elseif($roomType == 'Deluxe Room') {
                          $amount += 800;
                        } elseif($roomType == 'Guest House') {
                          $amount += 1500;
                        } elseif($roomType == 'Single Room') {
                          $amount += 300;
                        } 

                        if($noOfRooms == 2) {
                          $amount *= 2;
                        }

                        if($mealPlan == 'Room only') {
                          $amount += 1000;
                        } elseif($mealPlan == 'Breakfast') {
                          $amount += 400;
                        } elseif($mealPlan == 'Half Board') {
                          $amount += 600;
                        } elseif($mealPlan == 'Full Board') {
                          $amount += 1200;
                        }

                        echo "<tr>";
                        echo "<td>$id</td>";
                        echo "<td>$roomType</td>";
                        echo "<td>$beddingType</td>";
                        echo "<td>$noOfRooms</td>";
                        echo "<td>$mealPlan</td>";
                        echo "<td>$checkIn</td>";
                        echo "<td>$checkOut</td>";
                        echo "<td>₹$amount</td>";
                        echo "</tr>";
                      }
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed text-decoration-none text-white" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Payment Receipt
                  </button>
                </h5>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
                <div class="card-body">
                  <?php
                    $sql = "SELECT * FROM roombook WHERE approved = 1";
                    $query = mysqli_query($con, $sql);
                    while($row=mysqli_fetch_array($query))
                    {
                      $name = $row['name'];
                      $email = $row['email'];
                      $phone = $row['phone'];
                      $roomType = $row['room_type'];
                      $beddingType = $row['bedding_type'];
                      $noOfRooms = $row['no_of_rooms'];
                      $mealPlan = $row['meal_plan'];
                      $checkIn = $row['check_in'];
                      $checkOut = $row['check_out'];
                      $amount = 0;
                        // Perform your payment calculations here
                        if($roomType == 'Superior Room') {
                          $amount += 500;
                        } elseif($roomType == 'Deluxe Room') {
                          $amount += 800;
                        } elseif($roomType == 'Guest House') {
                          $amount += 1500;
                        } elseif($roomType == 'Single Room') {
                          $amount += 300;
                        } 

                        if($noOfRooms == 2) {
                          $amount *= 2;
                        }

                        if($mealPlan == 'Room only') {
                          $amount += 1000;
                        } elseif($mealPlan == 'Breakfast') {
                          $amount += 400;
                        } elseif($mealPlan == 'Half Board') {
                          $amount += 600;
                        } elseif($mealPlan == 'Full Board') {
                          $amount += 1200;
                        }
                      }
                      // Generate a unique invoice ID
                      $invoiceID = uniqid();

                      // Create a button to download the invoice
                      echo '<a href="generate_invoice.php?invoiceID=' . $invoiceID . '&name=' . $name . '&email=' . $email . '&phone=' . $phone . '&roomType=' . $roomType . '&beddingType=' . $beddingType . '&noOfRooms=' . $noOfRooms . '&mealPlan=' . $mealPlan . '&checkIn=' . $checkIn . '&checkOut=' . $checkOut . '&amount=' . $amount . '" class="btn btn-primary">Download Invoice</a>';

                    
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>