<?php

include "../components/nav-simple.html";
include "../components/db-config.php";

if (isset($_REQUEST['contact'])) {
  $fullname = $_REQUEST['fullname'];
  $email = $_REQUEST['email'];
  $msg = $_REQUEST['msg'];

  $sql = "INSERT INTO contact (fullname, email, msg) VALUES('$fullname', '$email', '$msg')";
  mysqli_query($link, $sql);

  header("location: ../index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>

  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <script src="../js/popper.min.js"></script>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>

<body>

  <div class="post container mt-5">
    <h1>Contact Us</h1>

    <div class="post-body mt-3">
      <p>You can get in touch with us through the form below. Thank you.</p>

      <form method="POST">
        <input type="text" placeholder="Name" class="form-control my-3 bg-light" name="fullname" required>
        <input type="text" placeholder="Email Address" class="form-control my-3 bg-light" name="email" required>
        <textarea name="msg" class="form-control my-3 bg-light" cols="30" rows="10" required></textarea>
        <button class="btn btn-danger" name="contact">Send</button>
      </form>

    </div>

  </div>

</body>

</html>