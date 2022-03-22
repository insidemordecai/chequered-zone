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

              <?php
              session_start();

              if (isset($_SESSION["loggedin"])) {
                $firstname = $_SESSION["username"];

                echo "
                <li class='nav-item'>
                  <a class='nav-link' href='#'>
                    <span class='m-2'>$firstname</span>
                  </a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='./events/logout.php'>
                    <span class='m-2'>Log Out</span>
                  </a>
                </li>";
              } else {
                echo "
                <li class='nav-item'>
                  <a class='nav-link' href='./events/login.php'>
                    <span class='m-2'>Login</span>
                  </a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='./events/register.php'>
                    <span class='m-2'>Register</span>
                  </a>
                </li>
                ";
              }
              ?>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>