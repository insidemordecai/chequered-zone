<?php
session_start();
$firstname = $_SESSION["username"];
?>

<div class="col-sm-12 col-lg-12 bg-light">
  <div class="row bg-danger m-0">
    <div class="col-sm-3 col-lg-3">
      <nav class="navbar">
        <div class="container-fluid">
          <form class="d-flex m-0">
            <a class="navbar-brand text-white" href="../">Chequered Zone</a>
          </form>
        </div>
      </nav>
    </div>

    <div class="col-sm-9 col-lg-9">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="btn m-1 text-white" href="./">Admin Home</a>
              </li>
              <li class="nav-item">
                <a class="btn m-1 text-white" href="./users.php">Users</a>
              </li>
              <li class="nav-item">
                <a class="btn m-1 text-white" href="./feedback.php">Feedback</a>
              </li>
            </ul>
          </div>

          <div class="dropdown">
            <a class='btn btn-light m-1' href='#' role="button" id="adminDropdown" data-bs-toggle="dropdown" aria-expanded="false">
              <span class='m-2'>
                <?php echo $firstname; ?>
              </span>
            </a>

            <ul class="dropdown-menu" aria-labelledby="adminDropdown">
              <li><a class="dropdown-item" href="../events/logout.php">Log Out</a></li>
            </ul>
          </div>

        </div>
      </nav>
    </div>
  </div>
</div>