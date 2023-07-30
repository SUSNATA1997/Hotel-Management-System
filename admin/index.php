<?php
session_start();
$_SESSION['username'] = 'Admin';
$_SESSION['password'] = '1234';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Worldwide Hotel | Admin </title>
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
      background: linear-gradient(45deg, #EE7752, #E73C7E, #23A6D5, #2980b9);
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
      padding-top: 20px;
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
      color: #2980b9;
    }
  </style>
</head>
<body>
  <div class="login-panel">
    <h2><span>Admin </span>Login</h2>
    <form action="login.php" method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>
