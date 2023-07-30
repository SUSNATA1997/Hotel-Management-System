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

    .sp {
      margin-top: 20px;
    }

    .table {
      margin-top: 10px;
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
            <li><a href="display.php">Dashboard</a></li>
            <li><a href="customers.php">Customers</a></li>
            <li><a href="rooms.php">Rooms</a></li>
            <li><a href="bookings.php">Bookings</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-9">
        <div>
        <h2 class="sp">Customers <span class="rb">Approved</span></h2>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>EMAIL</th>
              <th>PHONE</th>
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
            </tr>
            <?php
              }
            ?>
          
          </tbody>
        </table>
      </div>
      <div class="mt-5">
        <h2 class="sp">Customers <span class="rb">Pending</span></h2>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>EMAIL</th>
              <th>PHONE</th>
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
            </tr>
            <?php
              }
            ?>
          
          </tbody>
        </table>
      </div>
    </div>
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
