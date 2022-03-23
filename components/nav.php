<?php
include "./db-config.php";
?>

<div class="col-sm-12 col-lg-12 bg-light">
  <div class="row bg-danger">
    <div class="col-sm-3 col-lg-3">
      <nav class="navbar">
        <div class="container-fluid">
          <form class="d-flex">
            <a class="navbar-brand text-white" href="#">Chequered Zone</a>
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
                <a class="nav-link text-white" href="#">
                  <span class="m-2">F1</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">
                  <span class="m-2">WRC</span>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">
                  <span class="m-2">Extreme E</span>
                </a>
              </li>
            </ul>
            <?php

            if (isset($_SESSION["loggedin"])) {
              $firstname = $_SESSION["username"];

              if (isset($_SESSION["admin"])) { ?>
                <div class="dropdown">
                  <a class='btn btn-light m-1' href='#' role="button" id="adminDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class='m-2'><?php echo $firstname; ?></span>
                  </a>

                  <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                    <li><a class="dropdown-item" href="./admin/">Admin Home</a></li>
                    <li><a class="dropdown-item" href="./events/logout.php">Log Out</a></li>
                  </ul>
                </div>

              <?php } else { ?>
                <div class="dropdown">
                  <a class='btn btn-light m-1' href='#' role="button" id="adminDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class='m-2'><?php echo $firstname; ?></span>
                  </a>

                  <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                    <li><a class="dropdown-item" href="./events/logout.php">Log Out</a></li>
                  </ul>
                </div>
              <?php }
            } else { ?>
              <div class="dropdown">
                <a class='btn btn-light m-1' href='#' role="button" id="adminDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class='m-2'>Login / Register</span>
                </a>

                <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                  <li><a class="dropdown-item" href="./events/login.php">Log In</a></li>
                  <li><a class="dropdown-item" href="./events/register.php">Create Account</a></li>
                </ul>
              </div>
            <?php }
            ?>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>