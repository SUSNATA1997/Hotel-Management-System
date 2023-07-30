<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the submitted username and password
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Perform authentication here
  // You can add your own logic to validate the credentials against your database or any other authentication system

  // For the sake of this example, let's assume the username is "admin" and the password is "password"
  if ($username == "Admin" && $password == "1234") {
    // Authentication successful, redirect to a welcome page
    header("Location: display.php");
    exit;
  } else {
    // Authentication failed, display an error message
    $errorMessage = "Invalid username or password.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Panel</title>
  <link rel="icon" type="img/png" href="icon/logo.png">
  <style>
    body, html {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
      background-size: 400% 400%;
      animation: gradientAni 15s ease infinite;
    }

    @keyframes gradientAni {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
    }

    .login-panel {
      max-width: 400px;
      padding: 40px;
      background-color: #ccc;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .login-panel h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .login-panel input[type="text"],
    .login-panel input[type="password"] {
      width: 100%;
      padding: 12px 20px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .login-panel button[type="submit"] {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 4px;
      background-color: #E73C7E;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      margin-bottom: 10px;
    }

    .login-panel button[type="submit"]:hover {
      background-color: #23D5AB;
    }

    h2 {
      font-family: sans-serif;
      color: #E73C7E;
    }

    span {
      font-family: sans-serif;
      color: #23D5AB;
    }

    .error-message {
    	font-family: sans-serif;
    	color: red;
    	animation: fade-in 0.5s ease-in-out forwards;
    }

    @keyframes fade-in {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }
  </style>
</head>
<body>
  <div class="login-panel">
    <h2><span>Admin </span>Login</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      <input type="text" name="username" placeholder="Admin Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Submit</button>
    </form>
    <?php
    // Display error message if authentication failed
    if (isset($errorMessage)) {
      echo "<p class=\"error-message\">$errorMessage</p>";
    }
    ?>
  </div>
</body>
</html>
