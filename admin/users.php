<?php

include "nav-admin.php";
include "../components/db-config.php";

if (!isset($_SESSION["loggedin"]) or !isset($_SESSION["admin"])) {
  header("location: ../");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/jquery.min.js"></script>
</head>

<body>

  <div class="container mt-5">

    <div class="row m-2 p-2">
      <h1>Users Information</h1>
    </div>

    <div class="row m-2">
      <div class="card border-0">
        <div class="card-body">

          <?php

          $sql = "SELECT * FROM `users`";
          $result = mysqli_query($link, $sql);

          if ($result) {
            $data = mysqli_num_rows($result);

            if ($data > 0) { ?>
              <table class='table table-hover'>
                <tr class="table-secondary">
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Second Name</th>
                  <th>Email</th>
                  <th>User Type</th>
                  <th></th>
                </tr>

                <?php
                while ($row = mysqli_fetch_array($result)) { ?>

                  <tr>
                    <td> <?php echo $row['id'] ?></td>
                    <td> <?php echo $row['firstname'] ?></td>
                    <td> <?php echo $row['secondname'] ?></td>
                    <td> <?php echo $row['email'] ?></td>
                    <td> <?php echo $row['usertype'] ?></td>

                    <td>
                      <a class='btn btn-secondary' href='user-update.php?id=<?php echo $row["id"] ?>'>
                        <i class='fa fa-pencil'></i>
                      </a>
                      <a class='btn btn-danger' href='user-delete.php?id=<?php echo $row["id"] ?>'>
                        <i class='fa fa-trash'></i>
                      </a>
                    </td>
                  </tr>
                <?php } ?>

              </table>
          <?php
            } else {
              echo "<p>No data was found</p>";
            }
          } else {
            echo "Error executing query $sql" . mysqli_error($link);
          }

          ?>

        </div>
      </div>
    </div>

  </div>


</body>

</html>