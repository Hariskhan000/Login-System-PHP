<?php
include "partials/dbconnect.php";
include "partials/header.php";


$login = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $password = $_POST['Password'];
    $sql = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['name'] = $name;
        header("location: welcome.php");
    } else {
        echo "<script>
        alert('Invalid Credentials');
        window.location.href='login.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
</head>

<body>
  <h1 class="text-center mt-4">Login To Our Website</h1>
  <div class="container my-4 mt-4">
    <form action="login.php" method="post">

      <div class="mb-3 col-md-6">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="mb-3 col-md-6">
        <label for="" class="form-label">Password</label>
        <input type="password" class="form-control" id="Password" name="Password">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
  <script>
  input = document.getElementsByTagName('input');
  input.innerHTML = "hello";
  input.setAttribute("autocomplete", "off");
  </script>
</body>

</html>