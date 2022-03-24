<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chequered Zone</title>

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

  <!-- articles -->
  <div class="row m-2 p-2">
    <div class="col-sm-5 col-lg-5">
      <!-- main card -->
      <div class="card border-danger border-3 border-top-0 border-start-0 bg-light" style="width: 100%;">

        <?php

        $img = "https://www.formula1.com/content/dam/fom-website/manual/Misc/2022manual/2022Races/SaudiArabainGP/GettyImages-1239355682.jpg.transform/9col/image.jpg";
        $title = "Wolff admits Mercedes were ‘punching above their weight’ in Bahrain, as he calls 2022
        title chances ‘a long shot’";

        ?>

        <img src="<?php echo $img; ?>" class="card-img-top" alt="...">
        <h4 class="card-title m-2"> <?php echo $title; ?></h4>
        <div class="card-body">
          <p class="card-text">
            Mercedes Team Principal Toto Wolff watched his squad take their 265th podium finish at the Bahrain Grand
            Prix. But Wolff admitted that his team had been “punching above their weight” last Sunday, as he admitted
            that fighting for either championship in 2022 could be a struggle. <br> <br>

            Lewis Hamilton and new team mate George Russell were seemingly set to finish the season-opening Bahrain
            Grand Prix in P5 and P6, having never looked like a serious threat to the Ferraris and Red Bulls at the head
            of the pack.
          </p>
          <p class="card-text"><small class="text-muted">Last updated 1 hr ago</small></p>
          <a class="stretched-link" href="./pages/demo.php?title=<?php echo $title; ?>&img=<?php echo $img; ?>"></a>
        </div>
      </div>
    </div>
    <div class="col-sm-7 col-lg-7">
      <!-- other articles cards -->
      <div class="row">
        <div class="card-group">
          <div class="card m-2">
            <?php
            $img = "https://www.formula1.com/content/dam/fom-website/manual/Misc/2022manual/WinterMarch/BahrainGP/BAH22F1-Tech-Tuesday.jpg.transform/9col/image.jpg";
            $title = "The power unit gains behind Ferrari's Bahrain Grand Prix 1-2";
            ?>

            <img src="<?php echo $img; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $title; ?></h5>
              <p class="card-text">In Bahrain, Ferrari sealed one-two and victory with their brand-new F1-75...</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              <a class="stretched-link" href="./pages/demo.php?title=<?php echo $title; ?>&img=<?php echo $img; ?>"></a>
            </div>
          </div>
          <div class="card m-2">
            <?php
            $img = "https://www.wrc.com/images/redaktion/Season-2022-News/WRC/January/260122_-World-SebOgierSebLoeb-MonteCarlo-2022_001_aa8c1_f_1400x788.jpg";
            $title = "Ogier’s Accolade For Monte Winner Loeb";
            ?>

            <img src="<?php echo $img; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $title; ?></h5>
              <p class="card-text">Sébastien Ogier paid tribute to his countryman and rival...</p>
              <p class="card-text"><small class="text-muted">Last updated 15 mins ago</small></p>
              <a class="stretched-link" href="./pages/demo.php?title=<?php echo $title; ?>&img=<?php echo $img; ?>"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="card-group">
          <div class="card m-2">
            <?php
            $img = "https://cdn-1.motorsport.com/images/mgl/0qXVZd46/s8/laia-sanz-carlos-sainz-sainz-x-1.jpg";
            $title = "Desert X-Prix: Rosberg X Racing triumphs";
            ?>

            <img src="<?php echo $img; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $title; ?></h5>
              <a class="stretched-link" href="./pages/demo.php?title=<?php echo $title; ?>&img=<?php echo $img; ?>"></a>
            </div>
          </div>
          <div class="card m-2">
            <?php
            $img = "https://www.formula1.com/content/dam/fom-website/manual/Misc/2022manual/WinterMarch/BahrainGP/GettyImages-1386705997.jpg.transform/9col/image.jpg";
            $title = "Red Bull are still favourites say Ferrari, despite winning start in Bahrain";
            ?>

            <img src="<?php echo $img; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $title; ?></h5>
              <a class="stretched-link" href="./pages/demo.php?title=<?php echo $title; ?>&img=<?php echo $img; ?>"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- extra article for signed in users -->
  <div class="row m-0">
    <?php
    if (isset($_SESSION["loggedin"])) {
      include "posts.php";
    } else { ?>
      <div class="row m-2 p-4">
        <div class="col-sm-12 col-lg-12">
          <p class="display-4">Want extra motorsport content?
            <a id="join-us-cta" class="text-danger text-decoration-none p-2 pt-0 pe-4" href="./events/login.php">Join Us</a>
          </p>
        </div>
      </div>
    <?php } ?>
  </div>

</body>

</html>