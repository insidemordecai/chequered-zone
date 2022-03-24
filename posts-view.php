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

  <div class="container mt-5">

    <?php foreach ($query as $q) { ?>
      <div class="bg-dark p-5 rounded-lg text-white text-center">
        <h1><?php echo $q['title']; ?></h1>

        <div class="d-flex mt-2 justify-content-center align-items-center">
          <form method="POST">
            <input type="text" hidden value='<?php echo $q['id'] ?>' name="id">
          </form>
        </div>

      </div>
      <p class="mt-5 border-left border-dark pl-3"><?php echo nl2br($q['content']); ?></p>
    <?php } ?>

  </div>

</body>

</html>