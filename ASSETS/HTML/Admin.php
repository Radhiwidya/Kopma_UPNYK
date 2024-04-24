<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../Style/style.css">
  <link rel="icon" href="../Image/Icon.png">
  <title>Admin | KOPMA UPNVY</title>
</head>

<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg bg-success w-100 fixed-top">
    <div class="container">
      <a class="navbar-brand" href="https://www.kopma.upnyk.ac.id/" target="_blank">
        <img src="../Image/Logo.png" alt="Kopma UPNVY" width="200px">
      </a>
      <a href="../Index.php" class="log">User</a>
    </div>
  </nav>
  <!--Batas Navbar-->
  <!--Login-->
  <div class="login-box">
    <form method="POST" action="../PHP/Admin.php">
      <h2>Login Admin</h2>
      <div class="input-box">
        <input name="username" type="text" required placeholder="username">
      </div>
      <div class="input-box">
        <input name="password" type="password" required placeholder="password">
      </div>
      <div class="forgot">
        <label><a href="#">Lupa Password?</a></label>
      </div>
      <br>
      <a href="">
        <button name="login" class="btn btn-outline-light" id="submit" type="submit">Login</button>
      </a>
    </form>
  </div>

  <!--Batas Login-->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
</body>
<footer>
  <div class="fixed-bottom bg-success h-5">
    <p>Hak Cipta &copy; 2024 Kopma UPNVY</p>
  </div>
</footer>

</html>