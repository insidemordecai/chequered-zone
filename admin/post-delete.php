<?php

include "nav-admin.php";
include "../components/db-config.php";

if (!isset($_SESSION["loggedin"]) or !isset($_SESSION["admin"])) {
  header("location: ../");
  exit();
}

// Delete a post
if (isset($_REQUEST['delete'])) {
  $id = $_REQUEST['id'];

  $sql = "DELETE FROM posts WHERE id = $id";
  mysqli_query($link, $sql);

  header("location: index.php?info=deleted");
  exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Post</title>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <div class="row m-2">
    <div class="alert">
      <form action="post-delete.php" method="post">

        <div class="p-2 text-center">
          <label for="">Are you sure you want to delete this post?</label>
          <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        </div>

        <div class="p-2 text-center">
          <input type="submit" value="YES" name="delete" class="btn btn-danger col-md-3">
          <a href="../post-view.php?id=<?php echo $_GET['id']; ?>" class="btn btn-secondary col-md-3">NO</a>
        </div>

      </form>
    </div>
  </div>

</body>

</html>