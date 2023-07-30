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
      height: 100%;
      width: 100%;
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

    /* Adjusted CSS */
    .content {
      padding: 20px;
    }

    .rb {
      font-size: 24px;
      opacity: 0.5;
    }

    .sp {
      margin-top: 40px;
    }

    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-end;
    }
    
    .card-container .card {
      margin-bottom: 10px;
    }

    /* Adjusted CSS for responsive layout */
    @media (max-width: 767px) {
      .card-container {
        justify-content: center;
      }
    }

    .bg-blue {
      background-color: #2F58CD;
      color: black;
      margin-bottom: 5px;
    }

    .bg-green {
      background-color: #03C988;
      color: black;
      margin-bottom: 5px;
    }

    .bg-brown {
      background-color: #EB6440;
      color: black;
      margin-bottom: 5px;
    }

    .bg-red {
      background-color: #FA4659;
      color: black;
      margin-bottom: 5px;
    }

    .bg-default {
      background-color: gray;
      color: black;
      margin-bottom: 5px;
    }

    .card-img {
      padding: 40px 40px;
    }

    .panel-footer {
      background-color: lightgray;
      padding: 5px 5px;
    }
  </style>
</head>
<body>
  <div class="wrapper">
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3">
        <div class="sidebar">
          <h2>Admin Panel</h2>
          <ul>
            <li><a href="display.php">Dashboard</a></li>
            <li><a href="customers.php">Customers</a></li>
            <li><a href="rooms.php">Rooms</a></li>
            <li><a href="bookings.php">Bookings</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-9">
        <div class="content">
          <h2>Rooms <span class="rb">Approved</span></h2>
          <div class="row">
            <?php
              include ('db_connect.php');
              $sql = "SELECT * FROM roombook WHERE approved=1";
              $re = mysqli_query($con, $sql);

              while($row = mysqli_fetch_array($re)) {
                $id = $row['room_type'];
                $cardClass = "";

                switch ($id) {
                  case "Superior Room":
                    $cardClass = "bg-blue";
                    break;
                  case "Deluxe Room":
                    $cardClass = "bg-green";
                    break;
                  case "Guest House":
                    $cardClass = "bg-brown";
                    break;
                  case "Single Room":
                    $cardClass = "bg-red";
                    break;
                  default:
                    $cardClass = "bg-default";
                    break;
                  }

                  echo '
                  <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder card-container ' . $cardClass . '">
                      <div class="panel-body">
                        <img src="hotel.png" class="card-img">
                        <h3>' . $row['bedding_type'] . '</h3>
                      </div>
                      <div class="panel-footer back-footer-' . $cardClass . '">
                        ' . $row['room_type'] . '
                      </div>
                    </div>
                  </div>';
                }
              ?>

          </div>
          <h2 class="sp">Rooms <span class="rb">Pending</span></h2>
          <div class="row">
            <?php
              include ('db_connect.php');
              $sql = "SELECT * FROM roombook WHERE approved=0";
              $re = mysqli_query($con, $sql);

              while($row = mysqli_fetch_array($re)) {
                $id = $row['room_type'];
                $cardClass = "";

                switch ($id) {
                  case "Superior Room":
                    $cardClass = "bg-blue";
                    break;
                  case "Deluxe Room":
                    $cardClass = "bg-green";
                    break;
                  case "Guest House":
                    $cardClass = "bg-brown";
                    break;
                  case "Single Room":
                    $cardClass = "bg-red";
                    break;
                  default:
                    $cardClass = "bg-default";
                    break;
                  }

                  echo '
                  <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder card-container ' . $cardClass . '">
                      <div class="panel-body">
                        <img src="hotel.png" class="card-img">
                        <h3>' . $row['bedding_type'] . '</h3>
                      </div>
                      <div class="panel-footer back-footer-' . $cardClass . '">
                        ' . $row['room_type'] . '
                      </div>
                    </div>
                  </div>';
                }
              ?>

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
