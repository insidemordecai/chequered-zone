<?php

include "nav-admin.html";
include "../components/db-config.php";

if (!isset($_SESSION["loggedin"]) or !isset($_SESSION["admin"])) {
  header("location: ../");
  exit();
}

if (isset($_POST["update"])) {
  // update data
  $id = $_POST["id"];

  // updated variables
  $up_firstname = $_POST["firstname"];
  $up_secondname = $_POST["secondname"];
  $up_email = $_POST["email"];
  $up_usertype = $_POST["usertype"];

  $up_sql = "UPDATE `users` SET `firstname`='$up_firstname',`secondname`='$up_secondname',`email`='$up_email',`usertype`='$up_usertype' WHERE id = $id";
  $up_result = mysqli_query($link, $up_sql);

  if ($up_result) {
    // data updated therefore redirect
    header("location: users.php");
  } else {
    echo "Error updating record $up_sql" . mysqli_error($link);
  }
} else {
  // auto-fill data for editing
  if (isset($_GET["id"]) and !empty($_GET["id"])) {

    $id = $_GET["id"];
    $sql = "SELECT * FROM `users` WHERE id = $id";
    $result = mysqli_query($link, $sql);

    if ($result) {
      $data = mysqli_num_rows($result);

      if ($data == 1) {
        $row = mysqli_fetch_array($result);

        $firstname = $row["firstname"];
        $secondname = $row["secondname"];
        $email = $row["email"];
        $usertype = $row["usertype"];
      } else {
        echo "No record of id $id found.";
      }
    } else {
      echo "Error executing query $sql " . mysqli_error($link);
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
  <title>Update User</title>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <div class="container-fluid p-4">
    <div class="card border-0">
      <div class="card-body">
        <div class="row d-flex justify-content-center">

          <div class="col-lg-6">
            <div class="text-center m-2 p-4">
              <h4>Update User information</h4>
            </div>

            <form action="user-update.php" method="post">
              <div class="row mb-3">
                <div class="col-md-12">
                  <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>">
                </div>
                <div class="col-lg-6">
                  <input class="form-control rounded-pill" type="text" name="firstname" value="<?php echo $firstname; ?>" required>
                </div>
                <div class="col-lg-6">
                  <input class="form-control rounded-pill" type="text" name="secondname" value="<?php echo $secondname; ?>" required>
                </div>
              </div>
              <div class="row mb-3">
                <div>
                  <input class="form-control rounded-pill" type="email" name="email" value="<?php echo $email; ?>" required>
                </div>
              </div>
              <div class="row mb-3">
                <div>
                  <input class="form-control rounded-pill" type="text" name="usertype" value="<?php echo $usertype; ?>" required>
                </div>
              </div>
              <div class="row mb-3">
                <input class="btn btn-danger rounded-pill" type="submit" name="update" value="Update">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>