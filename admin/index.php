<?php

include "nav-admin.php";
include "../components/db-config.php";


if (!isset($_SESSION["loggedin"]) or !isset($_SESSION["admin"])) {
  header("location: ../");
  exit();
}

if (isset($_REQUEST['new_post'])) {
  $title = $_REQUEST['title'];
  $content = $_REQUEST['content'];

  $sql = "INSERT INTO posts(title, content) VALUES('$title', '$content')";
  mysqli_query($link, $sql);

  echo $sql;

  header("location: index.php?info=added");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CZ Admin</title>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <div class="container mt-5">

    <!-- Display any info -->
    <?php if (isset($_REQUEST['info'])) { ?>
      <?php if ($_REQUEST['info'] == "added") { ?>
        <div class="alert alert-success" role="alert">
          Post has been added successfully
        </div>
      <?php } ?>
    <?php } ?>

    <form method="POST">
      <input type="text" placeholder="Blog Title" class="form-control my-3 bg-light text-center" name="title">
      <textarea name="content" class="form-control my-3 bg-light" cols="30" rows="10"></textarea>
      <button class="btn btn-danger" name="new_post">Add Post</button>
    </form>
    
  </div>

</body>

</html>