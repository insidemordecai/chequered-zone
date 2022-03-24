<?php

session_start();
include "./components/db-config.php";

if (!isset($_SESSION["loggedin"])) {
  header("location: index.php");
  exit();
}

// Get post data based on id
if (isset($_REQUEST['id'])) {
  $id = $_REQUEST['id'];
  $sql = "SELECT * FROM posts WHERE id = $id";
  $query = mysqli_query($link, $sql);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts</title>

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <script src="js/popper.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>

  <!--Navigation bar-->
  <div id="nav-placeholder"></div>

  <script>
    $(function() {
      $("#nav-placeholder").load("./components/nav.php");
    });
  </script>
  <!--end of Navigation bar-->

  <div class="post container mt-5">

    <!-- Display info -->
    <?php if (isset($_REQUEST['info'])) { ?>
      <?php if ($_REQUEST['info'] == "updated") { ?>
        <div class="alert alert-success" role="alert">
          Post has been updated successfully
        </div>
      <?php } ?>
    <?php } ?>

    <?php foreach ($query as $q) { ?>

      <div class="bg-white p-2 ps-0 rounded-lg">
        <h1><?php echo $q['title']; ?></h1>

        <div class="p-2 ps-0">
          <img class="rounded" src="<?php echo $q['img'] ?>" alt="loading.." width="100%">
        </div>

        <?php
        if (isset($_SESSION['admin'])) { ?>
          <div class="d-flex mt-3 align-items-center">
            <a href="./admin/post-edit.php?id=<?php echo $q['id'] ?>" class="btn btn-secondary me-2" name="edit">Edit</a>
            <a href="./admin/post-delete.php?id=<?php echo $q['id'] ?>" class="btn btn-danger ml-2" name="delete">Delete</a>

            <form method="POST">
              <input type="text" hidden value='<?php echo $q['id'] ?>' name="id">
            </form>
          </div>
        <?php } ?>

      </div>

      <p class="post-body mt-4 pl-3"><?php echo nl2br($q['content']); ?></p>
    <?php } ?>

  </div>

</body>

</html>