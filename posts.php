<?php

include "./components/db-config.php";

if (!isset($_SESSION["loggedin"])) {
  header("location: ../");
  exit();
}

// Get post data to display
$sql = "SELECT * FROM posts";
$query = mysqli_query($link, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts</title>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/jquery.min.js"></script>
</head>

<body>

  <div class="container mt-5">

    <!-- Display posts from database -->
    <div class="row">
      <?php foreach ($query as $q) { ?>
        <div class="col-12 col-lg-3 d-flex justify-content-center">
          <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><?php echo $q['title']; ?></h5>
              <p class="card-text"><?php echo substr($q['content'], 0, 50); ?>...</p>
              <a href="posts-view.php?id=<?php echo $q['id'] ?>" class="btn btn-secondary">Read More</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>

</body>

</html>