<?php

include "../components/nav-simple.html";
include "../components/db-config.php";

if (isset($_POST["login"])) {

  $userEmail = $_POST["email"];
  $userPass = $_POST["password"];

  $sql = "SELECT * FROM `users` WHERE email = '$userEmail'";

  $result = mysqli_query($link, $sql);

  if ($result) {
    $data = mysqli_num_rows($result);

    if ($data == 1) {
      while ($row = mysqli_fetch_array($result)) {

        $id = $row["id"];
        $email = $row["email"];
        $firstname = $row["firstname"];
        $password = $row["password"];

        // verify and login
        if (password_verify($userPass, $password)) {

          if ($row["usertype"] == "fan") {
            session_start();

            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $id;
            $_SESSION["username"] = $firstname;

            header("location: ../index.php");
          } elseif ($row["usertype"] == "admin") {
            session_start();

            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $id;
            $_SESSION["username"] = $firstname;
            $_SESSION["admin"] = true;

            header("location: ../admin/");
          } else {
            echo "You have not been assigned a usertype. Contact Admin.";
          }
        } else {
          echo "Incorrect Password";
        }
      }
    } else {
      echo "No such user was found!";
    }
  } else {
    echo "Error executing query $sql" . mysqli_error($link);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>

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
              <h4>Log Into Your Account</h4>
            </div>

            <form action="login.php" method="post">
              <div class="row mb-3">
                <input class="form-control rounded-pill" type="email" name="email" placeholder="Email Address">
              </div>
              <div class="row mb-3">
                <input class="form-control rounded-pill" type="password" name="password" placeholder="Password">
              </div>
              <div class="row mb-3">
                <input class="btn btn-danger rounded-pill" type="submit" name="login" value="Log In">
              </div>
            </form>
            <div class="m-2 p-2">
              <hr>
            </div>
            <div class="text-center">
              <a href="register.php">Don't have an account? Create one here</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>