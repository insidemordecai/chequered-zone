<?php

include "../components/nav-simple.html";
include "../components/db-config.php";

if (isset($_POST["register"])) {

  $firstname = $_POST["firstname"];
  $secondname = $_POST["secondname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpass = $_POST["confirmpass"];

  if (strlen($password) < 6) {
    $passError = "Password be more than 6 characters";
    echo $passError;
  } else {
    $storePass = password_hash($password, PASSWORD_DEFAULT);
  }

  if ($password != $confirmpass) {
    $confirmpassError = "Passwords do not match";
    echo $confirmpassError;
  }

  if (empty($passError) and empty($confirmpassError)) {
    $sql = "INSERT INTO `users`(`firstname`, `secondname`, `email`, `password`) VALUES ('$firstname','$secondname','$email','$storePass')";

    $result = mysqli_query($link, $sql);

    if ($result) {
      echo "Successfully registered account";
      header("location: login.php");
    } else {
      echo "Error executing query $sql" . mysqli_error($link);
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="bg-white">

  <div class="container-fluid p-4">
    <div class="card border-0">
      <div class="card-body">
        <div class="row d-flex justify-content-center">

          <div class="col-lg-6">
            <div class="text-center m-2 p-4">
              <h4>Create Your Account</h4>
            </div>

            <form action="register.php" method="post">
              <div class="row mb-3">
                <div class="col-lg-6">
                  <input class="form-control rounded-pill" type="text" name="firstname" placeholder="First Name" required>
                </div>
                <div class="col-lg-6">
                  <input class="form-control rounded-pill" type="text" name="secondname" placeholder="Second Name" required>
                </div>
              </div>
              <div class="row mb-3">
                <div>
                  <input class="form-control rounded-pill" type="email" name="email" placeholder="Email Address" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-lg-6">
                  <input class="form-control rounded-pill" type="password" name="password" placeholder="Password" required>
                </div>
                <div class="col-lg-6">
                  <input class="form-control rounded-pill" type="password" name="confirmpass" placeholder="Confirm Password" required>
                </div>
              </div>
              <div class="row mb-3">
                <input class="btn btn-danger rounded-pill" type="submit" name="register" value="Register">
              </div>
            </form>
            <div class="m-2 p-2">
              <hr>
            </div>
            <div class="text-center">
              <a href="login.php">Already have an account? Log in here</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>