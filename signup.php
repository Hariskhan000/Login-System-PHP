<?php
include "partials/dbconnect.php";
include "partials/header.php";
$showerror = false;
$showmessage = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $password = $_POST['Password'];
    $confirm_password = $_POST['Confirm_Password'];

    if (empty($name) || empty($password)) {
        $showerror = true;
    } elseif ($password != $confirm_password) {
        $showmessage = true;
    } else {
        $sql = "INSERT INTO `users`( `name`, `password`) VALUES ('$name', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>
            alert('Successfully Registered');
            window.location.href='login.php';
            </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
</head>

<body>
    <?php
    if ($showerror) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Success!</strong>please fill all the requires fields!!.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($showmessage) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Alert!</strong>password and confirm password dose not match!.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <h1 class="text-center mt-4">Sign Up To Our Website</h1>
    <div class="container my-4 mt-4">
        <form action="signup.php" method="post">
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password" name="Password" required>
            </div>
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="Password" name="Confirm_Password" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>