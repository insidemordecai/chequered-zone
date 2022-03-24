<?php

include "nav-admin.php";
include "../components/db-config.php";

if (!isset($_SESSION["loggedin"]) or !isset($_SESSION["admin"])) {
  header("location: ../");
  exit();
}

// Get post data based on id
if (isset($_REQUEST['id'])) {
  $id = $_REQUEST['id'];
  $sql = "SELECT * FROM posts WHERE id = $id";
  $query = mysqli_query($link, $sql);
}

// Update a post
if (isset($_REQUEST['update'])) {
  $id = $_REQUEST['id'];
  $title = $_REQUEST['title'];
  $img = $_REQUEST['img'];
  $content = $_REQUEST['content'];

  $sql = "UPDATE posts SET title = '$title', img = '$img', content = '$content' WHERE id = $id";
  mysqli_query($link, $sql);

  header("location: ../post-view.php?id=$id&info=updated");
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

    <?php foreach ($query as $q) { ?>
      <form method="POST">
        <input type="text" hidden value='<?php echo $q['id'] ?>' name="id">
        <input type="text" placeholder="Blog Title" class="form-control my-3 bg-light" name="title" value="<?php echo $q['title'] ?>" required>
        <input type="text" placeholder="Blog Image (add a link to image)" class="form-control my-3 bg-light" name="img" value="<?php echo $q['img'] ?>" required>
        <textarea name="content" class="form-control my-3 bg-light" cols="30" rows="10" required><?php echo $q['content'] ?></textarea>
        <button class="btn btn-danger" name="update">Update</button>
      </form>
    <?php } ?>

  </div>

</body>

</html>