<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome <?php echo $_SESSION['name'] ?></title>
</head>

<body>
    <?php include "partials/dbconnect.php";
    include "partials/header.php"; ?>
    <div class="container mt-4">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">hello! <?php echo $_SESSION['name'] ?></h4>
            <p>Aww yeah, welcome to this login system. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
        </div>
    </div>
    <!-- <center><a class="text-center" href="login.php">logout</a></center> -->
</body>

</html>