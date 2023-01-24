<?php include '../Php/db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tower-Defense Login</title>
  <link rel="stylesheet" href="/Style/landingpage.css" />
  <link rel="stylesheet" href="/Style/normalice.css" />
  
  <script src="/JavaScript/landingpage.js"> </script>
  <script src="/JavaScript/functions/login.js"> </script>
  <script src="/JavaScript/functions/hide.js"> </script>
  <script src="/JavaScript/functions/registerlogin.js"> </script>

</head>
<body>
  <canvas class="canvas" id="canvas"></canvas>
  <div id="anmelden" onclick="login()" class="button-container">
    Anmelden
  </div>
  <div id="login" class="b">
  <?php include('Loginpage/login2.php')?>
  <?php include('Loginpage/register.php')?>
  </div>
</body>
</html>